<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Bitcoin',
            'image' => 'images/btc.jpg',
            'description' =>'Bitcoin é uma criptomoeda descentralizada originalmente descrita em um white paper em 2008 por uma pessoa, ou grupo de pessoas, usando o pseudônimo Satoshi Nakamoto. Foi lançado logo depois, em janeiro de 2009.',
            'price' => '43063.13',
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'Ethereum',
            'image' => 'images/eth.jpg',
            'description' => 'Ethereum é um sistema de blockchain de código aberto que funciona como uma plataforma para inúmeras outras criptomoedas, bem como para a execução de contratos inteligentes descentralizados.',
            'price' => '3699.15',
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => 'Solana',
            'image' => 'images/sol.jpg',
            'description' => 'Solana é um projeto de código aberto altamente funcional que se baseia na tecnologia blockchain para fornecer soluções financeiras descentralizadas (DeFi).',
            'price' => '161.43',
            'created_at' => now()->format('Y-m-d H:i:s')
        ]);
    }
}
