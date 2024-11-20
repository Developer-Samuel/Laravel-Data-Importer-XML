<?php

namespace App\Services;

use App\Jobs\ImportUsers;

class XmlService
{
    public static function import()
    {
        $filePath = storage_path('app/public/imports/users.xml');
        ImportUsers::dispatch($filePath);

        return back()->with('success', 'Data was added successfully.');
    }
}
