<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Martel:wght@300;600;800&family=Trykker&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <style>

            .blog-header-titel{
                font-family: 'Abril Fatface';
                font-size: 1.8rem;
                text-transform: uppercase;
            }

            .login{
                font-family: 'Martel';
                padding-top: 0.8rem;
            }

            .sub-section{
                font-family: 'Martel';
                color: black;
            }
            .container{
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
            }

            .pre-title{
                font-family: 'Abril Fatface'
            }
            
            .pre-view{
                background-color:lightgray;

            }

            .pre-recipe{
                font-family: 'Trykker';
            }

            .pre-schedule{
                font-family: 'Trykker';
                font-weight: 900;
            }
            .pre-img{
                height: 50%;
            }
        </style>

    </head>
    <body>
        <div style='max-width:880px'  class="container">
            <header class="blog-header ">
                <div class="d-flex flex-row-reverse align-items-end">
                    <div class="login ">
                        <a class="btn btn-sm" href="/login">Logi sisse</a>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class=" text-left">
                        <a class="blog-header-titel text-nowrap text-dark" href="/">Logiraamat</a>
                    </div>
                </div>
            </header>
            <div class="d-flexi navi">
                <nav class="d-inline-flex justify-content-between">
                    <a class="p-2 sub-section" href="#">Sissekanded </a>
                    <a class="p-2 sub-section" href="#">Retseptid</a>
                    <a class="p-2 sub-section" href="#">Lingid</a>
                </nav>
            </div>
            <div class="content">
                <div class="preview">
                    <div class="d-inline-flex pre-title">Borodino leib</div>
                    <div class="mh-100 row justify-content-between pre-view">
                            <div class="col p-2 d-inline-flex pre-recipe">
                                Eeltaigen:<br>
                                200g rukki täistera jahu<br>
                                200g vett<br>
                                30g juuretist<br>

                                "pudding":<br>
                                25g rukki T630 jahu<br>
                                150g vett<br>
                            </div>
                            <div class="col p-2 d-inline-flex pre-schedule">
                                Kogu aeg: 2 päeva 3 tundi<br>
                                Tööaeg: 2 tundi<br>
                                Viimati küpsetatud: 30.02.2023
                            </div>
                            <div class="col p-2 d-inline-flex pre-img">
                                <img src="assets/img/brioche.jpg" class="img-fluid" alt="dummy image">
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
