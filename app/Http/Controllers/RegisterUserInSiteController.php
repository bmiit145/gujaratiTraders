<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Register_user_in_site;

use App\Models\Course_register;

use App\Models\User;

use App\Models\Course;

use DB;

use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;



class RegisterUserInSiteController extends Controller

{

    // Store register user in our site. 

    public function register_user_store_in_site(Request $request)

    {

        $request->validate([

            'first_name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',

            'last_surname' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',

            'mobile_number' => 'required|unique:register_user_in_sites,mobile_number|regex:/^\d{10}$/',

            'email' => 'required|email|max:255|ends_with:.com,.net,.org', 

            'is_reference' => 'required|array', 

        ], [

            'first_name.required' => 'ÔYD GFD OLÿ0 VFJxIS K[P',

            'first_name.regex' => ';\5}6" GFDDF\ OS®T 8[S®:8 CMJM •[>V[P',

            'last_surname.required' => 'V8S OLÿ0 VFJxIS K[P',

            'last_surname.regex' => ';\5}6" GFDDF\ OS®T 8[S®:8 CMJM •[>V[P',

            'mobile_number.required' => 'DMAF., G\AZ OLÿ0 VFJxIS K[P',

            'mobile_number.regex' => 'DMAF>, G\AZ 10<V\SGM G\AZ CMJM •[>V[P',

            'mobile_number.unique' => 'DMAF>, G\AZ 5C[,[YL H ,[JFDF\ VFjIM K[P', 

            'email.required' => " S'5F SZLG[ TDFÚ\ .D[., ;ZGFD]\ VF5MP ",

            'email.email' => " S'5F SZLG[ DFgI .D[., ;ZGFD]\ ÔNFG SZMP ",

            'email.ends_with' => '.D[., OMD¢8 VDFgI K[P',

            'email.unique' => "VF .D[., ;ZGFD]\ 5C[,[YL H GM\WFI[,]\ K[P ",

            'is_reference.required' => 'VMKFDF\ VMKM V[S ;\NE" 5;\N SZJM VFJxIS K[P', 

        ]);        

    

        $register_user = new Register_user_in_site;

        $register_user->first_name = $request->first_name;

        $register_user->last_surname = $request->last_surname;

        $register_user->mobile_number = $request->mobile_number;

        $register_user->email = $request->email;

        $register_user->is_reference = implode(', ', array_keys($request->is_reference)); 

        $register_user->save();

    

        return back()->with('success', 'TDFZL GM\W6L ;O/TF5}J"S Y> U> K[4 VD[ Z$ S,FSDF\ TDFZM ;\5S" SZLX]\P');

    }



    public function register_user_store_in_site_english(Request $request)

    {

        $request->validate([

            'first_name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',

            'last_surname' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',

            'mobile_number' => 'required|unique:register_user_in_sites,mobile_number|regex:/^\d{10}$/',

            'email' => 'required|email|max:255|ends_with:.com,.net,.org', 

            'is_reference' => 'required|array', 

        ], [

            'first_name.required' => 'ÔYD GFD OLÿ0 VFJxIS K[P',

            'first_name.regex' => ';\5}6" GFDDF\ OS®T 8[S®:8 CMJM •[>V[P',

            'last_surname.required' => 'V8S OLÿ0 VFJxIS K[P',

            'last_surname.regex' => ';\5}6" GFDDF\ OS®T 8[S®:8 CMJM •[>V[P',

            'mobile_number.required' => 'DMAF., G\AZ OLÿ0 VFJxIS K[P',

            'mobile_number.regex' => 'DMAF>, G\AZ 10<V\SGM G\AZ CMJM •[>V[P',

            'mobile_number.unique' => 'DMAF>, G\AZ 5C[,[YL H ,[JFDF\ VFjIM K[P', 

            'email.required' => " S'5F SZLG[ TDFÚ\ .D[., ;ZGFD]\ VF5MP ",

            'email.email' => " S'5F SZLG[ DFgI .D[., ;ZGFD]\ ÔNFG SZMP ",

            'email.ends_with' => '.D[., OMD¢8 VDFgI K[P',

            'email.unique' => "VF .D[., ;ZGFD]\ 5C[,[YL H GM\WFI[,]\ K[P ",

            'is_reference.required' => 'VMKFDF\ VMKM V[S ;\NE" 5;\N SZJM VFJxIS K[P', 

        ]);        

    

        $register_user = new Register_user_in_site;

        $register_user->first_name = $request->first_name;

        $register_user->last_surname = $request->last_surname;

        $register_user->mobile_number = $request->mobile_number;

        $register_user->email = $request->email;

        $register_user->is_reference = implode(', ', array_keys($request->is_reference)); 

        $register_user->save();

    

        return back()->with('success', 'TDFZL GM\W6L ;O/TF5}J"S Y> U> K[4 VD[ Z$ S,FSDF\ TDFZM ;\5S" SZLX]\P');

    }


    public function course_register_form(){

        return view('Register_users/user-register');
    }

    public function course_register_form_english()

    {
        return view('Register_users/user-register-english');
    }

    public function store_course_register_user(Request $request)
    {
        $validation = $request->validate([
            'full_name' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s]+$/',
                'max:255'
            ],
            'country' => [
                'required',
                // 'string',
                // 'max:255'
            ],
            'street_address' => [
                'required',
                // 'string',
                'max:255'
            ],
            'city' => [
                'required',
                'string',
                'regex:/^[a-zA-Z]+$/',
                'max:255'
            ],
            'state' => [
                'required',
                // 'string',
                // 'max:255'
            ],
            'pincode' => [
                'required',
                // 'string',
                'regex:/^[0-9]+$/',
                'max:20'
            ],
            'phone.main' => [
                'required',
                // 'string',
                'unique:users,phone'
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'ends_with:.com,.net,.org'
            ],
            'terms_and_conditions' => [
                'required',
                'accepted'
            ],
        ], [
            'full_name.required' => '5}Ú\ GFD H~ZL K[P',
            'full_name.string' => ';\5}6" GFD 8[S®:8 CMJ]\ VFJxIS K[P',
            'full_name.regex' => ';\5}6" GFDDF\ DF+ V1ZM VG[ HuIFVM CM> XS[ K[P',
            'full_name.max' => ';\5}6" GFD 255 V1ZMYL JW] G CM> XS[P',
        
            'country.required' => 'N[X 5;\N SZJM VFJxIS K[P',
            // 'country.string' => 'Country must be a string.',
            // 'country.max' => 'Country cannot exceed 255 characters.',
        
            'street_address.required' => 'X[ZLG]\ ;ZGFD]\ H~ZL K[P',
            // 'street_address.string' => 'Street address must be a string.',
            'street_address.max' => 'X[ZLG]\ ;ZGFD]\ 255 V1ZMYL JW] G CM> XS[P',
        
            'city.required' => 'XC[Z H~ZL K[P',
            'city.string' => 'XC[Z V[S 8[S®:8 CMJ]\ VFJxIS K[P',
            'city.regex' => 'XC[ZDF\ DF+ V1ZM CM> XS[ K[P',
            'city.max' => 'XC[Z 255 V1ZMYL JW] G CM> XS[P',
        
            'state.required' => 'ZFþI 5;\N SZJ]\ VFJxIS K[P',
            // 'state.string' => 'State must be a string.',
            // 'state.max' => 'State cannot exceed 255 characters.',
        
            'pincode.required' => 'l5GSM0 H~ZL K[P',
            // 'pincode.string' => 'Pincode must be a string.',
            'pincode.regex' => 'l5GSM0DF\ DF+ G\AZM CM> XS[ K[P',
            'pincode.max' => 'l5GSM0 20 V1ZMYL JW] G CM> XS[P',
        
            'phone.main.required' => 'OMG G\AZ H~ZL K[P',
            // 'phone.main.string' => 'Phone number must be a string.',
            'phone.main.unique' => 'OMG G\AZ 5C[,[YL H ,[JFDF\ VFjIM K[P',
        
            'email.required' => '.D[., ;ZGFD]\ VFJxIS K[P',
            'email.email' => 'cPD[P4 îZGFD]\ VFJxIS K[P',
            'email.max' => '.D[., ;ZGFD]\ 255 V1ZMYL JW] G CM> XS[P',
            'email.ends_with' => '.D[., ;ZGFD]\ Pcom4 Pnet VYJF Porg ;FY[ ;DFÓ YJ]\ •[>V[P',
        
            'terms_and_conditions.required' => 'TDFZ[ lGIDM VG[ XZTM :JLSFZJL 50X[P',
            'terms_and_conditions.accepted' => 'TDFZ[ lGIDM VG[ XZTM :JLSFZJL 50X[P',
        ]);        
    
        $course_register = new User;
    
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profile_image'), $imageName);
            $course_register->profile_image = $imageName;
        }
    
        $course_register->full_name = $request->full_name;
        $course_register->country = $request->country;
        $course_register->street_address = $request->street_address;
        $course_register->city = $request->city;
        $course_register->state = $request->state;
        $course_register->pincode = $request->pincode;
        $course_register->phone = $request->input('phone.main');
        $course_register->email = $request->email;
        $course_register->otp = rand(111111, 999999);
    
        date_default_timezone_set('Asia/Kolkata');
        $course_register->otp_date_time = date('d-m-Y H:i:s');
        $course_register->term_and_condition = 1;
    
        $mobile = $course_register->phone;
        $newmobile = substr($mobile, 1);
    
        $smsController = new SMSController();
        $otpResponse = $smsController->sendOTPSMS($course_register->otp, $newmobile);
    
        if ($otpResponse['success']) {
            // Generate a unique identifier for the session
            $uniqueId = uniqid();
    
            // Store user data in session
            $request->session()->put('user_data_' . $uniqueId, $course_register);
    
            // Debug: Check if session data is stored correctly
            $storedUser = $request->session()->get('user_data_' . $uniqueId);
            if (!$storedUser) {
                return back()->with('error', 'Failed to store session data.');
            }
    
            // Redirect with the unique ID
            return redirect()->route('otp_form', ['id' => $uniqueId])->with('success', "OTP sent successfully, Please verify");
        } else {
            return back()->with('error', 'Failed to send OTP. Please try again.');
        }
    }
    
    public function store_course_register_user_english(Request $request){
        $validation = $request->validate([
            'full_name' => [
                'required',
                'string',
                'regex:/^[a-zA-Z\s]+$/',
                'max:255'
            ],
            'country' => [
                'required',
                // 'string',
                // 'max:255'
            ],
            'street_address' => [
                'required',
                // 'string',
                'max:255'
            ],
            'city' => [
                'required',
                'string',
                'regex:/^[a-zA-Z]+$/',
                'max:255'
            ],
            'state' => [
                'required',
                // 'string',
                // 'max:255'
            ],
            'pincode' => [
                'required',
                // 'string',
                'regex:/^[0-9]+$/',
                'max:20'
            ],
            'phone.main' => [
                'required',
                // 'string',
                'unique:users,phone'
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                'ends_with:.com,.net,.org'
            ],
            'terms_and_conditions' => [
                'required',
                'accepted'
            ],
        ], [
            'full_name.required' => 'Full name is required.',
            'full_name.string' => 'Full name must be a string.',
            'full_name.regex' => 'Full name can only contain letters and spaces.',
            'full_name.max' => 'Full name cannot exceed 255 characters.',
        
            'country.required' => 'Country is required.',
            // 'country.string' => 'Country must be a string.',
            // 'country.max' => 'Country cannot exceed 255 characters.',
        
            'street_address.required' => 'Street address is required.',
            // 'street_address.string' => 'Street address must be a string.',
            'street_address.max' => 'Street address cannot exceed 255 characters.',
        
            'city.required' => 'City is required.',
            'city.string' => 'City must be a string.',
            'city.regex' => 'City can only contain letters.',
            'city.max' => 'City cannot exceed 255 characters.',
        
            'state.required' => 'State is required.',
            // 'state.string' => 'State must be a string.',
            // 'state.max' => 'State cannot exceed 255 characters.',
        
            'pincode.required' => 'Pincode is required.',
            // 'pincode.string' => 'Pincode must be a string.',
            'pincode.regex' => 'Pincode can only contain numbers.',
            'pincode.max' => 'Pincode cannot exceed 20 characters.',
        
            'phone.main.required' => 'Phone number is required.',
            // 'phone.main.string' => 'Phone number must be a string.',
            'phone.main.unique' => 'Phone number has already been taken.',
        
            'email.required' => 'Email address is required.',
            'email.email' => 'Email address must be a valid email.',
            'email.max' => 'Email address cannot exceed 255 characters.',
            'email.ends_with' => 'Email address must end with .com, .net, or .org.',
        
            'terms_and_conditions.required' => 'You must accept the terms and conditions.',
            'terms_and_conditions.accepted' => 'You must accept the terms and conditions.',
        ]);        
    
        $course_register = new User;
    
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/profile_image'), $imageName);
            $course_register->profile_image = $imageName;
        }
    
        $course_register->full_name = $request->full_name;
        $course_register->country = $request->country;
        $course_register->street_address = $request->street_address;
        $course_register->city = $request->city;
        $course_register->state = $request->state;
        $course_register->pincode = $request->pincode;
        $course_register->phone = $request->input('phone.main');
        $course_register->email = $request->email;
        $course_register->otp = rand(111111, 999999);
    
        date_default_timezone_set('Asia/Kolkata');
        $course_register->otp_date_time = date('d-m-Y H:i:s');
        $course_register->term_and_condition = 1;
    
        $mobile = $course_register->phone;
        $newmobile = substr($mobile, 1);
    
        $smsController = new SMSController();
        $otpResponse = $smsController->sendOTPSMS($course_register->otp, $newmobile);
    
        if ($otpResponse['success']) {
            // Generate a unique identifier for the session
            $uniqueId = uniqid();
    
            // Store user data in session
            $request->session()->put('user_data_' . $uniqueId, $course_register);
    
            // Debug: Check if session data is stored correctly
            $storedUser = $request->session()->get('user_data_' . $uniqueId);
            if (!$storedUser) {
                return back()->with('error', 'Failed to store session data.');
            }
    
            // Redirect with the unique ID
            return redirect()->route('otp_form', ['id' => $uniqueId])->with('success', "OTP sent successfully, Please verify");
        } else {
            return back()->with('error', 'Failed to send OTP. Please try again.');
        }

    }    


    public function OTP_Verify(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'otp.*' => 'required|numeric', 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $id = $request->id;

        $enteredOTP = implode('', $request->input('otp'));
        
        // Retrieve user data from session
        $userData = $request->session()->get('user_data_' . $id);
    

        if (!$userData) {
            return back()->with('error', 'User data not found in session.');
        }
    
        // Retrieve OTP date time from user data
        $otp_date_time = Carbon::parse($userData->otp_date_time);
    
        if ($otp_date_time->addMinutes(5)->isPast()) {
            return back()->with('error', 'OTP has expired. Please request a new one.');
        }
    
        if ($userData->otp == $enteredOTP) {

            // $user = User::create($userData->toArray());
            // dd($userData->toArray());
          
            $userData->save();

            $request->session()->put('user_data_temp' , $userData);

            return redirect()->route('student_course_purchase', ['id' => $id])->with('success', "Your registration successfully, please choose a plan to continue");
        } else {
            return back()->with('error', "OTP is invalid, Please enter valid OTP"); 
        }
    }
    

    
    public function OTP_Verify_English(Request $request)

    {

        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'otp.*' => 'required|numeric', 
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $id = $request->id;

        $enteredOTP = implode('', $request->input('otp'));
        
        // Retrieve user data from session
        $userData = $request->session()->get('user_data_' . $id);
    

        if (!$userData) {
            return back()->with('error', 'User data not found in session.');
        }
    
        // Retrieve OTP date time from user data
        $otp_date_time = Carbon::parse($userData->otp_date_time);
    
        if ($otp_date_time->addMinutes(5)->isPast()) {
            return back()->with('error', 'OTP has expired. Please request a new one.');
        }
    
        if ($userData->otp == $enteredOTP) {

            // $user = User::create($userData->toArray());
            // dd($userData->toArray());
          
            $userData->save();

            $request->session()->put('user_data_temp' , $userData);

            return redirect()->route('student_course_purchase', ['id' => $id])->with('success', "Your registration successfully, please choose a plan to continue");
        } else {
            return back()->with('error', "Please enter valid OTP");
        }

    }



    // public function resend_otp(Request $request)

    // {
    //     $id = $request->id;

    //     $data = User::findOrFail($id); 

    //     $data->otp = rand(111111, 999999);

    //     $data->otp_date_time =  date('d-m-Y H:i:s');

    //     $data->update(); 

    

    //     $phone = $data->phone;

    //     $newmobile = substr($phone, 1); 

    

    //     $smsController = new SMSController();

    //     $otpResponse = $smsController->sendOTPSMS($data->otp, $newmobile);

    //     return response()->json($otpResponse);

    // }


    public function resend_otp(Request $request)
    {
        $id = $request->id;

        // Retrieve user data from session
        $userData = $request->session()->get('user_data_' . $id);

        if (!$userData) {
            return response()->json(['error' => 'User data not found in session.'], 404);
        }

        // Generate new OTP
        $userData->otp = rand(111111, 999999);
        $userData->otp_date_time = date('d-m-Y H:i:s');
        $userData->save();

        // Send OTP via SMS
        $phone = $userData->phone;
        $newmobile = substr($phone, 1); 
        $smsController = new SMSController();
        $otpResponse = $smsController->sendOTPSMS($userData->otp, $newmobile);

        // Set success message in session
        $request->session()->flash('success', 'OTP has been resent successfully.');

        return response()->json(['success' => true]);
    }


    public function term_and_condition(){

        return view('Home/term-and-condition');

    }



    public function Cupan_code_view(Request $request, $id, $reg_id)

    {

        $data = DB::table('courses')->where('id', $id)->first();



        $customer = DB::table('users')->where('id', $reg_id)->update(['course_id' => $id ]);



        return view('Admin.Student_module.cupancode', compact('id','data','reg_id'));

    }



    public function Cupan_code_view_english(Request $request, $id, $reg_id)

    {

        

        $data = DB::table('courses')->where('id', $id)->first();



        $customer = DB::table('users')->where('id', $reg_id)->update(['course_id' => $id ]);



        return view('Admin.Student_module.cupancode_english', compact('id','data','reg_id'));

        

    }

    

    public function cupancode_mach(Request $request)

    {

        $cupan_code = $request->cupan_code;

        $data = DB::table('cupan_codes')->where('cupan_code', $cupan_code)->where('is_expire', 0)->first();

        if ($data) {

            DB::table('cupan_codes')

                ->where('cupan_code', $cupan_code)

                ->update(['is_expire' => 1]);

        } else {

            return response()->json('code is expired');

        }

    

        return response()->json($data);

    }



    public function otp_form($id){ 
        return view('Home/otp-form', compact('id'));
    }



    public function otp_form_english($id){

        return view('Home/otp-form-english', compact('id'));

    }



    public function alredy_register()

    {

        return view('Admin.Registered_student.alredy-register');

    }



    public function alredy_register_english()

    {

      return view('Admin.Registered_student.alredy-register-english'); 

    }

    public function get_alredy_register(Request $request)
    {
        $phone = $request->input('phone.main');
        $customer = User::where('phone', $phone)->first();

        
        // Check if the user exists 
        if ($customer) {
            $otp = rand(111111, 999999);
            $otpData = [
                'otp' => $otp,
                'otp_date_time' => date('d-m-Y H:i:s')
            ];
            User::where('phone', $phone)->update($otpData);

            // Send OTP SMS
            $newmobile = substr($phone, 1);
            $smsController = new SMSController();
            $otpResponse = $smsController->sendOTPSMS($otp, $newmobile);

            if ($otpResponse['success']) {
                // Store user ID and OTP details in session
                $request->session()->put('otp_user_id', $customer->id);
                $request->session()->put('otp_data', $otpData);

                $customer = User::where('phone', $phone)->first();
                $uniqueId = $customer->id;

                // Store user data in session
                $request->session()->put('user_data_' . $uniqueId, $customer);

                
                return redirect()->route('otp_form', ['id' => $uniqueId])->with('success', "OTP sent successfully.");
            } else {
                return back()->with('error', 'Failed to send OTP. Please try again.');
            }
        } else {
            return back()->with('error', "User not found.");
        }
    }


    
    public function get_alredy_register_english(Request $request)

    {
        $phone = $request->input('phone.main');
        $customer = User::where('phone', $phone)->first();

        if ($customer) {
            $otp = rand(111111, 999999);
            $otpData = [
                'otp' => $otp,
                'otp_date_time' => date('d-m-Y H:i:s')
            ];
            User::where('phone', $phone)->update($otpData);

            $newmobile = substr($phone, 1);
            $smsController = new SMSController();
            $otpResponse = $smsController->sendOTPSMS($otp, $newmobile);

            if ($otpResponse['success']) {
                $request->session()->put('otp_user_id', $customer->id);
                $request->session()->put('otp_data', $otpData);

                $customer = User::where('phone', $phone)->first();
                $uniqueId = $customer->id;

                $request->session()->put('user_data_' . $uniqueId, $customer);

                
                return redirect()->route('otp_form', ['id' => $uniqueId])->with('success', "OTP sent successfully.");
            } else {
                return back()->with('error', 'Failed to send OTP. Please try again.');
            }
        } else {
            return back()->with('error', "User not found.");
        }
    }

    

    

}

