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
           Species: <?=$animal->species?>
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

   
    
</body>
</html>