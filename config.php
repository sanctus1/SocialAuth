<?php

    function POST($client_id, $redirect_uri, $auth_code, $appID_secret_base64)
    {
        
        $data = array('grant_type'=>'authorization_code', 'client_id'=>$client_id,'redirect_uri'=>$redirect_uri,'code'=>$auth_code);


        $query = http_build_query($data);

    $contex_data = array(
                         'method'=>'POST',
                         'header'=>'Authorization:Basic '.$appID_secret_base64,
                         'content'=>$query
                        );
    $contx = stream_context_create(array('http'=>$contex_data));

  
    $result = file_get_contents('https://graph.facebook.com/oauth/access_token',false,$contx);

    return $result;

    }
if(isset($_POST['poststatus']))
{
	$access=$_SESSION['access'];
	$postfields=array(
					'message' => $_POST['msg'],
					'access_token'=>$access
					);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://graph.facebookcom/');
	curl_setopt($ch, CURLOPT_RETURNTRANFER,true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELD,$postfields);
	
	$result=curl_exec($sh);
	$r=json_decode($result);
}
	
	

?>