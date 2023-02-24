<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>owner detaail</title>
</head>
<body>
    <h1> <?= $owner->first_name .' '. $owner->surname ?></h1>
<div class="address">
       Address: {{ $owner->address }}
</div>
<div class="phone">
       Phone number: {{ $owner->phone }}
</div>
<div class="Email">
       Email: {{ $owner->email }}
</div>
</body>
</html>