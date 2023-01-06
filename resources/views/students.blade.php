<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link rel="stylesheet" href={{ asset('style.css') }}>
</head>
<body>
    
    <div class="wrapper">
    
        <div class="header-section">
        <h1>All Students</h1>
        <a href={{ route('create') }} class="button">Add new Student</a>
    </div>

    @foreach ($students as $student)
    <div class="student-container">
      <span class="id">
          {{ $student->id }}
       </span>

      <span class="name">
        {{ $student->name }}
      </span>

      <span class="age">
        {{ $student->age }}
      </span>

      <span class="email">
        {{ $student->email }}
      </span>
  </div>

    @endforeach
</div>
</body>
</html>