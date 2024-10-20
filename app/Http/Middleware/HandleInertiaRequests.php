<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'user' => function () {
                return $this->getUserInfo();
            },
            'settings' => function () {
                return $this->getSettings();
            }
        ];
    }

    private function getUserInfo()
    {
        return User::where('email', 'bulkova.maria@gmail.com')->first();
    }

    private function getSettings()
    {
        return $this->getSettingsAsKeyValuePairs(Setting::all());
    }

    private function getSettingsAsKeyValuePairs($settings): array
    {
        $data = [];

        foreach ($settings as $item) {
            $data[$item['key']] = $item['value'];
        }

        return $data;
    }
}
