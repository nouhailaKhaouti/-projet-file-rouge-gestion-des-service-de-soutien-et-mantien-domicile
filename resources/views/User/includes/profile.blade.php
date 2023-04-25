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
    <!-- <link id="pagestyle" href="user/assets/css/style.css" rel="stylesheet" /> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Link to the MDB CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" integrity="sha512-x7jy9EiOQ7xuLsRdYn1W8D6Q2QKjtfbPcV7LWqX1xLl6p0KvFe4YgW8fF4Kj6K5zv15LJ6WdXxK5B1H5zZoFQ==" crossorigin="anonymous" />
    <!-- Link to the Font Awesome CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-1rpvR7BzwaFJ2Vt6W8h6JbR6+Z0eQjK3q8XlhFJLlNfKJjz1eW8fay4B4jK4H6Gc+JW8A6QOy5F5z6K5mW6J8w==" crossorigin="anonymous" />
    <style>
        .bg-2 {
            background-color: #E1EFE8;
        }

        .bg_green {
            background-color: #559974;
        }

        .ul li:hover {
            animation: zoom-in-zoom-out 1s ease infinite;
        }


        .ul li:hover::after {

            transform: scaleX(1);
            transform-origin: bottom left;

        }

        .ul li::after {
            background-color: #559974;
            content: '';
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        nav {
            width: 90vw;
            height: 50px;
            /* left: 63px;
           top: 59px; */
            background: #F0F4F2;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
        }

        #logo {
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 15px;
            width: 13%;
            /* height: 100%; */
            /* left: 10%;
            top: -23%; */
        }

        #profile {
            filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
            border-radius: 300px;
        }

        header {
            background: url("user/asset/img/bg-1.png");
        }

        @media (max-width:3920px) {
            .btn-sq-responsive {
                width: 350px !important;
                max-width: 100% !important;
                max-height: 100% !important;
                height: 200px !important;
                font-size: 24px;
            }
        }

        /* Style for Large Screen */
        @media (max-width:991px) {
            .btn-sq-responsive {
                width: 300px !important;
                max-width: 100% !important;
                max-height: 100% !important;
                height: 150px !important;
                font-size: 18px;
            }
        }

        /* Style for Medium Screen */
        @media (max-width:767px) {
            .btn-sq-responsive {
                width: 250px !important;
                /* whatever width you want for medium screen */
                max-width: 100% !important;
                max-height: 100% !important;
                height: 100px !important;
                /* whatever height you want for medium screen */
                font-size: 12px;
            }
        }

        /* Style for Small Screen */
        @media (max-width:575px) {
            .btn-sq-responsive {
                width: 200px !important;
                /* whatever width you want for mobile screen */
                max-width: 100% !important;
                max-height: 100% !important;
                height: 50px !important;
                /* whatever height you want for mobile screen */
                font-size: 5px;
                padding: 0px;
                font-size: 7px;
            }
        }

        .btn-bg-first {
            background-color: #DDFFBB;
        }

        .btn-bg-second {
            background-color: #C7E9B0;
        }

        .bg_green {
            background-color: #559974;
        }

        .bg-light-green {
            background-color: #E1EFE8;
        }

        .bg-1 {
            background-color: #559974;
        }

        .rating-submit {
            border-radius: 15px;
            color: #fff;
            height: 49px;
        }

        .rating-submit:hover {
            color: #fff;
        }

        .bg-2 {
            background-color: #E1EFE8;
        }

        .rate {
            border-bottom-right-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .buttons {
            top: 36px;
            position: relative;
        }
    </style>
</head>

<body>
    <section class="">
        <div class="h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card" style="background-color:#E1EFE8;">
                        <div class="rounded-top text-white d-flex flex-row border-bottom border-dark" style="background-color:#D9D9D9; height:200px;">
                            <div class="ms-5 mt-5 d-flex flex-column " style="width: 200px;z-index: 1;">
                                <div class="bg_green p-1 text-center rounded-3 align-center"><img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Generic placeholder image" class="img-fluid rounded-3 mt-1 mb-1" style="width: 180px; z-index: 1"></div>
                                <button type="button" class="btn bg_green mt-2 text-white btn-outline-success" data-mdb-ripple-color="success" style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-3" style="margin-top:80px;">
                                <div class="d-flex ">
                                    <ul class="rating list-unstyled d-flex" count="43" rating="20">
                                    </ul>
                                    <p class="ms-1" style="margin-top:2px">3.0</p>
                                </div>
                                <h5>Andy Horwitz</h5>
                                <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">Ganesha Road, preet vihar new delhi</small> </span>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #E1EFE8;">
                            <div class="d-flex justify-content-end text-center py-1 pt-3 pt-sm-0 mt-5 mt-sm-0">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <button class="btn bg_green btn-block rating-submit text-white">Your Posts</button>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <button class="btn bg_green btn-block rating-submit text-white">Book now</button>
                                </div>
                                <div class="px-3">
                                    <button style="  padding: 12px 16px;" type="button" class="btn  btn-xs btn-primary " data-bs-toggle="modal" data-bs-target="#exampleRModal">
                                        Review
                                    </button>
                                    <button class="btn btn-block rating-submit btn-outline-success " data-bs-toggle="modal" data-bs-target="#upgrade">upgrade</button>
                                    <div class="modal modal-lg fade" id="upgrade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg_green">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Upgrade Your title</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body bg-light-green">
                                                    <div class="d-flex flex-wrap justify-content-around align-item-around">
                                                        <a href="{{url('company')}}"> <button class="btn btn-sq-responsive btn-bg-first rounded-pill mb-3 ">
                                                                As Company
                                                            </button></a>

                                                        <a href="{{url('freelancer')}}"><button class="btn btn-sq-responsive btn-bg-second rounded-pill">
                                                                As a Freelancer
                                                            </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Full Name</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">Johnatan Smith</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Email</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">example@example.com</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Phone</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">(097) 234-5678</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Mobile</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">(098) 765-4321</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <p class="mb-0">Address</p>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <p class="lead fw-normal mb-0">Recent Posts</p>
                                    <!-- <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p> -->
                                </div>
                                <section>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-10 col-xl-8 text-center">
                                            <h3 class="mb-4">Testimonials</h3>
                                            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                                                numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                                                quisquam eum porro a pariatur veniam.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class="col-md-4 mb-5 mb-md-0">
                                            <div class="d-flex justify-content-center mb-4">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                                            </div>
                                            <h5 class="mb-3">Maria Smantha</h5>
                                            <h6 class="text-primary mb-3">Web Developer</h6>
                                            <p class="px-xl-3">
                                                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                                                tenetur.
                                            </p>
                                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-5 mb-md-0">
                                            <div class="d-flex justify-content-center mb-4">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                                            </div>
                                            <h5 class="mb-3">Lisa Cudrow</h5>
                                            <h6 class="text-primary mb-3">Graphic Designer</h6>
                                            <p class="px-xl-3">
                                                <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
                                                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                                            </p>
                                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 mb-0">
                                            <div class="d-flex justify-content-center mb-4">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
                                            </div>
                                            <h5 class="mb-3">John Smith</h5>
                                            <h6 class="text-primary mb-3">Marketing Specialist</h6>
                                            <p class="px-xl-3">
                                                <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
                                                dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                                            </p>
                                            <ul class="list-unstyled d-flex justify-content-center mb-0">
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star fa-sm text-warning"></i>
                                                </li>
                                                <li>
                                                    <i class="far fa-star fa-sm text-warning"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <div class="modal fade" id="exampleRModal" tabindex="-1" role="dialog" aria-labelledby="exampleRModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRModalLabel">Review</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="py-2 px-4" action="{{route('review.store')}}" style="box-shadow: 0 0 10px 0 #ddd;" method="POST" autocomplete="off">
                        @csrf
                        <div class="container d-flex justify-content-center mt-5">
                            <div class="card1 text-center mb-5">
                                <div class="circle-image">
                                    <img src="user/assets/img/p.jpg" width="50">
                                </div>
                                <span class="dot"></span>
                                <span class="name mb-1 fw-500">{{$user->name}}</span>
                                <small class="text-black-50">{{$user->service}}</small>
                                <small class="text-black-50 font-weight-bold"></small>
                                <div class="rate bg-success py-3 text-white mt-3">
                                    <h6 class="mb-0">Rate your service Provider</h6>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <div class="rate">
                                                <input type="radio" id="star5" class="rate" name="rating" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" checked id="star4" class="rate" name="rating" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" class="rate" name="rating" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" class="rate" name="rating" value="2">
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" class="rate" name="rating" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                            </div>
                                        </div>
                                    </div>
                                    <input placeholder="Write a comment" type="text" name="description" class="rounded-3" style="background-color:#F0F4F2">
                                    <div class="buttons px-4 mt-0">
                                        <button class="btn btn-warning btn-block rating-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="provider_id" value="{{$user->id}}">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container d-flex justify-content-center mt-5">
        <div class="card1 text-center mb-5">
            <div class="circle-image">
                <img src="user/assets/img/p.jpg" width="50">
            </div>
            <span class="dot"></span>
            <span class="name mb-1 fw-500">Bryan Williams</span>
            <small class="text-black-50">Tata Ace</small>
            <small class="text-black-50 font-weight-bold">QP09AA9090</small>
            <div class="location mt-4">
                <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">Ganesha Road, preet vihar new delhi</small> </span>
                <span><i class="fa fa-map-marker stop mt-2"></i><small class="text-truncate ml-2">Mandir Road, Mayur vihar, new delhi</small> </span>
            </div>
            <div class="rate bg-success py-3 text-white mt-3">
                <h6 class="mb-0">Rate your driver</h6>
                <ul class="rating list-unstyled" data-mdb-toggle="rating">
                    <li>
                        <i class="far fa-star fa-sm text-primary" title="Bad"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary" title="Poor"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary" title="OK"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary" title="Good"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-primary" title="Excellent"></i>
                    </li>
                </ul>
                <div class="buttons px-4 mt-0">
                    <button class="btn btn-warning btn-block rating-submit">Submit</button>
                </div>
            </div>
        </div>
    </div> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script>
        const divs = document.querySelectorAll('.rating');
        divs.forEach(function(div) {
            const starsF = `<li><i class="fa-solid fa-star text-yellow"></i></li>`;
            const starsE = `<li><i class="fa-regular fa-star text-yellow"></i></li>`;
            const count = parseInt(div.getAttribute('count'));
            const rating = parseInt(div.getAttribute('rating'));

            const rate = count / rating;
            for (let i = 0; i < rate; i++) {
                div.innerHTML += starsF;
            }
            for (let i = 0; i < 5 - rate - 1; i++) {
                div.innerHTML += starsE;
            }
        });
    </script>

</body>