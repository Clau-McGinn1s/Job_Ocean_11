<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $users = User::factory(25)->create();
        $tags = Tag::factory(15)->create();

        foreach($users as $user){
            $employer = Employer::factory()->for($user)->create();
            $jobs = Job::factory(rand(2,8))->for($employer)->create(
                [
                    'featured' => rand(0, 100) < 5
                ]
            );

            $job_tags = $tags->random(3);
             foreach($jobs as $job){
                $job->tag($job_tags[0]->name);
                $job->tag($job_tags[1]->name);
                $job->tag($job_tags[2]->name);

             }
        }
       
        User::factory()->create([
            'name' => 'Clau Tester',
            'email' => 'clau.mcginnis@yahoo.com',
        ]);
    }
}
