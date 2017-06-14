<?php 

namespace App;
use Jenssegers\Date\Date;

trait DatesTranslator{
    public function getStartAttribute($date){
        return new Date($date);
    }
    public function getEndAttribute($date){
        return new Date($date);
    }
    public function getCreatedAtAttribute($date){
        return new Date($date);
    }
}

?>