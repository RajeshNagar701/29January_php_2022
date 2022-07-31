<?php
include_once('../admin/model.php');

class control extends model
{
	
	function __construct()
	{ 
		session_start();
		model::__construct();
		
		$path=$_SERVER['PATH_INFO'];//http://localhost/students/29Jan_php_2022/control.php
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/services':
			include_once('services.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/signup':
			
			require 'phpmailer/PHPMailerAutoload.php';
			
			$country_arr=$this->select('country');
			
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['password'];
				$enc_pass=md5($password); // password convert into encriypted
				$gen=$_REQUEST['gen'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
				$cid=$_REQUEST['cid'];
				
				$img=$_FILES['img']['name'];
				$path='upload/customer/'.$img;
				$dup_img=$_FILES['img']['tmp_name'];
				move_uploaded_file($dup_img,$path);
				
				date_default_timezone_set('asia/calcutta');
				$created_dt=date("Y-m-d H:i:s");
				$updated_dt=date("Y-m-d H:i:s");
				
				$arr=array("name"=>$name,
				"user_name"=>$user_name,
				"password"=>$enc_pass,
				"gen"=>$gen,
				"lag"=>$lag,
				"cid"=>$cid,
				"img"=>$img,
				"created_dt"=>$created_dt,
				"updated_dt"=>$updated_dt);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					$mail = new PHPMailer;
					$mail->isSMTP();
					$mail->Host = 'smtp.gmail.com';
					$mail->Port = 587;
					$mail->SMTPSecure = 'tls';
					$mail->SMTPAuth = true;
					$mail->Username = 'dppatel3565@gmail.com';// enter your mail
					$mail->Password = 'dppatel9116';// enter pass
					$mail->setFrom('dppatel3565@gmail.com', 'DP Tops');  // Enter display email & name
					$mail->addReplyTo('dppatel3565@gmail.com', 'DP Tops');  // enter reply to mail & name
					
					$mail->addAddress($user_name); // pas to email
					$mail->Subject = 'Welcome to Shivani Tops';
					$mail->msgHTML('Welcome to ' . $user_name . '<br> We will contact you soon');

					if (!$mail->send()) {
					   $error = "Mailer Error: " . $mail->ErrorInfo;
						?><script>alert('<?php echo $error ?>');</script><?php
					} 
					else 
					{	
					   	echo "<script>
						alert('Register Success');
						window.location='signup';
						</script>";
					}		
					
					
				
				}
				
			}
			
			
			include_once('signup.php');
			break;
			
			case '/signin':
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['password'];
				$enc_pass=md5($password); // password convert into encriypted
				
				$where=array("user_name"=>$user_name,"password"=>$enc_pass);
				$res=$this->select_where('customer',$where);
				$chk=$res->num_rows; // check cond by rows
				if($chk==1)  // 1 means true and 0 false
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
						$_SESSION['cust_id']=$fetch->cust_id;
						$_SESSION['user_name']=$fetch->user_name;;
						$_SESSION['name']=$fetch->name;
						echo "<script>
						alert('Login Success');
						window.location='index';
						</script>";
					}
					else
					{
						echo "<script>
						alert('Login Filed due to User Blocked');
						window.location='index';
						</script>";
					}
				}
				else
				{
					echo "<script>
					alert('Login failed due to wrong credential !');
					window.location='signin';
					</script>";
				}
				
			}
			include_once('signin.php');
			break;
			
			case '/profile':
			$cust_id=$_SESSION['cust_id'];
			$where=array("cust_id"=>$cust_id);
			$res=$this->select_where('customer',$where);
			$fetch=$res->fetch_object();
			include_once('profile.php');
			break;
			
			
			case '/logout':
			unset($_SESSION['cust_id']);
			unset($_SESSION['user_name']);
			unset($_SESSION['name']);
			echo "<script>
			alert('Logout Success');
			window.location='index';
			</script>";
			break;
			
			
			case '/client_inq':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$sub=$_REQUEST['sub'];
				$decs=$_REQUEST['decs'];
	
				date_default_timezone_set('asia/calcutta');
				$created_dt=date("Y-m-d H:i:s");
				$updated_dt=date("Y-m-d H:i:s");
				
				$arr=array("name"=>$name,"email"=>$email,"sub"=>$sub,"decs"=>$decs,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "Suuccess";
				}
				else
				{
					echo "Not success";
				}
				
			}
			include_once('client_inq.php');
			break;
			
			case '/cust_edit':
			$country_arr=$this->select('country');
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				$sel_res=$this->select_where('customer',$where);
				$fetch=$sel_res->fetch_object();
				
				$old_img=$fetch->img;
				
				if(isset($_REQUEST['save']))
				{
					$name=$_REQUEST['name'];
					$user_name=$_REQUEST['user_name'];
					$gen=$_REQUEST['gen'];
					$lag_arr=$_REQUEST['lag'];
					$lag=implode(",",$lag_arr);
					$cid=$_REQUEST['cid'];
					date_default_timezone_set('asia/calcutta');
					$updated_dt=date("Y-m-d H:i:s");
					
					if($_FILES['img']['size']>0)
					{	
						$img=$_FILES['img']['name'];
						$path='upload/customer/'.$img;
						$dup_img=$_FILES['img']['tmp_name'];
						move_uploaded_file($dup_img,$path);
						$data=array("name"=>$name,
						"user_name"=>$user_name,
						"gen"=>$gen,
						"lag"=>$lag,
						"cid"=>$cid,
						"img"=>$img,
						"updated_dt"=>$updated_dt);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							unlink('upload/customer/'.$old_img);
							echo "<script>
							alert('Save Success');
							window.location='profile';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					else
					{
						$data=array("name"=>$name,
						"user_name"=>$user_name,
						"gen"=>$gen,
						"lag"=>$lag,
						"cid"=>$cid,
						"updated_dt"=>$updated_dt);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							echo "<script>
							alert('Save Success');
							window.location='profile';
							</script>";
						}
						else
						{
							echo "Not success";
						}
					}
					
				}
					
				
			}
			include_once('cust_edit.php');
			break;
			
			
			include_once('contact.php');
			break;
			
			
			
			default:
			echo "Page Not Found";
			break;
		}
		
	}
	
	
}
$obj=new control;

?>