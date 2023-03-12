<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-image: url("d.jpg");
            background-repeat: no-repeat;
            /* background-size: auto; */
            background-size: 1500px 750px;
        }
        form{
            border: 2px solid powderblue;
            padding: 30px;
            margin-right: 84%;
        }
        .button2{
            background-color: rgb(97, 240, 121); /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
    }
    </style>
</head>
<body>
    <h1 class="button2" style="margin-left: 2.5%">Enter Details</h1>
    <form action="/show" method="get">
        @csrf
        <input type="text" name="name" placeholder="enter your name!"><br><br>
        <input type="text" name="number" placeholder="enter your number !"><br><br>
        <input type="text" name="email" placeholder="enter your email !"><br><br>
        <input type="text" name="city" placeholder="enter your city !"><br><br>
        <button type="submit" name="submit" class="button2">save</button>
     </form>
</body>
</html>