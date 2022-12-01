<?php

namespace App\Src\Repositories\Section;

use App\Models\Seccion;
use App\Http\Resources\SectionResource;
use App\Src\Helpers\File\Factories\HandleFileFactory;
use App\Src\Repositories\Page\PageRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SectionRepository implements SectionRepositoryInterface
{

    private $handleFileFactory;
    protected $pageRepository;

    public function __construct(HandleFileFactory $handleFileFactory, PageRepository $pageRepository)
    {
        $this->handleFileFactory = $handleFileFactory;
        $this->pageRepository = $pageRepository;
    }

    public function all()
    {
        try {
            return SectionResource::collection(Seccion::with('textos', 'imagenes', 'videos', 'documentos')->active()->get());
        } catch (\Exception $e) {
            Log::error('SectionRepository :' . $e->getMessage());
        }
    }

    public function getAllByPage($page)
    {
        try {
            return SectionResource::collection(Seccion::where('pagina_id', $page)->active()->get());
        } catch (\Exception $e) {
            Log::error('SectionRepository :' . $e->getMessage());
        }
    }

    public function edit($section)
    {

        try {
            return new SectionResource(Seccion::with(['textos', 'imagenes', 'videos', 'documentos'])->where('id', $section->id)->first());
        } catch (\Exception $e) {
            Log::error('SectionRepository :' . $e->getMessage());
        }

    }

    public function store()
    {
        try {

            $layoutSelected = request('layout');

            DB::beginTransaction();

            $section = new Seccion();

            $section->nombre = request('nombre');
            $section->layout = $layoutSelected;

            if (request('imagen_web')) {
                $image = $this->handleFileFactory->instance(request('imagen_web'));
                $section->imagen_web = 'storage/imagenes/secciones/' . $image->getFullName();
                $image->upload('public/imagenes/secciones');
            }

            if (request('imagen_mobile')) {
                $image = $this->handleFileFactory->instance(request('imagen_mobile'));
                $section->imagen_mobile = 'storage/imagenes/secciones/' . $image->getFullName();
                $image->upload('public/imagenes/secciones');
            }

            $section->pagina_id = request('pagina_id');
            $section->orden = request('orden');
            $section->estado = 1;

            $section->save();

            if ($layoutSelected == 2) {

                $items = [
                    ['item_id' => request('item_left'), 'posicion' => 'derecha'],
                    ['item_id' => request('item_right'), 'posicion' => 'izquierda'],
                ];

                $this->saveItems($items, $section);
            }

            DB::commit();

            $page = $this->pageRepository->getById(request('pagina_id'));

            return (object) [
                'status'  => true,
                'page' => $page->slug,
                'message' => 'Seacción creada con exito'
            ];

            // return true;
            
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            Log::error('SectionRepository :' . $e->getMessage());
        }
    }

    public function destroy($seccion)
    {

        try {

            if($seccion->texto)  $seccion->textos()->delete();

            if($seccion->galeria){
                $seccion->imagenes()->each(function($item){
                    Storage::delete($item->ruta);
                });
                $seccion->imagenes()->delete();
            }

            if($seccion->video) $seccion->videos()->delete();

            if($seccion->documento){
                $seccion->documentos()->each(function($item){
                    Storage::delete($item->ruta);
                });
                $seccion->documentos()->delete();
            }

            $seccion->delete();

            $page = $this->pageRepository->getById($seccion->pagina_id);

            return (object) [
                'status' => true, 
                'page' => $page->slug
            ];
           
        } catch (\Exception $e) {
            dd($e->getMessage());
            Log::error($e->getMessage());
            return false;
        }
    }

    protected function saveItems($items, $section)
    {

        foreach ($items as $item) {
            switch ($item['item_id']) {
                case (1):
                    $section->textos()->create(['texto' => request('texto'), 'posicion' => $item['posicion'], 'seccion_id' => $section->id]);
                    $section->update(['texto' => 1]);
                    break;
                case (2):
                    try {
                        foreach (request('slider') ?? [] as $imagen) {
                            $archivo = $this->handleFileFactory->instance($imagen);
                            $path = "storage/imagenes/secciones/galeria/$section->id/" . $archivo->getFullName();
                            $section->imagenes()->create(['ruta' => $path, 'posicion' => $item['posicion'], 'seccion_id' => $section->id]);
                            $archivo->upload("public/imagenes/secciones/galeria/$section->id");
                        }
                        $section->update(['galeria' => 1]);
                    } catch (\Exception $e) {
                        dd($e->getMessage());
                    }
                    break;
                case (3):
                    try {
                        $section->videos()->create(['url' => request('video'), 'posicion' => $item['posicion'], 'seccion_id' => $section->id]);
                        $section->update(['video' => 1]);

                    } catch (\Exception $e) {
                        dd($e->getMessage());
                    }
                    break;
                case (4):
                    foreach (request('documentos') ?? [] as $documento) {
                        $image = $this->handleFileFactory->instance($documento);
                        $path = 'storage/imagenes/secciones/documentos/' . $image->getFullName();
                        $section->documentos()->create(['ruta' => $path, 'posicion' => $item['posicion'], 'seccion_id' => $section->id]);
                        $image->upload('public/imagenes/secciones/documentos/' . $section->id);
                        $section->update(['documento' => 1]);
                    }
                    break;
            }
        }
    }
}
