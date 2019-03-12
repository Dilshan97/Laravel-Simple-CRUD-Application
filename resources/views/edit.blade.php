<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="{{route('student.update', $student->id)}}" method="POST">
                    {{ csrf_field() }}

                    {{ method_field('PUT') }}
                    
                    <input type="text" name="name" id="name" value="{{$student->name}}" placeholder="Student Name"><br><br>
                    <input type="email" name="email" id="email" value="{{$student->email}}" placeholder="E-mail"><br><br>
                    <input type="text" name="town" id="town" value="{{$student->town}}" placeholder="Town"><br><br>

                    <button type="submit">Update student</button>
                </form>
            </div>
        </div>


        
    </div>
</body>
</html>