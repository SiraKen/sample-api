<?php

use Faker\Factory as Faker;

class UserTest extends TestCase
{
    /**
     * Index method availability.
     * @test
     */
    public function indexMethodAvailability()
    {
        $this->get('/api/users');

        $this->assertResponseStatus(200);
    }

    /**
     * getUser method availability.
     * @test
     */
    public function getUserMethodAvailability()
    {
        $this->get('/api/users/1');

        $this->assertResponseStatus(200);
    }

    /**
     * createUser method availability.
     * @test
     */
    public function createUserMethodAvailability()
    {
        $faker = Faker::create();

        $this->post('/api/users', [
            'name' => $faker->name,
            'email' => $faker->email,
        ]);

        $this->assertResponseStatus(201);
    }

    /**
     * updateUser method availability.
     * @test
     */
    public function updateUserMethodAvailability()
    {
        $faker = Faker::create();

        $name = $faker->name;
        $email = $faker->email;

        $this->put('/api/users/1', [
            'name' => $name,
            'email' => $email,
        ]);

        $this->assertResponseStatus(200);

        $this->seeJson([
            'name' => $name,
            'email' => $email,
        ]);
    }

    /**
     * deleteUser method availability.
     * @test
     */
    public function deleteUserMethodAvailability()
    {
        $this->delete('/api/users/2');

        $this->assertResponseStatus(204);
    }
}
