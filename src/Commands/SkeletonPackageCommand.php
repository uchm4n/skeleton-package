<?php

namespace Uchm4n\SkeletonPackage\Commands;

use Illuminate\Console\Command;

class SkeletonPackageCommand extends Command
{
    public $signature = 'skeleton-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
