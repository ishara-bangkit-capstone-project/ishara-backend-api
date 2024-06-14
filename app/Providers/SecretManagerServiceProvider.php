<?php

namespace App\Providers;

use Google\Cloud\SecretManager\V1\AccessSecretVersionRequest;
use Google\Cloud\SecretManager\V1\Client\SecretManagerServiceClient;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class SecretManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SecretManagerServiceClient::class, function ($app) {
            return new SecretManagerServiceClient();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $secretManager = $this->app->make(SecretManagerServiceClient::class);
        $secretName = sprintf('projects/%s/secrets/%s/versions/latest', 'ishara-development', 'ishara_cloud_storage_serviceacc');

        // Buat permintaan untuk mengakses versi secret
        $request = new AccessSecretVersionRequest();
        $request->setName($secretName);

        // Ambil respons dari Secret Manager
        $response = $secretManager->accessSecretVersion($request);
        $payload = $response->getPayload()->getData();

        // Simpan service account key di storage sementara
        $serviceAccountKeyPath = storage_path('app/service-account-key.json');
        file_put_contents($serviceAccountKeyPath, $payload);

        // Atur environment variable GOOGLE_APPLICATION_CREDENTIALS
        putenv("GOOGLE_CLOUD_KEY_FILE={$serviceAccountKeyPath}");

        // Tambahkan log untuk memastikan
        Log::info('Service account key saved and GOOGLE_APPLICATION_CREDENTIALS set.');
    }
}
