<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Language;
use App\Models\Project;
use App\Models\Role;
use App\Models\Time;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $roles = ['customer', 'freelancer', 'admin'];
        foreach ($roles as $role){
            Role::create(['name' => $role]);
        }

        User::create([
            'name' => 'admin',
            'email' => 'admin@email.net',
            'password' => Hash::make('password'),
            'role_id' => 3
        ]);

        for($i = 0; $i<4; $i++){
            User::create([
                'name' => 'user'.$i,
                'email' => 'user'.$i.'@email.net',
                'password' => Hash::make('password'),
                'role_id' => 1
            ]);
        }

        $categories = ['Веб разработка', 'Мобильные приложения', 'Маркетинг'];

        foreach ($categories as $category){
            Category::create([
                'name' => $category,
                'img' => '/assets/images/categories/img-02.png',
                'description' => 'Разбработка веб приложений'
            ]);
        }

        $types = ['Фиксированная оплата', 'Оплата в час'];
        foreach ($types as $type){
            Type::create(['name' => $type]);
        }

        $langs = ['Russian', 'English'];

        foreach ($langs as $lang){
            Language::create(['name' => $lang]);
        }

        $times = ['1 день', '2 дня', '3 дня','4 дня','5 дней','6 дней','7 дней','8 дней','9 дней','10 дней', '2 недели', '3 недели', '1 месяц', '2 месяца'];

        foreach ($times as $time){
            Time::create([
                'name' => $time
            ]);
        }

        for($i = 0; $i < 20; $i++) {
            Project::create([
                'title' => 'I want some customization and installation'.$i,
                'content' => 'Nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit inati voluptate velit esse cillum dolore eutates fugiat nulla pariatur sunt in culpa asequi officia deserunt mollit anim id est laborum ut perspiciatis...',
                'price' => '23980',
                'currency' => 'BTC',
                'category_id' => rand(1,3),
                'type_id' => rand(1,2),
                'language_id' => 1,
                'time_id' => rand(1,14),
                'user_id' => rand(1,5)
            ]);
        }
    }
}
