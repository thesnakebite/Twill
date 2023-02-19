<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class RecetaController extends BaseModuleController
{
    protected $moduleName = 'recetas';

    protected $indexOptions = [
    ];

    protected $indexColumns = [
        'image' => [
            'thumb' => true, // Image column
            'variant' => [
                'role' => 'cover',
                'crop' => 'default',
            ]
        ],
        'subtitle' =>[
            'title' => 'Subtítulo',
            'field' => 'subtitle',
            'sort' => true
        ],
        'name' => [
            'title' => 'title',
            'field' => 'title',
            'sort' => true
        ],
        'tagsAsString' => [
            'title' => 'Tags',
            'field' => 'tagsAsString',
            'present' => true
        ],
    ];
}
