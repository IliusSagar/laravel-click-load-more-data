** composer create-project laravel/laravel example-app
** php artisan make:model Post -m
** php artisan migrate
** php artisan make:factory PostFactory --model=Post 
** factories/PostFactory.php** 
** php artisan tinker
    - App\Models\Post::factory()->count(50)->create();
** php artisan make:controller PostController
