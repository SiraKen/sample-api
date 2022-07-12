<?php

use Faker\Factory as Faker;

class CommentTest extends TestCase
{
    /**
     * Index method availability.
     * @test
     */
    public function indexMethodAvailability()
    {
        $this->get('/api/comments');

        $this->assertResponseStatus(200);
    }

    /**
     * getComment method availability.
     * @test
     */
    public function getCommentMethodAvailability()
    {
        $this->get('/api/comments/1');

        $this->assertResponseStatus(200);
    }

    /**
     * createComment method availability.
     * @test
     */
    public function createCommentMethodAvailability()
    {
        $faker = Faker::create();

        $this->post('/api/comments', [
            'post_id' => 1,
            'name' => $faker->name,
            'email' => $faker->email,
            'body' => $faker->text,
        ]);

        $this->assertResponseStatus(201);
    }

    /**
     * updateComment method availability.
     * @test
     */
    public function updateCommentMethodAvailability()
    {
        $faker = Faker::create();

        $post_id = 1;
        $name = $faker->name;
        $email = $faker->email;
        $body = $faker->text;

        $this->put('/api/comments/1', [
            'post_id' => $post_id,
            'name' => $name,
            'email' => $email,
            'body' => $body,
        ]);

        $this->assertResponseStatus(200);
    }

    /**
     * deleteComment method availability.
     * @test
     */
    public function deleteCommentMethodAvailability()
    {
        $this->delete('/api/comments/2');

        $this->assertResponseStatus(204);
    }
}
