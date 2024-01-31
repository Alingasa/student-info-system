@extends('dashboard.homedashboard.home')

@section('content')

           <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <i class="material-symbols-outlined">
                            list
                        
                            </i>
                        

                 
                    </div>
                
                    @if(auth()->user()['role'] == 'Admin' || auth()->user()['role'] == 'Teacher')
                    <div class="col-md-6 col-12 text-right">
                        <a href="{{ route('subject.create') }}" class="btn btn-sm btn-primary">Add Subject</a>
                    </div>
                    @endif
                </div>
            </div>
            <div class="table-responsive">
                <br>
                @foreach ($subject as $sub)
               <p class="p-2 text-danger">{{'Page #'. ++$i}}</p>
                <h5 class="p-2">{{ $sub->course->name. ': ' . $sub->year. '  Year  '}}</h5>
                <h6 class="p-2">{{'Date: '. $sub->start_date}}</h6>
                <h5 class="p-2 text-danger">{{'Semester: '. $sub->semester}}</h5>
                <form action="{{ route('subject.destroy',$sub->id) }}" method="POST">
                 
                  
                  
                    @csrf
                    @method('DELETE')
      
   
@if($sub->course->name == 'BSIT' && $sub->year == '1st' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 101</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Mr. Arniel P. Viscara</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 100</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Jessrey O. Taghoy</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolonia B. Suarez</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 101</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Alberto B. Rosete</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 101</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mrs Analyn G. Regaton</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '1st' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Geography</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>Literature</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Basic Computer</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '1st' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '1st' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSIT' && $sub->year == '1st' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 100</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Jessrey O. Taghoy</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Mr. Arniel P. Viscara</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolonia B. Suarez</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 101</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Alberto B. Rosete</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 101</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mrs Analyn G. Regaton</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '1st' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
 
</tr>
<tr>
    <td>2</td>
    <td>PC 100</td>
    <td>Basic Computer</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 200</td>
    <td>Geography</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>Gen.Ed. 101</td>
    <td>Literature</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '1st' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
 
</tr>
<tr>
    <td>2</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '1st' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
 
</tr>
<tr>
    <td>2</td>
    <td>PC 100</td>
    <td>Computer Programming</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>Gen.Elec.</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
  
</tr>
<tr>
    <td>5</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSIT' && $sub->year == '2nd' && $sub->semester == 'First_Semester')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Subject Name</th>
                <th>Section</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PE 204</td>
                <td>Physical Activities Towards Health & Fitness</td>
                <td>A</td>
                <td>Mr. Alberto B. Rosete</td>
            </tr>
            <tr>
                <td>2</td>
                <td>IT ELEC 101</td>
                <td>Human-Computer Interaction</td>
                <td>A</td>
                <td>Ms. Ma. Wennilou Z. Porazo</td>
            </tr>
            <tr>
                <td>3</td>
                <td>PC 109</td>
                <td>Fundamentals of Digital Logic Design</td>
                <td>A</td>
                <td>Ms. Ma. Wennilou Z. Porazo</td>
            </tr>
            <!-- Add more rows as needed -->
            <tr>
                <td>4</td>
                <td>PC 108</td>
                <td>Data Structure and Algorithm</td>
                <td>A</td>
                <td>Mr. Elmer P. Datolayta</td>
            </tr>
            <tr>
                <td>5</td>
                <td>PC 107</td>
                <td>Object-Oriented Programming</td>
                <td>A</td>
                <td>Mr. Marnito I. Mahinlo</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <p class="p-1">Total: 5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '2nd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Elec. 201</td>
    <td>Understanding your Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 202</td>
    <td>Natural Sciences</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Ethics</td>
    <td>A</td>
    <td>Mr. Roberto F. Aguinaldo</td>
   
</tr>
<tr>
    <td>4</td>
    <td>CC 105</td>
    <td>Discrete Mathematics</td>
    <td>A</td>
    <td>Mr. Jerwin Z. Calipid</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Basic Computing 2</td>
    <td>A</td>
    <td>Mr. Francisco X. Balagtas</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '2nd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Trigonometry</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '2nd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Basic Programming</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSIT' && $sub->year == '2nd' && $sub->semester == 'Second_Semester')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Subject Name</th>
                <th>Section</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PC 108</td>
                <td>Data Structure and Algorithm</td>
                <td>A</td>
                <td>Mr. Elmer P. Datolayta</td>
            </tr>
            <tr>
                <td>2</td>
                <td>IT ELEC 101</td>
                <td>Human-Computer Interaction</td>
                <td>A</td>
                <td>Ms. Ma. Wennilou Z. Porazo</td>
            </tr>
            <tr>
                <td>3</td>
                <td>PC 107</td>
                <td>Object-Oriented Programming</td>
                <td>A</td>
                <td>Mr. Marnito I. Mahinlo</td>

            </tr>
            <!-- Add more rows as needed -->
            <tr>
                <td>4</td>
                <td>PE 204</td>
                <td>Physical Activities Towards Health & Fitness</td>
                <td>A</td>
                <td>Mr. Alberto B. Rosete</td>

            </tr>
            <tr>
                <td>5</td>
                <td>PC 109</td>
                <td>Fundamentals of Digital Logic Design</td>
                <td>A</td>
                <td>Ms. Ma. Wennilou Z. Porazo</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    <p class="p-1">Total: 5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '2nd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 202</td>
    <td>Natural Sciences</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Elec. 201</td>
    <td>Understanding your Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Ethics</td>
    <td>A</td>
    <td>Mr. Roberto F. Aguinaldo</td>
   
</tr>
<tr>
    <td>4</td>
    <td>CC 105</td>
    <td>Discrete Mathematics</td>
    <td>A</td>
    <td>Mr. Jerwin Z. Calipid</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Basic Computing 2</td>
    <td>A</td>
    <td>Mr. Francisco X. Balagtas</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '2nd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 200</td>
    <td>Trigonometry</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '2nd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Basic Programming</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif
   
@if($sub->course->name == 'BSIT' && $sub->year == '3rd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
         
          
        </tr>
    </thead>
    <tbody>
        <!-- Add your specific data rows here based on the conditions -->
        <!-- Example data: -->
        <tr>
            <td>1</td>
            <td>IT ELEC 102</td>
            <td>Web Systems and Technology</td>
            <td>A</td>
            <td>Mr. Mark Joseph C. Gigante</td>
           
        </tr>
        <tr>
            <td>2</td>
            <td>PC 114</td>
            <td>Database System 2</td>
            <td>A</td>
            <td>Mr. Marnito I. Mahinlo</td>
            
        </tr>
        <tr>
            <td>3</td>
            <td>PC 112</td>
            <td>Information Management</td>
            <td>A</td>
            <td>Mr. Rosendo Resuelo</td>
           
        </tr>
        <tr>
            <td>4</td>
            <td>CC 106</td>
            <td>Research Methods for IT</td>
            <td>A</td>
            <td>Mr. Gilbert B. David</td>
          
        </tr>
      
       
        <!-- Add more rows as needed -->
    </tbody>
</table>
<p class="p-1">Total: 4 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '3rd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>anthropology</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Enhancement</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '3rd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '3rd' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>marketing</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSIT' && $sub->year == '3rd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
         
          
        </tr>
    </thead>
    <tbody>
        <!-- Add your specific data rows here based on the conditions -->
        <!-- Example data: -->
        <tr>
            <td>1</td>
            <td>PC 112</td>
            <td>Information Management</td>
            <td>A</td>
            <td>Mr. Rosendo Resuelo</td>
           
        </tr>
        <tr>
            <td>2</td>
            <td>PC 114</td>
            <td>Database System 2</td>
            <td>A</td>
            <td>Mr. Marnito I. Mahinlo</td>
            
        </tr>
        <tr>
            <td>3</td>
            <td>IT ELEC 102</td>
            <td>Web Systems and Technology</td>
            <td>A</td>
            <td>Mr. Mark Joseph C. Gigante</td>
           
        </tr>
        <tr>
            <td>4</td>
            <td>CC 106</td>
            <td>Research Methods for IT</td>
            <td>A</td>
            <td>Mr. Gilbert B. David</td>
          
        </tr>
      
       
        <!-- Add more rows as needed -->
    </tbody>
</table>
<p class="p-1">Total: 4 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '3rd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    td>Gen.Ed. 102</td>
    <td>anthropology</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
 
</tr>
<tr>
    <td>2</td>
    <td>PC 100</td>
    <td>Computer Enhancement</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '3rd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '3rd' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>marketing</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSIT' && $sub->year == '4th' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
         
          
        </tr>
    </thead>
    <tbody>
        <!-- Add your specific data rows here based on the conditions -->
        <!-- Example data: -->
        <tr>
            <td>1</td>
            <td>IT ELEC 102</td>
            <td>Web Systems and Technology</td>
            <td>A</td>
            <td>Mr. Mark Joseph C. Gigante</td>
           
        </tr>
        <tr>
            <td>2</td>
            <td>PC 114</td>
            <td>Database System 2</td>
            <td>A</td>
            <td>Mr. Marnito I. Mahinlo</td>
            
        </tr>
        <tr>
            <td>3</td>
            <td>PC 112</td>
            <td>Information Management</td>
            <td>A</td>
            <td>Mr. Rosendo Resuelo</td>
           
        </tr>
        <tr>
            <td>4</td>
            <td>CC 106</td>
            <td>Research Methods for IT</td>
            <td>A</td>
            <td>Mr. Gilbert B. David</td>
          
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
<p class="p-1">Total: 4 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '4th' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '4th' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '4th' && $sub->semester == 'First_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial (Comprehend)</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSIT' && $sub->year == '4th' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
         
          
        </tr>
    </thead>
    <tbody>
        <!-- Add your specific data rows here based on the conditions -->
        <!-- Example data: -->
        <tr>
            <td>1</td>
            <td>CC 106</td>
            <td>Research Methods for IT</td>
            <td>A</td>
            <td>Mr. Gilbert B. David</td>
           
        </tr>
        <tr>
            <td>2</td>
            <td>PC 114</td>
            <td>Database System 2</td>
            <td>A</td>
            <td>Mr. Marnito I. Mahinlo</td>
            
        </tr>
        <tr>
            <td>3</td>
            <td>PC 112</td>
            <td>Information Management</td>
            <td>A</td>
            <td>Mr. Rosendo Resuelo</td>
           
        </tr>
        <tr>
            <td>4</td>
            <td>IT ELEC 102</td>
            <td>Web Systems and Technology</td>
            <td>A</td>
            <td>Mr. Mark Joseph C. Gigante</td>
          
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>
<p class="p-1">Total: 4 Subjects</p>
@endif

@if($sub->course->name == 'BSED-SS' && $sub->year == '4th' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
   
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>5</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>

</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BSED-MATH' && $sub->year == '4th' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
 
</tr>
<tr>
    <td>2</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
   
</tr>
<tr>
    <td>4</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
  
</tr>
<tr>
    <td>5</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif

@if($sub->course->name == 'BEED' && $sub->year == '4th' && $sub->semester == 'Second_Semester')
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Code</th>
            <th>Subject Name</th>
            <th>Section</th>
            <th>Instructor</th>
        </tr>
    </thead>
    <tbody>
<tr>
    <td>1</td>
    <td>PC 100</td>
    <td>Computer Programming 1</td>
    <td>A</td>
    <td>Mr. Francisco S. Amorsolo</td>
 
</tr>
<tr>
    <td>2</td>
    <td>PE 116</td>
    <td>Movement Enhancement</td>
    <td>A</td>
    <td>Mr. Mary Ann G. Viscara</td>
  
</tr>
<tr>
    <td>3</td>
    <td>Gen.Ed. 102</td>
    <td>Readings In Philippine History</td>
    <td>A</td>
    <td>Dr. Apolinaryo B. Mabini</td>
   
</tr>
<tr>
    <td>4</td>
    <td>Gen.Ed. 101</td>
    <td>English Grammar Remedial (Comprehend)</td>
    <td>A</td>
    <td>Mr. Isreal D. Ferre</td>
  
</tr>
<tr>
    <td>5</td>
    <td>Gen.Ed. 200</td>
    <td>Understanding the Self</td>
    <td>A</td>
    <td>Ms. Elisca Mae M. Fermano</td>
   
</tr>
</tbody>
</table>
<p class="p-1">Total:  5 Subjects</p>
@endif
@if(auth()->user()->role == "Admin"|| auth()->user()->role == "Teacher")
<div style="padding-left: 94%;"><a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target="#deleteModal_{{ $sub->id }}" >Delete</a>
    @include('components.subject.modal.deletemodal', ['sub' => $sub])</div> 
    @endif    
</form>
                @endforeach
         
             <div class="p-3">{{$subject->links()}}</div>     
            </div>
           
          </div>
       
          @include('components.subject.jsearch.js')
          @include('layout._footer')
@endsection
