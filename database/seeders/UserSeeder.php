<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Administradores*/
        User::create([
            'name' => 'Carlos E',
            'email' => 'carlos821031@gmail.com',
            'phone' => '+53 54123840',
            'password' => bcrypt('Diciembre22*'),
            'active' => '1',
        ])->assignRole('Administrator');
        /*Coordinadores*/
        User::create([
            'name' => 'Yusi',
            'email' => 'yusi@cubarama.it',
            'phone' => '+53 52481162',
            'password' => bcrypt('Coord20221*'),
            'active' => '1',
        ])->assignRole('Coordinador');
        User::create([
            'name' => 'Mario',
            'email' => 'mario@cubarama.it',
            'phone' => '+53 52858880',
            'password' => bcrypt('Comercial2022*'),
            'active' => '1',
        ])->assignRole('Coordinador');
        User::create([
            'name' => 'Humberto Coord',
            'email' => 'lisbeth@cubarama.it',
            'phone' => '+53 52949797',
            'password' => bcrypt('Coord20223*'),
            'active' => '1',
        ])->assignRole('Coordinador');
        User::create([
            'name' => 'Odile Coord',
            'email' => 'yademis@cubarama.it',
            'phone' => '+53 52936162',
            'password' => bcrypt('Coord20222*'),
            'active' => '1',
        ])->assignRole('Coordinador');
        /*Comerciales */
        User::create([
            'name' => 'Copa',
            'email' => 'copa@cubarama.it',
            'phone' => '+53 58119494',
            'password' => bcrypt('Comercial10221*'),
            'active' => '1',
        ])->assignRole('Sales');
        User::create([
            'name' => 'Odile',
            'email' => 'odile@cubarama.it',
            'phone' => '+53 52963333',
            'password' => bcrypt('Comercial20221*'),
            'active' => '1',
        ])->assignRole('Sales');
        User::create([
            'name' => 'Humberto',
            'email' => 'humberto@cubarama.it',
            'phone' => '+53 52737244',
            'password' => bcrypt('Comercial20223*'),
            'active' => '1',
        ])->assignRole('Sales');
        /*Asistentes */
        User::create([
            'name' => 'Aisa',
            'email' => 'aisa@cubarama.it',
            'phone' => '+53 52806337',
            'password' => bcrypt('Asistente20221*'),
            'active' => '1',
        ])->assignRole('Assistance');
        User::create([
            'name' => 'Ervin',
            'email' => 'ervin@cubarama.it',
            'phone' => '+53 58107137',
            'password' => bcrypt('Asistente20222*'),
            'active' => '1',
        ])->assignRole('Assistance');
        User::create([
            'name' => 'Ana',
            'email' => 'ana@cubarama.it',
            'phone' => '+53 52806336',
            'password' => bcrypt('Asistente20223*'),
            'active' => '1',
        ])->assignRole('Assistance');
        User::create([
            'name' => 'Yohana',
            'email' => 'yohana@cubarama.it',
            'phone' => '+53 53960474',
            'password' => bcrypt('Asistente20224*'),
            'active' => '1',
        ])->assignRole('Assistance');
        User::create([
            'name' => 'Merci',
            'email' => 'merci@cubarama.it',
            'phone' => '+53 54118740',
            'password' => bcrypt('Asistente20225*'),
            'active' => '1',
        ])->assignRole('Assistance');
        /*Direccion */
        User::create([
            'name' => 'Francisco',
            'email' => 'francisco@cubarama.it',
            'phone' => '+53 52850515',
            'password' => bcrypt('Director20220*'),
            'active' => '1',
        ])->assignRole('manager');
        User::factory(0)->create();
    }
}
