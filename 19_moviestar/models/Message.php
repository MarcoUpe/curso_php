<?php

    class Message {

        private $url;

        public function __construct($url) {
            $this->url = $url;
        }        
        
        public function setMessage($msg, $type, $redirect = "index.php") {

            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;

            if($redirect != "back") {
                header("Locations: $this->url" . $redirect);
            } else {
                header("Locations: " . $_SERVER["HTTP_REFERER"]);
            }

        }

        public function getMessage() {

        }

        public function clearMessage() {

        }

    }

?>