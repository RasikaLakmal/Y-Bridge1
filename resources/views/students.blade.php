<!DOCTYPE html>
<htnl lang="en">
<head>
    <title>Students</title>
</head>
<body>
    <h1>All Students</h1>
    @foreach($students as $student)
    <h3>{{$student->title}}</h3>
    <p>{{$student->body}}</p>
    @foreach
</body>
</html>
