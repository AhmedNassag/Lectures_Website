<?php
	include('security.php');
	include('includes/database/dbconfig.php');



	/*****Start Register Page Code*****/

	//Insert Code
	if(isset($_POST['registerbtn']))
	{
		$fname     = $_POST['fname'];
		$lname     = $_POST['lname'];
		$email     = $_POST['email'];
		$password  = $_POST['password'];
		$cpassword = $_POST['confirmpassword'];
		$usertype  = $_POST['usertype'];

		if($password === $cpassword)
		{
			$query = "INSERT INTO register (fname,
											lname,
											email,
											password,
											usertype)
				  				    	VALUES 
				  							('$fname',
				  							 '$lname',
				  						 	'$email',
				  						 	'$password',
				  						 	'$usertype')";
			$query_run = mysqli_query($connection,$query);

			if($query_run)
			{
				$_SESSION['success'] = "Admin Profile Added";
				header('Location: register.php');
			}
			else
			{
				$_SESSION['status'] = "Admin Profile Not Added";
				header('Location: register.php');
			}
		}
		else
		{
			$_SESSION['status'] = "Password And Confirm Password Does Not Match";
			header('Location: register.php');
		}	
	}


	//Update Code
	if(isset($_POST['updatebtn']))
	{
		$id 	   		= $_POST['edit_id'];
		$fname  		= $_POST['edit_fname'];
		$lname  		= $_POST['edit_lname'];
		$email 	   		= $_POST['edit_email'];
		$password  	    = $_POST['edit_password'];
		$usertypeupdate = $_POST['update_usertype'];
		$query	 	    = "UPDATE register SET fname = '$fname',
											   lname = '$lname',
											   email    = '$email',
											   password = '$password'
											   usertype = '$usertypeupdate'
										   WHERE
											   id 	     = '$id' ";
		$query_run      = mysqli_query($connection,$query);

		if($query_run)
		{
			$_SESSION['success'] = "Your Data IS Updated";
			header('Location: register.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data IS Not Updated";
			header('Location: register.php');
		}
	}


	//Delete Code
	if (isset($_POST['delete_btn']))
	{
		$id 	   = $_POST['delete_id'];
		$query     = "DELETE FROM register WHERE id = '$id' ";
		$query_run = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Is Deleted";
			header('Location: register.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Is Not Deleted";
			header('Location: register.php');
		}
	}

	/*****End Register Page Code*****/





	/*****Start Contact Page Code*****/

	//Insert Code
	if(isset($_POST['contact_save']))
	{
		$title 	   	 = $_POST['title'];
		$description = $_POST['description'];
		$address 	 = $_POST['address'];
		$email 		 = $_POST['email'];
		$links  	 = $_POST['links'];
		$phone 		 = $_POST['phone'];
		$query	 	 = "INSERT INTO contact (title,
												description,
												image,
												address,
												email,
												links,
												phone)
											VALUES 
											   ('$title',
												'$description',
												'$image',
												'$address',
												'$email',
												'$links',
												'$phone')";
		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Contact Us Added";
			header('Location: contact.php');
		}
		else
		{
			$_SESSION['status'] = "Contact Us Not Added";
			header('Location: contact.php');
		}
	}


	//Update Code
	if(isset($_POST['contact_update_btn']))
	{
		$id 		 = $_POST['edit_id'];
		$title 	   	 = $_POST['edit_title'];
		$description = $_POST['edit_description'];
		$image		 = $_FILES["edit_contact_image"]['name'];
		$address 	 = $_POST['edit_address'];
		$email 		 = $_POST['edit_email'];
		$link   	 = $_POST['edit_link'];
		$phone 		 = $_POST['edit_phone'];
		$query	 	 = "UPDATE contact Set title 	   = '$title',
										   description = '$description',
										   image 	   = '$image',
										   address 	   = '$address',
										   email 	   = '$email',
										   links 	   = '$links'
										   phone 	   = '$phone'
									WHERE
										  id 		  = '$id' ";

		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			move_uploaded_file($_FILES["edit_contact_image"]["tmp_name"],"upload/".$_FILES["edit_contact_image"]["name"]);
			$_SESSION['success'] = "Your Data Updated";
			header('Location: contact.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Updated";
			header('Location: contact.php');
		}
	}


	//Delete Code
	if(isset($_POST['contact_delete_btn']))
	{
		$id 	   = $_POST['delete_id'];
		$query	   = "DELETE FROM contact WHERE id = '$id' ";
		$query_run = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Deleted";
			header('Location: contact.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Deleted";
			header('Location: contact.php');
		}
	}

	/*****End Contact Page Code*****/





	/*****Start About Page Code*****/

	//Insert Code
	if(isset($_POST['about_save']))
	{
		$title 	   	 	= $_POST['title'];
		$description 	= $_POST['description'];
		$subtitle 	   	= $_POST['subtitle'];
		$subdescription = $_POST['subdescription'];
		$query	 	 	= "INSERT INTO about (title,
										   	  description,
										   	  subtitle,
										      subdescription)
										VALUES 
										 	('$title',
										  	 '$description',
										  	 '$subtitle',
										  	 '$subdescription')";
		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "About Us Added";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "About Us Not Added";
			header('Location: about.php');
		}
	}
	

	//Update Code
	if(isset($_POST['about_update_btn']))
	{
		$id 		 	= $_POST['edit_id'];
		$title 	   	 	= $_POST['edit_title'];
		$description 	= $_POST['edit_description'];
		$subtitle 	   	= $_POST['edit_subtitle'];
		$subdescription = $_POST['edit_subdescription'];
		$query	 	 	= "UPDATE about Set title 	       = '$title',
										    description    = '$description',
										    subtitle 	   = '$subtitle',
										    subdescription = '$subdescription'
									WHERE
										   id 		       = '$id' ";

		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Updated";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Updated";
			header('Location: about.php');
		}
	}


	//Delete Code
	if(isset($_POST['about_delete_btn']))
	{
		$id 	   = $_POST['delete_id'];
		$query	   = "DELETE FROM about WHERE id = '$id' ";
		$query_run = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Deleted";
			header('Location: about.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Deleted";
			header('Location: about.php');
		}
	}

	/*****End About Page Code*****/





	/*****Start Years Page Code*****/

	//Insert Code
	if(isset($_POST['year_save']))
	{
		$year_name = $_POST['year_name'];
		$query	 	 = "INSERT INTO years (year_name) VALUES ('$year_name')";
		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Year Added";
			header('Location: years.php');
		}
		else
		{
			$_SESSION['status'] = "Years Not Added";
			header('Location: years.php');
		}
	}
	

	//Update Code
	if(isset($_POST['year_update_btn']))
	{
		$id 	   = $_POST['edit_id'];
		$year_name = $_POST['edit_year_name'];
		$query	   = "UPDATE years Set year_name = '$year_name'
								 WHERE year_id   = '$id' ";

		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Updated";
			header('Location: years.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Updated";
			header('Location: years.php');
		}
	}


	//Delete Code
	if(isset($_POST['year_delete_btn']))
	{
		$id 	   = $_POST['delete_id'];
		$query	   = "DELETE FROM years WHERE year_id = '$id' ";
		$query_run = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Deleted";
			header('Location: years.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Deleted";
			header('Location: years.php');
		}
	}

	/*****End Years Page Code*****/





	/*****Start Courses Page Code*****/

	//Insert Code
	if(isset($_POST['course_save']))
	{
		$year_id 	 = $_POST['year_id'];
		$course_name = $_POST['course_name'];
		$query	 	 = "INSERT INTO courses (year_id,
										   	 course_name)
										VALUES 
										 	('$year_id',
										  	 '$course_name')";
		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Courses Added";
			header('Location: courses.php');
		}
		else
		{
			$_SESSION['status'] = "Courses Not Added";
			header('Location: courses.php');
		}
	}
	

	//Update Code
	if(isset($_POST['course_update_btn']))
	{
		$id 	  	 = $_POST['edit_id'];
		$year_id 	 = $_POST['edit_year_id'];
		$course_name = $_POST['edit_course_name'];
		$query	 	 = "UPDATE courses Set year_id     = '$year_id',
										  course_name = '$course_name'
									 	WHERE
										  course_id   = '$id' ";

		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Updated";
			header('Location: courses.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Updated";
			header('Location: courses.php');
		}
	}


	//Delete Code
	if(isset($_POST['course_delete_btn']))
	{
		$id 	   = $_POST['delete_id'];
		$query	   = "DELETE FROM courses WHERE course_id = '$id' ";
		$query_run = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Deleted";
			header('Location: courses.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Deleted";
			header('Location: courses.php');
		}
	}

	/*****End Courses Page Code*****/





	/*****Start Materials Page Code*****/

	//Insert Code
	if(isset($_POST['material_save']))
	{
		$course_id = $_POST['course_id'];
		$lec_num   = $_POST['lec_num'];
		$content   = $_FILES['content']['name'];
		
		if(file_exists("upload/".$_FILES['content']['name']))
		{
			$store 				= $_FILES['content']['content'];
			$_SESSION['status'] = "This File Already Exists. '.$store.'";
			header('Location: materials.php');
		}
		else
		{
			$query	   = "INSERT INTO materials (course_id,
											   	 lec_num,
											   	 content)
											VALUES 
											 	('$course_id',
											  	 '$lec_num',
											  	 '$content')";
			$query_run 	 = mysqli_query($connection,$query);

			if ($query_run)
			{
				move_uploaded_file($_FILES['content']['tmp_name'],"upload/".$_FILES['content']['name']);
				$_SESSION['success'] = "Material Added";
				header('Location: materials.php');
			}
			else
			{
				$_SESSION['status'] = "Material Not Added";
				header('Location: materials.php');
			}
		}
	}
	

	//Update Code
	if(isset($_POST['material_update_btn']))
	{
		$id 	  	= $_POST['material_id'];
		$course_id 	= $_POST['edit_course_id'];
		$lec_num    = $_POST['edit_lec_num'];
		$content    = $_FILES['edit_content']['name'];
		$query	 	= "UPDATE courses Set course_id = '$course_id',
										  lec_num   = '$lec_num',
										  content   = '$content'
									 	WHERE
										  material_id  = '$id' ";

		$query_run 	 = mysqli_query($connection,$query);

		if ($query_run)
		{
			move_uploaded_file($_FILES['content']['tmp_name'],"upload/".$_FILES['content']['name']);
			$_SESSION['success'] = "Your Data Updated";
			header('Location: courses.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Updated";
			header('Location: courses.php');
		}
	}


	//Delete Code
	if(isset($_POST['material_delete_btn']))
	{
		$id 	   = $_POST['delete_id'];
		$query	   = "DELETE FROM materials WHERE material_id = '$id' ";
		$query_run = mysqli_query($connection,$query);

		if ($query_run)
		{
			$_SESSION['success'] = "Your Data Deleted";
			header('Location: materials.php');
		}
		else
		{
			$_SESSION['status'] = "Your Data Not Deleted";
			header('Location: materials.php');
		}
	}

	/*****End Materials Page Code*****/



?>