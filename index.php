<!DOCTYPE html>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FindMyIP | Script Created By: Hexa</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://myhexa.co/back/assets/css/style.deep-orange-300.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<style type ="text/css" >
   .footer{ 
       position: fixed;     
       text-align: center;    
       bottom: 30px; 
       width: 100%;
   }  
</style>
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><center><img src="assets/ip.png" title="Web Address" width="100" height="100"><h1>Your IP Address:
<b><?PHP

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip;


?></h1></b></center>

<div class="footer"><br><br><br><br><br><br><br><br><br><br><br><br><center><a href="https://www.000webhost.com/950934.html" class="btn btn-xlg btn-raised btn-danger"><i class="zmdi zmdi-cloud"></i>  Get Free Hosting</a>

</body>
</html>
