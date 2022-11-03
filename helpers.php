<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/

if (!function_exists('form')) {
    
    function form($name, $fields){
        if(collect($fields)->count()){
            if($field = collect($fields)->filter(function($item) use($name){
                return $item->name == $name;
            })->first()){
                $field->hiddenIf(false);
                return $field;
            }
        }
        return null;
    }
}
