<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact List</title>
 
    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"/>
</head>
<body>
 
<div class="container">
 
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Laravel CRUD Practice</a>
            </div>
            <ul class="nav navbar-nav">
 
            </ul>
        </div>
    </nav>
 
    <head>
        <h1></h1>
    </head>
 
    @yield('content')
 
</div>
</body>
</html>