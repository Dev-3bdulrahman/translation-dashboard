<?php

namespace Dev3bdulrahman\TranslationDashboard\Console;

use Dev3bdulrahman\TranslationDashboard\Manager;
use Illuminate\Console\Command;

class FindCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'translations:find';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find translations in php/twig files';

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
        $counter = $this->manager->findTranslations(null);
        $this->info('Done importing, processed '.$counter.' items!');
    }
}
