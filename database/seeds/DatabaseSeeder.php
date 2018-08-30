<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
                    'name' => "root",
                    'email' => "root".'@gmail.com',
                    'password' => bcrypt('3xc4l1bur'),
                    'is_admin' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "admin",
                    'email' => "admin".'@gmail.com',
                    'is_admin' => 1,
                    'password' => bcrypt('u12345'),
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);

                DB::table('users')->insert([
                    'name' => "rommel",
                    'aka' => "TheBuger",
                    'slug' => "thebuger",
                    'email' => "rommel".'@gmail.com',
                    'password' => bcrypt('12345'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);

                DB::table('users')->insert([
                    'name' => "Alvaro",
                    'aka' => "Alvaro",
                    'slug' => "alvaro",
                    'email' => "alvaro".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);

                DB::table('users')->insert([
                    'name' => "LilRomi",
                    'aka' => "LilRomi",
                    'slug' => "lilromi",
                    'email' => "baron".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "KRL",
                    'aka' => "KRL",
                    'slug' => "krl",
                    'email' => "krl".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Sergi",
                    'aka' => "Sergi",
                    'slug' => "sergi",
                    'email' => "sergi".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Roy",
                    'aka' => "Roy",
                    'slug' => "roy",
                    'email' => "roy".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);

                DB::table('users')->insert([
                    'name' => "Puma",
                    'aka' => "Puma",
                    'slug' => "puma",
                    'email' => "puma".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Itsmiinthenight",
                    'aka' => "Itsmiinthenight",
                    'slug' => "itsmiinthenight",
                    'email' => "itsmiin".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Colt",
                    'aka' => "Colt",
                    'slug' => "colt",
                    'email' => "colt".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Josemi",
                    'aka' => "Josemi",
                    'slug' => "josemi",
                    'email' => "josemi".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Droga",
                    'aka' => "Droga",
                    'slug' => "droga",
                    'email' => "droga".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Ge",
                    'aka' => "Ge",
                    'slug' => "ge",
                    'email' => "ge".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Simo",
                    'aka' => "Simo",
                    'slug' => "simo",
                    'email' => "simo".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Xavi",
                    'aka' => "Xavi",
                    'slug' => "xavi",
                    'email' => "xavi".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Ofroud",
                    'aka' => "Ofroud",
                    'slug' => "oforud",
                    'email' => "ofroud".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Protta",
                    'aka' => "Protta",
                    'slug' => "protta",
                    'email' => "protta".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Indra",
                    'aka' => "Indra",
                    'slug' => "indra",
                    'email' => "indra".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Alguien",
                    'aka' => "Alguien",
                    'slug' => "alguien",
                    'email' => "alguien".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "LePutoMigueAngel",
                    'aka' => "LePutoMigueAngel",
                    'slug' => "leputomigueangel",
                    'email' => "puto".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Pibito",
                    'aka' => "Pibito",
                    'slug' => "pibito",
                    'email' => "pibito".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Imanol",
                    'aka' => "Imanol",
                    'slug' => "imanol",
                    'email' => "imanol".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "ACV",
                    'aka' => "ACV",
                    'slug' => "acv",
                    'email' => "acv".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "TrapKing",
                    'aka' => "TrapKing",
                    'slug' => "trapking",
                    'email' => "king".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Bertoke",
                    'aka' => "Bertoke",
                    'slug' => "bertoke",
                    'email' => "bertoke".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);
                DB::table('users')->insert([
                    'name' => "Beckmann",
                    'aka' => "Beckmann",
                    'slug' => "beckmann",
                    'email' => "beckmann".'@gmail.com',
                    'password' => bcrypt('secret'),
                    'is_mc' => 1,
                    'created_at' => today(),
                    'updated_at' => today(),
                    'remember_token' => str_random(10),
                ]);


        $faker = Faker::create();


                for ($i=0; $i < 6 ; $i++) {
                    DB::table('users')->insert([
                        'name' => $faker->name,
                        'email' => $faker->email,
                        'surname' => str_random(10),
                        'password' => bcrypt('secret'),
                        'created_at' => today(),
                        'updated_at' => today(),
                        'remember_token' => str_random(10),
                    ]);
                }

                DB::table('tournaments')->insert([
                    'name' => "ABC Tournament",
                    'slug' => "abc-tournament",
                    'start' => Carbon::parse('2018-01-01'),
                    'end' => Carbon::parse('2018-01-01'),
                ]);

                DB::table('tournaments')->insert([
                    'name' => "Old Tournament",
                    'slug' => "old-tournament",
                    'start' => Carbon::parse('2018-01-01'),
                    'end' => Carbon::parse('2018-01-01'),
                ]);

                DB::table('events')->insert([
                    'name' => "ABC 1",
                    'slug' => "abc-1",
                    'nparticipant' => 4,
                    'start' => Carbon::today('Europe/London')->addWeeks(2),
                    't_id' => 1,
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 3,
                    'order' => 1
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 4,
                    'order' => 2
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 5,
                    'order' => 3
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 6,
                    'order' => 4
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 7,
                    'order' => 5
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 8,
                    'order' => 6
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 9,
                    'order' => 7
                ]);

                DB::table('participants')->insert([
                    'event_id' => 1,
                    'user_id' => 10,
                    'order' => 8
                ]);

                DB::table('rounds')->insert([
                    'event_id' => 1,
                    'order' => 1,
                    'round' => 0,
                    'user1_id' => 3,
                    'user2_id' => 4,
                    'puntos1' => 1,
                    'puntos2' => 0
                ]);

                DB::table('rounds')->insert([
                  'event_id' => 1,
                  'order' => 2,
                  'round' => 0,
                  'user1_id' => 5,
                  'user2_id' => 6,
                  'puntos1' => 0,
                  'puntos2' => 1
                ]);




    }
}
