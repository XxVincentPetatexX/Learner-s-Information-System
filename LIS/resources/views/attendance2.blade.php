@extends('layouts.app4')
@section('content')

<link rel="stylesheet" href="css/dropdown.css">
<link rel="stylesheet" href="css/attendance.css">
<link rel="stylesheet" href="css/attendance.css">

<h1><p>Daily Attendance Report of Learners</p></h1>
<center><h2><p>DepEd School</p></h2></center>
<center><h2><p>Status of the Students<p></h2></center>

  <section class="container">
<div class="row">


    <div class="dropdown dropdown-dark" class="col-sm-3">
      <select name="two" class="dropdown-Subject Code">
        <option value="">F11…</option>
      </select>
    </div>

  <div class="dropdown dropdown-dark" class="col-sm-6">
    <select name="two" class="dropdown-Grade Level">
      <option value="">Grade 11…</option>
    </select>
  </div>

  <div class="dropdown dropdown-dark">
    <select name="two" class="dropdown-Section">
      <option value="">ICT 11…</option>
    </select>
  </div>
<div class="dropdown dropdown-dark">
  <select name="two" class="dropdown-dd/mm/yy">
    <option value="">1/2/2017…</option>
  </select>
</div>
</section>
</div>
<table class="Daily-Attendance-Report-of-Learners">
  <br>
  <br>
		<thead>
		<tr>
			<th>Learner's Name</th>
			<th>Present</th>
			<th>Absent</th>
			<th>Late</th>
			<th>Cutting</th>

		</tr>
		</thead>
		<tbody>

		<tr>
			<td>Ano,Joyet Potot</td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
		</tr>
    <tr>
			<td>Apole, Ezekiel Morales</td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
		</tr>
    <tr>
			<td>Areglo, Ronald Luna</td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
		</tr>
    <tr>
			<td>Bacurin, Jericho Bongares</td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
		</tr>
		<tr>
			<td>Balaguer, Friddy Mangaran</td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>
			<td><input type="checkbox"></td>



		</tr>





    </body>
		</tbody>
	</table>
  <br>
  <br>
  <br>
  <center><button><a>Edit</a></button></center>
        <script>
        function myFunction() {
            alert("I am an alert box!");
        }
        </script>
        <br>

        <center><button><a>Save and Print</a></button></center>
              <script>
              function myFunction() {
                  alert("I am an alert box!");
              }
              </script>
<br>
<br>
<br>
<br>
@endsection('content')
