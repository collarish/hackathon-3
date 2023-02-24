@include('common.html-start')
@include('common.nav')
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