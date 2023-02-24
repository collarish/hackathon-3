@include('common.html-start')

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
   
@include('common.html-end')