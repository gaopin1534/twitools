<?php

class oneside_to_me_l{
    public function getFollowers($tw,$cursor = null){
        $option["user_id"] = $_SESSION["user_id"];
        $option["count"] = 200;
        if($cursor){
            $option["cursor"] = $cursor;
        }

        $ret = $tw->get("followers/list", $option);
        $tmp = $ret->errors;
        if($tmp[0]->code){
            return $tmp[0]->code;
        }
        if ($tw->getLastHttpCode() == 200){
            return $ret;
        }else{
            return false;
        }

    }
    public function bulkDelete($tweets,$tw){
        foreach($tweets as $val){
            if(!$this->delTweet($val,$tw)){
                return false;
            }
        }
        return true;
    }
    private function delTweet($id,$tw){
        $ret = $tw->post("statuses/destroy/".$id);
        if ($tw->getLastHttpCode() == 200){
            return true;
        }else{
            return false;
        }
    }
}

?>