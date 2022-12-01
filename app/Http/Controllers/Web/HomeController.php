<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Src\Repositories\Section\SectionRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $sectionRepository;

    function __construct(SectionRepository $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
    }
    public function index()
    {
        $secciones = $this->sectionRepository->all();

        return view('web.home', compact('secciones'));
    }
}
