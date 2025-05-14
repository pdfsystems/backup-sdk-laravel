<?php

namespace Pdfsystems\Backup;

use Pdfsystems\BackupSdk\BackupClient;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BackupServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('backup-sdk-laravel')
            ->hasConfigFile('pdf-backup');
    }

    public function packageRegistered(): void
    {
        parent::packageRegistered();

        $this->app->singleton('pdf-backup-client', function () {
            return new BackupClient(
                config('pdf-backup.token'),
                config('pdf-backup.base_url')
            );
        });
    }
}
