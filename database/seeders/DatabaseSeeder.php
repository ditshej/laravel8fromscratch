<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My first personal post',
            'slug' => 'my-first-personal-post',
            'excerpt' => 'Sapien gravida consectetur velit donec',
            'body' => '<p>Odio lorem fames tincidunt libero molestie viverra sem, nascetur ligula dictum dignissim dolor nullam, duis nisi mollis placerat ut sociis. Sagittis ad mattis hendrerit ultrices dui praesent imperdiet habitant, nascetur euismod vehicula pharetra pretium accumsan ultricies, vitae rutrum diam lacus litora leo pellentesque. Adipiscing ornare mus risus ipsum ante suscipit pharetra id felis lorem sodales ac sollicitudin, nisi curae lobortis posuere orci congue mauris proin nostra hendrerit tincidunt. Integer aenean commodo aptent morbi quisque dui mus conubia bibendum penatibus, aliquam posuere fusce diam urna sollicitudin eleifend donec nulla, inceptos risus cursus nisi sociosqu tempus a porta eros. Vulputate consequat vitae nascetur eget nibh nulla mus blandit libero parturient, natoque enim quisque nunc magna praesent ultrices rutrum et semper, morbi luctus erat per tortor habitant lobortis lectus faucibus.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My second personal post',
            'slug' => 'my-second-personal-post',
            'excerpt' => 'Sapien gravida consectetur velit donec',
            'body' => '<p>Odio lorem fames tincidunt libero molestie viverra sem, nascetur ligula dictum dignissim dolor nullam, duis nisi mollis placerat ut sociis. Sagittis ad mattis hendrerit ultrices dui praesent imperdiet habitant, nascetur euismod vehicula pharetra pretium accumsan ultricies, vitae rutrum diam lacus litora leo pellentesque. Adipiscing ornare mus risus ipsum ante suscipit pharetra id felis lorem sodales ac sollicitudin, nisi curae lobortis posuere orci congue mauris proin nostra hendrerit tincidunt. Integer aenean commodo aptent morbi quisque dui mus conubia bibendum penatibus, aliquam posuere fusce diam urna sollicitudin eleifend donec nulla, inceptos risus cursus nisi sociosqu tempus a porta eros. Vulputate consequat vitae nascetur eget nibh nulla mus blandit libero parturient, natoque enim quisque nunc magna praesent ultrices rutrum et semper, morbi luctus erat per tortor habitant lobortis lectus faucibus.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My first work post',
            'slug' => 'my-first-work-post',
            'excerpt' => 'Sapien gravida consectetur velit donec',
            'body' => '<p>Odio lorem fames tincidunt libero molestie viverra sem, nascetur ligula dictum dignissim dolor nullam, duis nisi mollis placerat ut sociis. Sagittis ad mattis hendrerit ultrices dui praesent imperdiet habitant, nascetur euismod vehicula pharetra pretium accumsan ultricies, vitae rutrum diam lacus litora leo pellentesque. Adipiscing ornare mus risus ipsum ante suscipit pharetra id felis lorem sodales ac sollicitudin, nisi curae lobortis posuere orci congue mauris proin nostra hendrerit tincidunt. Integer aenean commodo aptent morbi quisque dui mus conubia bibendum penatibus, aliquam posuere fusce diam urna sollicitudin eleifend donec nulla, inceptos risus cursus nisi sociosqu tempus a porta eros. Vulputate consequat vitae nascetur eget nibh nulla mus blandit libero parturient, natoque enim quisque nunc magna praesent ultrices rutrum et semper, morbi luctus erat per tortor habitant lobortis lectus faucibus.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My first hobby post',
            'slug' => 'my-first-hobby-post',
            'excerpt' => 'Sapien gravida consectetur velit donec',
            'body' => '<p>Odio lorem fames tincidunt libero molestie viverra sem, nascetur ligula dictum dignissim dolor nullam, duis nisi mollis placerat ut sociis. Sagittis ad mattis hendrerit ultrices dui praesent imperdiet habitant, nascetur euismod vehicula pharetra pretium accumsan ultricies, vitae rutrum diam lacus litora leo pellentesque. Adipiscing ornare mus risus ipsum ante suscipit pharetra id felis lorem sodales ac sollicitudin, nisi curae lobortis posuere orci congue mauris proin nostra hendrerit tincidunt. Integer aenean commodo aptent morbi quisque dui mus conubia bibendum penatibus, aliquam posuere fusce diam urna sollicitudin eleifend donec nulla, inceptos risus cursus nisi sociosqu tempus a porta eros. Vulputate consequat vitae nascetur eget nibh nulla mus blandit libero parturient, natoque enim quisque nunc magna praesent ultrices rutrum et semper, morbi luctus erat per tortor habitant lobortis lectus faucibus.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My second hobby post',
            'slug' => 'my-second-hobby-post',
            'excerpt' => 'Sapien gravida consectetur velit donec',
            'body' => '<p>Odio lorem fames tincidunt libero molestie viverra sem, nascetur ligula dictum dignissim dolor nullam, duis nisi mollis placerat ut sociis. Sagittis ad mattis hendrerit ultrices dui praesent imperdiet habitant, nascetur euismod vehicula pharetra pretium accumsan ultricies, vitae rutrum diam lacus litora leo pellentesque. Adipiscing ornare mus risus ipsum ante suscipit pharetra id felis lorem sodales ac sollicitudin, nisi curae lobortis posuere orci congue mauris proin nostra hendrerit tincidunt. Integer aenean commodo aptent morbi quisque dui mus conubia bibendum penatibus, aliquam posuere fusce diam urna sollicitudin eleifend donec nulla, inceptos risus cursus nisi sociosqu tempus a porta eros. Vulputate consequat vitae nascetur eget nibh nulla mus blandit libero parturient, natoque enim quisque nunc magna praesent ultrices rutrum et semper, morbi luctus erat per tortor habitant lobortis lectus faucibus.</p>'
        ]);
    }
}
