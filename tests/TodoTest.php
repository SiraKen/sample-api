<?php

use Faker\Factory as Faker;

class TodoTest extends TestCase
{

    /**
     * Index method availability.
     * @test
     */
    public function indexMethodAvailability()
    {
        $this->get('/api/todos');

        $this->assertResponseStatus(200);
    }

    /**
     * getTodo method availability.
     * @test
     */
    public function getTodoMethodAvailability()
    {
        $this->get('/api/todos/1');

        $this->assertResponseStatus(200);
    }

    /**
     * createTodo method availability.
     * @test
     */
    public function createTodoMethodAvailability()
    {
        $faker = Faker::create();

        $this->post('/api/todos', [
            'user_id' => 1,
            'title' => $faker->name,
            'completed' => 1,
        ]);

        $this->assertResponseStatus(201);
    }

    /**
     * updateTodo method availability.
     * @test
     */
    public function updateTodoMethodAvailability()
    {
        $faker = Faker::create();

        $user_id = 1;
        $title = $faker->name;
        $completed = 1;

        $this->put('/api/todos/1', [
            'user_id' => $user_id,
            'title' => $title,
            'completed' => $completed,
        ]);

        $this->assertResponseStatus(200);

        $this->seeJson([
            'user_id' => $user_id,
            'title' => $title,
            'completed' => $completed,
        ]);
    }

    /**
     * deleteTodo method availability.
     * @test
     */
    public function deleteTodoMethodAvailability()
    {
        $this->delete('/api/todos/2');

        $this->assertResponseStatus(204);
    }
}
