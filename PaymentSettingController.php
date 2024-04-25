<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CodSetting;
use App\Models\PaypalSetting;
use App\Models\RazorpaySetting;
use App\Models\StripeSetting;
use Illuminate\Http\Request;

class PaymentSettingController extends Controller
{
    public function index()
    {
        $stripeSetting = StripeSetting::first();



        return view('admin.payment-settings.index', compact('stripeSetting'));
    }
}
