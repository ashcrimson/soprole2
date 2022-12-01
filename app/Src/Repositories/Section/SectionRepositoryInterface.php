<?php

namespace App\Src\Repositories\Section;

use App\Models\Pagina;
use App\Models\Seccion;

interface SectionRepositoryInterface{
    public function getAllByPage(Pagina $page);
    public function store();
    public function destroy(Seccion $seccion);
}