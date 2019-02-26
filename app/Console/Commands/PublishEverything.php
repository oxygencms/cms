<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PublishEverything extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'oxy:publish-everything';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish all Oxygen files.';

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
        $providers = [
            'Oxygencms\\Core\\CoreServiceProvider',
            'Oxygencms\\Users\\UserServiceProvider',
            'Oxygencms\\Pages\\PageServiceProvider',
            'Oxygencms\\Phrases\\PhraseServiceProvider',
            'Oxygencms\\Blocks\\BlockServiceProvider',
            'Oxygencms\\Menus\\MenuServiceProvider',
            'Oxygencms\\Uploads\\UploadServiceProvider',
            'Spatie\\Activitylog\\ActivitylogServiceProvider',
        ];

        foreach ($providers as $provider) {
            $this->call('vendor:publish', ['--provider' => $provider]);
        }

        $this->info('Oxygen related files published successfully.');
    }
}
