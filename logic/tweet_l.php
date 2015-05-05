<?php

class tweet_l{
    public function tweet($tw,$text){
        $ret = $tw->post("statuses/update", array("status" => htmlspecialchars($text)));
        if ($tw->getLastHttpCode() == 200){
            return true;
        } else {
            return false;
        }
    }
}

?>