<?php
namespace Gustavo\Students\Helpers\Message;

class Messages
{

    public function setMessageSuccess($message)
    {

        $_SESSION["message"][] = [
            'type' => 'success',
            'message' => $message
        ];

    }

    public function setMessageError($message)
    {

        $_SESSION['message'][] = [
            'type' => 'danger',
            'message' => $message
        ];

    }

    public function getMessage()
    {

        if(isset($_SESSION['message'])){
            return $_SESSION['message'];
        }
        return false;
    }

    public function destroyMessage()
    {

        if(isset($_SESSION['message'])){
            unset($_SESSION['message']);
        }

    }

}