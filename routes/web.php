<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommonfieldsController;
use App\Http\Controllers\DoctormasterController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\PackagedetailController;
use App\Http\Controllers\PackgeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestcenterController;
use App\Http\Controllers\TestsuggetionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserdoctorController;
use App\Http\Controllers\UserdoctorhistoryController;
use App\Http\Controllers\UserlabreportController;
use App\Http\Controllers\UsermasterController;
use App\Http\Controllers\UsermedicinehistoryController;
use App\Http\Controllers\UserpackageController;
use App\Http\Controllers\UsertestcenterController;
use App\Http\Controllers\DeshboardController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\GooglereviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SampletypeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestdetailController;
use App\Http\Controllers\TesttypeController;
use App\Models\Aboutus;
use App\Models\packge;
use App\Models\Packagedetail;

use App\Models\Usermaster;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    $aboutus = Aboutus::first();
    $package = Packge::all();
    $packagedetail = Packagedetail::join('packges', 'packges.id', '=', 'packagedetails.packageId')->get(['packagedetails.description']);
    $package2 = Packge::all();
    return view('welcome', compact('aboutus', 'package', 'package2', 'packagedetail'));
});
Auth::routes();

Route::get('/logins', [HomeController::class, 'visitorLogin'])->name('visitor');
Route::post('/logins', [HomeController::class, 'visitorLoginStore'])->name('visitor.store');
Route::match(['get', 'post'], '/package', [HomeController::class, 'create'])->name('ourpackage');
Route::post('/updateData/{id?}', [HomeController::class, 'updateData'])->name('ourpackage.updateData');


Route::get('/book', [HomeController::class, 'book'])->name('ourpackage.book');
// Route::get('/packageprice',[HomeController::class,'packageprice'])->name('ourpackage.packageprice');  


Route::get('/logins', [HomeController::class, 'index'])->name('visitor');
Route::match(['get', 'post'], '/package', [HomeController::class, 'create'])->name('ourpackage');
Route::post('/updateData/{id?}', [HomeController::class, 'updateData'])->name('ourpackage.updateData');

// calculator
route::post('welcome', [HomeController::class, 'calculator'])->name('welcome');
route::get('book/{packageid?}', [HomeController::class, 'booknow'])->name('book');
route::post('book', [HomeController::class, 'booknowstore'])->name('bookstore');

// faq home page
Route::get('faq', [HomeController::class, 'faq'])->name('faq.create');

Route::get('/deshboard', [DeshboardController::class, 'create'])->name('deshboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permission', PermissionsController::class);
});

// RazorPay 


Route::get('payment', [PaymentController::class, 'payWithRazorpay'])->name('paymentview');
Route::post('paymentstore', [PaymentController::class, 'payment'])->name('payment');

// permission table 
Route::controller(PermissionsController::class)->group(function () {
    Route::get('permissions/index', 'index')->name('permissions.index');
    Route::get('permissions/create', 'create')->name('permissions.create');
    Route::post('permissions/store', 'store')->name('permissions.store');
    Route::get('permissions/edit/{id?}', 'edit')->name('permissions.edit');
    Route::post('permissions/update', 'update')->name('permissions.update');
    Route::get('permissions/delete/{id?}', 'destroy')->name('permissions.destroy');
});

// admin side master
Route::get('admin/master/index', [MasterController::class, 'index'])->name('admin.master.index');
Route::get('admin/master/create', [MasterController::class, 'create'])->name('admin.master.create');
Route::post('admin/master/store', [MasterController::class, 'store'])->name('admin.master.store');
Route::get('admin/master/edit/{id?}', [MasterController::class, 'edit'])->name('admin.master.edit');
Route::post('admin/master/update/{id?}', [MasterController::class, 'update'])->name('admin.master.update');
Route::get('admin/master/delete/{id?}', [MasterController::class, 'destroy'])->name('admin.master.delete');

// admin side testsuggetion
Route::get('admin/testsuggetion/index', [TestsuggetionController::class, 'index'])->name('admin.testsuggetion.index');
Route::get('admin/testsuggetion/create', [TestsuggetionController::class, 'create'])->name('admin.testsuggetion.create');
Route::post('admin/testsuggetion/store', [TestsuggetionController::class, 'store'])->name('admin.testsuggetion.store');
Route::get('admin/testsuggetion/edit/{id?}', [TestsuggetionController::class, 'edit'])->name('admin.testsuggetion.edit');
Route::post('admin/testsuggetion/update/{id?}', [TestsuggetionController::class, 'update'])->name('admin.testsuggetion.update');
Route::get('admin/testsuggetion/delete/{id?}', [TestsuggetionController::class, 'destroy'])->name('admin.testsuggetion.delete');

// admin side packge
Route::controller(PackgeController::class)->group(function () {
    Route::get('admin/package/index', 'index')->name('admin.package.index');
    Route::get('admin/package/create', 'create')->name('admin.package.create');
    Route::post('admin/package/store', 'store')->name('admin.package.store');
    Route::get('admin/package/edit/{id?}', 'edit')->name('admin.package.edit');
    Route::post('admin/package/update/{id?}', 'update')->name('admin.package.update');
    Route::get('admin/package/delete/{id?}', 'destroy')->name('admin.package.delete');
});

// admin side Booking View
Route::controller(BookingController::class)->group(function () {
    Route::get('booking/index', 'index')->name('booking.index');
});

// admin side package details
Route::controller(PackagedetailController::class)->group(function () {
    Route::get('admin/packagedetail/index', 'index')->name('admin.packagedetail.index');
    Route::get('admin/packagedetail/create', 'create')->name('admin.packagedetail.create');
    Route::post('admin/packagedetail/store', 'store')->name('admin.packagedetail.store');
    Route::get('admin/packagedetail/edit/{id?}', 'edit')->name('admin.packagedetail.edit');
    Route::post('admin/packagedetail/update/{id?}', 'update')->name('admin.packagedetail.update');
    Route::get('admin/packagedetail/delete/{id?}', 'destroy')->name('admin.packagedetail.delete');
});

// admin side userpackage
Route::controller(UserpackageController::class)->group(function () {
    Route::get('admin/userpackage/index', 'index')->name('admin.userpackage.index');
    Route::get('admin/userpackage/create', 'create')->name('admin.userpackage.create');
    Route::post('admin/userpackage/store', 'store')->name('admin.userpackage.store');
    Route::get('admin/userpackage/edit/{id?}', 'edit')->name('admin.userpackage.edit');
    Route::post('admin/userpackage/update/{id?}', 'update')->name('admin.userpackage.update');
    Route::get('admin/userpackage/delete/{id?}', 'destroy')->name('admin.userpackage.delete');
});

// admin side testcenters

Route::controller(TestcenterController::class)->group(function () {
    Route::get('admin/testcenter/index', 'index')->name('admin.testcenter.index');
    Route::get('admin/testcenter/create', 'create')->name('admin.testcenter.create');
    Route::post('admin/testcenter/store', 'store')->name('admin.testcenter.store');
    Route::get('admin/testcenter/edit/{id?}', 'edit')->name('admin.testcenter.edit');
    Route::post('admin/testcenter/update/{id?}', 'update')->name('admin.testcenter.update');
    Route::get('admin/testcenter/delete/{id?}', 'destroy')->name('admin.testcenter.delete');
});

// admin side Doctormaster
Route::controller(DoctormasterController::class)->group(function () {
    Route::get('admin/doctormaster/index', 'index')->name('admin.doctormaster.index');
    Route::get('admin/doctormaster/create', 'create')->name('admin.doctormaster.create');
    Route::post('admin/doctormaster/store', 'store')->name('admin.doctormaster.store');
    Route::get('admin/doctormaster/edit/{id?}', 'edit')->name('admin.doctormaster.edit');
    Route::post('admin/doctormaster/update/{id?}', 'update')->name('admin.doctormaster.update');
    Route::get('admin/doctormaster/delete/{id?}', 'destroy')->name('admin.doctormaster.delete');
});

// user Lab Reports
Route::controller(UserlabreportController::class)->group(function () {
    Route::get('admin/userlabreport/index', 'index')->name('admin.userlabreport.index');
    Route::get('admin/userlabreport/create', 'create')->name('admin.userlabreport.create');
    Route::post('admin/userlabreport/store', 'store')->name('admin.userlabreport.store');
    Route::get('admin/userlabreport/edit/{id?}', 'edit')->name('admin.userlabreport.edit');
    Route::post('admin/userlabreport/update', 'update')->name('admin.userlabreport.update');
    Route::get('admin/userlabreport/delete/{id?}', 'destroy')->name('admin.userlabreport.delete');
});

// user test center
Route::controller(UsertestcenterController::class)->group(function () {
    Route::get('admin/usertestcenter/index', 'index')->name('admin.usertestcenter.index');
    Route::get('admin/usertestcenter/create', 'create')->name('admin.usertestcenter.create');
    Route::post('admin/usertestcenter/store', 'store')->name('admin.usertestcenter.store');
    Route::get('admin/usertestcenter/edit/{id?}', 'edit')->name('admin.usertestcenter.edit');
    Route::post('admin/usertestcenter/update', 'update')->name('admin.usertestcenter.update');
    Route::get('admin/usertestcenter/delete/{id?}', 'destroy')->name('admin.usertestcenter.delete');
});

// UserMaster
Route::controller(UsermasterController::class)->group(function () {
    Route::get('admin/usermaster/index', 'index')->name('admin.usermaster.index');
    Route::get('admin/usermaster/create', 'create')->name('admin.usermaster.create');
    Route::post('admin/usermaster/store', 'store')->name('admin.usermaster.store');
    Route::get('admin/usermaster/edit/{id?}', 'edit')->name('admin.usermaster.edit');
    Route::post('admin/usermaster/update', 'update')->name('admin.usermaster.update');
    Route::get('admin/usermaster/delete/{id?}', 'destroy')->name('admin.usermaster.delete');
});

// Sample type
Route::controller(SampletypeController::class)->group(function () {
    Route::get('admin/sampletype/index', 'index')->name('admin.sampletype.index');
    Route::get('admin/sampletype/create', 'create')->name('admin.sampletype.create');
    Route::post('admin/sampletype/store', 'store')->name('admin.sampletype.store');
    Route::get('admin/sampletype/edit/{id?}', 'edit')->name('admin.sampletype.edit');
    Route::post('admin/sampletype/update', 'update')->name('admin.sampletype.update');
    Route::get('admin/sampletype/delete/{id?}', 'destroy')->name('admin.sampletype.delete');
});

// Test type
Route::controller(TesttypeController::class)->group(function () {
    Route::get('admin/testtype/index', 'index')->name('admin.testtype.index');
    Route::get('admin/testtype/create', 'create')->name('admin.testtype.create');
    Route::post('admin/testtype/store', 'store')->name('admin.testtype.store');
    Route::get('admin/testtype/edit/{id?}', 'edit')->name('admin.testtype.edit');
    Route::post('admin/testtype/update', 'update')->name('admin.testtype.update');
    Route::get('admin/testtype/delete/{id?}', 'destroy')->name('admin.testtype.delete');
});

/* Doctor side */

// doctor side user Doctor History
Route::controller(UserdoctorhistoryController::class)->group(function () {
    Route::get('doctor/userdoctorhistory/index', 'index')->name('doctor.userdoctorhistory.index');
    Route::get('doctor/userdoctorhistory/create', 'create')->name('doctor.userdoctorhistory.create');
    Route::post('doctor/userdoctorhistory/store', 'store')->name('doctor.userdoctorhistory.store');
    Route::get('doctor/userdoctorhistory/edit/{id?}', 'edit')->name('doctor.userdoctorhistory.edit');
    Route::post('doctor/userdoctorhistory/update', 'update')->name('doctor.userdoctorhistory.update');
    Route::get('doctor/userdoctorhistory/delete/{id?}', 'destroy')->name('doctor.userdoctorhistory.delete');
});

// doctor side usermedicinehistory
Route::controller(UsermedicinehistoryController::class)->group(function () {
    Route::get('doctor/usermedicinehistory/index', 'index')->name('doctor.usermedicinehistory.index');
    Route::get('doctor/usermedicinehistory/create', 'create')->name('doctor.usermedicinehistory.create');
    Route::post('doctor/usermedicinehistory/store', 'store')->name('doctor.usermedicinehistory.store');
    Route::get('doctor/usermedicinehistory/edit/{id?}', 'edit')->name('doctor.usermedicinehistory.edit');
    Route::post('doctor/usermedicinehistory/update', 'update')->name('doctor.usermedicinehistory.update');
    Route::get('doctor/usermedicinehistory/delete/{id?}', 'destroy')->name('doctor.usermedicinehistory.delete');
});

Route::controller(doctormasterController::class)->group(function () {
    Route::get('doctor/profileedit', 'profileedit')->name('doctor.doctormaster.profileedit');
    Route::post('doctor/profileupdate', 'profileupdate')->name('doctor.doctormaster.profileupdate');
});

// doctor side appointment
Route::controller(UserdoctorController::class)->group(function () {
    Route::get('doctor/appointment', 'view')->name('doctor.appointment.view');
});


// aboutus type
Route::controller(AboutusController::class)->group(function () {
    Route::get('admin/aboutus/index', 'index')->name('admin.aboutus.index');
    Route::get('admin/aboutus/create', 'create')->name('admin.aboutus.create');
    Route::post('admin/aboutus/store', 'store')->name('admin.aboutus.store');
    Route::get('admin/aboutus/edit/{id?}', 'edit')->name('admin.aboutus.edit');
    Route::post('admin/aboutus/update', 'update')->name('admin.aboutus.update');
    Route::get('admin/aboutus/delete/{id?}', 'destroy')->name('admin.aboutus.delete');
});

// blog 
Route::controller(BlogController::class)->group(function () {
    Route::get('admin/blog/index', 'index')->name('admin.blog.index');
    Route::get('admin/blog/create', 'create')->name('admin.blog.create');
    Route::post('admin/blog/store', 'store')->name('admin.blog.store');
    Route::get('admin/blog/edit/{id?}', 'edit')->name('admin.blog.edit');
    Route::post('admin/blog/update', 'update')->name('admin.blog.update');
    Route::get('admin/blog/delete/{id?}', 'destroy')->name('admin.blog.delete');
});

// FAQ 
Route::controller(FAQController::class)->group(function () {
    Route::get('admin/faq/index', 'index')->name('admin.faq.index');
    Route::get('admin/faq/create', 'create')->name('admin.faq.create');
    Route::post('admin/faq/store', 'store')->name('admin.faq.store');
    Route::get('admin/faq/edit/{id?}', 'edit')->name('admin.faq.edit');
    Route::post('admin/faq/update', 'update')->name('admin.faq.update');
    Route::get('admin/faq/delete/{id?}', 'destroy')->name('admin.faq.delete');
});

Route::controller(GooglereviewController::class)->group(function () {
    route::get('review', 'index')->name('review');
});

Route::controller(TestController::class)->group(function () {
    Route::get('admin/test/index', 'index')->name('admin.test.index');
    Route::get('admin/test/create', 'create')->name('admin.test.create');
    Route::post('admin/test/store', 'store')->name('admin.test.store');
    Route::get('admin/test/edit/{id?}', 'edit')->name('admin.test.edit');
    Route::post('admin/test/update', 'update')->name('admin.test.update');
    Route::get('admin/test/delete/{id?}', 'destroy')->name('admin.test.delete');
});

Route::controller(TestdetailController::class)->group(function () {
    Route::get('admin/testdetail/index', 'index')->name('admin.testdetail.index');
    Route::get('admin/testdetail/create', 'create')->name('admin.testdetail.create');
    Route::post('admin/testdetail/store', 'store')->name('admin.testdetail.store');
    Route::get('admin/testdetail/edit/{id?}', 'edit')->name('admin.testdetail.edit');
    Route::post('admin/testdetail/update', 'update')->name('admin.testdetail.update');
    Route::get('admin/testdetail/delete/{id?}', 'destroy')->name('admin.testdetail.delete');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
