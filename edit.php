<?php
    include "connection.php";
    $id = $_GET['id'];

    $lastname="";
    $firstname = "";
    $middlename = "";
    $number = "";
    $street = "";
    $city = "";
    $municipality = "";
    $province = "";
    $email = "";
    $nationality = "";
    $gender = "";
    $birthplace = "";
    $sss = "";
    $tin = "";
    $contact = "";
    $birthdate = "";
    $education = "";
    $status = "";
    $hair = "";
    $eyes = "";
    $built = "";
    $complexion = "";

    $res = mysqli_query($link,"select * from table1 where id='$id'");
    while($row=mysqli_fetch_array($res))
    {
        $lastname = $row["lastname"];
        $firstname = $row["firstname"];
        $middlename = $row["middlename"];
        $number = $row["number"];
        $street = $row["street"];
        $city = $row["city"];
        $municipality = $row["municipality"];
        $province = $row["province"];
        $email = $row["email"];
        $nationality = $row["nationality"];
        $gender = $row["gender"];
        $birthplace = $row["birthplace"];
        $sss = $row["sss"];
        $tin = $row["tin"];
        $contact = $row["contact"];
        $birthdate = $row["birthdate"];
        $education = $row["education"];
        $status = $row["status"];
        $hair = $row["hair"];
        $eyes = $row["eyes"];
        $built = $row["built"];
        $complexion = $row["complexion"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update General Information</title>
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
          <input type="text" class="form-control" id="lastname" placeholder="Family Name" name="lastname" required value="<?php echo $lastname; ?>">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required value="<?php echo $firstname; ?>">
        </div>
        <div class="col-md-4">
          <input type="text" class="form-control" id="middlename" placeholder="Middle Name" name="middlename" required value="<?php echo $middlename; ?>">
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
          <input type="text" class="form-control" id="number" placeholder="No." name="number" required value="<?php echo $number; ?>">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="street" placeholder="Street" name="street" required value="<?php echo $street; ?>">
        </div>
        <div class="col-md-2">
          <input type="text" class="form-control" id="city" placeholder="City" name="city" required value="<?php echo $city; ?>">
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" id="municipality" placeholder="Municipality" name="municipality" required value="<?php echo $municipality; ?>">
        </div>
        <div class="col-md-2">
          <input type="text" class="form-control" id="province" placeholder="Province" name="province" required value="<?php echo $province; ?>">
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
      <input type="date" class="form-control" id="birthdate" name="birthdate" required value="<?php echo $birthdate; ?>">
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="birthplace" placeholder="Birthplace" name="birthplace" required value="<?php echo $birthplace; ?>">
    </div>
  </td>
  <td class="align-middle">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="gender" required value="Male" <?php if ($gender == 'Male') echo 'checked="checked"'; ?>>
      <label class="form-check-label" for="gender">MALE</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="gender" required value="Female" <?php if ($gender == 'Female') echo 'checked="checked"'; ?>>
      <label class="form-check-label" for="gender">FEMALE</label>
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="email" placeholder="Email Address" name="email" required value="<?php echo $email; ?>">
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
      <input type="text" class="form-control" id="nationality" placeholder="Nationality" name="nationality" required value="<?php echo $nationality; ?>">
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="contact" placeholder="Contact Number" name="contact" required value="<?php echo $contact; ?>">
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="sss" placeholder="SSS Number" name="sss" required value="<?php echo $sss; ?>">
    </div>
  </td>
  <td>
    <div class="form-row">
      <input type="text" class="form-control" id="tin" placeholder="Tin Number" name="tin" required value="<?php echo $tin; ?>">
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
          <input type="radio" class="form-check-input" name="education" id="education" required value="Informal" <?php if ($education == 'Informal') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="education">Informal</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="education" id="education" required value="Elementary" <?php if ($education == 'Elementary') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="education">Elementary</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" required value="High School" <?php if ($education == 'High School') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="education">High School</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" required value="Vocational" <?php if ($education == 'Vocational') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="education">Vocational</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" required value="College" <?php if ($education == 'College') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="education">College</label>
        </div>
        <div class="form-check">
          <input type="radio" name="education" id="education" class="form-check-input" required value="Post Graduate" <?php if ($education == 'Post Graduate') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="education">Post Graduate</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="status" id="status" required value="Single" <?php if ($status == 'Single') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="status">Single</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="status" id="status" required value="Married" <?php if ($status == 'Married') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="status">Married</label>
        </div>
        <div class="form-check">
          <input type="radio" name="status" id="status" class="form-check-input" required value="Widow/er" <?php if ($status == 'Widow/er') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="status">Widow/er</label>
        </div>
        <div class="form-check">
          <input type="radio" name="status" id="status" class="form-check-input" required value="Separated" <?php if ($status == 'Separated') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="status">Separated</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="hair" id="hair" required value="Black" <?php if ($hair == 'Black') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="hair">Black</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="hair" id="hair" required value="Brown" <?php if ($hair == 'Brown') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="hair">Brown</label>
        </div>
        <div class="form-check">
          <input type="radio" name="hair" id="hair" class="form-check-input" required value="Blonde" <?php if ($hair == 'Blonde') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="hair">Blonde</label>
        </div>
        <div class="form-check">
          <input type="radio" name="hair" id="hair" class="form-check-input" required value="Gray" <?php if ($hair == 'Gray') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="hair">Gray</label>
        </div>
        <div class="form-check">
          <input type="radio" name="hair" id="hair" class="form-check-input" required value="Others" <?php if ($hair == 'Others') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="hair">Others</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="eyes" id="eyes" required value="Black" <?php if ($eyes == 'Black') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="eyes">Black</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="eyes" id="eyes" required value="Brown" <?php if ($eyes == 'Brown') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="eyes">Brown</label>
        </div>
        <div class="form-check">
          <input type="radio" name="eyes" id="eyes" class="form-check-input" required value="Blue" <?php if ($eyes == 'Blue') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="eyes">Blue</label>
        </div>
        <div class="form-check">
          <input type="radio" name="eyes" id="eyes" class="form-check-input" required value="Others" <?php if ($eyes == 'Others') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="eyes">Others</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="built" id="built" required value="Light" <?php if ($built == 'Light') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="built">Light</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="built" id="built" required value="Medium" <?php if ($built == 'Medium') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="built">Medium</label>
        </div>
        <div class="form-check">
          <input type="radio" name="built" id="built" class="form-check-input" required value="Heavy" <?php if ($built == 'Heavy') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="built">Heavy</label>
        </div>
      </div>
  </td>
  <td>
      <div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="complexion" id="complexion" required value="Light" <?php if ($complexion == 'Light') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="option1">Light</label>
        </div>
        <div class="form-check">
          <input type="radio" class="form-check-input" name="complexion" id="complexion" required value="Fair" <?php if ($complexion == 'Fair') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="complexion">Fair</label>
        </div>
        <div class="form-check">
          <input type="radio" name="complexion" id="complexion" class="form-check-input" required value="Dark" <?php if ($complexion == 'Dark') echo 'checked="checked"'; ?>>
          <label class="form-check-label" for="complexion">Dark</label>
        </div>
      </div>
  </td>
</tr>
</tbody>
</table>

<br>
  <div class ="row justify-content-center">
  <a href="index.php?id="><button type="submit" name="view" class="btn btn-lg mr-1" style="background-color: #050A30; color:white;" formnovalidate>VIEW RECORDS</button></a>
    <button type="submit" name="update" class="btn btn-lg btn-success">UPDATE</button>
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

if(isset($_POST["update"]))
{
    $birthdate = date('Y-m-d',strtotime($_POST["birthdate"]));

    mysqli_query($link,"update table1 set lastname='$_POST[lastname]',firstname='$_POST[firstname]',middlename='$_POST[middlename]'
    ,number='$_POST[number]',street='$_POST[street]',city='$_POST[city]',municipality='$_POST[municipality]',province='$_POST[province]'
    ,email='$_POST[email]',nationality='$_POST[nationality]',gender='$_POST[gender]',birthplace='$_POST[birthplace]'
    ,sss='$_POST[sss]',tin='$_POST[tin]',contact='$_POST[contact]',birthdate='$birthdate'
    ,education='$_POST[education]',status='$_POST[status]',hair='$_POST[hair]',eyes='$_POST[eyes]',built='$_POST[built]',complexion='$_POST[complexion]' where id='$id'");

    ?>
    <script type="text/javascript">
      Swal.fire({
        title:'SUCCESS!',
        text:'Updated successfully!',
        icon:'success'
      })
      .then(function() {
      window.location.href="index.php";
      });
    </script>
    <?php

}

?>
</html>