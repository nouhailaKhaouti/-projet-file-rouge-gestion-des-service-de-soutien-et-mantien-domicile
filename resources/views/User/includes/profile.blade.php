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
    </style>
</head>

<body>
    <!-- <nav class="d-flex justify-content-between bg-tranparent my-5 mx-5">
        <img src="user/assets/img/icon.png" alt="logo" id="logo" width="50" height="100" style="z-index: 1;" class="ms-4 mt-0 mb-3">
        <ul class="ul d-flex ">
            <li class="text-black me-5 pt-3 text-decoration-none d-inline-block p-relative" style="margin-bottom:20px;">
                Home
            </li>
            <li class="text-black me-5 pt-3 text-decoration-none d-inline-block p-relative " style="margin-bottom:20px;">
                Services
            </li>
            <li class="text-black me-5 pt-3 text-decoration-none d-inline-block p-relative" style="margin-bottom:20px;">
                Posts
            </li>
            <li class="text-black me-5 pt-3 text-decoration-none d-inline-block p-relative" style="margin-bottom:20px;">
                About
            </li>
            <img src="user/assets/img/p.jpg" class="text-black me-5 text-decoration-none d-inline-block p-relative" style="margin-bottom:20px;" alt="" width="50" height="50" class="full-rounded" id="profile">
        </ul>
    </nav> -->
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
                                 <div class="d-flex "><ul class="rating list-unstyled d-flex" count="43" rating="20">
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
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">

                                <div class="row">
                                    <div class="col-sm-11 ms-5 mt-5">
                                    <div class="bg_green text-white rounded-3 text-center w-25 outline-success position-absolute " data-mdb-ripple-color="success" style="z-index: 1;">
                                                About
                                            </div>
                                        <div class="z-index-0 card rounded-5 bg-secondary" >
                                            <div class="card-body ">
                                                <h5 class="card-title">Special title treatment</h5>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                <a href="#" class="btn btn-primary">Go somewhere</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Recent photos</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div class="row g-2">
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            for (let i = 0; i < 5 - rate; i++) {
                div.innerHTML += starsE;
            }
        });
    </script>

</body>