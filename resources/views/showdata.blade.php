<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}

    <title>Document</title>
    <style>
    .button {
            background-color: rgb(240, 97, 97); /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
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
    body{
            background-image: url("d.jpg");
            background-repeat: no-repeat;
            /* background-size: auto; */
            background-size: 1500px 750px;
        }
    th{
        background-color: rgb(116, 114, 114);
    }
    </style>
</head>
<body>
    <h1 style="align-items: center;margin-left:15%;border:1ch">Show Data</h1>
    <table border="1 black">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>number</th>
            <th>email</th>
            <th>city</th>
            <th colspan="2">option</th>
        </tr>
        @foreach ($datas as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['number']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['city']}}</td>
            <td><button class="button"><a href="/delete/{{$item['id']}}">delete</a></button></td>
            <td><button class="button2"><a href="/update/{{$item['id']}}">update</a></button></td>
        </tr>
        @endforeach

    </table>
</body>
</html>