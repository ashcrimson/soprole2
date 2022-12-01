<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Section\SectionRequest;
use App\Models\Seccion;
use App\Src\Repositories\Page\PageRepository;
use App\Src\Repositories\Section\SectionRepository;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    protected $sectionRepository;
    protected $pageRepository;

    function __construct(SectionRepository $sectionRepository, PageRepository $pageRepository)
    {
        $this->sectionRepository = $sectionRepository;
        $this->pageRepository = $pageRepository;
    }

    public function create()
    { 
        $page = $this->pageRepository->getById(request('pag'));
        
        return view('management.section.create', compact('page'));
    }

    public function edit(Seccion $section)
    {
        $section = $this->sectionRepository->edit($section);

        return view('management.section.edit', compact('section'));
    }

    public function store(SectionRequest $request)
    {
        $response = $this->sectionRepository->store();
        
        if ($response->status) return redirect()->route('administracion.page.index', ['page' => $response->page])->with('success', $response->message);
            
        return redirect()->back()->with('fail', 'No se pudo crear el registro');
    }

    public function destroy(Seccion $section)
    {
        $response = $this->sectionRepository->destroy($section);
        
        if($response->status){
            return response()->json([
                "result" => true,
                "message" => "Registro eliminado con éxito",
                "redirect" => route('administracion.page.index', ['page' => $response->page])
            ]);
        }else{
            return response()->json([
                "result" => false,
                "message" => "No se pudo eliminar el registro"
            ]);
        }
    }
}
