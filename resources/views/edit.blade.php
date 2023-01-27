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
            <h1>Create New Member</h1>
            <hr>
            @if (session('success'))
            <div class="alert alert-success my-3" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </div>
        <div class="col-6">
        <form method="POST" action="{{ route('update') }}">
            @csrf
            <div class="form-group">
                <label for="name">Enter Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $members->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Enter Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $members->email }}" required>
            </div>
            <div class="form-group">
                <label for="membership_type">Membership Type</label>
                <input type="text" class="form-control" id="membership_type" name="membership_type" value="{{ $members->membership_type }}" required>
            </div>
            <div class="form-group">
                <label for="membership_expiration">Membership Expiration</label>
                <input type="date" class="form-control" id="membership_expiration" name="membership_expiration" value="{{ $members->membership_expiration }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Submit</button>
            <a href="{{ route('welcome') }}" class="btn btn-secondary mt-5 float-end">Go Back</a>
        </form>
        </div>
    </div>
</body>
</html>