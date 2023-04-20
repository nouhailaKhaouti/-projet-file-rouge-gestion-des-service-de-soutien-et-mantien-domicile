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
        <form action="">
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
                                <select name="category_id" id="category" class="form-control" require>
                                    <option value="">---Services---</option>
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
                    <div class="form-header" id="adresse_item">
                        <div class="group" style="margin-left: 4px;">
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
                    <button type="button" class="pill-btn" id="add_adresse_btn" onclick="hi()" style="  background-color: #f4c4ec;">Add new Location</button>
                </section>
                <h4></h4>
                <section>
                    <div class="form-row" id="phone_item">
                        <div class="form-holder flex">
                            <input type="text" class="form-control" name="label[]" placeholder="phone number" />
                            <button class="btn remove_item_btn pill-btn" style="  background-color: #f4c4ec;">x</button>
                        </div>
                    </div>
                    <button type="button" class="pill-btn" id="add_phone_btn" style="background-color: #acc4f4;">Add telephone contact</button>
                </section>
            </div>
        </form>
    </div>
    <script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/jquery-3.3.1.min.js"></script>
    <script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/jquery.steps.js"></script>
    <script src="https://colorlib.com/etc/bwiz/colorlib-wizard-6/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let addItemBtn = document.querySelector("#add_adresse_btn");
            console.log(addItemBtn);
            function hi(){
                console.log('hi');
            }
            addItemBtn.addEventListener("click", function(e) {
                e.preventDefault();
                
                let showItem = document.querySelector("#adresse_item");
                showItem.innerHTML += `
                        <div class="group" style="margin-left: 4px;">
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
                        `;
                // showItem.insertBefore(newDiv, showItem.firstChild);
            });
            let addPhoneBtn = document.querySelector("#add_phone_btn");
            addPhoneBtn.addEventListener("click", function(e) {
                e.preventDefault();
                let showItem = document.querySelector("#adresse_item");
                showItem.innerHTML += `
                <div class="form-holder flex">
                        <input type="text" class="form-control" name="label[]" placeholder="phone number" />
                        <button class="btn remove_item_btn pill-btn" style="  background-color: #f4c4ec;" >x</button>
                </div>
                    `;
                // showItem.insertBefore(newDiv, showItem.firstChild);
            });
            document.addEventListener("click", function(e) {
                if (e.target.classList.contains("remove_item_btn")) {
                    e.preventDefault();
                    let rowItem = e.target.parentNode;
                    rowItem.parentNode.removeChild(rowItem);
                }
            });
        });
    </script>

</body>