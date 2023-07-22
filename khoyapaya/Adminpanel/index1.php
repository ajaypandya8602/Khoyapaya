<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - 404 Error</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">





	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a href="index.php"><img width="200" height="60" class="logo" src="img_all/logo/1234.png" alt="logo" style="padding: 0px; margin:0px;"></a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>
            <a class="dropdown-item" href="forgot-password.php">Forgot Password</a>
            <a class="dropdown-item" href="addchild.php">Child Registration</a>
            <a class="dropdown-item" href="addevent.php">Event Registration</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item active" href="404.php">404 Page</a>
            <a class="dropdown-item" href="blank.php">Blank Page</a>
          </div>
        </li>
       <!--  <li class="nav-item">
          <a class="nav-link" href="charts.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="tables.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">Dashboard</a>
            </li>
   
          </ol>

          <!-- Page Content -->
         </div>





	<div class="container">
	<h1 class="text-primary text-uppercase  text-center">Operation</h1>

	<div class="d-flex justify-content-end">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open model</button>

	</div>
	<h2 class="text-danger">All Records</h2>
	<div id="records_contant">
		
	</div>

	<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Operation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       	<div class="form-group">
       		<label for="firstname">First Name</label>
       		<input type="text" name="" id="firstname" class="form-control" placeholder="Enter First Name">
       		
       	</div>
     
      
       	<div class="form-group">
       		<label for="lastname">Last Name</label>
       		<input type="text" name="" id="lastname" class="form-control" placeholder="Enter Last Name">
       		
       	</div>

       	<div class="form-group">
       		<label for="email">E-mail Id</label>
       		<input type="email" name="" id="email" class="form-control" placeholder="Enter E-mail Id">
       		
       	</div>

       	<div class="form-group">
       		<label for="phone">Phone number</label>
       		<input type="number" name="" id="phone" class="form-control" placeholder="Enter Phone number">
       		
       	</div>
      </div>


      <!-- Modal footer -->
      <div class="modal-footer">
   	    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="addrecord()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<!-- //---update model -->
<div class="modal" id="update_user_modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Operation</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-group">
          <label for="update_firstname">First Name</label>
          <input type="text" name="" id="update_firstname" class="form-control" placeholder="Enter First Name">
          
        </div>
     
      
        <div class="form-group">
          <label for="update_lastname">Last Name</label>
          <input type="text" name="" id="update_lastname" class="form-control" placeholder="Enter Last Name">
          
        </div>

        <div class="form-group">
          <label for="update_email">E-mail Id</label>
          <input type="email" name="" id="update_email" class="form-control" placeholder="Enter E-mail Id">
          
        </div>

        <div class="form-group">
          <label for="update_phone">Phone number</label>
          <input type="tel" name="" id="update_phone" class="form-control" placeholder="Enter Phone number">
          
        </div>
      </div>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="updateuserdetail()">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="hidden" name="" id="hidden_user_id">
      </div>

    </div>
  </div>
</div>

	</div>

   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">

  	$(document).ready(function(){
  		readrecord();

  	});

  	function readrecord()
  	{
  		var readrecord="readrecord";
  		$.ajax({
  			url:'index2.php',
  			type:'post',
  			data:{readrecord:readrecord},
  			success:function(data,status)
  			{
  				$('#records_contant').html(data);
  			}

  		});
  	}
  	function addrecord()
  	{
  		var firstname=$('#firstname').val();
  		var lastname=$('#lastname').val();
  		var email=$('#email').val();
  		var phone=$('#phone').val();

  		$.ajax({
  			url:'index2.php',
  			type:'post',
  			data: {firstname : firstname, 
  				lastname : lastname,
  				email : email,
  				phone : phone
  			},

  			success:function(data,status)
  			{
  				readrecord();
  			}


  		});
  	}

  	//delete function
  	function DeleteUser(deleteid)
  	{
  		var conf=confirm("Are you sure");
  		if(conf==true)
  		{
  			$.ajax({
  				url:"index2.php",
  				type:"post",
  				data:{deleteid:deleteid},
  				success:function(data,status)
  				{
  					readrecord();
  				}

  			});
  		}
  	}

    function GetUserDetails(id)
    {
      $('#hidden_user_id').val(id);

      $.post("index2.php", {
        id:id
      }, function(data,status){

        var user = JSON.parse(data);
        $('#update_firstname').val(user.firstname);
        $('#update_lastname').val(user.lastname);
        $('#update_email').val(user.email);
        $('#update_phone').val(user.phone);

        }
        );
        $('#update_user_modal').modal("show");
    }

    function updateuserdetail()
    {
      var firstnameupd = $('#update_firstname').val();
      var lastnameupd = $('#update_lastname').val();
      var emailupd = $('#update_email').val();
      var phoneupd = $('#update_phone').val();    

      var hidden_user_idupd = $('#hidden_user_id').val();

      $.post("index2.php",{

            hidden_user_idupd:hidden_user_idupd,
            firstnameupd:firstnameupd,
            lastnameupd:lastnameupd,
            emailupd:emailupd,
            phoneupd:phoneupd,

      },
      function(data,status)
      {
        $('#update_user_modal').modal("hide");
        readrecord();
      }
      );
    }
  </script>
</body>
</html>