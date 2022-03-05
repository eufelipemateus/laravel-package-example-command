<?php

namespace  FelipeMateus\ExampleCommand\Commands;

use Illuminate\Console\Command;


class ExampleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exec the example command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        /**
         *  Execute something here!!
        */

        $this->info('The command example was executed.');
    }
}
