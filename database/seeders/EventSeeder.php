<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            [
                'name' => 'Event 1',
                'slug' => 'Event 1',
            ],
            [
                'name' => 'Event 2',
                'slug' => 'Event 2',
            ],
            [
                'name' => 'Event 3',
                'slug' => 'Event 3',
            ],
            [
                'name' => 'Event 4',
                'slug' => 'Event 4',
            ],
            [
                'name' => 'Event 5',
                'slug' => 'Event 5',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
