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
    <link rel="stylesheet" href="https://colorlib.com/etc/bwiz/colorlib-wizard-6/fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="https://colorlib.com/etc/bwiz/colorlib-wizard-6/css/style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <style>
        .pill-btn {
            border: none;
            color: black;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px;
            color: white;
            left: 0;
        }

        .pill-btn:hover {
            opacity: 1;
        }

        .group {
            position: relative;
            border-radius: 20px;
            padding: 3%;
            box-sizing: border-box;
            background: #ecf0f3;
            box-shadow: 10px 10px 16px #cbced1, -10px -10px 16px white;
        }

        .flex {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-around;
        }
        .left{
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="{{url('Company_create')}}">
            <div id="wizard">
                <h4></h4>
                <section>
                    <div class="form-header">
                        <div class="avartar">
                            <a href="#">
                                <img src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/images/avartar.png" alt="">
                            </a>
                            <div class="avartar-picker">
                                <input type="file" name="file-1[]" id="file-1" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                                <label for="file-1">
                                    <i class="zmdi zmdi-camera"></i>
                                    <span>Choose Picture</span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-holder active">
                                <select name="service" id="service" class="form-control" require>
                                    <option value="">---Services---</option>
                                    @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->label}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-holder">
                                <textarea name="description" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="the company name" name="name" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="the company web site" name="webSite" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="number" placeholder="the company commercial Register Numero" name="commercialRegisterN" class="form-control">
                        </div>
                        <div class="form-holder">
                            <input type="number" placeholder="the company size" name="nemploi" class="form-control">
                        </div>
                    </div>
                </section>
                <h4></h4>
                <section>
                    <div class="form-header " id="adresse_item">
                        <div class="group " style="margin-left: 4px;">
                                <button class="btn remove_item_btn pill-btn left" style="background-color: #acc4f4;">x</button>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="title[]" placeholder="title" />
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="country[]" placeholder="Country" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="city[]" placeholder="city" />
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="street[]" placeholder="Street" />
                                </div>
                            </div>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="appartement[]" placeholder="appartement" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="button" class="pill-btn" id="add_adresse_btn" onclick="hi()" style="  background-color: #f4c4ec;">Add new Location</button>
                </section>
                <h4></h4>
                <section>
                    <div class="form-row " id="phone_item">
                        <div class="form-holder">
                            <input type="text" class="form-control" name="label[]" placeholder="phone number" />
                            <button class="btn remove_item_btn pill-btn" style="  background-color: #f4c4ec;">x</button>
                        </div>
                    </div>
                    <button type="button" class="pill-btn" id="add_phone_btn" style="background-color: #acc4f4;">Add telephone contact</button>
                </section>
                <h4></h4>
                <section>
                    <div class="form-row ">
                        <div class="form-holder">
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
                    </div>
                    <br>
                    <div class="form-row flex" id="checkLists-container">
                    </div>
                    <div class="form-row">
                                <div class="form-holder">
                                   <input type="text" placeholder="add your own checkListsto" id="checkLists-input" class="form-control rounder-2" name="checkLists" aria-describedby="add" />
                                </div>
                                <div class="form-holder">
                                   <input type="number" placeholder="Price" id="checkLists-price" class="form-control rounder-2" name="checkListsPrice" aria-describedby="add" />
                                </div>
                                <button type="button" class="pill-btn" id="add-checkList-btn" id="add">Add</button>
                            </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
    <script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/jquery-3.3.1.min.js"></script>
    <script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/jquery.steps.js"></script>
    <script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <!-- add adresses and phone numbers  -->
<script>
$( document ).ready(function() {
    let addItemBtn = $("#add_adresse_btn");
    
    addItemBtn.on("click", function(e) {
        e.preventDefault();
        let showItem = $("#adresse_item");
        showItem.append(`
                        <div class="group " style="margin-left: 4px;">
                                <button class="btn remove_item_btn pill-btn left" style="background-color: #acc4f4;">x</button>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="title[]" placeholder="title" />
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="country[]" placeholder="Country" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="city[]" placeholder="city" />
                                </div>
                                <div class="form-holder">
                                    <input type="text" class="form-control" name="street[]" placeholder="Street" />
                                </div>
                            </div>
                            <div class="form-holder">
                                <input type="text" class="form-control" name="appartement[]" placeholder="appartement" />
                            </div>
                        </div>
                        `);
    });
    let addPhoneBtn = $("#add_phone_btn");
    console.log(addPhoneBtn);
    addPhoneBtn.on("click", function(e) {
        e.preventDefault();
        let showItem = $("#phone_item");
        showItem.append(`
                <div class="form-holder ">
                        <input type="text" class="form-control" name="label[]" placeholder="phone number" />
                        <button class="btn remove_item_btn pill-btn" style="  background-color: #f4c4ec;" >x</button>
                </div>
                    `);
    });
    $(document).on("click", ".remove_item_btn", function(e) {
                e.preventDefault();
                let rowItem = $(this).parent();
                rowItem.remove();
    });
});
</script>
<script>
        $(document).ready(function() {
        var postForm = $('#form');
        var checkListsInput = $('#checkLists-input');
        var addcheckListBtn = $('#add-checkList-btn');
        var checkListsContainer = $('#checkLists-container');
        var checkListsP = [];

        addcheckListBtn.on('click', function(event) {
        event.preventDefault();
        var checkList = checkListsInput.val().trim();
        var checkListPrice = $('#checkLists-price').val().trim();
        if (checkList !== '' && checkListPrice !== '') {
            checkListsP.push({name: checkList, price: checkListPrice});
            addcheckListElement(checkList, checkListPrice);
            checkListsInput.val('');
            $('#checkLists-price').val('');
        } else {
            alert('Please enter a price for the checklist.');
        }
        });

        postForm.on('submit', function(event) {
        // Add the checkLists as hidden input fields to the form
        checkListsP.forEach(function(checkList, index) {
            var nameInput = $('<input>').attr({
            type: 'hidden',
            name: 'checkLists[' + index + '][name]',
            value: checkList.name
            });
            var priceInput = $('<input>').attr({
            type: 'hidden',
            name: 'checkLists[' + index + '][price]',
            value: checkList.price
            });
            postForm.append(nameInput, priceInput);
        });
        });

        // Function to add a checkList element to the DOM
        function addcheckListElement(checkList, checkListPrice) {
        var checkListElement = $('<div>').addClass('checkList pill-btn mx-1 bg-1').text(checkList);
        var checkListPriceElement = $('<div>').addClass('checkList-price').text(checkListPrice);
        var removeBtn = $('<button>').addClass('remove-btn checkList-btn bg-2 mx-1').text('x');
        removeBtn.on('click', function(event) {
            event.preventDefault();
            removecheckListElement(checkListElement, checkList);
        });
        checkListElement.append(checkListPriceElement, removeBtn);
        checkListsContainer.append(checkListElement);
        }

        
        function removecheckListElement(checkListElement, checkList) {
            var index = checkListsP.indexOf(checkList);
            if (index !== -1) {
            checkListsP.splice(index, 1);
            }
            checkListElement.remove();
        }
        });
    </script>
</body>