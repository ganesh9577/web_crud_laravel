<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            border: 2px solid powderblue;
            padding: 30px;
            margin-right: 84%;
        }
    </style>
</head>
<body>
    <h1>&nbsp&nbsp&nbsp update Details</h1>
    <form action="/edit/{{$data['id']}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter name" value="{{$data['name']}}"><br><br>
        <input type="text" name="number" placeholder="enter number" value="{{$data['number']}}"><br><br>
        <input type="text" name="email" placeholder="enter email" value="{{$data['email']}}"><br><br>
        <input type="text" name="city" placeholder="enter city" value="{{$data['city']}}"><br><br>
        <button type="submit" name="submit">save</button>
     </form>
</body>
</html>