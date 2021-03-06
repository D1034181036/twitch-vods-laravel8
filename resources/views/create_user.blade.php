<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Create User</title>
</head>
<body>
    <div class="container">
        <div class="mt-5 d-flex justify-content-center">
            <form action="/create_user" method="POST">
                @csrf
                <div class="form-group">
                    <label>username:</label>
                    <input class="form-control" type="text" name="username" required>
                </div>
                <div class="form-group">
                    <label>code:</label>
                    <input class="form-control" type="password" name="code" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary mt-2" type="submit" value="Enter">
                </div>
                <div class="form-group mt-2">
                    <ul>
                        @if (session('banner'))
                            <li>{{ session('banner') }}</li>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </form>
        </div>
    </div>
</body>
</html>