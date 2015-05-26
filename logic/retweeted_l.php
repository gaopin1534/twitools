<?php

class retweeted_l{
    public function getTweets($tw,$max_id = null){
        $option["user_id"] = $_SESSION["user_id"];
        $option["count"] = TWEET_LIMIT;
        if($since_id){
            $option["since_id"] = $since_id;
        }
        if($max_id){
            $option["max_id"] = $max_id;
        }
        $ret = $tw->get("statuses/retweets_of_me", $option);
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