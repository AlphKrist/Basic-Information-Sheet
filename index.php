<?php
  include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Records</title>
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
    border:1px solid black;
    margin-top:0px;
  }
  table.table-bordered > thead > tr > th{
    border:1px solid black;
  }
  table.table-bordered > tbody > tr > td{
    border:1px solid black;
  }
  th {
    background-color: #050A30;
    color: white;
  }
  td {
    background-color: #FFFFFF;
  }
  table * {
    white-space: nowrap;
  }
  .input-group {
    width: 600px;
  }
  
  </style>
</head>

<body>
<div class="container vh-100 d-flex align-items-center justify-content-center">
  <div class="card my-auto mx-auto text-center">
    <div class="card-header text-white text-center" style="background-color: #050A30;">
	    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
          <div class="row">
			      <h2 class="card-header" style="background-color: #050A30;">VIEW RECORDS</h2>
		      </div>
          <form action="search.php" method="POST">
			      <div class="input-group">
  			      <input class="form-control" type="search" placeholder="Search Last Name, First Name" name="search" aria-label="Search">
              <div class="input-group-append">
              <button class="btn btn-warning mr-2" name="submit" type="submit">Search</button>
  		            <a href="information.php?id="><button class="btn btn-success" name="add" type="submit">Add Record</button></a>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
<div class="card-body" style="background-color: #000C66;">
<div class="table-responsive">
<table class="table table-bordered table-condensed">
    <thead>
      <tr>
        <th>UPDATE</th>
        <th>DELETE</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>GENDER</th>
        <th>BIRTHPLACE</th>
        <th>BIRTHDAY</th>
        <th>NATIONALITY</th>
        <th>EMAIL</th>
        <th>SSS</th>
        <th>TIN</th>
        <th>CONTACT</th>
        <th>EDUCATION</th>
        <th>STATUS</th>
        <th>HAIR</th>
        <th>EYES</th>
        <th>BUILT</th>
        <th>COMPLEXION</th>
      </tr>
    </thead>
    
    <tbody>
    <?php
        $res = mysqli_query($link,"select * from table1");
        while($row=mysqli_fetch_array($res))
        {
          $id = $row["id"];

          echo "<tr>";
          echo "<td>"; ?> <a href="edit.php?id=<?php echo $id ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
          echo "<td>"; ?> <button type="button" class="btn btn-danger" name="delete" onclick="deleteConfirmation(<?php echo $id ?>)">Delete</button><?php echo "</td>";
          ?>
          <script>
          function deleteConfirmation(id) {
          Swal.fire({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this record!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          })
          .then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "SUCCESS!",
                text: "Record deleted successfully!",
                icon: "success",
                button: "OK",
                }).then(() => {
                  window.location.href = `delete.php?id=${id}`;
                });
              }
            });
          }
        </script>
        <?php
          echo "<td>"; echo $row["lastname"] .', '. $row["firstname"] .', '. $row["middlename"]; echo "</td>";
          echo "<td>"; echo $row["number"] .', '. $row["street"] .', '. $row["city"] .', '. $row["municipality"] .', '. $row["province"]; echo "</td>";
          echo "<td>"; echo $row["gender"]; echo "</td>";
          echo "<td>"; echo $row["birthplace"]; echo "</td>";
          echo "<td>"; echo $row["birthdate"]; echo "</td>";
          echo "<td>"; echo $row["nationality"]; echo "</td>";
          echo "<td>"; echo $row["email"]; echo "</td>";
          echo "<td>"; echo $row["sss"]; echo "</td>";
          echo "<td>"; echo $row["tin"]; echo "</td>";
          echo "<td>"; echo $row["contact"]; echo "</td>";
          echo "<td>"; echo $row["education"]; echo "</td>";
          echo "<td>"; echo $row["status"]; echo "</td>";
          echo "<td>"; echo $row["hair"]; echo "</td>";
          echo "<td>"; echo $row["eyes"]; echo "</td>";
          echo "<td>"; echo $row["built"]; echo "</td>";
          echo "<td>"; echo $row["complexion"]; echo "</td>";
          echo "</tr>";
        }
    ?>
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</body>
</html>