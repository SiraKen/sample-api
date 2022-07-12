<?php

use Faker\Factory as Faker;

class PostTest extends TestCase
{
    /**
     * Index method availability.
     * @test
     */
    public function indexMethodAvailability()
    {
        $this->get('/api/posts');

        $this->assertResponseStatus(200);
    }

    /**
     * getPost method availability.
     * @test
     */
    public function getPostMethodAvailability()
    {
        $this->get('/api/posts/1');

        $this->assertResponseStatus(200);
    }

    /**
     * createPost method availability.
     * @test
     */
    public function createPostMethodAvailability()
    {
        $faker = Faker::create();

        $this->post('/api/posts', [
            'user_id' => 1,
            'title' => $faker->name,
            'body' => $faker->text,
        ]);

        $this->assertResponseStatus(201);
    }

    /**
     * updatePost method availability.
     * @test
     */
    public function updatePostMethodAvailability()
    {
        $faker = Faker::create();

        $user_id = 1;
        $title = $faker->name;
        $body = $faker->text;

        $this->put('/api/posts/1', [
            'user_id' => $user_id,
            'title' => $title,
            'body' => $body,
        ]);

        $this->assertResponseStatus(200);
    }

    /**
     * deletePost method availability.
     * @test
     */
    public function deletePostMethodAvailability()
    {
        $this->delete('/api/posts/2');

        $this->assertResponseStatus(204);
    }
}
