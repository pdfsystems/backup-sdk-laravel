<?php

namespace Pdfsystems\Backup\Facades;

use Illuminate\Support\Facades\Facade;

/** @mixin \Pdfsystems\BackupSdk\BackupClient */
class BackupClient extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'pdf-backup-client';
    }
}
