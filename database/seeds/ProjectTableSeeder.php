<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    use \Illuminate\Foundation\Testing\WithFaker;

    public function run()
    {
        $this->setUpFaker();

        /** @var User $users */
        $users = User::query()->get();

        /** @var array $projects */
        $projects = create(Project::class, [], 5)->pluck('id')->toArray();

        foreach ($users as $user) {
            $user->projects()->attach($this->faker->randomElement($projects));
        }
    }
}
