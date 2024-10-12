<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Support\Facades\Request;

class SettingController extends Controller
{
    public function index(){
        $settings = Setting::get();
        return view('admin.settings.index', compact('settings'));
    }

    public function edit($id){
        $setting = Setting::where('id', $id)->first();
        return view('admin.settings.edit', compact('setting'));

    }

    public function update($id, Request $request){

    }
}
