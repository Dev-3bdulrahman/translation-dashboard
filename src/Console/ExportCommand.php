<?php

namespace Dev3bdulrahman\TranslationDashboard\Console;

use Dev3bdulrahman\TranslationDashboard\Manager;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class ExportCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:export {group}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export translations to PHP files';

    /** @var \Dev3bdulrahman\TranslationDashboard\Manager */
    protected $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $group = $this->option('all') ? '*' : $this->argument('group');
        $json = $this->option('json');

        if (is_null($group) && !$json) {
            $this->warn('You must either specify a group argument or export as --json');

            return;
        }

        if (!is_null($group) && $json) {
            $this->warn('You cannot use both group argument and --json option at the same time');

            return;
        }

        if ( $group == '*' ) {
            $this->manager->exportAllTranslations();
        }
        else {
            $this->manager->exportTranslations($group, $json);
        }

        if (!is_null($group)) {
            $this->info('Done writing language files for '.(($group == '*') ? 'ALL groups' : $group.' group'));
        } elseif ($json) {
            $this->info('Done writing JSON language files for translation strings');
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['group', InputArgument::OPTIONAL, 'The group to export (--all for all).'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['json', 'J', InputOption::VALUE_NONE, 'Export anonymous strings to JSON'],
            ['all', 'A', InputOption::VALUE_NONE, 'Export all groups'],
        ];
    }
}
