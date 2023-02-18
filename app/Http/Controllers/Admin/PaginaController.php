<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PaginaController extends BaseModuleController
{
    protected $moduleName = 'paginas';


    protected $indexOptions = [
        'reorder' => true,
    ];

    protected $indexColumns = [
        'title' => [
            'title' => 'Página',
            'field' => 'title',
        ],
    ];
}
