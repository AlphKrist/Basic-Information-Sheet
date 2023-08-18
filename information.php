<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>General Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
  body {
	background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

table.table-bordered{
    border: 1px solid;
    margin-top:0px;
  }
  table.table-bordered > thead > tr > th{
    border: 1px solid black;
  }
  table.table-bordered > tbody > tr > td{
    border: 1px solid black;
  }
  th {
    background-color: #050A30;
    color: white;
  }
  td {
    background-color: #FFFFFF;
  }
  .table {
  width: 100%;
  margin-bottom: -5px;
  }
  html, body {
  height: 100%
}

</style>
</head>

<body>
<form action="" name="form1" method="post">
<div class="container-fluid">
<div class="container vh-100 d-flex align-items-center justify-content-center">
<div class="card my-auto mx-auto">
<h2 class="card-header text-white" style="background-color: #050A30;">GENERAL INFORMATION</h2>
<div class="d-flex justify-content-between align-items-center">
<div class="card-body" style="background-color: #000C66;">
<table class="table table-bordered">
<thead>
  <tr>
    <th>NAME:</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>
      <div class="form-row">
        <div class="col-md-4">
          <input type="text" class="form-control" id="lastname" placeholder="Family Name" name="lastname" required>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middlename" required>
        </div>
      </div>
    </td>
  </tr>
</tbody>
</table>

<table class="table table-bordered">
<thead>
  <tr>
    <th>ADDRESS:</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>
      <div class="form-row">
        <div class="col-md-2">
          <input type="text" class="form-control" id="number" placeholder="No." name="number" required>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="street" placeholder="Street" name="street" required>
        </div>
        <div class="col-md-2">
          <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="municipality" placeholder="Municipality" name="municipality" required>
        </div>
        <div class="col-md-2">
          <input type="text" class="form-control" id="province" placeholder="Province" name="province" required>
        </div>
      </div>
    </td>
  </tr>
</tbody>
</table>

<table class="table table-bordered">
<thead>
  <tr>
    <th>BIRTH DATE:</th>
    <th>BIRTH PLACE:</th>
    <th>GENDER:</th>
    <th>EMAIL ADDRESS:</th>
  </tr>
</thead>

<tbody>
<tr>
  <td>
    <div class="form-row">
      <input type="date" class="form-control" id="birthdate" name="birthdate" required>
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="birthplace" placeholder="Birthplace" name="birthplace" required>
    </div>
  </td>
  <td class="align-middle">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" required/>
      <label class="form-check-label" for="gender">MALE</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" required/>
      <label class="form-check-label" for="gender">FEMALE</label>
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="email" placeholder="Email Address" name="email" required>
    </div>
  </td>
</tr>
</tbody>
</table>

<table class="table table-bordered">
<thead>
  <tr>
    <th>NATIONALITY:</th>
    <th>CONTACT NUMBER:</th>
    <th>TIN NUMBER:</th>
    <th>SSS NUMBER:</th>
  </tr>
</thead>

<tbody>
<tr>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="nationality" placeholder="Nationality" name="nationality" required>
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="contact" placeholder="Contact Number" name="contact" required>
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="sss" placeholder="SSS Number" name="sss" required>
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="tin" placeholder="Tin Number" name="tin" required>
    </div>
  </td>
  
</tr>
</tbody>
</table>

<table class="table table-bordered">
<thead>
  <tr>
    <th>EDUCATION</th>
    <th>STATUS</th>
    <th>HAIR</th>
    <th>EYES</th>
    <th>BUILT</th>
    <th>COMPLEXION</th>
  </tr>
</thead>

<tbody>
<tr>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="education" id="education" value="Informal" required>
          <label class="form-check-label" for="education">Informal</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="education" id="education" value="Elementary" required>
          <label class="form-check-label" for="education">Elementary</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" value="High School" required>
          <label class="form-check-label" for="education">High School</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" value="Vocational" required>
          <label class="form-check-label" for="education">Vocational</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" value="College" required>
          <label class="form-check-label" for="education">College</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" value="Post Graduate" required>
          <label class="form-check-label" for="education">Post Graduate</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="status" id="status" value="Single" required>
          <label class="form-check-label" for="status">Single</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="status" id="status" value="Married" required>
          <label class="form-check-label" for="status">Married</label>
        </div>
        <div class="form-check">
          <input type="radio" name="status" id="status" class="form-check-input" value="Widow/er" required>
          <label class="form-check-label" for="status">Widow/er</label>
        </div>
        <div class="form-check">
          <input type="radio" name="status" id="status" class="form-check-input" value="Separated" required>
          <label class="form-check-label" for="status">Separated</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="hair" id="hair" value="Black" required>
          <label class="form-check-label" for="hair">Black</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="hair" id="hair" value="Brown" required>
          <label class="form-check-label" for="hair">Brown</label>
        </div>
        <div class="form-check">
          <input type="radio" name="hair" id="hair" class="form-check-input" value="Blonde" required>
          <label class="form-check-label" for="hair">Blonde</label>
        </div>
        <div class="form-check">
          <input type="radio" name="hair" id="hair" class="form-check-input" value="Gray" required>
          <label class="form-check-label" for="hair">Gray</label>
        </div>
        <div class="form-check">
          <input type="radio" name="hair" id="hair" class="form-check-input" value="Others" required>
          <label class="form-check-label" for="hair">Others</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="eyes" id="eyes" value="Black" required>
          <label class="form-check-label" for="eyes">Black</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="eyes" id="eyes" value="Brown" required>
          <label class="form-check-label" for="eyes">Brown</label>
        </div>
        <div class="form-check">
          <input type="radio" name="eyes" id="eyes" class="form-check-input" value="Blue" required>
          <label class="form-check-label" for="eyes">Blue</label>
        </div>
        <div class="form-check">
          <input type="radio" name="eyes" id="eyes" class="form-check-input" value="others" required>
          <label class="form-check-label" for="eyes">Others</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="built" id="built" value="Light" required>
          <label class="form-check-label" for="built">Light</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="built" id="built" value="Medium" required>
          <label class="form-check-label" for="built">Medium</label>
        </div>
        <div class="form-check">
          <input type="radio" name="built" id="built" class="form-check-input" value="Heavy" required>
          <label class="form-check-label" for="built">Heavy</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="complexion" id="complexion" value="Light" required>
          <label class="form-check-label" for="option1">Light</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="complexion" id="complexion" value="Fair" required>
          <label class="form-check-label" for="complexion">Fair</label>
        </div>
        <div class="form-check">
          <input type="radio" name="complexion" id="complexion" class="form-check-input" value="Dark" required>
          <label class="form-check-label" for="complexion">Dark</label>
        </div>
      </div>
  </td>
</tr>
</tbody>
</table>

<br>
  <div class ="row justify-content-center">
  <a href="index.php?id="><button type="submit" name="view" style="background-color: #050A30; color:white;" class="btn btn-lg mr-1" formnovalidate>VIEW RECORDS</button></a>
    <button type="submit" name="register" class="btn btn-lg btn-success">REGISTER</button>
  </div>
 </div>
</div>
</div>
</div>
</form>
</body>

<?php
if(isset($_POST["view"]))
{
    ?>
    <script type="text/javascript">
      window.location="index.php";
    </script>
    <?php
}

if(isset($_POST["register"]))
{

    mysqli_query($link,"insert into table1 values(NULL,'$_POST[lastname]','$_POST[firstname]','$_POST[middlename]'
    ,'$_POST[number]','$_POST[street]','$_POST[city]','$_POST[municipality]','$_POST[province]'
    ,'$_POST[email]','$_POST[nationality]','$_POST[gender]','$_POST[birthplace]'
    ,'$_POST[sss]','$_POST[tin]','$_POST[contact]','$_POST[birthdate]'
    ,'$_POST[education]','$_POST[status]','$_POST[hair]','$_POST[eyes]','$_POST[built]','$_POST[complexion]')");

    ?>
    <script type="text/javascript">
      Swal.fire({
        title:'SUCCESS!',
        text:'Registered successfully!',
        icon:'success'
      })
      .then(function() {
      window.location.href=window.location.href;
      });
    </script>
    <?php

}

?>
</html>