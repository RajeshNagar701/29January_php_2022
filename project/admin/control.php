<?php

include_once('model.php');  // step 1 load model 


class control extends model  // step 2 extends model class
{
	
	function __construct()
	{ 
		session_start();
		model::__construct();  // step 3 load model __construct()
		
		$path=$_SERVER['PATH_INFO'];//http://localhost/students/29Jan_php_2022/control.php
		
		switch($path)
		{
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$anm=$_REQUEST['anm'];
				$apass=$_REQUEST['apass'];
				$enc_pass=md5($apass); // password convert into encriypted
				
				$where=array("anm"=>$anm,"apass"=>$enc_pass);
				$res=$this->select_where('admin',$where);
				$chk=$res->num_rows; // check cond by rows
				if($chk==1)  // 1 means true and 0 false
				{
					$fetch=$res->fetch_object();
					
					$_SESSION['admin_id']=$fetch->admin_id;
					$_SESSION['adminname']=$fetch->name;;
					$_SESSION['anm']=$fetch->anm;
					echo "<script>
					alert('Login Success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login failed');
					window.location='index';
					</script>";
				}
				
			}
			include_once('index.php');
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin_id']);
			unset($_SESSION['adminname']);
			unset($_SESSION['anm']);
			echo "<script>
			alert('Logout Success');
			window.location='index';
			</script>";
			break;
			
			
			case '/delete':
			if(isset($_REQUEST['del_cust_id']))
			{
				$cust_id=$_REQUEST['del_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				$sel_res=$this->select_where('customer',$where);
				$res_fetch=$sel_res->fetch_object();
				$img_name=$res_fetch->img;
				
				$res=$this->delete_where('customer',$where);
				if($res)
				{
					unlink('../website/upload/customer/'.$img_name);
					echo "<script>
					alert('Delete Success');
					window.location='manage_customer';
					</script>";
					}
			}
			
			if(isset($_REQUEST['del_emp_id']))
			{
				$emp_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee',$where);
				echo "<script>
				alert('Delete Success');
				window.location='manage_employee';
				</script>";
			}
			break;
			
			
			case '/status':
			if(isset($_REQUEST['status_cust_id']))
			{
				$cust_id=$_REQUEST['status_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				$sel_res=$this->select_where('customer',$where);
				$res_fetch=$sel_res->fetch_object();
				$status=$res_fetch->status;
				if($status=="Block")
				{
					$data=array("status"=>"Unblock");
					$res=$this->update_where('customer',$data,$where);
					if($res)
					{
						echo "<script>
						alert('Unblock Update Success');
						window.location='manage_customer';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Block");
					$res=$this->update_where('customer',$data,$where);
					if($res)
					{
						unset($_SESSION['cust_id']);
						unset($_SESSION['user_name']);
						unset($_SESSION['name']);
						echo "<script>
						alert('Block Update Success');
						window.location='manage_customer';
						</script>";
					}
				}
			}
			break;
			
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_employee':
			include_once('add_employee.php');
			break;
			
			case '/manage_employee':
			$emp_arr=$this->select('employee');
			include_once('manage_employee.php');
			break;
			
			case '/manage_customer':
			$cust_arr=$this->select_join2('customer','country','customer.cid=country.cid');
			include_once('manage_customer.php');
			break;
			
			case '/add_car_cate':
			include_once('add_car_cate.php');
			break;
			
			case '/manage_car_cate':
			include_once('manage_car_cate.php');
			break;
			
			case '/add_client':
			include_once('add_client.php');
			break;
			
			case '/manage_client':
			include_once('manage_client.php');
			break;
			
			case '/manage_contact':
			
			if(isset($_REQUEST['submit']))
			{
				$value=$_REQUEST['search'];
				$contact_arr=$this->select_like('contact','name',$value);
			}
			else
			{
				$contact_arr=$this->select('contact');
			}
			include_once('manage_contact.php');
			break;
			
			case '/reply':
			require '../website/phpmailer/PHPMailerAutoload.php';
			
			if(isset($_REQUEST['reply_contact_id']))
			{
				$contact_id=$_REQUEST['reply_contact_id'];
				$where=array("contact_id"=>$contact_id);
				$sel_res=$this->select_where('contact',$where);
				$fetch=$sel_res->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$to=$_REQUEST['to'];
					$sub=$_REQUEST['sub'];
					$msg=$_REQUEST['msg'];
					
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
					
					$mail->addAddress($to); // pas to email
					$mail->Subject = $sub;
					$mail->msgHTML($msg);

					if (!$mail->send()) {
					   $error = "Mailer Error: " . $mail->ErrorInfo;
						?><script>alert('<?php echo $error ?>');</script><?php
					} 
					else 
					{	
						$data=array("status"=>"A");
						$this->update_where('contact',$data,$where);
					   	echo "<script>
						alert('Reply Success');
						window.location='manage_contact';
						</script>";
					}		
				}
				
			}
			include_once('reply.php');
			break;
			
			case '/manage_feedback':
			$fed_arr=$this->select('feedback');
			include_once('manage_feedback.php');
			break;
			
			default:
			echo "Page Not Found";
			break;
		}
		
	}
	
	
}
$obj=new control;

?>