<ul>
    <li>{{$classroom->name}}</li>
</ul>

<ul>
    <li><span>wali kelas : </span>{{$classroom->homeworkTeacher->name}}</li>
</ul>
<ul>
    @foreach ($classroom->students as $student)
    <li><span>siswa: {{$student->name}}</span></li>
        
    @endforeach
</ul>
