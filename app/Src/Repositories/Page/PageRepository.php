<?php

namespace App\Src\Repositories\Page;

use App\Models\Pagina;

class PageRepository implements PageRepositoryInterface{
    
    public function getById($id)
    {
        return Pagina::where('id', $id)->first();
    }

}