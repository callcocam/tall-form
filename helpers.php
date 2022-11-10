<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/

use Tall\Form\Fields\Field;

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


if (!function_exists('field')) {
    
    function field($label,$name=null){
       return Field::make($label,$name);
    }
}

if (!function_exists('avatar')) {
    
    function avatar($label,$name=null,$alias=null){
       return Field::avatar($label,$name,$alias);
    }
}

if (!function_exists('email')) {
    
    function email($label,$name="email"){
       return Field::email($label,$name);
    }
}

if (!function_exists('password')) {
    
    function password($label,$name="password"){
       return Field::password($label,$name);
    }
}

if (!function_exists('phone')) {
    
    function phone($label,$name="password"){
       return Field::phone($label,$name);
    }
}

if (!function_exists('color')) {
    
    function color($label,$name=null){
       return Field::color($label,$name);
    }
}

if (!function_exists('cover')) {
    
    function cover($label,$name=null){
       return Field::cover($label,$name);
    }
}

if (!function_exists('textarea')) {
    
    function textarea($label,$name=null){
       return Field::textarea($label,$name);
    }
}

if (!function_exists('file')) {
    
    function file($label, $name = null, $file = 'file'){
       return Field::file($label,$name, $file);
    }
}

if (!function_exists('checkbox')) {
    
    function checkbox($label, $name = null, $options=[]){
       return Field::checkbox($label,$name, $options);
    }
}

if (!function_exists('radio')) {
    
    function radio($label, $name = null, $options=[]){
       return Field::radio($label,$name, $options);
    }
}

if (!function_exists('select')) {
    
    function select($label, $name = null, $options=[]){
       return Field::select($label,$name, $options);
    }
}