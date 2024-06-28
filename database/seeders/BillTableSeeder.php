<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BillTableSeeder extends Seeder
{
    private $status = ["pago", "aberto"];
    private $nome   = ["Leonardo", "Donatelo", "Michelangelo", "Raphael"];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for( $i=0; $i<10; $i++ )
        {
            $dates = rand(1993, 2100)."-".rand(1,12)."-".rand(1,28);
            DB::table('bill')->insert([
                [
                    'sacador'       => Str::random(10),
                    'descricao'     => Str::random(10)." ".Str::random(10)." ".Str::random(10),
                    'vlr_total'     => (float) rand(100, 1000),
                    'vlr_parcela'   => (float) rand(50, 500),
                    'vencimento'    => $dates,
                    'qtd_parcelas'  => rand(2, 1200),
                    'dt_pagamento'  => $dates,
                    'status'        => $this->status[rand(0,1)],
                    'responsavel'   => $this->nome[rand(0,3)],
                    'obs'           => Str::random(20),
                ]
            ]);
        }
    }
}
