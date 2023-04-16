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

        /* end post */
    </style>

</head>

<body>
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