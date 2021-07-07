<?php

namespace GetThingsDone\Masterdata\Commands;

use Illuminate\Console\Command;

class MasterdataCommand extends Command
{
    public $signature = 'masterdata';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
