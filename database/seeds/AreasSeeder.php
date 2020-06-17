<?php

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::insert([
            ['name' => 'Direito Civil'],
            ['name' => 'Direito Penal'],
            ['name' => 'Direito Tributário'],
            ['name' => 'Direito Trabalhista'],
            ['name' => 'Direito Contratual'],
            ['name' => 'Direito Ambiental'],
            ['name' => 'Direito Empresarial'],
            ['name' => 'Direito do Consumidor'],
            ['name' => 'Direito do Estado'],
            ['name' => 'Direito Eleitoral'],
            ['name' => 'Direito da Tecnologia da Informação'],
            ['name' => 'Direito da Propriedade Intelectual'],
            ['name' => 'Magistratura'],
            ['name' => 'Defensoria Pública'],
            ['name' => 'Desembargadoria'],
            ['name' => 'Procuradoria'],
            ['name' => 'Diplomacia'],
            ['name' => 'Promotoria'],
            ['name' => 'Delegado Federal'],
        ]);
    }
}
