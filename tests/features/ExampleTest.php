<?php

class ExampleTest extends FeatureTestCase
{
   
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Raul Quispe',
            'email' => 'robin_2004_89@hotmail.com',
            'password' => bcrypt('mirella'),
            'remember_token' => str_random(10),
        ]);
        
        $this->actingAs($user, 'api')
            ->visit('/api/user')
             ->see('Raul Quispe');
    }
}
