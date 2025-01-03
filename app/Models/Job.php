<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
  public static function allJobs(): array
  {
    return [
      [
        'id' => 1,
        'title' => 'Teacher',
        'salary' => '10000'

      ],
      [
        'id' => 2,
        'title' => 'Brogrammer',
        'salary' => '50000'
      ],
      [
        'id' => 3,
        'title' => 'Onlyfan',
        'salary' => '99999'
      ]
    ];
  }
  public static function find(int $id): array
  {
    $job = Arr::first(static::allJobs(), fn($job) => $job['id'] == $id);

    if (! $job) {
      abort(404);
    }
    return $job;
  }
}
