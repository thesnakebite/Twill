<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleTags;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Receta;

class RecetaRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleTags;

    public function __construct(Receta $model)
    {
        $this->model = $model;
    }

    public function allRecetas()
    {
        return $this->model
            ->published()
            ->orderBy('published')
            ->get();
    }
}
