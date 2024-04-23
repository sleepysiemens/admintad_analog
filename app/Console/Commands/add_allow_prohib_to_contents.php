<?php

namespace App\Console\Commands;

use App\Models\Content;
use Illuminate\Console\Command;

class add_allow_prohib_to_contents extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:add_allow-prohib_to_contents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $datas=
            [
                [
                    'title'=>'Разрешенные источники',
                    'title_en'=>'Allowed traffic sources',
                    'name'=>'allowed_traffic_sources',
                    'text'=>'_',
                ],
                [
                    'title'=>'Запрещенные источники',
                    'title_en'=>'Prohibited traffic sources',
                    'name'=>'prohibited_traffic_sources',
                    'text'=>'_',
                ],
            ];

        foreach ($datas as $data)
        {
            Content::create($data);
        }
    }
}
