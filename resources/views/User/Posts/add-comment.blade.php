<div class="cardbox-comments">
    <span class="comment-avatar float-left">
        <a href=""><img class="rounded-circle" src="https://images.pexels.com/photos/2811087/pexels-photo-2811087.jpeg" alt="..."></a>
    </span>
    <div class="search rounded-3" style="background-color:#F0F4F2">
        <form action="{{url('comment_create')}}" method="post" class="comment-form">
            @csrf
            <input placeholder="Write a comment" type="text" name="description" class="rounded-3" style="background-color:#F0F4F2">
            <input type="hidden" value='{{$post->id}}' name="post_id">
            <input type="hidden" value='{{Auth::user()->id}}' name="user_id">
            <button type="submit"><a><i class="fa-duotone fa-paper-plane-top"></i></a></button>
        </form><!-- Search -->
    </div>
</div><!-- cardbox-like -->