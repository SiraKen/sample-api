<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$system_enabled = env('SYSTEM_ENABLED', true);

if ($system_enabled) {

    $router->get('/', function () use ($router) {
        return view('welcome');
    });

    $router->get('/api', function () use ($router) {
        return redirect('/', 301);
    });

    /**
     * System routes
     */
    // Reset database: truncate all tables
    $router->post('/api/databases/reset', 'ExampleController@resetDatabase');
    // Seed database with fake data
    $router->post('/api/databases/seed', 'ExampleController@seedDatabase');

    /**
     * Comments routes
     */
    // Get all comments
    $router->get('/api/comments', 'CommentController@index');
    // Get comment by id
    $router->get('/api/comments/{id}', 'CommentController@getComment');
    // Create new comment
    $router->post('/api/comments', 'CommentController@createComment');
    // Update comment
    $router->put('/api/comments/{id}', 'CommentController@updateComment');
    // Delete comment
    $router->delete('/api/comments/{id}', 'CommentController@deleteComment');

    /**
     * Posts routes
     */
    // Get all posts
    $router->get('/api/posts', 'PostController@index');
    // Get post by id
    $router->get('/api/posts/{id}', 'PostController@getPost');
    // Create new post
    $router->post('/api/posts', 'PostController@createPost');
    // Update post
    $router->put('/api/posts/{id}', 'PostController@updatePost');
    // Delete post
    $router->delete('/api/posts/{id}', 'PostController@deletePost');

    /**
     * Todos routes
     */
    // Get all todos
    $router->get('/api/todos', 'TodoController@index');
    // Get todo by id
    $router->get('/api/todos/{id}', 'TodoController@getTodo');
    // Create new todo
    $router->post('/api/todos', 'TodoController@createTodo');
    // Update todo
    $router->put('/api/todos/{id}', 'TodoController@updateTodo');
    // Delete todo
    $router->delete('/api/todos/{id}', 'TodoController@deleteTodo');

    /**
     * User routes
     */
    // Get all users
    $router->get('/api/users', 'UserController@index');
    // Get user by id
    $router->get('/api/users/{id}', 'UserController@getUser');
    // Create new user
    $router->post('/api/users', 'UserController@createUser');
    // Update user
    $router->put('/api/users/{id}', 'UserController@updateUser');
    // Delete user
    $router->delete('/api/users/{id}', 'UserController@deleteUser');

} else {
    $router->get('/', function () use ($router) {
        return view('disabled');
    });
}
