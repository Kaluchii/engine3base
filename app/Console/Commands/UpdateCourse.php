<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Agents\UpdateAgent;

class UpdateCourse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'course:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It command used to update the exchange rate with the help of CRON';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(UpdateAgent $upd)
    {
        parent::__construct();
        $this->updateAgent = $upd;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = "https://www.bankrbk.kz/api/currency/json/";

        $dataObj = json_decode(file_get_contents($url), true);
        if ($dataObj) {
            foreach ($dataObj['transfer']['date']['branch']['sell']['currency'] as $item) {
                if ($item['attributes']['dst'] == 'KZT' && $item['attributes']['src'] == 'USD') {
                    $this->updateAgent->update('prices', 0, ['dollar' => $item['attributes']['amount']]);
                    echo('Course success update. USD to KZT course value = ' . $item['attributes']['amount']."\n");
                    break;
                }
            }
        }
    }

}
