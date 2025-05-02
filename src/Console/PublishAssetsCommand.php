<?php

namespace Dev3bdulrahman\TranslationDashboard\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class PublishAssetsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translation:publish-assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish assets (CSS, JS, images) for the Translation Dashboard';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Publishing Translation Dashboard assets...');

        // Create the directories if they don't exist
        if (!is_dir(public_path('translation-dashboard/css'))) {
            mkdir(public_path('translation-dashboard/css'), 0755, true);
        }

        if (!is_dir(public_path('translation-dashboard/js'))) {
            mkdir(public_path('translation-dashboard/js'), 0755, true);
        }

        // Copy the assets
        $this->call('vendor:publish', [
            '--provider' => 'Dev3bdulrahman\TranslationDashboard\ManagerServiceProvider',
            '--tag' => 'assets',
            '--force' => $this->option('force'),
        ]);

        $this->info('Translation Dashboard assets published successfully to: ' . public_path('translation-dashboard'));
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
