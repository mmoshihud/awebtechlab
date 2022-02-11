<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="header">
        <a href="/student/list">List</a>
        <a href="/student/create">Create</a>
        <a href="/student/get">Get</a>
    </div>
    @yield('content')
    @yield('demo2')
    <div id="footer">
        &copy adv. web tech
    </div>
</body>
</html>