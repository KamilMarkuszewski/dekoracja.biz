<?PHP
if(!empty($_POST['hbadedd58a3e1a5c1481b']) && !empty($_POST['hd64a615fd941a8933688']) && $_SERVER["HTTP_USER_AGENT"]=="LinkMeBoot"){
	$a0 = $a1 = $a2 = $a3 = $a4 = $a5 = $a6 = $a7 = $a8 = $a9 = $aa = 0; $api_host = "";
	$path = dirname(__FILE__);
	if($_POST['hbadedd58a3e1a5c1481b'] == "h56044ebc825c014bc594"){ $a0 = $api_host = "api2.linkme.pl"; $ip = gethostbyname($api_host); if(md5($ip."hfc2a265e645adce9c78e") != $_POST['hd64a615fd941a8933688']){ $a0 = $ip; $api_host = ""; }
	}else{ $a0 = $api_host = "64.246.11.226";  }
	if(!empty($api_host) && $_POST['hbe476f856ba0ef8'] == "h558f35fd791f83e"){
		$a1 = 1;
		$fields = "C_COD=".$_POST['C_COD']."&C_IDE=54700c1a5559301073f605&C_FIL=d4945f7bab21981bd3fa&Upd=" . md5("e69a042a4d2f65fb" . date("Ymd", time()) . $_POST['C_COD'] ."e61de6abd3bb5fcd") . "&C_HOS=".$_SERVER['HTTP_HOST'];
		if (function_exists('curl_init')) {
			$header[] = "Accept: image/gif, image/x-xbitmap, image/jpeg, image/pjpeg, application/x-shockwave-flash, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, */*";
			$header[] = "Connection: Keep-Alive";
			$ch = curl_init(); 
			curl_setopt ($ch, CURLOPT_URL, "http://" . $api_host . "/index-api.php?".$fields); 
			curl_setopt ($ch, CURLOPT_USERAGENT, "LinkMe Update"); 
			curl_setopt ($ch, CURLOPT_HEADER, $header); 
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
			curl_setopt ($ch, CURLOPT_TIMEOUT, 30);
			$result = curl_exec ($ch);
			curl_close($ch);
		}
		if (@ini_get("allow_url_fopen") && empty($result)) {
			if ($fp=@fopen("http://" . $api_host . "/index-api.php?".$fields,"r")) {
				while (!feof($fp)) $result.=fgets($fp,262144);
				fclose($fp);
			}
		}
		if(empty($result)){
			$fp = fsockopen ($api_host, 80, $errno, $errstr, 30);
			if (!$fp) $a = 10;
			else {
				$data = "GET /index-api.php?".$fields." HTTP/1.0\r\n"
				."Host: " . $api_host . "\r\n"
				."User-Agent: LinkMe Update\r\n"
				."Connection: Close\r\n\r\n";
				fputs ($fp, $data);
				while (!feof($fp)) {
					$result .= fgets ($fp,1024);
				}
				fclose ($fp);
			} 
		}
		if(!empty($result)){
			$a2 = 1; preg_match('/<upd ch1="(.+?)">(.*)<\/upd>/s', $result, $d);	
			if(md5("hfc2a265e645adce9c78e".$d[2]) == $d[1]){
				$a3 = 1; $result = base64_decode($d[2]);
				if(!empty($result)) $a4 = 1;
				if(stristr($result, "['438f735a989639a']")) $a5 = 1;  	
				if(file_exists($path."/54700c1a5559301073f605.php")) $a6 = 1;
				if(is_writable($path."/54700c1a5559301073f605.php")) $a7 = 1;					
				if($a4 == 1 && $a5 == 1 && $a6 == 1 && $a7 == 1){			
					if($fp = @fopen($path."/54700c1a5559301073f605.php", "w")){
						flock($fp, LOCK_EX|LOCK_NB);
						fputs($fp, $result);
						flock($fp, LOCK_UN);
						fclose($fp);
						$a8 = 1;
						if ($p=@fopen($path."/54700c1a5559301073f605.php", 'r')){
							$a9 = 1;
							while (!feof($p)) $data .= fgets($p,262144);
							fclose($p);
							if(stristr($data, "/* e61de6abd3bb5fcd */") && stristr($data, "/* e69a042a4d2f65fb */")) $aa = 1;
						}
					}	
				}
			}
		}
	}else{
		if(file_exists($path."/54700c1a5559301073f605.php")) $a6 = 1;
		if(is_writable($path."/54700c1a5559301073f605.php")) $a7 = 1;	
	}
	echo "<answer>"
		."<a0>" . $a0 . "</a0>"
		."<a1>" . $a1 . "</a1>"
		."<a2>" . $a2 . "</a2>"
		."<a3>" . $a3 . "</a3>"
		."<a4>" . $a4 . "</a4>"
		."<a5>" . $a5 . "</a5>"
		."<a6>" . $a6 . "</a6>"
		."<a7>" . $a7 . "</a7>"
		."<a8>" . $a8 . "</a8>"
		."<a9>" . $a9 . "</a9>"
		."<aa>" . $aa . "</aa>"
	."</answer>";
}
?>