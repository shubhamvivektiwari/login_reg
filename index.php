<?php 
session_start();
$_SESSION['username'] ??  header("location:login1.php");


?>


<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <form action="" method="post" id="frm" class="  bordered p-5 rounded bg-warning shadow-lg mt-5" enctype="multipart/form-data">
          <h2>User Details</h2>
          <div class="mt-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="form-control" require>
          </div>
          <div class="mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" require>
          </div>
          <div class="mt-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" require>
          </div>
          <div class="mt-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" name="phone" id="phone" class="form-control" require>
          </div>

          <div class="mt-3">

            <input type="submit" name="submit" id="res" class="btn btn-primary" value="submit">
            <!-- <input type="submit" name="submit" id="resedti" class="btn btn-primary" value="edit"> -->
            <!-- <a href="#" class="text-decoration-none btn btn-primary">View Data</a> -->
          </div>
        </form>
      </div>

      <div class="col-8">
        <table class="table table-dark mt-5">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Password</th>
              <th scope="col">Phone</th>
              <th scope="col">Action</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="tbodytable">

          </tbody>
        </table>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> -->

  <!-- Modal content-->
  <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->





  <script src="action.js"></script>




</body>

</html>