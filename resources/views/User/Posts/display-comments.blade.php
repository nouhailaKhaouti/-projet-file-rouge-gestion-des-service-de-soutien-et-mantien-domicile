@foreach($post->comments as $comment)
@if($comment->commenter_id == null)
<div class="card-body p-4">
    <div class="d-flex flex-start">
        <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
        <div>
            <h6 class="fw-bold mb-1 "><small>
                    {{$comment->user->name}}</small></h6>
            <div class="d-flex justify-content-around align-items-center mb-3">
                <p class="m-0 text-muted"><small>
                        {{optional($comment->created_at)->format('d/m/Y')}}</small>
                </p>
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal{{$comment->id}}">
                    <i class="fas fa-pencil-alt ms-2"></i>
                </button>
                <!-- Modal -->
                <div class="modal fade rounded-3 " id="exampleModal{{$comment->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-white bg_green">
                                <h5 class="modal-title" id="exampleModalLabel">Update your Comment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="background-color:#E1EFE8">
                                <form action="{{url('comment_update',$comment->id)}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Comment</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$comment->description}}" placeholder="Write a comment" id="description" class="form-control" name="description" />
                                            <input type="hidden" value='{{$post->id}}' name="post_id">
                                            <input type="hidden" value='{{Auth::user()->id}}' name="user_id">
                                            <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-solid fa-paper-plane-top"></i></a></button>
                                        </div>
                                    </div>
                                </form><!-- Search -->
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn" onclick="search('reply{{$comment->id}}')"><i class="fas fa-redo-alt ms-2"></i></button>
                <!-- <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a> -->
                @if(count($comment->replies)>0)
                <button class="btn " onclick="search('showreply{{$comment->id}}')" id="show{{$comment->id}}"><i class="fas fa-comment fa-xs"></i><span class="small"> comment</span></a>
                    @else
                    <button class="btn d-none" onclick="search('showreply{{$comment->id}}')" id="show{{$comment->id}}"><i class="fas fa-comment fa-xs"></i><span class="small"> comment</span></a>
                        @endif
            </div>
            <p class="mb-0">
                {{$comment->description}}
            </p>
        </div>
    </div>
    <br>
    <br>
    <div class="search d-none  rounded-3" style="background-color:#F0F4F2" id="reply{{$comment->id}}">
        <form action="{{url('comment_create')}}" method="post" class="comment-form">
            @csrf
            <input placeholder="Write a comment" type="text" style="background-color:#F0F4F2" name="description">
            <input type="hidden" value='{{$post->id}}' name="post_id">
            <input type="hidden" value='{{Auth::user()->id}}' name="user_id">
            <input type="hidden" value='{{$comment->id}}' name="commenter_id">
            <button type="submit"><i class="fa-duotone fa-paper-plane-top"></i></button>
        </form>
    </div>
    <div id="reply-section{{$comment->id}}">
    @foreach($comment->replies as $reply)
<div class="card-body p-4 d-none" id="showreply{{$comment->id}}">
    <div class="d-flex flex-start">
        <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
        <div>
            <h6 class="fw-bold mb-1 "><small>
                    {{$reply->user->name}}</small></h6>
            <div class="d-flex align-items-center mb-3">
                <p class="m-0 text-muted"><small>
                        {{optional($reply->created_at)->format('d/m/Y')}}</small>
                </p>
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#reply {{$reply->id}}">
                    <i class="fas fa-pencil-alt ms-2"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade rounded-3" id="reply{{$reply->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg_green text-white">
                                <h5 class="modal-title" id="exampleModalLabel">Update your reply</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="background-color:#E1EFE8">
                                <form action="{{url('comment_update',$reply->id)}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Comment</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$reply->description}}" placeholder="Write a comment" id="description" class="form-control" name="description" />
                                            <input type="hidden" value='{{$post->id}}' name="post_id">
                                            <input type="hidden" value='{{Auth::user()->id}}' name="user_id">
                                            <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-solid fa-paper-plane-top"></i></a></button>
                                        </div>
                                    </div>
                                </form><!-- Search -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mb-0">
                {{$reply->description}}
            </p>
        </div>
    </div>
    <!-- Search -->
</div>
@endforeach
    </div>
    <!-- Search -->
</div>
<hr class="my-0" />
@endif
@endforeach