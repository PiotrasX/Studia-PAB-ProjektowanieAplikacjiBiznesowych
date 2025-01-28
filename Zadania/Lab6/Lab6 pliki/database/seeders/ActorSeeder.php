<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::withoutForeignKeyConstraints(function () {
            Actor::truncate();
        });

        Actor::insert(
            [
                [
                    'first_name' => 'Pierce', 'last_name' => 'Brosnan',
                    'birthday' => Carbon::parse('1953-05-16')->toDateString(), 'height' => 186
                ],
                [
                    'first_name' => 'Franke', 'last_name' => 'Janssen',
                    'birthday' => Carbon::parse('1964-11-05')->toDateString(), 'height' => 182
                ],
                [
                    'first_name' => 'Desmond', 'last_name' => 'Llewelyn',
                    'birthday' => Carbon::parse('1914-09-12')->toDateString(), 'height' => 189
                ],
                [
                    'first_name' => 'Judi', 'last_name' => 'Dench',
                    'birthday' => Carbon::parse('1934-12-09')->toDateString(), 'height' => 155
                ],
                [
                    'first_name' => 'Izabella', 'last_name' => 'Scorupco',
                    'birthday' => Carbon::parse('1970-06-04')->toDateString(), 'height' => 174
                ],
                [
                    'first_name' => 'Rosamund', 'last_name' => 'Pike',
                    'birthday' => Carbon::parse('1979-01-27')->toDateString(), 'height' => 174
                ],
                [
                    'first_name' => 'Michelle', 'last_name' => 'Yeoh',
                    'birthday' => Carbon::parse('1962-08-06')->toDateString(), 'height' => 155
                ],
                [
                    'first_name' => 'Sophie', 'last_name' => 'Marceau',
                    'birthday' => Carbon::parse('1966-11-17')->toDateString(), 'height' => 173
                ],
                [
                    'first_name' => 'Halle', 'last_name' => 'Berry',
                    'birthday' => Carbon::parse('1966-08-14')->toDateString(), 'height' => 165
                ],
                [
                    'first_name' => 'Daniel', 'last_name' => 'Craig',
                    'birthday' => Carbon::parse('1967-03-02')->toDateString(), 'height' => 178
                ],
                [
                    'first_name' => 'Eva', 'last_name' => 'Green',
                    'birthday' => Carbon::parse('1980-07-06')->toDateString(), 'height' => 170
                ],
                [
                    'first_name' => 'Mads', 'last_name' => 'Mikkelsen',
                    'birthday' => Carbon::parse('1965-11-22')->toDateString(), 'height' => 183
                ],
                [
                    'first_name' => 'Olga', 'last_name' => 'Kurylenko',
                    'birthday' => Carbon::parse('1979-11-14')->toDateString(), 'height' => 175
                ],
                [
                    'first_name' => 'Javier', 'last_name' => 'Bardem',
                    'birthday' => Carbon::parse('1969-03-01')->toDateString(), 'height' => 181
                ],
                [
                    'first_name' => 'Ralph', 'last_name' => 'Fiennes',
                    'birthday' => Carbon::parse('1962-12-22')->toDateString(), 'height' => 180
                ],
                [
                    'first_name' => 'Naomie', 'last_name' => 'Harris',
                    'birthday' => Carbon::parse('1976-09-06')->toDateString(), 'height' => 173
                ],
                [
                    'first_name' => 'Christoph', 'last_name' => 'Waltz',
                    'birthday' => Carbon::parse('1956-10-04')->toDateString(), 'height' => 170
                ],
                [
                    'first_name' => 'Ben', 'last_name' => 'Whishaw',
                    'birthday' => Carbon::parse('1980-10-14')->toDateString(), 'height' => 175
                ],
                [
                    'first_name' => 'Léa', 'last_name' => 'Seydoux',
                    'birthday' => Carbon::parse('1985-07-01')->toDateString(), 'height' => 168
                ],
                [
                    'first_name' => 'Rowan', 'last_name' => 'Attkinson',
                    'birthday' => Carbon::parse('1955-01-06')->toDateString(), 'height' => 181
                ],
                [
                    'first_name' => 'Ben', 'last_name' => 'Miller',
                    'birthday' => Carbon::parse('1966-02-24')->toDateString(), 'height' => 175
                ],
                [
                    'first_name' => 'Emma', 'last_name' => 'Thompson',
                    'birthday' => Carbon::parse('1959-04-15')->toDateString(), 'height' => 173
                ],
                [
                    'first_name' => 'Jack', 'last_name' => 'Thompson',
                    'birthday' => Carbon::parse('1940-08-31')->toDateString(), 'height' => 179
                ],
                [
                    'first_name' => 'Ben', 'last_name' => 'Stiller',
                    'birthday' => Carbon::parse('1965-11-30')->toDateString(), 'height' => 170
                ],
                [
                    'first_name' => 'Macaulay', 'last_name' => 'Culkin',
                    'birthday' => Carbon::parse('1980-08-26')->toDateString(), 'height' => 170
                ],
                [
                    'first_name' => 'Kieran', 'last_name' => 'Culkin',
                    'birthday' => Carbon::parse('1982-09-30')->toDateString(), 'height' => 168
                ],
                [
                    'first_name' => 'Catherine', 'last_name' => 'O’Hara',
                    'birthday' => Carbon::parse('1954-03-04')->toDateString(), 'height' => 163
                ],
                [
                    'first_name' => 'John', 'last_name' => 'Heard',
                    'birthday' => Carbon::parse('1946-03-07')->toDateString(), 'height' => 178
                ],
                [
                    'first_name' => 'Joe', 'last_name' => 'Pesci',
                    'birthday' => Carbon::parse('1943-02-09')->toDateString(), 'height' => 163
                ],
                [
                    'first_name' => 'Daniel', 'last_name' => 'Stern',
                    'birthday' => Carbon::parse('1957-08-28')->toDateString(), 'height' => 193
                ],
            ]
        );
    }
}
