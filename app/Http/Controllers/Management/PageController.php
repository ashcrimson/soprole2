<?php

namespace App\Http\Controllers\Management;

use App\Models\Pagina;
use App\Http\Controllers\Controller;
use App\Src\Repositories\Page\PageRepository;
use App\Src\Repositories\Section\SectionRepository;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $sectionRespository;

    function __construct( SectionRepository $sectionRespository)
    {
        $this->sectionRespository = $sectionRespository;
    }
    
    public function index(Pagina $page)
    { 
        return view('management.paginas.sections', compact('page'));
    }

    public function getSections(Pagina $slug)
    { 
        return $this->sectionRespository->getAllByPage($slug->id);
    }

}
