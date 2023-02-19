<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ContributorController extends BaseModuleController
{
    protected $moduleName = 'contributors';

    protected $indexOptions = [
    ];

    protected $titleColumnKey = 'name';
}
