<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Tall\Form\Fields;

use Tall\Form\AbstractField;

class Field extends AbstractField
{
    public static function text($label, $name=null)
    {
        $field = new static($label, $name);
        $field->attribute('type','text');
        return $field;
    }

    public static function date($label, $name=null)
    {
        $field = new static($label, $name);
        $field->attribute('type','date');
        $field->span = "6";
        return $field;
    }

    public static function textarea($label, $name=null)
    {
        $field = new static($label, $name);
        $field->component = "textarea";
        return $field;
    }

    public static function radio($label, $name=null, $options=[])
    {
        $field = new static($label, $name);
        $field->attribute('type','radio');
        $field->component = "radio";
        $field->flex = "row space-x-2";
        $field->options($options);
     
        return $field;
    }

    public static function checkbox($label, $name=null, $options=[])
    {
        $field = new static($label, $name);
        $field->attribute('type','checkbox');
        $field->component = "checkbox";
        $field->options($options);
     
        return $field;
    }

    public static function select($label, $name=null, $options=[])
    {
        $field = new static($label, $name);
        $field->component = "select";
        $field->options($options);
     
        return $field;
    }
}
