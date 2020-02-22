<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Arial', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .header{
                background-color: #eeeeee;
                height:150px;
                position:relative;
            }
            .site-name{
                position:absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                width:40%;
                height:50%;
            }
            .main-body{
                max-width:800px;
                margin-left:auto;
                margin-right:auto;
                margin-top:40px;
            }

            nav{
                height:32px;
                background-color:#ea6a5b;
                width:100%;
                padding-top:10px;
            }
            .nav-link{
                padding: 10px 16px;
                font-size:12px;
                font-weight: 700;
                color:#ffffff;
                text-decoration:none;
            }
            .car-details{
                padding:18px;
            }

            .form-input label{
                width: 145px;
                display: inline-block;
            }

            button{
                height: 32px;
                width:150px;
                background-color:#ea6a5b;
                color:#ffffff;
            }

            .cars img{
                margin-top:auto;
                margin-bottom:auto;
                padding:30px;
            }

            .page-name{
                text-align:center;
            }

            .content{
                width:66%;
            }

            .main-content div{
                display: block!important;
            }

            .paint-job .content table{
                border-collapse: collapse;
            }
            .content table th{
                text-align: left;
                background-color: #e8e8e8;
            }
            table, th, td {
                border: 1px solid #e8e8e8;
            }
            .side-content{
                width:33%;
            }

            .side-content table{
                margin-left:auto;
                border-collapse: collapse;
            }

            .side-content table th{
                background-color:#ea6a5b;
                color: #ffffff;
            }
            table{
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <div class="container main-body">
            <header class="header">
                <h1 class="site-name">JUAN'S AUTO PAINT</h1>
            </header>
            <nav class="nav">
                <a class="nav-link active" href="/">NEW PAINT JOB</a>
                <a class="nav-link disabled" href="/paint-job/">PAINT JOBS</a>
            </nav>
            <section class="main-content">
            @yield('content')
            </section>
        </div>
        @yield('footer')
    </body>
</html>
