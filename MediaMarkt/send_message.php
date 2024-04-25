<?php
//busca conexão da BD e as funções
require('connection.inc.php');
require('functions.inc.php');
//Guarda os dados da página contacto em variaveis
$name=get_safe_value($con,$_POST['name']);
$email=get_safe_value($con,$_POST['email']);
$mobile=get_safe_value($con,$_POST['mobile']);
$comment=get_safe_value($con,$_POST['message']);
$added_on=date('Y-m-d h:i:s');
//Insere os dados na tabela
mysqli_query($con,"insert into contact_us(name,email,mobile,comment,added_on) values('$name','$email','$mobile','$comment','$added_on')");
echo "Obrigado por nos contactar!";
?>