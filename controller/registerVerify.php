<?php
class registerVerify 
{
    public function verify_age($index) {
        $date_today = new DateTime(); 
        // moins -18 ans
        $date_18 = $date_today->sub(new DateInterval('P13Y'));
        $date_birth = new DateTime($index);
        
        if($date_birth >= $date_18) {
            return false; 
        } else {
            return true; 
        }
    }
}