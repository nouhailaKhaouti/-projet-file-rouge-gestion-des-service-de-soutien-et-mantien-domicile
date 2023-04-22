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
</head>

<body>

    <div class="wrapper">
        <form action="{{url('Freelancer_create')}}">
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
</body>