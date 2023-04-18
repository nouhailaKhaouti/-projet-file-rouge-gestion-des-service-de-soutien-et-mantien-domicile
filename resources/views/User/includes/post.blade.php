<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
    <title>
        Maintenance services
    </title>
    <!--     Fonts and icons     -->
    <!-- Material Icons -->

    <!-- CSS Files -->
    <!-- <link id="pagestyle" href="user/assets/css/style.css" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <style>
        /* post */

        /* Profile Feed */


        .profile-feed {
            padding: 6.25rem 0px !important;
            margin: 0px !important;
        }

        .cardbox {
            border-radius: 3px;
            margin-bottom: 20px;
            padding: 0px !important;
        }


        /* Cardbox Heading */

        .cardbox .cardbox-heading {
            padding: 16px;
            margin: 0;
        }

        .cardbox .btn-flat.btn-flat-icon {
            border-radius: 50%;
            font-size: 24px;
            height: 32px;
            width: 32px;
            padding: 0;
            overflow: hidden;
            color: #fff !important;
            background: #b5b6b6;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .cardbox .float-right .dropdown-menu {
            position: relative;
            left: 13px !important;
        }

        .cardbox .float-right a:hover {
            background: #f4f4f4 !important;
        }

        .cardbox .float-right a.dropdown-item {
            display: block;
            width: 100%;
            padding: 4px 0px 4px 10px;
            clear: both;
            font-weight: 400;
            font-family: 'Abhaya Libre', serif;
            font-size: 14px !important;
            color: #848484;
            text-align: inherit;
            white-space: nowrap;
            background: 0 0;
            border: 0;
        }


        /* Media Section */
        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .d-flex {
            display: -ms-flexbox !important;
            display: flex !important;
        }

        .media .mr-3 {
            margin-right: 1rem !important;
        }

        .media img {
            width: 48px !important;
            height: 48px !important;
            padding: 2px;
            border: 2px solid #f4f4f4;
        }

        .media-body {
            -ms-flex: 1;
            flex: 1;
            padding: .4rem !important;
        }

        .media-body p {
            font-family: 'Rokkitt', serif;
            font-weight: 500 !important;
            font-size: 14px;
            color: #88898a;
        }

        .media-body small span {
            font-family: 'Rokkitt', serif;
            font-size: 12px;
            color: #aaa;
            margin-right: 10px;
        }


        /* Cardbox Item */
        .cardbox .cardbox-item {
            position: relative;
            display: block;
        }


        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto;
        }

        .fw {
            width: 100% !important;
            height: auto;
        }


        /* Cardbox Base */
        .cardbox-base {
            border-bottom: 2px solid #f4f4f4;
        }

        .cardbox-base ul {
            margin: 10px 0px 10px 15px !important;
            padding: 10px !important;
            font-size: 0px;
            display: inline-block;
        }

        .cardbox-base li {
            list-style: none;
            margin: 0px 0px 0px -8px !important;
            padding: 0px 0px 0px 0px !important;
            display: inline-block;
        }

        .cardbox-base li a {
            margin: 0px !important;
            padding: 0px !important;
        }

        .cardbox-base li a i {
            position: relative;
            top: 4px;
            font-size: 16px;
            color: #8d8d8d;
            margin-right: 15px;
        }

        .cardbox-base li a span {
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            margin-left: 20px;
            position: relative;
            top: 5px;
        }

        .cardbox-base li a em {
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            position: relative;
            top: 3px;
        }

        .cardbox-base li a img {
            width: 25px;
            height: 25px;
            margin: 0px !important;
            border: 2px solid #fff;
        }


        /* Cardbox Comments  */
        .cardbox-comments {
            padding: 10px 40px 20px 40px !important;
            font-size: 0px;
            text-align: center;
            display: inline-block;
        }

        .cardbox-comments .comment-avatar img {
            margin-top: 1px;
            margin-right: 10px;
            position: relative;
            display: inline-block;
            text-align: center;
            width: 40px;
            height: 40px;
        }

        .cardbox-comments .comment-body {
            overflow: auto;
        }

        .search {
            position: relative;
            right: -60px;
            top: -40px;
            margin-bottom: -40px;
            border: 2px solid #f4f4f4;
            width: 100%;
            overflow: hidden;
        }

        .search input[type="text"] {
            background-color: #fff;
            line-height: 10px;
            padding: 15px 60px 20px 10px;
            border: none;
            border-radius: 4px;
            width: 350px;
            font-family: 'Rokkitt', serif;
            font-size: 14px;
            color: #8d8d8d;
            height: inherit;
            font-weight: 700;
        }

        .search button {
            position: absolute;
            right: 0;
            top: 0px;
            border: none;
            background-color: transparent;
            color: #bbbbbb;
            padding: 15px 25px;
            cursor: pointer;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .search button i {
            font-size: 20px;
            line-height: 30px;
            display: block;
        }


        /* Author */
        .author a {
            font-family: 'Rokkitt', serif;
            font-size: 16px;
            color: #00C4CF;
        }

        .author p {
            font-family: 'Rokkitt', serif;
            font-size: 16px;
            color: #8d8d8d;
        }

        .like-icon {
            color: gray;
            transition: color 0.2s;
        }

        .like-icon.active {
            color: #ff0000;
        }

        .bg_green {
            background-color: #559974;
        }

        .post-body {

            background-image: url('user/assets/img/bg-3.png');
            background-position: bottom right;
            background-repeat: no-repeat;
            background-color: #F0F4F2;
        }

        /* end post */
    </style>

</head>

<body class="post-body">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif
    <section>
        @if(session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">
                x
            </button>
            {{session()->get('message')}}
        </div>
        @endif
        <button type="button" class="btn rounded-2 bg_green fw-bold text-white" onclick="createpost(`{{url('post_create')}}`)">Add Post <a><i class="fa-solid fa-plus"></i></a></button>

        <div class="modal fade bd-example-modal-lg shadow-sm" id="Post" tabindex="-1" role="dialog" aria-labelledby="PostLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-3">
                    <div class="modal-header  bg_green">
                        <h5 class="modal-title text-white" id="PostLabel">Add New Post</h5>
                        <button type="button" class=" btn text-white fw-bold close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body " style="background-color:#E1EFE8">
                        <form action="{{url('post_create')}}" class="panel-activity__status d-flex justify-content-between" method="post" enctype="multipart/form-data" id="post-form">
                            @csrf
                            <img src="user/assets/img/post-modal.png" alt="" height="400" width="400">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label" for="description">Post Description</label>
                                    <textarea placeholder="add you oun description" id="description" class="form-control" name="description"></textarea>
                                </div>
                                <div class="d-flex justify-content-start flex-wrap" id="tags-container"></div>
                                <div class="mb-3">
                                    <label class="form-label" for="tags">Tags</label>
                                    <div class="input-group mb-3">
                                        <input type="text" placeholder="add tags  to your post" id="tags-input" class="form-control rounder-2" name="tags" aria-describedby="add" />
                                        <button type="button" class="btn text-end" id="add-tag-btn" id="add">Add</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="Category">Category</label>
                                    <select name="category_id" id="category" class="form-select rounder-2" require>
                                        <option value="">---category---</option>
                                        @foreach($categorys as $category)
                                        <option value="{{$category->id}}">{{$category->label}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-start flex-wrap" id="images-container"></div>
                                <div class="mb-3">
                                    <div id="show_item">
                                        <div class="d-flex flex-column">
                                            <div id="remove">
                                                <label class="form-label" for="customFile">Add images to your Post</label>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control rounder-2 me-1" id="customFile" name="image[]" />
                                                    <button type="button" class="btn rounded-circle add_item_btn bg_green"><a><i class="fa-solid fa-plus"></i></a></button>
                                                </div>
                                                </br>
                                                <!-- <div class="d-flex justify-content-end"> -->
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="1">
                                    <button type="submit" class="btn rounded-2 bg_green text-white">
                                        Post
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
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
                                </div>
                                <div class="media-body">
                                    <h6 class=" fw-bold m-0 ">{{$post->user->name}}</h6>
                                    <button type="button" class="btn rounded-2 update" onclick="editpost(`{{$post->description}}`,`{{$post->tags}}`,`{{$post->category_id}}`,`{{url('post_update',$post->id)}}`,`{{$post->images}}`)"><a><i class="fa-duotone fa-pen-to-square"></i></a></button>
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
                        <div class="container d-none" id="comment{{$post->id}}">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12 col-lg-12">
                                    <div class="text-dark" id="comment-section{{$post->id}}">
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
                                                <div class="card-body p-4 d-none" id="showreply{{$comment->id}}">
                                                    @foreach($comment->replies as $reply)
                                                    <div class="d-flex flex-start mt-1 mb-1">
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
                                                    <hr class="my-0" />
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- Search -->
                                        </div>
                                        <hr class="my-0" />
                                        @endif
                                        @endforeach
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script> -->
    <!-- <script>
        const postButtons = document.querySelectorAll('.update');

        postButtons.forEach(button => {
            button.addEventListener('click', event => {
                const postId = button.getAttribute('post_id');
                console.log(`Button ${postId} clicked`);
                var updateForm = document.getElementById(`post-form-${postId}`);
                var tagsInputupdate = document.getElementById(`tags-input${postId}`);
                var addTagBtnupdate = document.getElementById(`add-tag-btn${postId}`);
                var tagsContainers = document.getElementById(`tags-container${postId}`);
                const tagsUpdate = [];

                const xhr = new XMLHttpRequest();
                xhr.open('GET', `/posts/${postId}/tags`);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        const response = JSON.parse(xhr.responseText);
                        response.tags.forEach(function(tag) {
                            tagsUpdate.push(tag.label);
                            addTagsElement(tag.label);
                        });
                    } else {
                        console.log(xhr.responseText); // Log the error message to the console
                    }
                };
                xhr.send();

                function addTagsElement(tag) {
                    const tagElement = document.createElement('div');
                    tagElement.classList.add('tag', 'text-white', 'bg_green', 'rounded-3', 'px-1', 'mx-1');
                    tagElement.textContent = tag;

                    const removeBtn = document.createElement('button');
                    removeBtn.classList.add('remove-btn', 'btn', 'text-white');
                    removeBtn.textContent = 'x';
                    removeBtn.addEventListener('click', function() {
                        removeTagsElement(tagElement, tag);
                    });
                    tagElement.appendChild(removeBtn);
                    tagsContainers.appendChild(tagElement);
                    console.log(tagsContainers);
                }

                function removeTagsElement(tagElement, tag) {
                    const index = tagsUpdate.indexOf(tag);
                    if (index !== -1) {
                        tagsUpdate.splice(index, 1);
                    }
                    tagElement.remove();
                }

                addTagBtnupdate.addEventListener('click', function() {
                    const tag = tagsInputUpdate.value.trim();
                    if (tag !== '') {
                        tagsUpdate.push(tag);
                        addTagsElement(tag);
                        tagsInputUpdate.value = '';
                    }
                });

                updateForm.addEventListener('submit', function(event) {
                    // Add the tags as hidden input fields to the form
                    updateForm.querySelectorAll('input[name="tags[]"]').forEach(input => input.remove());
                    tagsUpdate.forEach(function(tag) {
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'tags[]';
                        input.value = tag;
                        updateForm.appendChild(input);
                    });
                });
            });
        });
    </script> -->
    <script>
        var postForm = document.getElementById('post-form');
        var tagsInput = document.getElementById('tags-input');
        var addTagBtn = document.getElementById('add-tag-btn');
        var tagsContainer = document.getElementById('tags-container');
        var imagesContainer = document.getElementById('images-container');

        // Keep track of the added tags
        var tagsP = [];
        var images = [];

        function editpost(description, tags, category, action, imagesp) {
            document.getElementById("description").value = description;
            document.getElementById("category").value = category;
            const tagsArray = JSON.parse(tags);
            const imagesArray = JSON.parse(imagesp);
            console.log(tagsArray);
            console.log(typeof tagsArray);
            tagsArray.forEach(function(tag) {
                tagsP.push(tag.label);
                addTagElement(tag.label);
            });
            imagesArray.forEach(function(image) {
                images.push(image.path);
                addImageElement(image.path);
            });
            postForm.action = action;
            document.getElementById('PostLabel').innerHTML = `Update Your Post`;
            // Ouvrir Modal form
            $("#Post").modal("show");
        }

        function createpost(action) {
            console.log("is in product");
            // initialiser task form
            //   initTaskForm();
            postForm.action = action;
            postForm.reset();
            // Afficher le boutton save
            document.getElementById('PostLabel').innerHTML = `Create new Post`;
            // Ouvrir modal form
            $("#Post").modal("show");
        }
        // Add event listeners
        addTagBtn.addEventListener('click', function() {
            event.preventDefault();
            console.log('dkhal');
            var tag = tagsInput.value.trim();
            if (tag !== '') {
                tagsP.push(tag);
                addTagElement(tag);
                tagsInput.value = '';
            }
        });

        postForm.addEventListener('submit', function(event) {
            // Add the tags as hidden input fields to the form
            tagsP.forEach(function(tag) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'tags[]';
                input.value = tag;
                postForm.appendChild(input);
            });
        });

        // Function to add a tag element to the DOM
        function addTagElement(tag) {
            const tagElement = document.createElement('div');
            tagElement.classList.add('tag', 'text-white', 'bg_green', 'rounded-3', 'px-1', 'mx-1');
            tagElement.textContent = tag;
            console.log(tagElement);
            const removeBtn = document.createElement('button');
            removeBtn.classList.add('remove-btn', 'btn', 'text-white');
            removeBtn.textContent = 'x';
            removeBtn.addEventListener('click', function() {
                event.preventDefault();
                removeTagElement(tagElement, tag);
            });
            tagElement.appendChild(removeBtn);
            tagsContainer.appendChild(tagElement);
        }

        function addImageElement(image) {
            const imageElement = document.createElement('div');
            const imageHTML = `<img src="Postimage/${image}" class="img-thumbnail" width=100 height=100 alt="post">`;
            const imageWrapper = document.createElement('div');
            imageWrapper.innerHTML = imageHTML;
            const imageImg = imageWrapper.firstChild;
            imageElement.classList.add('image', 'position-relative', 'text-white', 'bg_green', 'rounded-3', 'px-1', 'mx-1');
            imageElement.style.width = 'mainimagewidth'
            console.log(imageElement);
            const removeBtn = document.createElement('button');
            removeBtn.classList.add('remove-btn', 'top-0', 'position-absolute', 'end-0', 'btn', 'text-white');
            removeBtn.textContent = 'x';
            removeBtn.addEventListener('click', function() {
                event.preventDefault();
                removeImageElement(imageElement, image);
            });
            imageElement.appendChild(imageImg);
            imageElement.appendChild(removeBtn);
            imagesContainer.appendChild(imageElement);
        }

        function removeTagElement(tagElement, tag) {
            var index = tagsP.indexOf(tag);
            if (index !== -1) {
                tagsP.splice(index, 1);
            }
            tagElement.remove();
        }
        // Function to remove a tag element from the DOM and the tags array
        function removeImageElement(imageElement, image) {
            var index = images.indexOf(image);
            if (index !== -1) {
                images.splice(index, 1);
            }
            imageElement.remove();
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'remove[]';
            input.value = image;
            postForm.appendChild(input);
        }
    </script>
    <script>
        function search(name) {

            var input_name = document.getElementById(name);
            if (input_name.classList.contains('d-none')) {
                console.log("hiii");
                input_name.classList.remove('d-none');
                console.log(input_name.style.display);
            } else {
                input_name.classList.add('d-none');
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let addItemBtn = document.querySelector(".add_item_btn");
            addItemBtn.addEventListener("click", function(e) {
                e.preventDefault();
                let showItem = document.querySelector("#show_item");
                let newDiv = document.createElement("div");
                newDiv.classList.add("d-flex", "flex-column", "append_item");
                newDiv.innerHTML = `
                        <div id="remove">
                        <label class="form-label" for="customFile">select your image</label>
                        <div class="input-group mb-3">
                        <input type="file" class="form-control" id="customFile" name="image[]" aria-describedby="img" />
                        <button class="btn remove_item_btn" id="img">x</button>
                        </div>
                        </div>
                    `;
                showItem.insertBefore(newDiv, showItem.firstChild);
            });

            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("remove_item_btn")) {
                    e.preventDefault();
                    let rowItem = e.target.parentNode.parentNode;
                    rowItem.parentNode.removeChild(rowItem);
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let likeBtns = document.querySelectorAll(".like-btn");
            likeBtns.forEach(function(btn) {
                btn.addEventListener("click", function(e) {
                    e.preventDefault();
                    let postId = this.dataset.postId;
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "/like-post");
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                            let likeCount = JSON.parse(this.responseText).like_count;
                            document.querySelector(`#post-${postId}-like-count`).textContent = likeCount;
                            let heartIcon = document.getElementById(`like-icon${postId}`);
                            // console.log(JSON.parse(this.responseText).fill);
                            if (JSON.parse(this.responseText).fill == 1) {
                                heartIcon.classList.remove('fa-regular');
                                heartIcon.classList.add('fa-solid');
                            } else {
                                heartIcon.classList.add('fa-regular');
                                heartIcon.classList.remove('fa-solid');
                            }
                        }
                    };
                    xhr.send(`post_id=${postId}&_token={{ csrf_token() }}`);
                });
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the comment form element
            var Form = document.querySelectorAll('.comment-form');
            // Listen for the form's submit event
            Form.forEach(function(commentForm) {
                commentForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent the form from submitting normally
                    // Serialize the form data
                    var formData = new FormData(commentForm);
                    // Send the AJAX request
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', commentForm.action);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            console.log(xhr.responseText); // Log the response to the console
                            // Clear the input field
                            commentForm.querySelector('input[name="description"]').value = '';
                            // Parse the JSON data
                            var comment = JSON.parse(xhr.responseText);
                            //   // Create the HTML for the new comment
                            if (comment.state == 1) {
                                var html = `
                                         <div class="card-body p-4">
                                            <div class="d-flex flex-start">
                                                <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
                                                <div>
                                                    <h6 class="fw-bold mb-1 "><small>
                                                            ${comment.user.name}</small></h6>
                                                    <div class="d-flex justify-content-around align-items-center mb-3">
                                                        <p class="m-0 text-muted"><small>
                                                        ${comment.created_at}</small>
                                                        </p>
                                                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal${comment.id}">
                                                            <i class="fas fa-pencil-alt ms-2"></i>
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade rounded-3" id="exampleModal${comment.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg_green text-white">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update your Comment</h5>
                                                                        <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="background-color:#E1EFE8">
                                                                        <form action="{{url('comment_update',` + comment.id + `)}}" method="post">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                        <label class="form-label" for="description">Comment</label>
                                                                                        <input type="text" value="${comment.description}" placeholder="Write a comment" id="description" class="form-control" name="description"/>
                                                                            </div>         
                                                                            <input type="hidden" value='${comment.post.id}' name="post_id">
                                                                            <input type="hidden" value='${comment.auth}' name="user_id">
                                                                            <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-duotone fa-paper-plane-top"></i></a></button>
                                                                            <div class="mb-3">
                                                                                        <label class="form-label" for="description">Comment</label>
                                                                                        <div class="input-group">
                                                                                        <input type="text" value="${comment.description}" placeholder="Write a comment" id="description" class="form-control" name="description"/>                                                                                        <input type="hidden" value='${comment.post.id}' name="post_id">
                                                                                        <input type="hidden" value='${comment.auth}' name="user_id">
                                                                                        <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-solid fa-paper-plane-top"></i></a></button>
                                                                                        </div>
                                                                            </div>   
                                                                        </form><!-- Search -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn" onclick="search('reply${comment.id}')"><i class="fas fa-redo-alt ms-2"></i></button>
                                                        <!-- <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a> -->`;
                                if (comment.count > 0) {
                                    html += `
                                                        
                                                        <button class="btn" onclick="search('showreply${comment.id}')" id="show${comment.id}"><i class="fas fa-comment fa-xs"></i><span class="small"> comment</span></a>`
                                } else {
                                    html += ` <button class="btn d-none" onclick="search("showreply${comment.id}")" id="show${comment.id}"><i class="fas fa-comment fa-xs"></i><span class="small"> comment</span></a>`
                                }
                                html += `   
                                                    </div>
                                                    <p class="mb-0">
                                                    ${comment.description}
                                                    </p>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="search d-none rounded-3" style="background-color:#F0F4F2" id="reply${comment.id}">
                                                <form action="{{url('comment_create')}}" method="post" class="comment-form">
                                                    @csrf
                                                    <input placeholder="Write a comment" type="text" class="rounded-3" style="background-color:#F0F4F2" name="description">
                                                    <input type="hidden" value='${comment.post.id}' name="post_id">
                                                    <input type="hidden" value='${comment.auth}' name="user_id">
                                                    <input type="hidden" value='${comment.id}' name="commenter_id">
                                                    <button type="submit"><i class="fa-duotone fa-paper-plane-top"></i></button>
                                                </form>
                                            </div>                                         
                                        </div>
                                        <hr class="my-0" />`;
                                var commentsSection = document.getElementById(`comment-section${comment.post.id}`);
                                commentsSection.insertAdjacentHTML('beforeend', html);
                            } else if (comment.state == 0) {
                                console.log('dkhal');
                                html = `        <div class="d-flex flex-start mt-1 mb-1">
                                                    <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
                                                    <div>
                                                        <h6 class="fw-bold mb-1 "><small>
                                                                ${comment.user.name}</small></h6>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <p class="m-0 text-muted"><small>
                                                            ${comment.created_at}</small>
                                                            </p>
                                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#reply${comment.id}">
                                                                <i class="fas fa-pencil-alt ms-2"></i>
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade rounded-3" id="reply${comment.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg_green text-white">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update your Reply</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body" style="background-color:#E1EFE8">
                                                                            <form action="{{url('comment_update',` + comment.id + `)}}" method="post">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                        <label class="form-label" for="description">Comment</label>
                                                                                        <div class="input-group">
                                                                                        <input type="text" value="${comment.description}" placeholder="Write a comment" id="description" class="form-control" name="description"/>                                                                                        <input type="hidden" value='${comment.post.id}' name="post_id">
                                                                                        <input type="hidden" value='${comment.auth}' name="user_id">
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
                                                        ${comment.description}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Search -->
                                            <hr class="my-0" />
                                     `;
                                var commentsSection = document.getElementById(`showreply${comment.parent}`);
                                console.log(commentsSection);
                                commentsSection.insertAdjacentHTML('beforeend', html);
                                var input = document.getElementById(`show${comment.parent}`);
                                input.classList.remove('d-none');
                                var reply = document.getElementById(`showreply${comment.parent}`);
                                reply.classList.remove('d-none');
                                var form = document.getElementById(`reply${comment.parent}`);
                                reply.classList.remove('d-none');
                            }
                            // Append the new comment to the comments section

                        } else {
                            console.log(xhr.responseText); // Log the error message to the console
                        }
                    };
                    xhr.send(formData);
                });
            });
        });
    </script>
    <script>
        // Set up CSRF token for AJAX requests
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        let likeBtns = document.querySelectorAll(".like-btn");
        likeBtns.forEach(function(btn) {
            btn.setAttribute("data-csrf-token", csrfToken);
        });
    </script>
</body>