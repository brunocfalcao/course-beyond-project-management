<?php

namespace BeyondProjectManagement\Database\Seeders;

use Eduka\Cube\Models\Course;
use Eduka\Cube\Models\Domain;
use Eduka\Cube\Models\User;
use Eduka\Cube\Models\Variant;
use Illuminate\Database\Seeder;

class BeyondProjectManagementCourseSeeder extends Seeder
{
    public function run(): void
    {
        $course = Course::create([
            'name' => 'Beyond Project Management',
            'canonical' => 'course-beyond-project-management',
            'admin_name' => 'Bruno Falcao',
            // Launched testing.
            'launched_at' => now()->subHour(),
            'admin_email' => env('BPM_EMAIL'),
            'twitter_handle' => env('BPM_TWITTER'),
            'provider_namespace' => 'BeyondProjectManagement\\BeyondProjectManagementServiceProvider',
            'lemon_squeezy_store_id' => env('LEMON_SQUEEZY_STORE_ID'),
        ]);

        // Add variant.
        Variant::create([
            'canonical' => 'course-beyond-project-management',
            'course_id' => $course->id,
            'description' => 'Full course package',
            'is_default' => true,
            'lemon_squeezy_variant_id' => env('BPM_VARIANT_ID'),
        ]);

        $domain = Domain::create([
            'name' => env('BPM_DOMAIN'),
            'course_id' => $course->id,
        ]);

        // Create admin user.
        $admin = User::create([
            'name' => 'Bruno Falcao (BPM)',
            'email' => env('BPM_EMAIL'),
            'password' => bcrypt('password'),
        ]);

        // Attach user to course.
        $course->users()->attach($admin->id);
    }
}
