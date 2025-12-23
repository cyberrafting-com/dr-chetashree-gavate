<?php
use App\Http\Controllers\ContactController;
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

Route::get('/clear', function () {
    //\Artisan::call('key:generate');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('visiting-consultant', function () {
    return view('visiting-consultant');
})->name('visiting-consultant');

Route::get('opd-consultant', function () {
    return view('opd-consultant');
})->name('opd-consultant');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('about-doctor', function () {
    return view('about-doctor');
})->name('about-doctor');

Route::get('videos', function () {
    return view('videos');
})->name('videos');

Route::get('patient-testimonials', function () {
    return view('patient-testimonials');
})->name('patient-testimonials');

Route::get('tpa-list', function () {
    return view('tpa-list');
})->name('tpa-list');


// service page
Route::get('/physiotherapy', function () {
    return view('departments.physiotherapy');
})->name('physiotherapy');

Route::get('/general-medicine', function () {
    return view('departments.general-medicine');
})->name('general-medicine');

Route::get('/general-surgery', function () {
    return view('departments.general-surgery');
})->name('general-surgery');

Route::get('/orthopedics', function () {
    return view('departments.orthopedics');
})->name('orthopedics');

Route::get('/urology', function () {
    return view('departments.urology');
})->name('urology');

Route::get('/nephrology', function () {
    return view('departments.nephrology');
})->name('nephrology');

Route::get('/gynaecology', function () {
    return view('departments.gynaecology');
})->name('gynaecology');

Route::get('/ophthalmology', function () {
    return view('departments.ophthalmology');
})->name('ophthalmology');

Route::get('/cardiology', function () {
    return view('departments.cardiology');
})->name('cardiology');

Route::get('/ent', function () {
    return view('departments.ent');
})->name('ent');

Route::get('/cosmetic-surgery', function () {
    return view('departments.cosmetic-surgery');
})->name('cosmetic-surgery');

Route::get('/hematology', function () {
    return view('departments.hematology');
})->name('hematology');

Route::get('/neurology', function () {
    return view('departments.neurology');
})->name('neurology');

Route::get('/pediatrics', function () {
    return view('departments.pediatrics');
})->name('pediatrics');

Route::get('/plastic-surgery', function () {
    return view('departments.plastic-surgery');
})->name('plastic-surgery');

Route::get('/dermatology', function () {
    return view('departments.dermatology');
})->name('dermatology');

// facilities page start

Route::get('/pathology', function () {
    return view('facilities.pathology');
})->name('pathology');

Route::get('/ultrasound', function () {
    return view('facilities.ultrasound');
})->name('ultrasound');

Route::get('/digital-xray', function () {
    return view('facilities.digital-xray');
})->name('digital-xray');

Route::get('/color-doppler', function () {
    return view('facilities.color-doppler');
})->name('color-doppler');

Route::get('/computerised-stress-test', function () {
    return view('facilities.computerised-stress-test');
})->name('computerised-stress-test');

Route::get('/ecg', function () {
    return view('facilities.ecg');
})->name('ecg');

Route::get('/pulmonary-function-test', function () {
    return view('facilities.pulmonary-function-test');
})->name('pulmonary-function-test');

Route::get('/computerised-stress-test', function () {
    return view('facilities.computerised-stress-test');
})->name('computerised-stress-test');

Route::get('/other-facilities', function () {
    return view('facilities.other-facilities');
})->name('other-facilities');

Route::get('/advanced-sonography-2d-echo', function () {
    return view('facilities.advanced-sonography-2d-echo');
})->name('advanced-sonography-2d-echo');

Route::get('/colonoscopy', function () {
    return view('facilities.colonoscopy');
})->name('colonoscopy');

Route::get('/gastroscopy', function () {
    return view('facilities.gastroscopy');
})->name('gastroscopy');


Route::get('/cardiac-strain-imaging-ecg-pro', function () {
    return view('facilities.cardiac-strain-imaging-ecg-pro');
})->name('cardiac-strain-imaging-ecg-pro');

Route::get('/international-patients', function () {
    return view('international-patients');
})->name('international-patients');

Route::get('/infrastructure', function () {
    return view('infrastructure');
})->name('infrastructure');

Route::get('/nabh-accredited-hospital', function () {
    return view('nabh-accredited-hospital');
})->name('nabh-accredited-hospital');

Route::get('/tpa-list', function () {
    return view('tpa-list');
})->name('tpa-list');

Route::get('/mtp-services', function () {
    return view('mtp-services');
})->name('mtp-services');

Route::get('/ipd-meals', function () {
    return view('meals');
})->name('meals');

Route::get('/testi', function () {
    return view('testi');
})->name('testi');

Route::get('/opd-test', function () {
    return view('opd-test');
})->name('opd-test');

Route::get('/surgical-privileges', function () {
    return view('surgical-privileges');
})->name('surgical-privileges');

Route::get('/waste-management', function () {
    return view('waste-management');
})->name('waste-management');

// Route::get('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');

// Route::get('/admission',[ContactController::class, 'bookAppointment'])->name('admission');
// Route::get('/contact-us', [ContactController::class, 'viewForm'])->name('contact');
// Route::post('/contact/save', [ContactController::class, 'sendEmail'])->name('saveContact');