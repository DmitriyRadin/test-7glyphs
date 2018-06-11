<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::exists()) {
            return;
        }

        \DB::beginTransaction();

        $user = User::create([
            'name' => 'Test',
            'email' => 'test@7glyphs.com',
            'password' => \Illuminate\Support\Facades\Hash::make('Test123'),
        ]);

        /**
         * @var $accessToken Laravel\Passport\PersonalAccessTokenResult
         */
        $accessToken = $user->createToken($user->email)->accessToken;

        \DB::commit();

        $this->command->info("Access Token: {$accessToken}");
    }
}
