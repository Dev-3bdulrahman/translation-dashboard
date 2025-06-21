<?php

namespace Dev3bdulrahman\TranslationDashboard\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class PublishTranslationsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translations:publish-translations {--force : Overwrite existing files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish translation files for Translation Dashboard';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Publishing Translation Dashboard translation files...');

        $sourceDir = __DIR__ . '/../../resources/lang';
        $targetDir = resource_path('lang');

        // Ensure target directory exists
        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        $published = 0;
        $skipped = 0;

        // Get all language directories
        $langDirs = File::directories($sourceDir);

        foreach ($langDirs as $langDir) {
            $locale = basename($langDir);
            $targetLangDir = $targetDir . '/' . $locale;

            // Create locale directory if it doesn't exist
            if (!File::exists($targetLangDir)) {
                File::makeDirectory($targetLangDir, 0755, true);
                $this->info("Created directory: {$targetLangDir}");
            }

            // Copy translation files
            $files = File::files($langDir);
            foreach ($files as $file) {
                $filename = $file->getFilename();
                $targetFile = $targetLangDir . '/' . $filename;

                if (!File::exists($targetFile) || $this->option('force')) {
                    File::copy($file->getPathname(), $targetFile);
                    $this->info("Published: {$locale}/{$filename}");
                    $published++;
                } else {
                    $this->warn("Skipped: {$locale}/{$filename} (already exists, use --force to overwrite)");
                    $skipped++;
                }
            }
        }

        $this->info("Published {$published} translation files.");
        if ($skipped > 0) {
            $this->warn("Skipped {$skipped} existing files. Use --force to overwrite.");
        }

        // Add translations to the database if the Translation model exists
        if (class_exists('\Dev3bdulrahman\TranslationDashboard\Models\Translation')) {
            $this->call('translation:import');
        }

        return 0;
    }
}
