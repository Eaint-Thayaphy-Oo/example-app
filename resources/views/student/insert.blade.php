<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Student Insert Page
    <form action="{{route('studentInsert')}}" method="post">
        @csrf
        Name: <input type="text" name="studentName" required><br>
        Address: <textarea name="studentAddress" cols="30" rows="10" required></textarea><br>
        Phone: <input type="number" name="studentPhone" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
