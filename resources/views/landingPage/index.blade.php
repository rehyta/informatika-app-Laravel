<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informatika | {{ $title }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Poppins';
            padding: 0;
            margin: 0;
        }
        .header h1{
            font-size: 30px;
            text-align: center
        }
        .header p{
            font-size: 16px
        }
        .btn{
            background-color: #ee4872;
            color: white;
            width: 125px;
            height: 50px;
        }
        .btn:hover{
            background-color: #fdad42;
            color: white;
        }
        #left img{
            width: 110%;
        }
    </style>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col" id="left">
                <img src="{{ URL('img\welcome-page.png') }}" alt="Web Informatika logo">
            </div>

            <div class="col" id="right" style="padding-top:25vh">
                <div class="header">
                    <h1><b>Selamat datang</b></h1>
                    <h1 style="font-size: 25px">di media belajar pemrograman dasar</h1>
                    <p>Belajar <i>ngoding</i> dimanapun dan kapanpun, dilengkapi dengan tutorial dan live code yang mudah dipahami</p>
                </div>
                <div class="d-grid m-5 d-md-block col-6 mx-auto">
                    <a class="btn-link"  href="/login">
                        <button class="btn" >Login</button>
                    </a>
                    <a class="btn-link" href="/register">
                        <button class="btn" >Register</button>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>