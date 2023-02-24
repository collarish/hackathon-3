@include('common.html-start')
@include('common.nav')

    <h1>Edit an animal</h1>

    {{-- {{ route('animals.update') }} --}}
@if(is_null($animal->id))
<form action="{{ route('animals.insert') }}" method="post">
    @else
    <form action="{{ route('animals.update', $animal->id ) }}" method="post">
@endif
        @method('PUT')

        @csrf

        <label for="name">Name: </label> <br>
         <input type="text" name="name" id="name" value="{{  $animal->name }}"> <br>
         <label for="breed">Breed: </label> <br>
         <input type="text" name="breed" id="breed" value="{{  $animal->breed }}"> <br>
         <label for="age">Age: </label> <br>
         <input type="text" name="age" id="age" value="{{  $animal->age }}"> <br>
         <label for="weight">Weight: </label> <br>
         <input type="text" name="weight" id="weight" value="{{  $animal->weight }}"> <br>

         <button>Edit</button>
    
    </form>

    
</body>
</html>