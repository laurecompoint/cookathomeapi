<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .fondimage{
                background-image: url("images/cookathomevideo.png") ;
                background-size: 1440px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
                color: white;
            }

            
            .m-b-md {
                margin-bottom: 30px;
            }
            .prototype{
                background-color: #fff;
                width: 100%;
                
            }
        </style>
    </head>
    <body class="fondimage">
        <div class="flex-center position-ref full-height">
          

            <div class="content">
            <h2 class="" style="margin-right: 50px; color: #ffffff">Prototype - CookAtHome - Laure Compoint</h2>

            <div class="">
            <video controls width="300" height="600" style="margin-right: 50px" >

            <source src="/videos/prototype.mov"
                    type="video/webm">

            <source src="/videos/prototype.mov"
                    type="video/mp4">

            Sorry, your browser doesn't support embedded videos.
            </video>

            </div>
               

               
            </div>
        </div>
    </body>
</html>
