<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
return [
  'fields'=>[
    'status'=>[
      'options'=>['draft','published']
    ],
    'quill'=>[
        'options'=>[
            'modules' => [
                'toolbar' => [
                    ['bold', 'italic', 'underline'],
                    [
                    ['list' =>'ordered'],
                    ['header' =>1],
                    ['background' => []],
                    ],
                ],
            ],
            'placeholder' => 'Entre com o conteudo...',
            'theme' => 'snow',
        ]
    ]
  ]
];
