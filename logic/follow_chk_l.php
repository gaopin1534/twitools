<?php

class follow_chk_l{
    public function follow_chk($tw,$source,$target){
        $ret = $tw->get("friendships/show", array("source_screen_name" => $source,"target_screen_name" => $target));
        $result["source_to_target"] = $ret->relationship->source->following;
        $result["target_to_source"] = $ret->relationship->target->following;
        return $result;
    }

}

?>