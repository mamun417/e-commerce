<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function show()
    {
        $setting = Setting::all()->mapWithKeys(function ($item) {
            return [$item['name'] => $item['value']];
        });

        return view('admin.setting.setting', compact('setting'));
    }

    public function update(UpdateSettingRequest $request)
    {
        collect($request->all())->except(['_token', '_method'])
            ->each(function ($value, $name) {
                Setting::updateOrCreate(
                    ['name' => $name],
                    ['value' => $value]
                );
            });

        return back()->with('success', 'Setting has been updated successful.');
    }
}
