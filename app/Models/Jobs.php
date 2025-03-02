<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Jobs extends Model
{
    public static function allJobs(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Project Manager',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Web Developer',
                'salary' => '$80,000'
            ],
            [
                'id' => 3,
                'title' => 'Web Designer',
                'salary' => '$60,000'
            ]
        ];
    }

    public static function findOne($id): array
    {
        $job = Arr::first(static::allJobs(), fn($job) => $job['id'] == $id);
        if (!$job)
            abort(404);
        return $job;
    }
}
