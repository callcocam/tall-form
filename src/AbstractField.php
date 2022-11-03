<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Tall\Form;

use Illuminate\Support\Str;

abstract class AbstractField
{
   
    protected $name;
    protected $label;
    protected $key;
    protected $default;
    protected $span = '12';
    protected $flex = 'col';
    protected $component= "input";
    protected $attributes = [];
    protected $rules = [];
    protected $options = [];

    public function __construct($label, $name=null)
    {
        $this->name     =   $name ?? Str::slug($label, '_');
        $this->label     =   $label;
        $this->key      = sprintf("form_data.%s",  $this->name);
        $this->attributes['wire:model.lazy']  = $this->key;
    }

    public static function make($label, $name=null)
    {
        return new static($label, $name);
    }

    public function attribute($name, $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    public function component($component)
    {
        $this->component  = $component;

        return $this;
    }

    public function span($span)
    {
        $this->span  = $span;

        return $this;
    }

    public function options($options= [])
    {
        $this->options  = $options;

        return $this;
    }


     /**
     * @param $rules
     * @param array $data
     * @return $this
     */
    public function rules($rules, $data = [])
    {
        if (is_callable($rules)) {
            $this->rules = call_user_func($rules, $data);
        } else {
            $this->rules = $rules;
        }

        return $this;
    }

    public function hiddenIf($condition)
    {
      $this->viseble = $condition;

      return $this;
    }
    public function __get($name)
    {
        return $this->{$name};
    }
}
