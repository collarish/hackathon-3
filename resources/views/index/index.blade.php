@foreach ($animals_owners as $animals_owner)
    <div class="dog-info">
        <img src="images/pets/{{ $animals_owner->path}}">
        {{ $animals_owner->name }}
        {{ $animals_owner->breed }}
        {{ $animals_owner->age }} years
        {{ $animals_owner->weight }} kg
        <a href="animals/{{$animals_owner->id}}">Edit dog</a>
    </div>
    <div class="owner-info"> 
        Owner:
        {{ $animals_owner->first_name . " " . $animals_owner->surname }} 
        {{ $animals_owner->email }}
        {{ $animals_owner->phone }}
        {{ $animals_owner->address }}
        <a href="owner/detail/{{$animals_owner->id}}">Edit owner</a>
    </div>
    <hr>
@endforeach

{{-- Animals:
@foreach ($animals as $animal)
    <li>{{ $animal->name }} </li> 
@endforeach

Owners:
@foreach ($owners as $owner)
    <li>{{ $owner->first_name }} </li> 
@endforeach

@foreach ($owners as $owner)
    <li>{{ $owner->first_name }} </li> 
@endforeach --}}

