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
    private $fornecedores   = ["TechNova Solutions", "InnoSphere Technologies", "CyberWave Innovations", "QuantumLeap Systems", "FutureFusion Tech", "Vertex Digital", "PixelPulse IT", "NexGen Software", "Skyline Technologies", "BlueArc Networks"];
    private $descricoes = [
        "Software empresarial personalizado.", "Soluções de IA.", "Segurança cibernética avançada.", "Computação quântica.", "IoT dispositivos.", "Desenvolvimento web.", "Design gráfico.", "Aplicativos móveis.", "Cloud computing.", "Infraestrutura de rede." ];
    private $responsaveis = ['admin', 'user'];
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
                    'sacador'       => $this->fornecedores[$i],
                    'descricao'     => $this->descricoes[$i],
                    'vlr_total'     => (float) rand(100, 1000),
                    'vlr_parcela'   => (float) rand(50, 500),
                    'vencimento'    => $dates,
                    'qtd_parcelas'  => rand(2, 1200),
                    'dt_pagamento'  => $dates,
                    'status'        => $this->status[rand(0,1)],
                    'responsavel'   => $this->responsaveis[rand(0,1)],
                    'obs'           => Str::random(20),
                ]
            ]);
        }
    }
}
