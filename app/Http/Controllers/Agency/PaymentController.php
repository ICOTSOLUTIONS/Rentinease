<?php

namespace App\Http\Controllers\Agency;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Payment;
use App\Models\UserPackageCoins;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $package = Package::all();
        return view('agency.pages.payment.index',['packages'=>$package]);
    }

    public function success($id = null)
    {
        if(!empty($id)){
            $package = Package::where('id',$id)->first();

            $remain_coins = UserPackageCoins::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();
            
            if(empty($remain_coins)) $remain_coins = UserPackageCoins::where('user_id',auth()->user()->id)->first();
            $remain_coins->user_id = auth()->user()->id;
            $remain_coins->package_id = $id;
            $remain_coins->remain_coins = $package->coins;
            $remain_coins->save();
            
            $exist_package = Payment::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();

            if(empty($exist_package)) $exist_package = Payment::where('user_id',auth()->user()->id)->first();
            $exist_package->user_id = auth()->user()->id;
            $exist_package->package_id = $id;
            $exist_package->date = Carbon::now();
            $exist_package->save();
        }
        session()->flash('message', 'Successfully Package Buy!');
        session()->flash('messageType', 'success');
        return redirect()->route('payment.index');
    }

    public function cancel()
    {
        session()->flash('message', 'Package not Buy!');
        session()->flash('messageType', 'danger');
        return redirect()->route('payment.index');
    }
    public function payment($id)
    {
        $exist_user = Payment::where('user_id',auth()->user()->id)->first();
        $remain_coins_user = UserPackageCoins::where('user_id',auth()->user()->id)->first();
        if(!empty($exist_user)){
            $exist_package = Payment::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();
            $remain_coins = UserPackageCoins::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();
            if(!empty($exist_package) && !empty($remain_coins)){
                $today_date = Carbon::now()->format('d-m-y');
                $exp_date = $exist_package->date->addYears(1)->format('d-m-Y');
                if($exp_date > $today_date ){
                    if($remain_coins->remain_coins > 0){
                        session()->flash('message', 'You already Buy packages!');
                        session()->flash('messageType', 'danger');
                        return redirect()->route('payment.index');
                    }else{
                        $package = Package::where('id',$id)->first();
                        $YOUR_DOMAIN = request()->getSchemeAndHttpHost();
                        $price = $package->coins;
                        $curr = 'USD';
                        \Stripe\Stripe::setApiKey('sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA');
                        $stripe = new \Stripe\StripeClient(
                            'sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA'
                        );
                        $prodObj = $stripe->products->create([
                            'name' => $package->name,
                        ]);
                        $priceObj = $stripe->prices->create([
                        'unit_amount' => $price,
                        'currency' => $curr,
                        // 'recurring' => ['interval' => 'month'],
                        'product' => $prodObj['id'],
                        ]);
                        $checkout_session = \Stripe\Checkout\Session::create([
                            'line_items' => [[
                            'price' => $priceObj['id'],
                            'quantity' => 1,
                            ]],
                            'mode' => 'payment',
                            'success_url' => $YOUR_DOMAIN . '/agency/success/'.$id,
                            'cancel_url' => $YOUR_DOMAIN . '/agency/cancel',
                        ]);
                        return redirect($checkout_session->url);
                    }
                }else{
                    $package = Package::where('id',$id)->first();
                    $YOUR_DOMAIN = request()->getSchemeAndHttpHost();
                    $price = $package->coins;
                    $curr = 'USD';
                    \Stripe\Stripe::setApiKey('sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA');
                    $stripe = new \Stripe\StripeClient(
                        'sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA'
                    );
                    $prodObj = $stripe->products->create([
                        'name' => $package->name,
                    ]);
                    $priceObj = $stripe->prices->create([
                    'unit_amount' => $price,
                    'currency' => $curr,
                    // 'recurring' => ['interval' => 'month'],
                    'product' => $prodObj['id'],
                    ]);
                    $checkout_session = \Stripe\Checkout\Session::create([
                        'line_items' => [[
                        'price' => $priceObj['id'],
                        'quantity' => 1,
                        ]],
                        'mode' => 'payment',
                        'success_url' => $YOUR_DOMAIN . '/agency/success/'.$id,
                        'cancel_url' => $YOUR_DOMAIN . '/agency/cancel',
                    ]);
                    return redirect($checkout_session->url);
                }
            }else{
                $today_date = Carbon::now()->format('d-m-y');
                $exp_date = $exist_user->date->addYears(1)->format('d-m-Y');
                if($exp_date > $today_date ){
                    if($remain_coins_user->remain_coins > 0){
                        session()->flash('message', 'You already Buy packages!');
                        session()->flash('messageType', 'danger');
                        return redirect()->route('payment.index');
                    }else{
                        $package = Package::where('id',$id)->first();
                        $YOUR_DOMAIN = request()->getSchemeAndHttpHost();
                        $price = $package->coins;
                        $curr = 'USD';
                        \Stripe\Stripe::setApiKey('sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA');
                        $stripe = new \Stripe\StripeClient(
                            'sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA'
                        );
                        $prodObj = $stripe->products->create([
                            'name' => $package->name,
                        ]);
                        $priceObj = $stripe->prices->create([
                        'unit_amount' => $price,
                        'currency' => $curr,
                        // 'recurring' => ['interval' => 'month'],
                        'product' => $prodObj['id'],
                        ]);
                        $checkout_session = \Stripe\Checkout\Session::create([
                            'line_items' => [[
                            'price' => $priceObj['id'],
                            'quantity' => 1,
                            ]],
                            'mode' => 'payment',
                            'success_url' => $YOUR_DOMAIN . '/agency/success/'.$id,
                            'cancel_url' => $YOUR_DOMAIN . '/agency/cancel',
                        ]);
                        return redirect($checkout_session->url);
                    }
                }else{
                    $package = Package::where('id',$id)->first();
                    $YOUR_DOMAIN = request()->getSchemeAndHttpHost();
                    $price = $package->coins;
                    $curr = 'USD';
                    \Stripe\Stripe::setApiKey('sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA');
                    $stripe = new \Stripe\StripeClient(
                        'sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA'
                    );
                    $prodObj = $stripe->products->create([
                        'name' => $package->name,
                    ]);
                    $priceObj = $stripe->prices->create([
                    'unit_amount' => $price,
                    'currency' => $curr,
                    // 'recurring' => ['interval' => 'month'],
                    'product' => $prodObj['id'],
                    ]);
                    $checkout_session = \Stripe\Checkout\Session::create([
                        'line_items' => [[
                        'price' => $priceObj['id'],
                        'quantity' => 1,
                        ]],
                        'mode' => 'payment',
                        'success_url' => $YOUR_DOMAIN . '/agency/success/'.$id,
                        'cancel_url' => $YOUR_DOMAIN . '/agency/cancel',
                    ]);
                    return redirect($checkout_session->url);
                }
            }
        }else{
            $package = Package::where('id',$id)->first();
            $YOUR_DOMAIN = request()->getSchemeAndHttpHost();
            $price = $package->coins;
            $curr = 'USD';
            \Stripe\Stripe::setApiKey('sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA');
            $stripe = new \Stripe\StripeClient(
                'sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA'
            );
            $prodObj = $stripe->products->create([
                'name' => $package->name,
                ]);
            $priceObj = $stripe->prices->create([
                'unit_amount' => $price,
                'currency' => $curr,
                // 'recurring' => ['interval' => 'month'],
                'product' => $prodObj['id'],
            ]);
            $checkout_session = \Stripe\Checkout\Session::create([
                'line_items' => [[
                'price' => $priceObj['id'],
                'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => $YOUR_DOMAIN . '/agency/success/'.$id,
                'cancel_url' => $YOUR_DOMAIN . '/agency/cancel',
            ]);
            return redirect($checkout_session->url);
        }
    }
}
