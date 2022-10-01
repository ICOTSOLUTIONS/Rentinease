<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\PackageLog;
use App\Models\Payment;
use App\Models\UserPackageCoins;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $package = Package::all();
        return view('agency.agentpages.payment.index',['packages'=>$package]);
    }
    public function success($id = null)
    {
        // dd(auth()->user()->id);
        if(!empty($id)){
            $package = Package::where('id',$id)->first();

            $remain_coins = UserPackageCoins::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();

            if(empty($remain_coins)) $remain_coins = UserPackageCoins::where('user_id',auth()->user()->id)->first();
            // if(empty($remain_coins)) $remain_coins = new UserPackageCoins();
            $remain_coins->user_id = auth()->user()->id;
            $remain_coins->package_id = $id;
            if(!empty($remain_coins->remain_coins)) $remain_coins->remain_coins = $remain_coins->remain_coins + $package->coins;
            else $remain_coins->remain_coins = $package->coins;
            $remain_coins->save();

            $exist_package = Payment::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();

            if(empty($exist_package)) $exist_package = Payment::where('user_id',auth()->user()->id)->first();
            // if(empty($exist_package)) $exist_package = new Payment();
            $exist_package->user_id = auth()->user()->id;
            $exist_package->package_id = $id;
            $exist_package->date = Carbon::now();
            $exist_package->save();

            $package_logs = new PackageLog();
            $package_logs->payment_id = $exist_package->id;
            $package_logs->user_package_coin_id = $remain_coins->id;
            $package_logs->date = Carbon::now();
            $package_logs->save();
            session()->flash('message', 'Successfully Package Buy!');
            session()->flash('messageType', 'success');
            return redirect()->route('agent.payment.index');
        }else{
            session()->flash('message', 'Package data not saved!');
            session()->flash('messageType', 'danger');
            return redirect()->route('agent.payment.index');
        }

    }
    public function cancel()
    {
        session()->flash('message', 'Package not Buy!');
        session()->flash('messageType', 'danger');
        return redirect()->route('agent.payment.index');
    }
    public function payment($id)
    {
        $package = Package::where('id',$id)->first();
        $exist_user = Payment::where('user_id',auth()->user()->id)->first();
        $remain_coins_user = UserPackageCoins::where('user_id',auth()->user()->id)->first();
        if(!empty($exist_user)){
            $exist_package = Payment::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();
            $remain_coins = UserPackageCoins::where('user_id',auth()->user()->id)
            ->where('package_id',$id)->first();
            if(!empty($exist_package) && !empty($remain_coins)){
                // $today_date = Carbon::now()->format('d-m-Y');
                // if($package->duration_period == 'year') $exp_date = $exist_package->date->addYear($package->duration_time)->format('d-m-Y');
                // if($package->duration_period == 'month') $exp_date = $exist_package->date->addMonths($package->duration_time)->format('d-m-Y');
                // if($package->duration_period == 'week') $exp_date = $exist_package->date->addDays($package->duration_time * 7)->format('d-m-Y');
                // if($exp_date > $today_date ){
                //     if($remain_coins->remain_coins > 0){
                //         session()->flash('message', 'You already Buy packages!');
                //         session()->flash('messageType', 'danger');
                //         return redirect()->route('payment.index');
                //     }else{
                        // $package = Package::where('id',$id)->first();
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
                            'success_url' => $YOUR_DOMAIN . '/agents/success/'.$id,
                            'cancel_url' => $YOUR_DOMAIN . '/agents/cancel',
                        ]);
                        return redirect($checkout_session->url);
                    // }
                // }else{
                //     // $package = Package::where('id',$id)->first();
                //     $YOUR_DOMAIN = request()->getSchemeAndHttpHost();
                //     $price = $package->coins;
                //     $curr = 'USD';
                //     \Stripe\Stripe::setApiKey('sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA');
                //     $stripe = new \Stripe\StripeClient(
                //         'sk_test_51KqAOuHPSN5TapjpH4h0eMkwEYgtTkWFt0GDFvI8ZYABpzxdptDCwiW13jQmXm62vQWU779BaVQ95SnLb3zxlH9g00nn29xPxA'
                //     );
                //     $prodObj = $stripe->products->create([
                //         'name' => $package->name,
                //     ]);
                //     $priceObj = $stripe->prices->create([
                //     'unit_amount' => $price,
                //     'currency' => $curr,
                //     // 'recurring' => ['interval' => 'month'],
                //     'product' => $prodObj['id'],
                //     ]);
                //     $checkout_session = \Stripe\Checkout\Session::create([
                //         'line_items' => [[
                //         'price' => $priceObj['id'],
                //         'quantity' => 1,
                //         ]],
                //         'mode' => 'payment',
                //         'success_url' => $YOUR_DOMAIN . '/agents/success/'.$id,
                //         'cancel_url' => $YOUR_DOMAIN . '/agents/cancel',
                //     ]);
                //     return redirect($checkout_session->url);
                // }
            }else{
                $today_date = Carbon::now()->format('Y-m-d');
                if($package->duration_period == 'year') $exp_date = $exist_user->date->addYear($package->duration_time)->format('Y-m-d');
                if($package->duration_period == 'month') $exp_date = $exist_user->date->addMonths($package->duration_time)->format('Y-m-d');
                if($package->duration_period == 'week') $exp_date = $exist_user->date->addDays($package->duration_time * 7)->format('Y-m-d');
                if($exp_date > $today_date ){
                    if($remain_coins_user->remain_coins > 0){
                        session()->flash('message', 'You already Buy packages!');
                        session()->flash('messageType', 'danger');
                        return redirect()->route('payment.index');
                    }else{
                        // $package = Package::where('id',$id)->first();
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
                            'success_url' => $YOUR_DOMAIN . '/agents/success/'.$id,
                            'cancel_url' => $YOUR_DOMAIN . '/agents/cancel',
                        ]);
                        return redirect($checkout_session->url);
                    }
                }else{
                    // $package = Package::where('id',$id)->first();
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
                        'success_url' => $YOUR_DOMAIN . '/agents/success/'.$id,
                        'cancel_url' => $YOUR_DOMAIN . '/agents/cancel',
                    ]);
                    return redirect($checkout_session->url);
                }
            }
        }else{
            // $package = Package::where('id',$id)->first();
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
                'success_url' => $YOUR_DOMAIN . '/agents/success/'.$id,
                'cancel_url' => $YOUR_DOMAIN . '/agents/cancel',
            ]);
            return redirect($checkout_session->url);
        }
    }
}
