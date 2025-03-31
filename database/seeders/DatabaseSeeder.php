<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $projects = [
            [
                'id' => 1,
                'link' => 'https://ppdb.averroesinsanmulia.com',
                'title' => 'Averroes',
                'description' => 'Website for Averroes is administration website of Averroes Digital Islamic School and facilitate the registration process for new students.',
                'challenge' => 'Creating a user-friendly and efficient administration and PPDB system.',
                'as' => 'Web Developer, Solo Fullstack',
                'theme' => 'dark-content',
                'year' => 2025,
                'category' => 'Web Development',
                'image' => '/assets/images/averroes/first_hero.png',
                'first_preview' => '/assets/images/averroes/first_preview.png',
                'second_preview' => '/assets/images/averroes/second_preview.png',
                'third_preview' => '/assets/images/averroes/third_preview.png',
                'show_in_home' => true,
                'show_in_projects' => true,
            ],
            [
                'id' => 2,
                'link' => 'https://app.arunikaprawira.com',
                'title' => 'Arunika',
                'description' => 'Web-based HR system to manage employee data, attendance, and payroll.',
                'challenge' => 'Developing an HR system that is integrated with the company\'s needs.',
                'as' => 'Web Developer, Team Fullstack',
                'theme' => 'light-content',
                'year' => 2025,
                'category' => 'Web Development',
                'image' => '/assets/images/02hero.jpg',
                'first_preview' => '/assets/images/arunika/first_preview.png',
                'second_preview' => '/assets/images/arunika/second_preview.png',
                'third_preview' => '/assets/images/arunika/third_preview.png',
                'show_in_home' => true,
                'show_in_projects' => true,
            ],
            [
                'id' => 3,
                'link' => 'https://imamgt.averroesinsanmulia.com',
                'title' => 'Imam Muda',
                'description' => 'Online platform for the Imam Muda program that helps prospective imams learn and develop.',
                'challenge' => 'Creating an educational platform that supports digital religious learning.',
                'as' => 'Web Developer, Solo Fullstack',
                'theme' => 'light-content',
                'year' => 2024,
                'category' => 'Web Development',
                'image' => '/assets/images/03hero.jpg',
                'first_preview' => '/assets/images/imam_muda/first_preview.png',
                'second_preview' => '/assets/images/imam_muda/second_preview.png',
                'third_preview' => '/assets/images/imam_muda/third_preview.png',
                'show_in_home' => true,
                'show_in_projects' => true,
            ],
            [
                'id' => 4,
                'link' => 'https://sidigs.com',
                'title' => 'SIDIGS',
                'description' => 'Web-based school application to manage administration, schedules, and communication between students and teachers.',
                'challenge' => 'Creating an academic system that is easy to use by students and teachers.',
                'as' => 'Web Developer, Team Fullstack',
                'theme' => 'dark-content',
                'year' => 2024,
                'category' => 'Web Development',
                'image' => '/assets/images/04hero.jpg',
                'video' => '/assets/images/04hero.mp4',
                'first_preview' => '/assets/images/sidigs/first_preview.png',
                'second_preview' => '/assets/images/sidigs/second_preview.png',
                'third_preview' => '/assets/images/sidigs/third_preview.png',
                'show_in_home' => false,
                'show_in_projects' => true,
            ],
            [
                'id' => 5,
                'link' => 'https://sisdps.com',
                'title' => 'Medina Residence',
                'description' => 'Website for the management of the Medina Residence housing property, making it easier for residents and managers to handle administration and communication.',
                'challenge' => 'Creating a platform that makes it easier for residents to access services and information.',
                'as' => 'Web Developer, Front-end',
                'theme' => 'light-content',
                'year' => 2023,
                'category' => 'Web Development',
                'image' => '/assets/images/05hero.jpg',
                'first_preview' => '/assets/images/medina/first_preview.png',
                'second_preview' => '/assets/images/medina/second_preview.png',
                'third_preview' => '/assets/images/medina/third_preview.png',
                'show_in_home' => true,
                'show_in_projects' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::firstOrCreate($project);
        }
    }
}
