<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    Customer Register Page
    <hr>

    <form action="{{ route('customerPostTest', [10, 'code lab']) }}" method="post">
        @csrf
        Name : <input type="text" name="userName"><br><br>
        Age : <input type="number" name="userAge"><br><br>
        Address : <input type="text" name="userAddress"><br><br>
        Gender :
        <select name="userGender">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select><br><br>
        <input type="submit" value="Save">
    </form>
</body>

</html>
