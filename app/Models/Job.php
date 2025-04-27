<?php



namespace App\Models;

use Illuminate\Support\Arr;


class Job {
    public static function all(): array
    {
        return [
            
                [
                    'id' => 1,
                    'title' => 'CEO',
                    'salary' => '$3000',
                ],
                [
                    'id' => 2,
                    'title' => 'Programmer',
                    'salary' => '$1300',
                ]
            
            ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(),fn($job)=>$job['id']==$id);
        
        if(! $job) {
            abort(404);
        }
    }
}