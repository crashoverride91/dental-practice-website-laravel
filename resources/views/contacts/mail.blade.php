<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>
        Hello doctor, you have received 1 new contact.</h1>

        <ul>
             <li>{{$contact['name']}}</li>
             <li>{{$contact['email']}}</li>
             <li>{{$contact['phone']}}</li>
             <li>{{$contact['message']}}</li>

        </ul>

        <h2>Call him back soon!</h2>


</body>
</html>