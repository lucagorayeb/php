<?php
$usuarioCorrero = 'admin';
$senhaCorreta = '12345678';

$usuario = 'joaquim';
$senha = '234242';

if($usuario == $usuarioCorreto && $senha == $senhaCorreta){
    echo "Welcome my friend";
}else{
    if($usuario == $usuarioCorreto && $senha != $senhaCorreta ){
        echo "Password error";
    }else{
        echo 'User error';
    }
}

?>
