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
           Age:  <?=$animal->age?>
        </li>
         <li>
            Weight:<?=$animal->weight?>
        </li>
    </ul>

    <img src="/images/pets/{{ $animal_owner->path }}">

    Owner: <a href="../owner/detail/{{ $animal_owner->owner_id}}">{{ $animal_owner->first_name }} {{ $animal_owner->surname }}</a>

    <a href="{{$animal->id}}/edit">Edit</a>
   
@include('common.html-end')