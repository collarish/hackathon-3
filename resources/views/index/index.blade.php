@include('common.html-start')

@foreach ($animals_owners as $animals_owner)
    <div class="animal-container">
        <img src="/images/pets/{{ $animals_owner->path}}">
        <div class="dog-info">
            <div class="dog-name">{{ $animals_owner->name }}</div>
            <div>{{ $animals_owner->breed }}</div>
            <div>{{ $animals_owner->age }} years</div>
            <div>{{ $animals_owner->weight }} kg</div>
            <a href="animals/{{$animals_owner->id}}">Edit dog</a>
        </div>
        <div class="owner-info"> 
            <div>Owner: {{ $animals_owner->first_name . " " . $animals_owner->surname }} </div>
            <div>{{ $animals_owner->email }}</div>
            <div>{{ $animals_owner->phone }}</div>
            <div>{{ $animals_owner->address }}</div>
            <a href="owner/detail/{{$animals_owner->owner_id}}">Edit owner</a>
        </div>
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

@include('common.html-start')


