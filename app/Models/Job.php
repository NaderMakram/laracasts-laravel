<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            ['title' => 'Software Engineer', 'salary' => '$50,000', 'id' => 1],
            ['title' => 'Data Analyst', 'salary' => '$90,000', 'id' => 2],
            ['title' => 'Web Developer', 'salary' => '$22,000', 'id' => 3],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404, 'Job not found');
        }
        return $job;
    }
}
