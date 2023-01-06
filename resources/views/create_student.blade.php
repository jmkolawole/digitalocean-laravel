<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
    <link rel="stylesheet" href={{ asset('style.css') }}>
</head>
<body>
    <div class="wrapper">
        <h1 class="center">Add New Student</h1>

        <form class="form" method="POST" action={{ route('save') }}>
            {{ csrf_field() }}
            <input name="name" type="text" class="form-control" placeholder="Student Name">
            <input name="age" type="number" class="form-control">
            <input name="email" type="email" class="form-control" placeholder="Email">

            <button class="button" type="submit">
                Submit
            </button>

        </form>

        <div class="link"><a href={{ route('/') }}>Back to Students</a></div>
    </div>
    
    
</body>
</html>