<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


  

 <h1>Detail of Dog <?=$animal->name?></h1>
  <ul>

        <li>
           Name: <?=$animal->name?>
        </li>
        <li>
           Breed:  <?=$animal->breed?>
        </li>
        <li>
           Age:  <?=$animal->age?> years
        </li>
         <li>
            Weight: <?=$animal->weight?> kg
        </li>
    </ul>

    <img class="dog-img" src="/images/pets/{{ $animal_owner->path }}"> <br>

    Owner: <a href="../owner/detail/{{ $animal_owner->owner_id}}">{{ $animal_owner->first_name }} {{ $animal_owner->surname }}</a> <br>

    <a href="{{$animal->id}}/edit">Edit</a>
   
    
</body>
</html>