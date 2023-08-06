<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminKnotsComponent;
use App\Http\Livewire\Admin\AdminProductComponent;

use App\Http\Livewire\User\UserDashboardComponent;


use App\Http\Livewire\Admin\ProductListingComponent;

use App\Http\Livewire\GiftBirthdayComponent;
use App\Http\Livewire\GiftDateComponent;

use App\Http\Livewire\AgencyComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\BusinessComponent;
use App\Http\Livewire\Career\CareerComponent;
use App\Http\Livewire\Career\DetailComponent;
use App\Http\Livewire\Career\HireusComponent;
use App\Http\Livewire\ConsultingComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CorporateComponent;
use App\Http\Livewire\ErrorComponent;

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PricingComponent;
use App\Http\Livewire\PrivacyComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\TermsComponent;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


//admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/product', AdminProductComponent::class)->name('admin.product');
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.category');
    Route::get('/admin/knots', AdminKnotsComponent::class)->name('admin.knots');
    Route::get('/listing', ProductListingComponent::class)->name('admin.productlisting');
});


Route::get ( '/Expand Your Business', HomeComponent::class)->name('space.home');
Route::get ( '/', ProductComponent::class)->name('product.home');

//Birthday
Route::get('/birthday', GiftBirthdayComponent::class)->name('gift.business');
Route::get('/birthday/{board}/tie/{ido}', GiftDateComponent::class)->name('date.business');

//Career
Route::get('/career', CareerComponent::class)->name('space.career');
Route::get('/description', DetailComponent::class)->name('space.description');
Route::get('/hire-us', HireusComponent::class)->name('space.hire');

//Route::get('/about', AboutComponent::class)->name('space.about');
Route::get('/agency', AgencyComponent::class)->name('space.agency');
Route::get('/business', BusinessComponent::class)->name('space.business');
Route::get('/consulting', ConsultingComponent::class)->name('space.consulting');
Route::get('/contact', ContactComponent::class)->name('space.contact');
Route::get('/corporate', CorporateComponent::class)->name('space.corporate');

Route::get('/error', ErrorComponent::class)->name('space.error');
Route::get('/pricing', PricingComponent::class)->name('space.pricing');
Route::get('/privacy', PrivacyComponent::class)->name('space.privacy');
Route::get('/services', ServicesComponent::class)->name('space.services');
Route::get('/teams', TermsComponent::class)->name('space.teams');



// Route::middleware([
//     'auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//     Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
// });

//user
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});



//sitemap
Route::get('sitemap',function(){
$site = App::make('sitemap');
$site->add(URL::to('/'),date("Y-m-d h:i:s"),1,'daily');
$site->store('xml', 'sitemap');

});