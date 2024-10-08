<?php
namespace Gustavo\Students\Helpers\Template;
use Gustavo\Students\Helpers\Message\Message;

class Loader
{

    private Message $message;

    public function __construct(){

        $this->message = new Message();

    }

    //C:\xampp\htdocs\src\Helpers\Template/../../view
    //C:\xampp\htdocs\src\views
    public function render($template, $default = true, $data = [])
    {   

        $_message = $this->message->getMessage();

        foreach ($data as $key => $value) {
            ${$key} = $value;
        }

        if ($default) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/header.php"));
        }
        require_once(realpath(dirname(__FILE__) . "/../../views/partias/messager.php"));


        require_once(realpath(dirname(__FILE__) . "/../../views/$template.php"));

        if ($default) {
            require_once(realpath(dirname(__FILE__) . "/../../views/partias/footer.php"));
        }

        $this->message->destroyMessage();
    }
}