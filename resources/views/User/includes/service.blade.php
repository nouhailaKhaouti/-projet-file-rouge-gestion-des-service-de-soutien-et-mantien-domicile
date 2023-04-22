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
        /* FontAwesome for working BootSnippet :> */

        @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        #team {
            background: #eee !important;
        }

        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #108d6f;
            border-color: #108d6f;
            box-shadow: none;
            outline: none;
        }

        .btn-primary {
            color: #fff;
            background-color: #007b5e;
            border-color: #007b5e;
        }

        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #team .card {
            border: none;
            background: #ffffff;
        }

        .image-flip:hover .backside,
        .image-flip.hover .backside {
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -o-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
            border-radius: .25rem;
        }

        .image-flip:hover .frontside,
        .image-flip.hover .frontside {
            -webkit-transform: rotateY(180deg);
            -moz-transform: rotateY(180deg);
            -o-transform: rotateY(180deg);
            transform: rotateY(180deg);
        }

        .mainflip {
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -ms-transition: 1s;
            -moz-transition: 1s;
            -moz-transform: perspective(1000px);
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
            position: relative;
        }

        .frontside {
            position: relative;
            -webkit-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            z-index: 2;
            margin-bottom: 30px;
        }

        .backside {
            position: absolute;
            top: 0;
            left: 0;
            background: white;
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -o-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
            box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        }

        .frontside,
        .backside {
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            backface-visibility: hidden;
            -webkit-transition: 1s;
            -webkit-transform-style: preserve-3d;
            -moz-transition: 1s;
            -moz-transform-style: preserve-3d;
            -o-transition: 1s;
            -o-transform-style: preserve-3d;
            -ms-transition: 1s;
            -ms-transform-style: preserve-3d;
            transition: 1s;
            transform-style: preserve-3d;
        }

        .frontside .card,
        .backside .card {
            min-height: 312px;
        }

        .backside .card a {
            font-size: 18px;
            color: #007b5e !important;
        }

        .frontside .card .card-title,
        .backside .card .card-title {
            color: #007b5e !important;
        }

        .frontside .card .card-body img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }

        .card1 {
            width: 350px;
            border: none;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            border-radius: 12px;
        }

        .circle-image img {
            border: 6px solid #fff;
            border-radius: 100%;
            padding: 0px;
            top: -28px;
            position: relative;
            width: 70px;
            height: 70px;
            border-radius: 100%;
            z-index: 1;
            background: #e7d184;
            cursor: pointer;

        }


        .dot {
            height: 18px;
            width: 18px;
            background-color: blue;
            border-radius: 50%;
            display: inline-block;
            position: relative;
            border: 3px solid #fff;
            top: -48px;
            left: 186px;
            z-index: 1000;
        }

        .name {
            margin-top: -21px;
            font-size: 18px;
        }


        .fw-500 {
            font-weight: 500 !important;
        }


        .start {
            color: green;
        }

        .stop {
            color: red;
        }


        .rate {
            border-bottom-right-radius: 12px;
            border-bottom-left-radius: 12px;
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: center;
        }

        .rating>input {
            display: none;
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 30px;
            font-weight: 300;
            color: #000;
            cursor: pointer;
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0;
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important;
        }

        .rating>input:checked~label:before {
            opacity: 1;
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4;
        }

        .rating>input:checked+label {
            color: #FFD600;
        }


        .buttons {
            top: 36px;
            position: relative;
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

        .bg_green {
            background-color: #559974;
        }
    </style>

</head>

<body>
    <form class="row p-4 row-cols-sm-auto g-2 border 
                 bg-light align-items-center end-0 search-form" action="" method="">
        <div class="col-1">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search by name " name="seach">
            </div>
        </div>
        <div class="col-3">
            <label class="visually-hidden" for="confirmation">
                confirmation</label>
            <select class="js-example-basic-multiple form-control" name="cities[]" multiple="multiple" placeholder="Select cities">
                <option value="Agadir">Agadir</option>
                <option value="Al Hoceima">Al Hoceima</option>
                <option value="Azilal">Azilal</option>
                <option value="Beni Mellal">Beni Mellal</option>
                <option value="Ben Slimane">Ben Slimane</option>
                <option value="Boulemane">Boulemane</option>
                <option value="Casablanca">Casablanca</option>
                <option value="Chaouen">Chaouen</option>
                <option value="El Jadida">El Jadida</option>
                <option value="El Kelaa des Sraghna">El Kelaa des Sraghna</option>
                <option value="Er Rachidia">Er Rachidia</option>
                <option value="Essaouira">Essaouira</option>
                <option value="Fes">Fes</option>
                <option value="Figuig">Figuig</option>
                <option value="Guelmim">Guelmim</option>
                <option value="Ifrane">Ifrane</option>
                <option value="Kenitra">Kenitra</option>
                <option value="Khemisset">Khemisset</option>
                <option value="Khenifra">Khenifra</option>
                <option value="Khouribga">Khouribga</option>
                <option value="Laayoune">Laayoune</option>
                <option value="Larache">Larache</option>
                <option value="Marrakech">Marrakech</option>
                <option value="Meknes">Meknes</option>
                <option value="Nador">Nador</option>
                <option value="Ouarzazate">Ouarzazate</option>
                <option value="Oujda">Oujda</option>
                <option value="Rabat-Sale">Rabat-Sale</option>
                <option value="Safi">Safi</option>
                <option value="Settat">Settat</option>
                <option value="Sidi Kacem">Sidi Kacem</option>
                <option value="Tangier">Tangier</option>
                <option value="Tan-Tan">Tan-Tan</option>
                <option value="Taounate">Taounate</option>
                <option value="Taroudannt">Taroudannt</option>
                <option value="Tata">Tata</option>
                <option value="Taza">Taza</option>
                <option value="Tetouan">Tetouan</option>
                <option value="Tiznit">Tiznit</option>
            </select>
        </div>

        <div class="col-4">
            <div class="input-group">
                <select type="text" class="form-control" name="type" placeholder="Type of provider">
                    <option value="freelancer">Freelancer</option>
                    <option value="company">Company</option>
                </select>
            </div>
        </div>
        </div>
        <div class="col-5">
            <button type="submit" class="btn bg_green btn-block rating-submit">
                Search</button>
        </div>
    </form>
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">OUR TEAM</h5>
            <div class="row" id="body">
                @foreach($providers as $provider)
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside rounded-5 ">
                                <div class="card rounded-5">
                                    <div class="card-body text-center rounded-5 bg-2">
                                        <p><img class=" img-fluid" src="userimage/$provider->icon" alt="card image"></p>
                                        <h4 class="card-title">$provider->name</h4>
                                        <span class="d-block"><i class="fa-solid fa-wrench"></i> <small class="text-truncate ml-2">$provider->service</small> </span>
                                        <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">
                                            @foreach($provider->cities as $city)
                                              $city->label
                                            @endforeach
                                        </small> </span>
                                        <ul class="rating list-unstyled" count="100" rating="30">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="backside rounded-5 ">
                                <div class="card rounded-5 bg-2 ">
                                    <div class="card-body text-center rounded-5 pt-2 bg-2">
                                        <h4 class="card-title mb-3">$provider->service</h4>
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm" data-mdb-ripple-color="dark">See profile</button>
                                        <p class="card-text">$provider->description</p>
                                        <div class="buttons px-4 mt-0">
                                            <button class="btn bg_green btn-block rating-submit" onclick="request(`$provider->cities`,`$provider->disponibility`,`$provider->checkLists`,`$provider->`)">Book now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ./Team member -->
                @endforeach
            </div>
        </div>
    </section>
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">OUR TEAM</h5>
            <div class="row" id="body">
                @foreach($companies as $company)
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside rounded-5 ">
                                <div class="card rounded-5">
                                    <div class="card-body text-center rounded-5 bg-2">
                                        <p><img class=" img-fluid" src="userImage/$company->user->icon" alt="card image"></p>
                                        <h4 class="card-title">$company->name</h4>
                                        <span class="d-block"><i class="fa-solid fa-wrench"></i> <small class="text-truncate ml-2">$company->service</small> </span>
                                        <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">
                                            @foreach($company->user->cities as $city)
                                              $city->label
                                            @endforeach
                                        </small> </span>
                                        <ul class="rating list-unstyled" count="100" rating="30">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="backside rounded-5 ">
                                <div class="card rounded-5 bg-2 ">
                                    <div class="card-body text-center rounded-5 pt-2 bg-2">
                                        <h4 class="card-title mb-3">$company->service</h4>
                                        <button type="button" class="btn btn-outline-dark btn-rounded btn-sm" data-mdb-ripple-color="dark">See profile</button>
                                        <p class="card-text">$company->user->description</p>
                                        <div class="buttons px-4 mt-0">
                                            <button class="btn bg_green btn-block rating-submit" onclick="request(``)">Book now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ./Team member -->
                @endforeach
            </div>
        </div>
    </section>
    <div class="container d-flex justify-content-center mt-5">
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
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js" integrity="sha512-c3X8oUD7JPhnro+Mz1f3N3GwT7V0SQzlrsgf7VAFPsX9c/7RmB0eQJtVW6eOMQv7YJL1hCj7iM9X9fO7gKKEbQ==" crossorigin="anonymous"></script> <!-- select multi cities script -->
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <!-- search script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get the search form element
            var Form = document.querySelectorAll('.search-form');
            // Listen for the form's submit event
            Form.forEach(function(searchForm) {
                searchForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent the form from submitting normally
                    // Serialize the form data
                    var formData = new FormData(searchForm);
                    // Send the AJAX request
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', searchForm.action);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            console.log(xhr.responseText); // Log the response to the console
                            // Clear the input field
                            searchForm.querySelector('input[name="search"]').value = '';
                            searchForm.querySelector('input[name="cities[]"]').value = '';
                            searchForm.querySelector('input[name="type"]').value = '';
                            // Parse the JSON data
                            var user = JSON.parse(xhr.responseText);
                            //   // Create the HTML for the new user
                            if (user.type == 1) {
                                var html = `
                                <div class="col-xs-12 col-sm-6 col-md-4 ">
                                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                        <div class="mainflip">
                                            <div class="frontside rounded-5 ">
                                                <div class="card rounded-5">
                                                    <div class="card-body text-center rounded-5 bg-2">
                                                        <p><img class=" img-fluid" src="user/assets/img/p.jpg" alt="card image"></p>
                                                        <h4 class="card-title">${user.name}</h4>
                                                        <span class="d-block"><i class="fa-solid fa-wrench"></i> <small class="text-truncate ml-2">Cleaning</small> </span>
                                                        <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">
                                                        `
                                user.cities.forEach(function(city) {
                                    html += `${city},`;
                                });

                                html += `</small> </span>
                                                        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="backside rounded-5 ">
                                                <div class="card rounded-5 bg-2 ">
                                                    <div class="card-body text-center rounded-5 pt-2 bg-2">
                                                        <h4 class="card-title mb-3">Cleaning</h4>
                                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                        <div class="buttons px-4 mt-0">
                                                            <button class="btn bg_green btn-block rating-submit">Book now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                         `;
                                var freelancerSection = document.getElementById(`freelancerSection`);
                                console.log(freelancerSection);
                                freelancerSection.insertAdjacentHTML('beforeend', html);
                            } else if (user.type == 0) {
                                console.log('dkhal');
                                var html = `
                                <div class="col-xs-12 col-sm-6 col-md-4 ">
                                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                        <div class="mainflip">
                                            <div class="frontside rounded-5 ">
                                                <div class="card rounded-5">
                                                    <div class="card-body text-center rounded-5 bg-2">
                                                        <p><img class=" img-fluid" src="user/assets/img/p.jpg" alt="card image"></p>
                                                        <h4 class="card-title">${user.name}</h4>
                                                        <span class="d-block"><i class="fa-solid fa-wrench"></i> <small class="text-truncate ml-2">Cleaning</small> </span>
                                                        <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">
                                                        `
                                user.cities.forEach(function(city) {
                                    html += `${city},`;
                                });

                                html += `</small> </span>
                                                        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="backside rounded-5 ">
                                                <div class="card rounded-5 bg-2 ">
                                                    <div class="card-body text-center rounded-5 pt-2 bg-2">
                                                        <h4 class="card-title mb-3">Cleaning</h4>
                                                        <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                                        <div class="buttons px-4 mt-0">
                                                            <button class="btn bg_green btn-block rating-submit">Book now</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                         `;
                                var companySection = document.getElementById(`companySection`);
                                console.log(companySection);
                                companySection.insertAdjacentHTML('beforeend', html);
                            }
                            // Append the new search to the searchs section

                        } else {
                            console.log(xhr.responseText); // Log the error message to the console
                        }
                    };
                    xhr.send(formData);
                });
            });
        });
    </script>
    <!-- rating script -->
    <script>
        const divs = document.querySelectorAll('.rating');
        divs.forEach(function(div) {
            const starsF = `<li><i class="fa-solid fa-star text-yellow"></i></li>`;
            const starsE = `<li><i class="fa-regular fa-star text-yellow"></i></li>`;
            const count = parseInt(div.getAttribute('count'));
            const rating = parseInt(div.getAttribute('rating'));
            const rate = count / rating;
            for (let i = 0; i < 5 - rate; i++) {
                div.innerHTML += starsE;
            }
            for (let i = 0; i < rate; i++) {
                div.innerHTML += starsF;
            }
        });
    </script>
</body>