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
        /*Log::info('Course update success complete!');*/
        $url = "http://www.nationalbank.kz/rss/rates_all.xml";
        $dataObj = simplexml_load_file($url);
        if ($dataObj) {
            foreach ($dataObj->channel->item as $item) {
                if ($item->title == 'USD') {
                    //Сохраняем курс в БД/ $item->description
                    $this->updateAgent->update('prices', 0, ['dollar' => $item->description]);
                    break;
                }
            }
        }
    }
}
