<?php 
	
	$text = "";
	$error = "";
	$new_text = "";
	$error_pas = "";

	if (isset($_POST['submit'])) 
	{
		$text = $_POST['text'];
		$select = $_POST['select'];
		$password = $_POST['password'];

		if (empty($text)) 
		{
			$error = "Please Enter Your text";
		}
		elseif (empty($password)) 
		{
			$error_pas = "Please Enter Password";
		}
		else
		{
			if ($select == "Encrypt") 
			{
				$new_text = openssl_encrypt($text,"AES-128-ECB",$password);
			}
			elseif ($select == "Decrypt") 
			{
				$new_text = openssl_decrypt($text,"AES-128-ECB",$password);
			}
		}
	}


?>