<?php

namespace APP\Utils;

class Redirect
{   
    //metodo estatico
    public static function redirect(
        string|array $message,
        string $url = '../View/Message.php',
        string $type = 'success')
    {
        session_start();
        if(is_array($message)){
            $error = "";
            foreach($message as $msg){
                $error = "<li>$msg</li>";
            }
            $_SESSION['msg_warning'] = $error;
        }else{
            if($type == 'success'){
                $_SESSION['msg_success'] = $message;
            }else if($type == 'error'){
                $_SESSION['msg_error'] = $message;
            }else{
                $_SESSION['msg_warning'] = $message;
            }
        }
        header("location:$url");
    }
}