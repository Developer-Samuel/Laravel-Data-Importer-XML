<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class UsersImport
{
    public function xmlImport(string $filePath)
    {
        $xmlContent = file_get_contents($filePath);
        $xml = new SimpleXMLElement($xmlContent);

        foreach ($xml->Users->User as $user) {
            try {
                User::updateOrCreate(
                    ['id' => (int) $user->ID],
                    [
                        'firstname' => (string) $user->Firstname,
                        'lastname'  => (string) $user->Lastname,
                        'username'  => (string) $user->Username,
                        'email'     => (string) $user->Email,
                        'gender'    => (string) $user->Gender,
                        'created_at' => null,
                        'updated_at' => null,
                    ]
                );
            } catch (\Exception $e) {
                Log::error("Error importing user ID {$user->ID}: " . $e->getMessage());
            }
        }
    }
}
