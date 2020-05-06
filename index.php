<?php 
		
	class complain{

		public $username	=	"Williams";
		static $min_pass	=	8;	
		public $secret_word	=	"1991";
		public $email		=	"William1@gmail.com";
		public $age			=	27;
		public $fullname	=	"Williams Chidiebere Emeaso";
		public $address		=	"10 Authur Avenue Enugu";
		public $complain	=	"your company charged me for service that was not rendered";

		public function __construct(){
			if($this->fullname){
				echo "Hello " . $this->fullname . " you are welcome to virtual line limited, kindly provide your password for varification.<br>";
			}else{
				echo "false.";
			}

			}

		 public function validate_secretword($pass){
			if($pass < self::$min_pass){
				echo" <br><br> Sorry! Your password cannot be less than 8.<br><br>";
			}else{
				echo" <br>Thank you for varifing your account. " . $this->username . "<br>";
			}
		

}

}

	class customer extends complain{

			public $secret_word	= "Emeaso_Chidi";

			public function varify($pass){

				parent::validate_secretword($pass);
			}
			public function display_query(){

				if($this->complain){

					echo "<br>Hi support team this query came in this morning from " . $this->username . " <br> His email is " .  $this->email . ". <br>He is " . $this->age . ". <br> His fullname is " . $this->fullname . "<br> He live at " . $this->address . ". <br> Complain :" . $this->complain ;
				}else{
					echo "Nothing entered.";
				}
			}

	}


	$my_complain	=	new  complain;
	
	$password =  $my_complain->secret_word;
	//echo $password ;
	$pass = strlen($password) ;
	$my_complain->validate_secretword($pass);

	$customer	= new customer;
	$password =  $customer->secret_word;
	$pass = strlen($password) ;
	$customer->varify($pass);
	$customer->display_query();


		

	//	$query = "INSERT INTO user_table(id,email,password,full_name,spending_Amt)VALUES('Null','william@yahoomail.com','1234','Emeaso Williams', '1200')";
		
	/*	$run_query	= mysqli_query($connect, $query);

		if($run_query){

			echo"Data has been inserted into your database";
		}else{

			echo "Data could not be inserted" . mysqli_error($run_query);
		}

			$query = "UPDATE user_table SET email= 'ifesinachi@gmail.com', full_name = 'Ifesinachi Emeaso' WHERE ID = 1";
			$run_query	= mysqli_query($connect, $query);

		if($run_query){

			echo"Data has been  updated into your database";
		}else{

			echo "Data could not be updated" . mysqli_error($run_query);
		}*/

		
			

		//if($result){

			
		//else{

		//	echo "Data could not be updated" . mysqli_error($run_query);
		//}
?>

			<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Customer</h2>
  <!--<p>The .table-bordered class adds borders on all sides of the table and the cells:</p> -->           
  <table class="table table-bordered table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>s
        <th>spending_Amt</th>
      </tr>
    </thead>

    
    <tbody>

    <?php
		    include('w.php');
		    $query_select	= "SELECT * FROM user_table";
			$run_query		= mysqli_query($connect, $query_select);
			while ($result	= mysqli_fetch_array($run_query,MYSQLI_ASSOC)){
	?>
	

      <tr>
        <td><?php echo $result['full_name'];?></td>
        <td><?php echo $result['password'];?></td>
        <td><?php echo $result['email'];?></td>
        <td><?php echo $result['spending_Amt'];?></td>
      </tr>
    <?php  } ?>
      
    </tbody>
  </table>
</div>

</body>
</html>


