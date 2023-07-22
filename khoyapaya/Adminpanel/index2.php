<?php

$con=mysqli_connect('localhost','root','','khoyapaya');
extract($_POST);

if(isset($_POST['readrecord']))
{
	$data='<table class="table table-bordered table-striped">
					<tr>
						<th>No.</th>
						<th>First Name:</th>
						<th>Last Name</th>
						<th>Email Address</th>
						<th>Mobile Number</th>
						<th>Edit Action</th>
						<th>Delete Action</th>
					</tr>';

	$displayquery="SELECT * FROM crudoperation";
	$result=mysqli_query($con,$displayquery);

	if(mysqli_num_rows($result)>0)
	{
		$number = 1;
		while ($row = mysqli_fetch_array($result)) 
		{
			$data .= '<tr>
			<td>'.$number.'</td>
			<td>'.$row['firstname'].'</td>
			<td>'.$row['lastname'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['phone'].'</td>
			<td>
				<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Edit</button>
			</td>
			<td>
				<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
			</td>
			</tr>';
			$number++; 
		}
	}
	$data .= '</table';
	echo $data;



}
if(isset($_POST['firstname']) && isset($_POST['lastname'])  && isset($_POST['email']) && isset($_POST['phone']))
{
	$query="INSERT INTO crudoperation( firstname, lastname, email, phone) VALUES('$firstname','$lastname','$email','$phone') ";

	mysqli_query($con,$query);
}

//--------------delete record----------
if(isset($_POST['deleteid']))
{
	$userid=$_POST['deleteid'];
	$deletequery="delete from crudoperation where id='$userid'";
	mysqli_query($con,$deletequery);
}

//---------------get userid for update
if(isset($_POST['id']) && isset($_POST['id']) !="")
{
	$user_id=$_POST['id'];
	$query = "SELECT * FROM crudoperation WHERE id='$user_id'";
	if(!$result = mysqli_query($con,$query))
	{
		exit(mysqli_error());
	}

	$response = array();

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$response=$row;
		}
	}
	else
	{
		$response['status']=200;
		$response['message']="Data not found";
	}
	echo json_encode($response);
}
else
{
	$response['status']=200;
	$response['message']="Invalid Request!";
}

//--------------update table
if(isset($_POST['hidden_user_idupd']))
{
	$hidden_user_idupd = $_POST['hidden_user_idupd'];
	$firstnameupd = $_POST['firstnameupd'];
	$lastnameupd = $_POST['lastnameupd'];
	$emailupd = $_POST['emailupd'];
	$phoneupd = $_POST['phoneupd'];

	$query = "UPDATE crudoperation SET firstname='$firstnameupd',lastname='$lastnameupd',email='$emailupd',phone='$phoneupd'
	 WHERE id='$hidden_user_idupd'";

	mysqli_query($con,$query);
}
?>