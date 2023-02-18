<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RecetaRepository;

class RecetaController extends Controller
{
    public function __construct(RecetaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('site.index', [
            'recetas' => $this->repository->allRecetas()
        ]);
    }

    public function show($slug)
    {
        $recetas = $this->repository->forSlug($slug);
        abort_unless($recetas, 404, 'Recetas ');

        return view('site.show', compact('recetas'));
    }
}
