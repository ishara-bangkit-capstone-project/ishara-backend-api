<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class SecretManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // URL file yang ingin di-download dari Google Cloud Storage
        $fileUrl = 'https://storage.googleapis.com/service_account_ishara/ishara-development-58462f545ec8.json';
        $destinationPath = storage_path('app/' . basename($fileUrl));

        // Inisialisasi Guzzle client
        $client = new Client();

        try {
            // Download file dari Google Cloud Storage
            $response = $client->get($fileUrl, ['sink' => $destinationPath]);

            if ($response->getStatusCode() == 200) {
                // Set environment variable untuk GOOGLE_CLOUD_KEY_FILE
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . $destinationPath);
                config(['google_application_credentials' => $destinationPath]);
//                putenv('GOOGLE_CLOUD_KEY_FILE=' . $destinationPath);
            } else {
                Log::error("Failed to download file from {$fileUrl}. HTTP status code: " . $response->getStatusCode());
            }
        } catch (\Exception $e) {
            Log::error('Error downloading file from Google Cloud Storage: ' . $e->getMessage());
        }
    }
}
