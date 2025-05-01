<?php

namespace Dev3bdulrahman\TranslationDashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class PublishConfigCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:publish-config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish configuration files for the Translation Dashboard';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing Translation Dashboard configuration...');
        
        $this->call('vendor:publish', [
            '--provider' => 'Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider',
            '--tag' => 'config',
            '--force' => $this->option('force'),
        ]);
        
        $this->info('Translation Dashboard configuration published successfully!');
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['force', 'f', InputOption::VALUE_NONE, 'Force the operation to run when in production'],
        ];
    }
}
