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
        <div class="col-6">
            <h1>Gym Management</h1>
            <hr>
        </div>
        <div class="col-8">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Membership Type</th>
                    <th>Membership Expiration</th>
                    <th>Action Buttons</th>
                </thead>
                <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->membership_type }}</td>
                        <td>{{ $member->membership_expiration }}</td>
                        <td>
                                <a href="{{ route('edit', $member->id) }}" class="btn btn-success">edit</a>
                                <a href="{{ route('destroy', ['id' => $member->id]) }}" class="btn btn-danger">delete</a>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('welcome') }}" class="btn btn-secondary">Go back</a>
        </div>
        

    </div>
</body>
</html>