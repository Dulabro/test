<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgba(218,218,218,1)
            }

            a{
            color: #111
            }

            .photo{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: block;
            }

            .photo img{
            width: 200px;
            height: 280px;
            object-fit: cover;
            filter: grayscale(100%) contrast(120%);
            box-shadow: 10px 15px 25px 0 rgba(0,0,0,.2);
            display: block;
            transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
            margin-top: -10px;
            }

            .photo:hover img{
            box-shadow: 1px 1px 10px 0 rgba(0,0,0,.1);
            }

            .photo .glow-wrap{
            overflow: hidden;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            margin-top: -10px;
            }

            .photo .glow{
            display: block;
            position:absolute;
            width: 40%;
            height: 200%;
            background: rgba(255,255,255,.2);
            top: 0;
            filter: blur(5px);
            transform: rotate(45deg) translate(-450%, 0);
            transition: all .5s cubic-bezier(0.645, 0.045, 0.355, 1);
            }

            .photo:hover .glow{
            transform: rotate(45deg) translate(450%, 0);
            transition: all 1s cubic-bezier(0.645, 0.045, 0.355, 1);
            }

            .photo:hover img,
            .photo:hover .glow-wrap{
            margin-top: 0;
            }

            h1{
            position: absolute;
            z-index: 1;
            transform: translate(-25%, -65%);
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            line-height: 1.2;
            }


            /* Ends */

            #author{
            font-family: Helvetica, Arial;
            text-transform: uppercase;
            font-size: 14px;
            text-decoration: none;
            position: fixed;
            bottom: 25px;
            left: 50%;
            transform: translateX(-50%);
            color: #888;
            }

            #author:hover{
            color: #111;
            }


            #about-me {
              display: inline-block;
              padding: 10px 20px;
           
              text-decoration: none;
              border-radius: 5px;
            }

            #back-btn {
              display: inline-block;
              padding: 10px 20px;

              text-decoration: none;
              border-radius: 5px;
            }

           
    </style>
</head>
<body>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<a href="#" class="photo">
  <h1>Sanabar Temirbek kyzy</h1>
    <img src="{{ asset('photo_2023-06-09_00-28-39.jpg') }}"/>
  <div class="glow-wrap">
    <i class="glow"></i>
  </div>
</a>


<a href="https://www.instagram.com/__sana_bar/" target="_blank" id="about-me" class="button">About me</a>
<br>

<a href="{{ url()->previous() }}" 
id="back-btn" class="button">Back</a>
</body>
</html>