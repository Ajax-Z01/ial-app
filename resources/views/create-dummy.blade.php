<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('create-dummy') }}" method="POST">
        @csrf
        <input type="text" name="data_dummy" placeholder="data dummy">
        <!-- Tambahkan field lain sesuai kebutuhan -->
        <button type="submit">Submit</button>
    </form>    
</body>
</html>