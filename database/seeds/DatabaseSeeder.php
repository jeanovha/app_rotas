<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into clientes (nomeAquicultor, atividade, CPF, rg, naturalidade, inscricaoEstadual, tipoPropriedade) values (?,?,?,?,?,?,?)', array('João', 'Picicultura', '0127894737', '12220020','teste', 'teste', 'teste'));

    }
}
