<?php

class bulk_delete_l{
    public function getTweets($tw,$max_id = null){
        $option["user_id"] = $_SESSION["user_id"];
        $option["count"] = TWEET_LIMIT;
        if($since_id){
            $option["since_id"] = $since_id;
        }
        if($max_id){
            $option["max_id"] = $max_id;
        }
        $ret = $tw->get("statuses/user_timeline", $option);
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