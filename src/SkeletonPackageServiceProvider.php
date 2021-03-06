<?php

namespace Uchm4n\SkeletonPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Uchm4n\SkeletonPackage\Commands\SkeletonPackageCommand;

class SkeletonPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('skeleton-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_skeleton-package_table')
            ->hasCommand(SkeletonPackageCommand::class);
    }
}
