<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Tall\Form;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use SplFileInfo;
use Tall\Theme\Models\Image;

abstract class AbstractField
{
   
    protected $name;
    protected $label;
    protected $key;
    protected $alias;
    protected $default;
    protected $multiple = false;
    protected $span = '12';
    protected $flex = 'col';
    protected $component= "text";
    protected $attributes = [];
    protected $rules = [];
    protected $options = [];
    protected $event;
    protected $help;
    protected $value;
    protected $isLabel = true;

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

    /**
     * @param $help
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        return $this;
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

    public function multiple($multiple)
    {
        $this->multiple  = $multiple;

        return $this;
    }

    public function help($help)
    {
        $this->help  = $help;

        return $this;
    }

    public function span($span)
    {
        $this->span  = $span;

        return $this;
    }

    public function isLabel($isLabel)
    {
        $this->isLabel  = $isLabel;

        return $this;
    }

    public function alias($alias)
    {
        $this->alias  = $alias;

        return $this;
    }

    public function hasType($type)
    {

        return data_get($this->attributes, 'type') === $type;
    }

    public function has($attribute)
    {

        return isset($this->attributes[$attribute]);
    }

    public function options($options= [])
    {
        $this->options  = $options;

        $this->multiple = true;

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

    public function setValue($value)
    {
      $this->value = $value;

      return $this;
    }

    public function setFiles($files=[])
    {
        $this->value=[];
        foreach ($files as $value) {
            if(is_string($value)){
                $path = $value;
                $position = 1;
            }else{
                $path = data_get($value, 'source');
                $position = data_get($value, 'ordering');
            }
            if($path && Storage::exists($path)){
                $image = new SplFileInfo(Storage::path($path));
                $this->value[] = [
                    'source' => data_get($value, 'id'),
                    'options' => [
                        'type' => 'local',
                        'file' => [
                            'name' => $image->getBasename(),
                            'size' => $image->getSize(),
                            'type' => $image->getType(),
                        ],
                        'metadata' => [
                            'poster' => Storage::url($value),
                            
                            'position' => $position
                        ],
                    ],
                ];
            }
        }

      return $this;
    }
    public function __get($name)
    {
        return $this->{$name};
    }
}
