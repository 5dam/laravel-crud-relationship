<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col-4">
            <h1>Gym Management</h1>
            <hr>
        </div>
        <div class="col-4 d-flex gap-3">
            <a href="{{ route('index') }}" class="btn btn-success">Show members</a>
            <a href="{{ route('create') }}" class="btn btn-primary">Create New Member</a>
        </div>
    </div>
</body>
</html>