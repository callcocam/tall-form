<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Tall\Form\Fields;

use Illuminate\Support\Facades\Storage;
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

    public static function email($label, $name=null)
    {
        $field = new static($label, $name);
        $field->attribute('type','email');
        return $field;
    }

    public static function phone($label, $name=null)
    {
        $field = new static($label, $name);
        $field->attribute('type','phone');
        return $field;
    }

   /**
     * @return $this
     */
    public static function cover($label, $name = null, $alias = null)
    {
        $field = new static($label, $name);
        $field->component('cover');
        $field->help('PNG, JPG, GIF up to 10MB');
        $field->attribute('type', 'file');
        $field->attribute('id', $name);
        $field->attribute('name', $name);
        $field->isLabel(false);
        return $field;
    }

   /**
     * @return $this
     */
    public static function images($label, $name = null)
    {
        $field = new static($label, $name);
        $field->component('cover');
        $field->help('PNG, JPG, GIF up to 10MB');
        $field->attribute('multiple', true);
        $field->attribute('type', 'file');
        $field->attribute('id', $name);
        $field->attribute('name', $name);
        $field->isLabel(false);
        return $field;
    }

   /**
     * @return $this
     */
    public static function avatar($label, $name = null, $alias = null)
    {
        $field = new static($label, $name);
        $field->component('tall-avatar');
        $field->setKey(sprintf("files.%s", $field->name));
        $field->attribute('class', 'hidden');
        $field->attribute('type', 'file');
        $field->alias('alias', $alias ?? $field->name);
        return $field;
    }

    public static function textarea($label, $name=null)
    {
        $field = new static($label, $name);
        $field->component = "textarea";
        return $field;
    }

    public static function radio($label, $name=null, $options=null)
    {
        $field = new static($label, $name);
        $field->attribute('type','radio');
        $field->component = "radio";
        $field->flex = "row space-x-2";
        $field->options($options);
     
        return $field;
    }

    public static function checkbox($label, $name=null, $options=1)
    {
        $field = new static($label, $name);
        $field->attribute('type','checkbox');
        $field->component = "checkbox";
        if(is_array($options)){
            $field->options($options);
        }else{
            $field->options = $options;
        }
     
        return $field;
    }



    public static function select($label, $name=null, $options=[])
    {
        $field = new static($label, $name);
        $field->component = "select";
        $field->options($options);
     
        return $field;
    }


    public static function mask($label, $name=null, $options=[])
    {
        $field = new static($label, $name);
        $field->component = "mask";
        $field->options($options);
     
        return $field;
    }


    public static function quill($label, $name=null, $options=[], $event='text-change')
    {
        $field = new static($label, $name);
        $field->component = "quill";
        $field->event = $event;
        $field->options(array_merge(config('forms.fields.quill.options',[]), $options));
     
        return $field;
    }
}
