<?php



use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\StudentController;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\RegisterUserInSiteController;
use App\Http\Controllers\PythonAppController;

use App\Http\Controllers\YoutubeController;

use App\Http\Controllers\smsController;

use App\Http\Controllers\CupanController;

use App\Http\Controllers\CCAvenueController;

use App\Http\Controllers\VideoController;

use App\Http\Controllers\Auth\ForgotPasswordController;

use Illuminate\Support\Facades\Auth;



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



Route::get('/web_page', function () {

    return view('web_page');

});



Auth::routes();

Route::post('/api/python-app', [PythonAppController::class, 'updateIp'])->name('update-ip');
Route::get('/check-ip', [PythonAppController::class, 'checkIp'])->name('check-ip');
Route::get('/not-allow', [PythonAppController::class, 'notAllowPage'])->name('not-allow');

Route::get('/payment', [CCAvenueController::class, 'index']);
Route::post('/payment/process', [CCAvenueController::class, 'process'])->name('process');
Route::match(['get', 'post'] ,'/payment/response', [CCAvenueController::class, 'response'])->name('payment.response');
Route::match(['get', 'post'] ,'/payment/cancel', [CCAvenueController::class, 'cancel'])->name('payment.cancel');

Route::get('/video', [VideoController::class, 'video'])->name('video');
Route::post('/uploadLargeFiles', [VideoController::class, 'uploadLargeFiles'])->name('files.upload.large');


Route::get('/home', [HomeController::class, 'index'])->name('index');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/eng', [HomeController::class, 'eng_index'])->name('eng_index');

Route::get('/send-otp-sms', [SMSController::class, 'sendOTPSMS'])->name('sendOTPSMS');

Route::post('/resend_otp', [RegisterUserInSiteController::class, 'resend_otp'])->name('resend_otp');



Route::post('/hfghfghfghg', [AdminController::class, 'logout_function'])->name('logout_function');



Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::get('/vsdjvndnvdv', [RegisterUserInSiteController::class, 'course_register_form'])->name('course.register.form');
Route::get('/vsdjvndnvdv/eng', [RegisterUserInSiteController::class, 'course_register_form_english'])->name('course.register.form.eng');
Route::get('/bsdjfyh_sdgfusuh_safhsuia', [RegisterUserInSiteController::class, 'course_register_form_english'])->name('course.course_register_form_english');

Route::post('/nwdjcvnweww', [RegisterUserInSiteController::class, 'store_course_register_user'])->name('store.course.register.user');

Route::get('/dvndeinvdsd', [RegisterUserInSiteController::class, 'term_and_condition'])->name('term_and_condition');

Route::get('/jrweorjojro/{id}', [RegisterUserInSiteController::class, 'otp_form'])->name('otp_form');
Route::get('/asdgyuast_agdy/{id}', [RegisterUserInSiteController::class, 'otp_form_english'])->name('otp_form_english');

Route::post('/kqwnekwqne', [RegisterUserInSiteController::class, 'OTP_Verify'])->name('OTP_Verify');
Route::post('/OTP_Verify_English', [RegisterUserInSiteController::class, 'OTP_Verify_English'])->name('OTP_Verify_English');

Route::get('/sdbhasd_sdgusd/{id}/{reg_id}', [RegisterUserInSiteController::class, 'Cupan_code_view'])->name('Cupan_code_view');
Route::get('/bsdn_asdjhasgd/{id}/{reg_id}', [RegisterUserInSiteController::class, 'Cupan_code_view_english'])->name('Cupan_code_view_english');

Route::POST('/get_alredy_register', [RegisterUserInSiteController::class, 'get_alredy_register'])->name('get_alredy_register');
Route::POST('/get_alredy_register_english', [RegisterUserInSiteController::class, 'get_alredy_register_english'])->name('get_alredy_register_english');
Route::POST('/register_user_store_in_site_english', [RegisterUserInSiteController::class, 'register_user_store_in_site_english'])->name('register_user_store_in_site_english');
Route::POST('/store_course_register_user_english', [RegisterUserInSiteController::class, 'store_course_register_user_english'])->name('store_course_register_user_english');



Route::post('/dfgbrftgjerpg', [RegisterUserInSiteController::class, 'register_user_store_in_site'])->name('register_user_store_in_site');

Route::post('/cupancode_mach', [RegisterUserInSiteController::class, 'cupancode_mach'])->name('cupancode_mach');

Route::get('/alredy_register_dfghuifh', [RegisterUserInSiteController::class, 'alredy_register'])->name('alredy_register');
Route::get('/sbsjfh_sdfhsdf_rnjdvbdo', [RegisterUserInSiteController::class, 'alredy_register_english'])->name('alredy_register_english');



Route::get('/cmwekcwwcwecea', [AdminController::class, 'list_detail'])->name('admin.list_detail');

Route::post('/werieriwrinqw', [AdminController::class, 'store_detail'])->name('admin.store_detail');

Route::post('/jncendfwemdew/{id}', [AdminController::class, 'delete_detail'])->name('admin.delete_detail');
Route::post('/store_detail_english', [AdminController::class, 'store_detail_english'])->name('admin.store_detail_english');


Route::get('/viweknfcowed/{id}', [CCAvenueController::class, 'student_course_purchase'])->name('student_course_purchase');
Route::get('/course/view/', [CCAvenueController::class, 'student_course_purchase_test'])->name('student_course_purchase_test');
Route::get('/sdhj_sdfh_hs/{id}', [CCAvenueController::class, 'student_course_purchase_english'])->name('student_course_purchase_english');


Route::get('about/eng', [AdminController::class, 'about_eng'])->name('admin.about_eng');

Route::get('contact/eng', [AdminController::class, 'cont_eng'])->name('admin.cont_eng');

Route::get('/cancellation-and-refund', [AdminController::class, 'cancellation_and_refund'])->name('admin.cancellation_and_refund');

Route::get('/shipping-and-delivery', [AdminController::class, 'shipping_and_delivery'])->name('admin.shipping_and_delivery');

Route::get('/privacy_policy_eng', [AdminController::class, 'privacy_policy_eng'])->name('admin.privacy_policy_eng');

Route::get('/term_and_condition_eng', [AdminController::class, 'term_and_condition_eng'])->name('admin.term_and_condition_eng');









Route::group(['middleware' => ['auth', 'isStudent']], function () {  

    Route::get('/uuwmwekevfvp', [StudentController::class, 'student_dashboard'])->name('student.dashboard');

    Route::match(['get', 'post'], '/sdsdfdgdfgdfhg', [StudentController::class, 'student_profile'])->name('student.profile');

    Route::get('/vbcvbceryter/{id}', [StudentController::class, 'edit_student_profile'])->name('student.edit.profile');

    Route::post('/cvxcxcvxcvxc', [StudentController::class, 'update_student_profile'])->name('student.update.profile');



    Route::post('/wmklwklqwwq', [StudentController::class, 'student_comment'])->name('student.student_comment');

    Route::get('/ythtt_gfdfg', [StudentController::class, 'student_all_video'])->name('student.student_all_video');

    Route::get('/dvjdfkv_rtee', [StudentController::class, 'student_show_full_screen_video'])->name('student.student_show_full_screen_video');

});









Route::group(['middleware' => ['auth', 'isAdmin']], function () {  

    Route::get('/cvxcjbvfheof', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');

    Route::get('/njwewjenqwed', [AdminController::class, 'studentList'])->name('admin.student.list');

    Route::get('/werjnwqeqwew', [AdminController::class, 'addStudent'])->name('admin.addStudent');

    Route::post('/hfdbghdfgfg', [AdminController::class, 'storeStudent'])->name('admin.storeStudent');

    Route::get('/zzzzhrthrth/{id}', [AdminController::class, 'editStudent'])->name('admin.editStudent');

    Route::post('/bvbbvbvbvbdfb', [AdminController::class, 'updateStudent'])->name('admin.updateStudent');

    Route::post('/ssssdfgggr/{id}', [AdminController::class, 'deleteStudent'])->name('admin.deleteStudent');

    Route::post('/eeeeeertertr/{id}', [AdminController::class, 'lockStudent'])->name('admin.lockStudent');



    Route::get('/pppppgthfgfdd/{id}', [AdminController::class, 'otpStudentForm'])->name('admin.otpStudent');

    Route::post('/vxcvxcvdcxds', [AdminController::class, 'checkStudentotp'])->name('admin.checkStudentotp');


    Route::post('/uploadLargeFiles', [AdminController::class, 'uploadLargeFiles'])->name('files.upload.large');
       

    Route::get('/yertdfgsdvdfdf', [AdminController::class, 'course_list'])->name('admin.course.list');

    Route::get('/vbdfkvdfkvfvdf', [AdminController::class, 'add_course'])->name('admin.add.course');

    Route::post('/qwqwqopwqwpoow', [AdminController::class, 'store_course'])->name('admin.store_course');

    Route::get('/vcjnsdjvbndjs/{id}', [AdminController::class, 'edit_course'])->name('admin.edit_course');

    Route::post('/clksmcqsmwmwm', [AdminController::class, 'update_course'])->name('admin.update_course');

    Route::post('/nkckckkkwfgbf/{id}', [AdminController::class, 'delete_course'])->name('admin.delete_course');

    Route::post('/fdvfvdfvdfddf/{id}', [AdminController::class, 'status_course'])->name('admin.status_course');



    Route::get('/dfvcbfghfgnvb', [AdminController::class, 'youtube_video'])->name('admin.youtube_video');

    Route::post('/ImportStudent', [AdminController::class, 'ImportStudent'])->name('admin.ImportStudent');



    Route::get('/cccckkdwepp', [AdminController::class, 'showAllVideo'])->name('admin.showAllVideo');

    Route::get('/gdfgdfgdfgf', [AdminController::class, 'uploadVideo'])->name('admin.uploadVideo');

    Route::post('/qomkzzkmqka', [AdminController::class, 'storeVideo'])->name('admin.storeVideo');

    Route::post('/dfkmdeqwdqw', [AdminController::class, 'viewVideo'])->name('admin.viewVideo');

    Route::get('/ssxkmpqxqmw', [AdminController::class, 'admin_fullsize_video'])->name('admin.admin-fullsize-video');

    Route::post('/deleteVideo', [AdminController::class, 'deleteVideo'])->name('admin.deleteVideo');



    Route::get('/bjhxfcb_sdbhsf_sbdjh', [CupanController::class, 'index'])->name('admin.cupan_index');

    Route::POST('/ImportCoupan', [CupanController::class, 'ImportCoupan'])->name('admin.ImportCoupan');

    Route::POST('/provide_coupan', [CupanController::class, 'provide_coupan'])->name('admin.provide_coupan');

    Route::POST('/coupan_update', [CupanController::class, 'coupan_update'])->name('admin.coupan_update');

    Route::POST('/coupan_code_delete', [CupanController::class, 'coupan_code_delete'])->name('admin.coupan_code_delete');



    Route::get('/dfvwdckwedcwe', [AdminController::class, 'upcoming_event_form'])->name('admin.upcoming_event_form');

    Route::get('/wcnqwnjkdnqwn', [AdminController::class, 'list_upcoming_event'])->name('admin.list_upcoming_event');

    Route::post('/ejiowqeqwekmd', [AdminController::class, 'store_upcoming_event'])->name('admin.store_upcoming_event');

    Route::get('/ureiwtuitiure/{id}', [AdminController::class, 'edit_upcoming_event'])->name('admin.edit_upcoming_event');

    Route::post('/bnxvcvbrewrew', [AdminController::class, 'update_upcoming_event'])->name('admin.update_upcoming_event');

    Route::post('/njkasnxsxkjxq/{id}', [AdminController::class, 'delete_upcoming_event'])->name('admin.delete_upcoming_event');



    Route::get('/fnvjevndenvdn', [AdminController::class, 'registered_student'])->name('registered_student');



    Route::get('/sbfsdhf_snjkd_us_view', [AdminController::class, 'contact_us_view'])->name('contact_us_view');

});



