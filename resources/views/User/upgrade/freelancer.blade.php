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
            box-shadow: 10px 10px 16px #cbced1, -10px -10px 16px white;
        }
        .checkList-btn{
            border: none;
            color: black;
            padding: 2px 3px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px;
            color: white;
            left: 0;
            /* box-shadow: 4px 4px 6px #cbced1, -4px -4px 6px white; */
        }
        .mx-1{
            margin:2px 4px;
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
        .bg-1{
            background-color: #f4c4ec;
        }
        .bg-2{
            background-color: #acc4f4;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <form action="{{url('Freelancer_create')}}" id="form">
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
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-holder">
                        <textarea name="description" id="" placeholder="Your messagere here!" class="form-control" style="height: 99px;"></textarea>
                    </div>
                    <div class="form-holder">
                        <input type="number" placeholder="Your available phone number" name="phone" class="form-control">
                    </div>
                </section>
                <h4></h4>
                <section>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Your Adresse" class="form-control" name="adresse">
                        </div>
                        <div class="form-holder">
                            <input type="number" placeholder="your Code Postal" class="form-control" name="postal_code">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-holder">
                            <input type="text" placeholder="Country" class="form-control" name="country">
                        </div>
                        <div class="form-holder">
                            <select class="form-control" name="city" placeholder="Select your city">
                                <option value="*">---Select Your City---</option>
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
                    <div class="form-row">
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
                    <br>
                    <br>
                    <div class="form-row">
                        <div class="form-holder">
                            <div class="avartar-picker">
                                    <input type="file" name="cin_file" id="file-1" class="inputfile" />
                                    <label for="file-1">
                                        <i class="zmdi zmdi-file"></i>
                                        <span>Choose Cin file</span>
                                    </label>
                            </div>
                        </div>
                        <div class="form-holder">
                            <input type="text" placeholder="Cin" class="form-control" name="cin">
                        </div>
                    </div>
                    <div class="form-holder">
                            <div class="avartar-picker">
                                    <input type="file" name="certificat" id="file-1" class="inputfile" />
                                    <label for="file-1">
                                        <i class="zmdi zmdi-file"></i>
                                        <span>Choose a certificat if you want</span>
                                    </label>
                            </div>
                    </div>
                </section>
                <h4></h4>
                <section>
                    <div class="form-row flex" id="checkLists-container">
                    </div>
                    <div class="form-holder">
                            <div class="avartar-picker">
                                <input type="text" placeholder="add your own checkListsto" id="checkLists-input" class="form-control rounder-2" name="checkLists" aria-describedby="add" />
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
    if (checkList !== '') {
      checkListsP.push(checkList);
      addcheckListElement(checkList);
      checkListsInput.val('');
    }
  });

  postForm.on('submit', function(event) {
    // Add the checkLists as hidden input fields to the form
    checkListsP.forEach(function(checkList) {
      var input = $('<input>').attr({
        type: 'hidden',
        name: 'checkLists[]',
        value: checkList
      });
      postForm.append(input);
    });
  });

  // Function to add a checkList element to the DOM
  function addcheckListElement(checkList) {
    var checkListElement = $('<div>').addClass('checkList pill-btn mx-1 bg-1').text(checkList);
    var removeBtn = $('<button>').addClass('remove-btn checkList-btn bg-2 mx-1').text('x');
    removeBtn.on('click', function(event) {
      event.preventDefault();
      removecheckListElement(checkListElement, checkList);
    });
    checkListElement.append(removeBtn);
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