@include('common.html-start')
@include('common.nav')

<body>
    <h1> <?= $owner->first_name .' '. $owner->surname ?></h1>
<div class="address">
       Address: {{ $owner->address }}
</div>
<div class="phone">
       Phone number: {{ $owner->phone }}
</div>
<div class="email">
       Email: {{ $owner->email }}
</div>
Registered animals: 
@foreach($owner_animal as $animal) 
<a href="/animals/{{$animal->id}}">{{ $animal->name }}</a>
@endforeach
</div>

@include('common.html-end')