<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
           Age:  <?=$animal->age?>
        </li>
         <li>
            Weight:<?=$animal->weight?>
        </li>
    </ul>

    <img src="/images/pets/{{ $animal_owner->path }}">

    <a href="owner/detail/{{ $animal_owner->owner_id}}">{{ $animal_owner->first_name }} {{ $animal_owner->surname }}</a>

    <a href="{{$animal->id}}/edit">Edit</a>
   
    
</body>
</html>