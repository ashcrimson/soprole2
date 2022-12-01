<?php

namespace Database\Seeders;

use App\Models\Pagina;
use Illuminate\Database\Seeder;

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paginas = [
            'home',
            'propósito',
            'nuestra historia',
            'información emisor',
            'productores de leche'
        ];

        foreach($paginas as $item){
            Pagina::updateOrCreate(
                ['nombre' => $item],
                ['slug'   => $item]
            );
        }
    }
}
