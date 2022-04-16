<ul>
    <li>{{$classroom->name}}</li>
</ul>
<br>
<ul>
    @foreach ($classroom->homeworkTeachers as $homeworkTeacher)
        <li>{{$homeworkTeacher->name}}</li>
    @endforeach
</ul>
<br>
<ul>
    @foreach ($classroom->students as $student)
        <li>{{$student->name}}</li>
    @endforeach

</ul>