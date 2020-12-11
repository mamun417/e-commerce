<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function show()
    {
        $settings = Setting::all();

        return view('admin.setting.setting', compact('settings'));

        dd($settings->toArray());
    }

    public function update(Request $request)
    {
        collect($request->all())->except(['_token', '_method'])
            ->each(function ($value, $name) {
                Setting::updateOrCreate([
                    'name' => $name,
                    'value' => $value,
                ]);
            });

        return Setting::all();
    }
}
