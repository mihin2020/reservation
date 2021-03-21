<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro deleniti reiciendis adipisci veniam id tempora commodi. Quidem a modi molestias reiciendis, reprehenderit molestiae magni nesciunt vel quasi at, nobis neque!

@foreach($programs as $program)
   <li>{{$program->date}} </li> 
@endforeach
</p>
</body>
</html>