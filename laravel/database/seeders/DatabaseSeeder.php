<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('utenti')->insert([
            ['nome' => 'Antonio', 'cognome' => 'Pirani', 'email' => 'anto@anto.it', 'username' => 'antoanto',
                'password' => Hash::make('antoanto'), 'role' => 'user'],
            ['nome' => 'Luca', 'cognome' => 'Sabatini', 'email' => 'luca@luca.it', 'username' => 'lucaluca',
                'password' => Hash::make('lucaluca'), 'role' => 'user'],
            ['nome' => 'Mario', 'cognome' => 'Rossi', 'email' => 'mario@rossi.it', 'username' => 'adminadmin',
                'password' => Hash::make('adminadmin'), 'role' => 'admin',]
        ]);

        $data = [
            ['targa' => 'AB123CD', 'modello' => 'Mirage', 'marca' => 'Mitsubishi', 'prezzoGiornaliero' => 158.50, 'numeroPorte' => 4, 'cilindrata' => 100, 'tipoCambio' => 'manuale', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => 'Mitsubishi_Mirage.jpg'],
            ['targa' => 'CD987RS', 'modello' => 'Versa', 'marca' => 'Nissan', 'prezzoGiornaliero' => 159.00, 'numeroPorte' => 5, 'cilindrata' => 140, 'tipoCambio' => 'manuale', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => 'Nissan_Versa.jpg'],
            ['targa' => 'DE456FG', 'modello' => 'Corolla', 'marca' => 'Toyota', 'prezzoGiornaliero' => 161.00, 'numeroPorte' => 5, 'cilindrata' => 110, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => 'Toyota_corolla.jpg'],
            ['targa' => 'EF321AB', 'modello' => 'Leaf', 'marca' => 'Nissan', 'prezzoGiornaliero' => 161.50, 'numeroPorte' => 5, 'cilindrata' => 120, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => 'Nissan_Leaf.jpg'],
            ['targa' => 'GH876PQ', 'modello' => 'BMW X3', 'marca' => 'BMW', 'prezzoGiornaliero' => 204.70, 'numeroPorte' => 5, 'cilindrata' => 100, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => 'BMW_X3.jpg'],
            ['targa' => 'IJ654KL', 'modello' => 'RAV4', 'marca' => 'Toyota', 'prezzoGiornaliero' => 205.00, 'numeroPorte' => 5, 'cilindrata' => 110, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => null],
            ['targa' => 'KL432IJ', 'modello' => 'Camry', 'marca' => 'Toyota', 'prezzoGiornaliero' => 205.00, 'numeroPorte' => 5, 'cilindrata' => 160, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => null],
            ['targa' => 'MN098OP', 'modello' => 'Prius', 'marca' => 'Toyota', 'prezzoGiornaliero' => 205.00, 'numeroPorte' => 5, 'cilindrata' => 110, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => null],
            ['targa' => 'OP765MN', 'modello' => 'Yaris', 'marca' => 'Toyota', 'prezzoGiornaliero' => 205.00, 'numeroPorte' => 5, 'cilindrata' => 90, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => null],
            ['targa' => 'PQ543GH', 'modello' => 'Corolla', 'marca' => 'Toyota', 'prezzoGiornaliero' => 205.00, 'numeroPorte' => 5, 'cilindrata' => 110, 'tipoCambio' => 'automatico', 'optional' => 'bluetooth, gps', 'disponibilita' => 1, 'foto' => null]
        ];

        DB::table('auto')->insert($data);
    }
}
