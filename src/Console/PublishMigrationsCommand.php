<?php

namespace Dev3bdulrahman\TranslationDashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class PublishMigrationsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:publish-migrations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish migration files for the Translation Dashboard';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing Translation Dashboard migrations...');

        $this->call('vendor:publish', [
            '--provider' => 'Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider',
            '--tag' => 'migrations',
            '--force' => $this->option('force'),
        ]);

        $this->info('Translation Dashboard migrations published successfully!');
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
