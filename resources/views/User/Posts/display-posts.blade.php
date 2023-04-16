<section class="profile-feed">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-6 offset-lg-3">
                <div class="cardbox shadow-lg rounded-2" style="background-color:#E1EFE8">
                    <div class="cardbox-heading">
                        <div class="media m-0">
                            <div class="d-flex justify-content-around mr-3">
                                <a href=""><img class="img-fluid rounded-circle" src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg" alt="User"></a>
                                @include('User.Posts.update-post')
                            </div>
                            <div class="media-body">
                                <h6 class=" fw-bold m-0 ">{{$post->user->name}}</h6>
                                <small><span><i class="icon ion-md-pin"></i> {{$post->category->label}}</span></small>
                                <small><span><i class="icon ion-md-time"></i>{{optional($post->created_at)->format('d/m/Y')}} </span></small>
                            </div>
                        </div><!-- media -->
                    </div><!-- cardbox-heading -->
                    <div class="cardbox-item">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-fluid" height="300" src="https://images.pexels.com/photos/1152994/pexels-photo-1152994.jpeg" alt="Image">

                                </div>
                                @foreach($post->images as $image)
                                <div class="carousel-item">
                                    <img class="img-fluid" height="300" src="Postimage/{{$image->path}}" alt="Image">
                                </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div><!-- cardbox-item -->
                    <div class="cardbox-base">
                        <ul class="float-right">
                            <li>
                                <button onclick="search('comment{{$post->id}}')" class="btn"> <a><i class="fa fa-comments"></i></a> <a><em class="mr-5">{{count($post->comments)}}</em></a></button>
                            </li>
                            <!-- <li><a><i class="fa fa-share-alt"></i></a></li>
                            <li><a><em class="mr-3">05</em></a></li> -->
                        </ul>
                        <!-- <button class="btn like-btn mt-2" data-post-id="{{ $post->id }}">
                                <a> <i class="fa-regular fa-thumbs-up" id="like-icon"></i></a>
                                <a><em class="mr-5 text-muted">Like</em></a>
                                <span id="post-{{ $post->id }}-like-count" class="text-muted">{{ $post->likePosts()->count() }}</span>
                            </button> -->
                        <ul>
                            <li> <a class="like-btn" data-post-id="{{ $post->id }}"> <i class="fa-regular fa-thumbs-up" id="like-icon{{ $post->id }}"></i></a></li>
                            <li><a href="#"><img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a href="#"><img src="https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a href="#"><img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a href="#"><img src="https://images.pexels.com/photos/6962108/pexels-photo-6962108.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                            <li><a><span id="post-{{ $post->id }}-like-count">{{ $post->likePosts()->count() }} Likes</span></a></li>
                        </ul>
                    </div><!-- cardbox-base -->
                    @include('User.Posts.add-comment')
                    <div class="container d-none" id="comment{{$post->id}}">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12 col-lg-12">
                                <div class="text-dark" id="comment-section{{$post->id}}">
                                    @include('User.Posts.display-posts')
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- cardbox -->
            </div>
            @endforeach
        </div><!-- row -->
    </div><!-- container -->
</section>