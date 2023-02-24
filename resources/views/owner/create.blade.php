
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>add new owner</h1>
    @include('common/messages')
<form action="{{ route('owner.insert') }}" method="post">
    @csrf
        First name:<input type="text" name="first_name" id="">
        <br>
        Last name:<input type="text" name="surname" id="">
        <br>
        Email:<input type="text" name="email" id="">
        <br>
        Phone:<input type="text" name="phone" id="">
        <br>
        Address:<input type="text" name="address" id="">
        <br>
        <button>submit</button>
</form>
</body>
</html>