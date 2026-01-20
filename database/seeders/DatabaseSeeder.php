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
                'description' => 'Integrated student admission and management system for Averroes Digital Islamic School. With Multiple features, new student registration, document verification, and overall school management. Increased school management efficiency by 80%.',
                'challenge' => 'Architecting an automated document verification and registration portal.',
                'as' => 'Lead Software Engineer',
                'theme' => 'dark-content',
                'year' => "2023-2026",
                'category' => 'Web Development',
                'research' => 'Researching intuitive UI/UX for educational portals to simplify complex document upload workflows for parents.',
                'image' => '/assets/images/averroes/first_hero.png',
                'second_image' => '/assets/images/averroes/second_hero.png',
                'first_preview' => '/assets/images/averroes/first_preview.png',
                'second_preview' => '/assets/images/averroes/second_preview.png',
                'project_previews' => ['/assets/images/averroes/previews/01.png', '/assets/images/averroes/previews/02.png', '/assets/images/averroes/previews/03.png', '/assets/images/averroes/previews/04.png', '/assets/images/averroes/previews/05.png'],
                'show_in_home' => true,
                'show_in_projects' => true,
            ],
            [
                'id' => 2,
                'link' => 'https://simtaru-kkprnb.lumajangkab.go.id/',
                'title' => 'SIMTARU',
                'description' => 'A production-grade government licensing system for KKPR management in Lumajang Regency. Increased licensing progress efficiency by 30%.',
                'challenge' => 'Ensuring high data integrity and complex spatial licensing workflows.',
                'as' => 'Software Engineer',
                'theme' => 'light-content',
                'year' => "2025-2026",
                'category' => 'Web Development',
                'research' => 'Researching digital transformation of regional licensing regulations into secure, automated backend logic for government use.',
                'image' => '/assets/images/simtaru/first_hero.png',
                'second_image' => '/assets/images/simtaru/second_hero.png',
                'first_preview' => '/assets/images/simtaru/first_preview.png',
                'second_preview' => '/assets/images/simtaru/second_preview.png',
                'project_previews' => ['/assets/images/simtaru/previews/01.png', '/assets/images/simtaru/previews/02.png', '/assets/images/simtaru/previews/03.png', '/assets/images/simtaru/previews/04.png', '/assets/images/simtaru/previews/05.png'],
                'show_in_home' => true,
                'show_in_projects' => true,
            ],
            // [
            //     'id' => 3,
            //     'link' => 'https://kythia.me',
            //     'title' => 'Kythia Bot',
            //     'description' => 'High-performance Discord automation bot serving 27,000+ users and 100+ communities.',
            //     'challenge' => 'Managing real-time data processing and high uptime for concurrent interactions.',
            //     'as' => 'Owner, Lead Developer & Architect',
            //     'theme' => 'dark-content',
            //     'year' => "2025-2026",
            //     'category' => 'Web Development',
            //     'research' => 'Researching high-concurrency bot architecture and real-time data sharding to maintain performance for 27k+ active users.',
            //     'image' => '/assets/images/kythia/first_hero.png',
            //     'second_image' => '/assets/images/kythia/second_hero.png',
            //     'first_preview' => '/assets/images/kythia/first_preview.png',
            //     'second_preview' => '/assets/images/kythia/second_preview.png',
            //     'project_previews' => ['/assets/images/kythia/previews/01.png', '/assets/images/kythia/previews/02.png', '/assets/images/kythia/previews/03.png', '/assets/images/kythia/previews/04.png', '/assets/images/kythia/previews/05.png'],
            //     'show_in_home' => true,
            //     'show_in_projects' => true,
            // ],
            // [
            //     'id' => 4,
            //     'link' => 'https://app.arunikaprawira.com',
            //     'title' => 'Arunika HRIS',
            //     'description' => 'Web-based HR system to manage employee data, attendance, and payroll automation. Digitalize company HR management. Cut off paper-based HR management.',
            //     'challenge' => 'Developing a secure and integrated payroll algorithm for company needs.',
            //     'as' => 'Fullstack Developer',
            //     'theme' => 'light-content',
            //     'year' => "2025",
            //     'category' => 'Web Development',
            //     'research' => 'Researching secure payroll automation logic and attendance tracking algorithms integrated with employee data privacy.',
            //     'image' => '/assets/images/arunika/first_hero.png',
            //     'second_image' => '/assets/images/arunika/second_hero.png',
            //     'first_preview' => '/assets/images/arunika/first_preview.png',
            //     'second_preview' => '/assets/images/arunika/second_preview.png',
            //     'project_previews' => ['/assets/images/arunika/previews/01.png', '/assets/images/arunika/previews/02.png', '/assets/images/arunika/previews/03.png', '/assets/images/arunika/previews/04.png', '/assets/images/arunika/previews/05.png'],
            //     'show_in_home' => true,
            //     'show_in_projects' => true,
            // ],
            // [
            //     'id' => 5,
            //     'link' => 'https://imamgt.averroesinsanmulia.com',
            //     'title' => 'Imam Muda',
            //     'description' => 'Online platform for the Imam Muda program that helps prospective imams learn and develop. Digitalize imam training process and tracking, minimize human error and verification process.',
            //     'challenge' => 'Creating an educational platform that supports digital religious learning.',
            //     'as' => 'Full Stack Developer',
            //     'theme' => 'light-content',
            //     'year' => "2024-2025",
            //     'category' => 'Web Development',
            //     'image' => '/assets/images/imammuda/first_hero.png',
            //     'second_image' => '/assets/images/imammuda/second_hero.png',
            //     'first_preview' => '/assets/images/imammuda/first_preview.png',
            //     'second_preview' => '/assets/images/imammuda/second_preview.png',
            //     'project_previews' => ['/assets/images/imammuda/previews/01.png', '/assets/images/imammuda/previews/02.png', '/assets/images/imammuda/previews/03.png', '/assets/images/imammuda/previews/04.png', '/assets/images/imammuda/previews/05.png'],
            //     'show_in_home' => true,
            //     'show_in_projects' => true,
            // ],
            // [
            //     'id' => 6,
            //     'link' => 'https://sidigs.com',
            //     'title' => 'SIDIGS',
            //     'description' => 'Sidigs is an Edutech startup that provides a platform and integrated support system to support conventional schools in transforming into smart schools.',
            //     'challenge' => 'Creating an academic system that is easy to use by students and teachers. Also team work and collaboration and project management.',
            //     'as' => 'Junior Full Stack Developer',
            //     'theme' => 'dark-content',
            //     'year' => "2024-2025",
            //     'category' => 'Web Development',
            //     'image' => '/assets/images/sidigs/first_hero.png',
            //     'second_image' => '/assets/images/sidigs/second_hero.png',
            //     'first_preview' => '/assets/images/sidigs/first_preview.png',
            //     'second_preview' => '/assets/images/sidigs/second_preview.png',
            //     'project_previews' => ['/assets/images/sidigs/previews/01.png', '/assets/images/sidigs/previews/02.png', '/assets/images/sidigs/previews/03.png', '/assets/images/sidigs/previews/04.png', '/assets/images/sidigs/previews/05.png'],
            //     'show_in_home' => false,
            //     'show_in_projects' => true,
            // ],
        ];

        foreach ($projects as $project) {
            Project::firstOrCreate($project);
        }
    }
}
