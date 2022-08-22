<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('admin')->group(function () {
    Route::middleware('adminLogin')->group(function () {
        Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login');
        Route::post('/login-process', [\App\Http\Controllers\Admin\AuthController::class, 'loginProcess'])->name('admin.login.process');
        Route::get('/forgot-password', [\App\Http\Controllers\Admin\AuthController::class, 'forgot'])->name('admin.forgot');
        Route::post('/forgot-password-process', [\App\Http\Controllers\Admin\AuthController::class, 'forgotPassword'])->name('admin.forgot.pass');
        Route::get('/reset-password/{token}', [\App\Http\Controllers\Admin\AuthController::class, 'reset'])->name('admin.reset');
        Route::post('/reset-password-process', [\App\Http\Controllers\Admin\AuthController::class, 'resetPassword'])->name('admin.reset.pass');
    });
    Route::middleware('allAdmin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\AuthController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/profile/{id}', [\App\Http\Controllers\Admin\AuthController::class, 'profile'])->name('admin.profile');
        Route::get('/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
        Route::resource('/agency', \App\Http\Controllers\Admin\AgencyController::class);
        Route::resource('/agent', \App\Http\Controllers\Admin\AgentController::class);
        Route::resource('/package', \App\Http\Controllers\Admin\PackageController::class);
        Route::resource('/coinsdeduct', \App\Http\Controllers\Admin\CoinsDeductionController::class)->except('show');
        Route::resource('/customer', \App\Http\Controllers\Admin\CustomerController::class);
        Route::resource('/blog', \App\Http\Controllers\Admin\BlogController::class)->except('show');
        Route::get('/activity', [\App\Http\Controllers\Admin\ActivityController::class, 'index'])->name('activity.index');
    });
});
Route::middleware('admin')->group(function () {
    Route::resource('/admin', \App\Http\Controllers\Admin\AdminController::class);
    Route::resource('/assistant', \App\Http\Controllers\Admin\AssistantController::class);
    Route::resource('/customerservice', \App\Http\Controllers\Admin\CustomerServiceController::class);
    Route::resource('/blogger', \App\Http\Controllers\Admin\BloggerController::class);
    // Route::get('/admin', [\App\Http\Controllers\Admin\AuthController::class, 'admin'])->name('admin.admin');
    // Route::get('/superadmin', [\App\Http\Controllers\Admin\AuthController::class, 'superadmin'])->name('admin.superadmin');
    // Route::get('/subadmin', [\App\Http\Controllers\Admin\AuthController::class, 'subadmin'])->name('admin.subadmin');
    // Route::get('/profile/{id}', [\App\Http\Controllers\Admin\AuthController::class, 'edit'])->name('admins.edit');
    // Route::post('/update', [\App\Http\Controllers\Admin\AuthController::class, 'update'])->name('admins.update');
    // Route::get('/delete/{id}', [\App\Http\Controllers\Admin\AuthController::class, 'delete'])->name('admins.delete');
});

Route::middleware('agencyLogin')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Agency\AuthController::class, 'login'])->name('login');
    Route::post('/login-process', [\App\Http\Controllers\Agency\AuthController::class, 'loginProcess'])->name('login.process');
    Route::get('/forgot-password', [\App\Http\Controllers\Agency\AuthController::class, 'forgot'])->name('forgot');
    Route::post('/forgot-password-process', [\App\Http\Controllers\Agency\AuthController::class, 'forgotPassword'])->name('forgot.pass');
    Route::get('/reset-password/{token}', [\App\Http\Controllers\Agency\AuthController::class, 'reset'])->name('reset');
    Route::post('/reset-password-process', [\App\Http\Controllers\Agency\AuthController::class, 'resetPassword'])->name('reset.pass');
});

Route::middleware('agency')->group(function () {
    Route::get('/agency/dashboard', [\App\Http\Controllers\Agency\AuthController::class, 'dashboard'])->name('agency.dashboard');
    Route::get('/agency/profile/{id}', [\App\Http\Controllers\Agency\AuthController::class, 'profile'])->name('agency.profile');
    Route::get('/agency/logout', [\App\Http\Controllers\Agency\AuthController::class, 'logout'])->name('agency.logout');
    Route::get('/agency/payment', [\App\Http\Controllers\Agency\PaymentController::class, 'index'])->name('payment.index');
    Route::get('/agency/success/{id?}', [\App\Http\Controllers\Agency\PaymentController::class, 'success'])->name('payment.success');
    Route::get('/agency/cancel', [\App\Http\Controllers\Agency\PaymentController::class, 'cancel'])->name('payment.cancel');
    Route::get('/agency/stripe-payment/{id}', [\App\Http\Controllers\Agency\PaymentController::class, 'payment'])->name('payment.stripe');
    Route::resource('/agent', \App\Http\Controllers\Agency\AgentController::class, [
        'as' => 'agency'
    ]);
});

Route::middleware('agent')->group(function () {
    Route::get('/agents/dashboard', [\App\Http\Controllers\Agent\AuthController::class, 'dashboard'])->name('agent.dashboard');
    Route::get('/agents/profile/{id}', [\App\Http\Controllers\Agent\AuthController::class, 'profile'])->name('agent.profile');
    Route::get('/agents/logout', [\App\Http\Controllers\Agent\AuthController::class, 'logout'])->name('agent.logout');
    Route::get('/agents/payment', [\App\Http\Controllers\Agent\PaymentController::class, 'index'])->name('agent.payment.index');
    Route::get('/agents/success/{id?}', [\App\Http\Controllers\Agent\PaymentController::class, 'success'])->name('agent.payment.success');
    Route::get('/agents/cancel', [\App\Http\Controllers\Agent\PaymentController::class, 'cancel'])->name('agent.payment.cancel');
    Route::get('/agents/stripe-payment/{id}', [\App\Http\Controllers\Agent\PaymentController::class, 'payment'])->name('agent.payment.stripe');
    Route::resource('/agentposting', \App\Http\Controllers\Agent\PostingController::class);
    Route::get('/coins_deduct', [\App\Http\Controllers\Agent\PostingController::class,'coins_deduct'])->name('agent.coins.deduct');
});
Route::middleware('customer')->group(function () {
    Route::get('/customer/dashboard', [\App\Http\Controllers\Customer\AuthController::class, 'dashboard'])->name('customer.dashboard');
    Route::get('/customer/profile/{id}', [\App\Http\Controllers\Customer\AuthController::class, 'profile'])->name('customer.profile');
    Route::get('/customer/logout', [\App\Http\Controllers\Customer\AuthController::class, 'logout'])->name('customer.logout');
    Route::get('/customer/payment', [\App\Http\Controllers\Customer\PaymentController::class, 'index'])->name('customer.payment.index');
    Route::get('/customer/success/{id?}', [\App\Http\Controllers\Customer\PaymentController::class, 'success'])->name('customer.payment.success');
    Route::get('/customer/cancel', [\App\Http\Controllers\Customer\PaymentController::class, 'cancel'])->name('customer.payment.cancel');
    Route::get('/customer/stripe-payment/{id}', [\App\Http\Controllers\Customer\PaymentController::class, 'payment'])->name('customer.payment.stripe');
    Route::resource('/customerposting', \App\Http\Controllers\Customer\PostingController::class);
});
Route::get('/customer-visitor', [\App\Http\Controllers\Customer\ClientController::class, 'clientCustomer'])->name('customer.portal');
Route::post('/customer/register', [\App\Http\Controllers\Customer\AuthController::class, 'customerRegister'])->name('customer.register');
Route::post('/agent/register', [\App\Http\Controllers\Agent\AuthController::class, 'agentRegister'])->name('agent.register');
Route::get('/agentportal', [\App\Http\Controllers\Agent\ClientController::class, 'clientAgent'])->name('agent.portal');
Route::post('/agency/register', [\App\Http\Controllers\Agency\AuthController::class, 'agencyRegister'])->name('agency.register');
Route::get('/agencyportal', [\App\Http\Controllers\Agency\ClientController::class, 'clientAgency'])->name('agency.portal');

// Route::view('/addadmin', 'admin.pages.admin.addadmin');
// Route::view('/addcustomeradmin', 'admin.pages.admin.addadmin');
// Route::view('/', 'admin.auth.login');
// Route::view('/forgetpass', 'admin.auth.forgetpass');
// Route::view('/resetpass', 'admin.auth.resetpass');
Route::view('/', 'client.pages/index');
// Route::view('/', 'admin.pages.index');
// Route::view('/login', 'admin.auth.login');
// Route::view('/register', 'admin.auth.register');
// agency
// Route::view('/agency', 'admin.pages.agency.agency');
// Route::view('/addagency', 'admin.pages.agency.addagency');
// agent
// Route::view('/agent', 'admin.pages.agent.agent');
// Route::view('/addagent', 'admin.pages.agent.addagent');
// visit customer
// Route::view('/visitor', 'admin.pages.visitcustomer.visitor');
// Route::view('/addcustomer', 'admin.pages.visitcustomer.addcustomer');
// Route::view('/blog', 'admin.pages.blog.blog');
Route::view('/coin', 'admin.pages.finance.coin');
Route::view('/audit', 'admin.pages.finance.audit');
Route::view('/payment', 'admin.pages.finance.payment');
// Route::view('/blogadd', 'admin.pages.blog.blogadd');
// Route::view('/viewadmin', 'admin.pages.admin.viewadmin');

//agency panel
// Route::view('/agencyindex', 'agency.pages.index');

// Route::view('/resetpass', 'agency.auth.resetpass');





// client side
//agency
// Route::view('/agencyportal', 'client.pages.agency.agencyportal');
//agent
// Route::view('/agentportal', 'client.pages.agent.agentportal');
// buy
Route::view('/buy', 'client.pages.buy.buy');
// rent
Route::view('/rent', 'client.pages.rent.rent');
// findagent
Route::view('/findagent', 'client.pages.findagent.findagent');
// agentproperty
Route::view('/agentproperty', 'client.pages.findagent.agentproperty');
// findagency
Route::view('/findagency', 'client.pages.findagency.findagency');
// agencyproperty
Route::view('/agencyproperty', 'client.pages.findagency.agencyproperty');
