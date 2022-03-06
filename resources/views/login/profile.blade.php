<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hi, {{ session('username') }}</h1>
    <a href="/student/list">Home</a>
    <p id="demo"></p>

    <script>
        let text = "";
        const fruits = ["apple", "orange", "cherry"];
        fruits.forEach(myFunction);

        document.getElementById("demo").innerHTML = text;

        function myFunction(item, index) {
            text += index + ": " + item + "<br>";
        }
    </script>
</body>

</html>
