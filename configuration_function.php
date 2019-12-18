<?php
	$api_host = "13.233.7.230";

	function register_api($host, $name, $last_name, $company_name, $role, $email, $pass){
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://".$host.":3001/api/dataManager/add/user",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "{  \n   \"_email\":\"$email\",\n   \"_password\":\"$pass\",\n   \"_userDataJSON\":{  \n      \"name\":\"$name\",\n      \"last_name\":\"$last_name\",\n      \"role\":\"$role\"\n,\n      \"company_name\":\"$company_name\"\n    }\n}",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: application/json",
		    "Postman-Token: fc84faf6-0c05-4835-a83f-1317c52866e1",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}


	function check_user_exist($host,$email){
		$curl = curl_init();
		$data  = "{\n  \"_email\": \"$email\"\n}";
		$length = strlen($data);

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://".$host.":3001/api/dataManager/get/userDetails",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $data,
		  CURLOPT_HTTPHEADER => array(
		    "Accept: */*",
		    "Accept-Encoding: gzip, deflate",
		    "Cache-Control: no-cache",
		    "Connection: keep-alive",
		    "Content-Length: $length",
		    "Content-Type: application/json",
		    "Cookie: connect.sid=s%3AHl_6kGDVrsy-FAbvNYd3HHXYp3GOSKhI.HW1RfY6SHJV4ETBIoj9RjFU%2FSl1nk%2BltbPC37L88bms",
		    "Host: $host",
		    "Postman-Token: c9bd7639-0738-4aaf-96f8-faf69d049094,b867896b-e5c9-44f3-b238-12a8d5334ab8",
		    "User-Agent: PostmanRuntime/7.18.0",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
			$response_data = json_decode($response,true);
			if (is_array($response_data)) {
				return 1;
			}else{
				return 0;
			}
			// print_r($response_data);
			// $counter =  count($response_data['userDataJSON']);
			// if ($counter>0) {return true;
			// }else{return false; }
			
		}
	}


	function login_user($host,$email){
		$curl = curl_init();
		$data  = "{\n  \"_email\": \"$email\"\n}";
		$length = strlen($data);

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://".$host.":3001/api/dataManager/get/userDetails",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $data,
		  CURLOPT_HTTPHEADER => array(
		    "Accept: */*",
		    "Accept-Encoding: gzip, deflate",
		    "Cache-Control: no-cache",
		    "Connection: keep-alive",
		    "Content-Length: $length",
		    "Content-Type: application/json",
		    "Cookie: connect.sid=s%3AHl_6kGDVrsy-FAbvNYd3HHXYp3GOSKhI.HW1RfY6SHJV4ETBIoj9RjFU%2FSl1nk%2BltbPC37L88bms",
		    "Host: $host",
		    "Postman-Token: c9bd7639-0738-4aaf-96f8-faf69d049094,b867896b-e5c9-44f3-b238-12a8d5334ab8",
		    "User-Agent: PostmanRuntime/7.18.0",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}

	function get_all_track_logs($host){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://$host:3001/api/dataManager/get/trackLogs",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "Accept: */*",
		    "Accept-Encoding: gzip, deflate",
		    "Cache-Control: no-cache",
		    "Connection: keep-alive",
		    "Content-Type: application/json",
		    "Cookie: connect.sid=s%3A6XD3EZPuOjE-HI4pJFkCF2rkQmlkHE-b.l%2Fyn8S5B7WZ3H%2Bym9yOEr5GiNH1lAo6TGRkq%2B7wqtAw",
		    "Host: $host:3001",
		    "Postman-Token: 6632a1c0-6b19-47b4-a1d6-3426444e2962,bf74f4d7-6bf2-4360-8b7c-145a29b716e7",
		    "User-Agent: PostmanRuntime/7.18.0",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}

	function get_track_details($host, $trackId){
		$curl = curl_init();
		$data = "{\n  \"_songId\": \"$trackId\"\n}";
		$length = strlen($data);

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://$host:3001/api/dataManager/get/trackDetails",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $data,
		  CURLOPT_HTTPHEADER => array(
		    "Accept: */*",
		    "Accept-Encoding: gzip, deflate",
		    "Cache-Control: no-cache",
		    "Connection: keep-alive",
		    "Content-Length: $length",
		    "Content-Type: application/json",
		    "Cookie: connect.sid=s%3A6XD3EZPuOjE-HI4pJFkCF2rkQmlkHE-b.l%2Fyn8S5B7WZ3H%2Bym9yOEr5GiNH1lAo6TGRkq%2B7wqtAw",
		    "Host: $host:3001",
		    "Postman-Token: af248a89-8a15-423b-9fff-da0b3997f824,964d75b7-c1eb-4823-b4d4-2c3fd5df219b",
		    "User-Agent: PostmanRuntime/7.18.0",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}


	function get_all_user_logs($host){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_PORT => "3001",
		  CURLOPT_URL => "http://$host:3001/api/dataManager/get/userLogs",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "Accept: */*",
		    "Accept-Encoding: gzip, deflate",
		    "Cache-Control: no-cache",
		    "Connection: keep-alive",
		    "Content-Type: application/json",
		    "Cookie: connect.sid=s%3A6XD3EZPuOjE-HI4pJFkCF2rkQmlkHE-b.l%2Fyn8S5B7WZ3H%2Bym9yOEr5GiNH1lAo6TGRkq%2B7wqtAw",
		    "Host: $host:3001",
		    "Postman-Token: 910fdbf8-c710-4c34-a3ae-f221a7072cd1,168e7629-2e20-45d8-ad80-79fafcdfbada",
		    "User-Agent: PostmanRuntime/7.18.0",
		    "cache-control: no-cache"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return "cURL Error #:" . $err;
		} else {
			return $response;
		}
	}

	

	function see_status_3($data){
		if (isset($data['choice'])) {
			if ($data['choice']=="success") {
				echo '<div style="padding:10px;color:#fff;background-color:green">'.$data['value'].'</div>';
			}
			else{
				echo '<div style="padding:10px;color:#fff;background-color:red">'.$data['value'].'</div>';
			}
		}
	}

	function authenticate_user($user, $role){
		if ($_SESSION['user']==$user && $_SESSION['role']==$role) {
			//do nothing you are good to go
		}
		else
		{
			header('location:index.php?choice=error&value=Session Out, Please check Supplied Credentials.');
			exit();
		}
	}
  ?>