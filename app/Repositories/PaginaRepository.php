<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleTranslations;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Pagina;

class PaginaRepository extends ModuleRepository
{
    use HandleBlocks, HandleTranslations, HandleSlugs, HandleRevisions;

    public function __construct(Pagina $model)
    {
        $this->model = $model;
    }
}
