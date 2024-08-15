<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Http\Requests\storeStudentValidate;
use App\Http\Requests\updateStudentValidate;
use App\Models\User;
use App\Models\Event;
use App\Models\Detail;
use App\Models\Course;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Course_register;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Rules\ValidCurrentOrFutureDateForEvents;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Carbon\Carbon;
use Illuminate\Http\File;
use DB;



class AdminController extends Controller

{

    // Admin Dashboard

    public function admin_dashboard(){

        return view('Admin/admin-dashboard');

    }



    // Add Page Student

    public function addStudent(){

        return view('Admin/Student_module/add-student');

    }



    // Student Store

    public function storeStudent(Request $request)

    {

        $request->validate([

            'student_first_name' => 'required|string|min:3',

            'student_last_name' => 'required|string|min:3',

            'student_address' => 'required|string',

            'student_email' => 'required|email|unique:users',

            'student_password' => 'required|string',

        ]);



        $student = new User;

        $student->student_first_name = $request->student_first_name;

        $student->student_last_name = $request->student_last_name;

        $student->student_email = $request->student_email;

        $student->student_number = $request->student_number['main'];

        $student->student_address = $request->student_address;

        $student->student_otp = rand(111111,999999);

        $student->is_lock = 1;  // 0 means lock, 1 means unlock.

        $student->is_delete = 1; // 0 means delete, 1 means no delete.

        $student->is_role = 1; // 1 means admin, 2 means student.

        $student->password = Hash::make($request->student_password);

        $student->save();



        // Send OTP SMS with OTP from the database

        $smsController = new SMSController();

        $otpSent = $smsController->sendOTPSMS($student->student_otp);



        if ($otpSent['success']) {

            return redirect()->route('admin.otpStudent', ['id' => $student->id])->with('message', 'Student Created Successfully.');

        } else {

            return back()->withErrors(['sms_error' => $otpSent['message']]);

        }

    }



    // otp Page

    public function otpStudentForm(Request $request, $id){

        $student = User::find($id); 

        return view('Admin.Student_module.otp', ['student' => $student]); 

    }



    // check otp match or not

    public function checkStudentotp(Request $request){

        $request->validate([

            'student_otp' => 'required|numeric', 

        ]);



        $id = $request->id;

        $student_otp = $request->input('student_otp');



        $checkotp = User::where('id' , $id)->where('student_otp', $student_otp)->first();

        if ($checkotp) {

            return redirect()->route('admin.student.list')->with('success', 'Login successfully');

        } else {

            return back()->withErrors(['student_otp' => 'The OTP does not match'])->withInput();

        }

    }



    // Student List Show

    public function studentList(){

        $students = User::where('is_delete',1)->get();

        return view('Admin/Student_module/student-list',compact('students'));

    }



    // Edit Page Student

    public function editStudent($id){

        $student = User::find($id);

        return view('Admin/Student_module/edit-student',compact('student'));

    }



    public function ImportStudent(Request $request)

    {

       $file = $request->file('file');

       $fileContents = file($file->getPathname());

   

       foreach ($fileContents as $line) {

           $data = str_getcsv($line);

   

           User::create([

               'student_first_name' => $data[0],

               'student_last_name' => $data[1],

               'student_address' => $data[2],

               'student_number' => $data[3],

               'student_email' => $data[4],

               'cupan_code' => $data[5],

               'is_lock' => 1,

               'is_delete' => 1,

               'is_role' => 2

             

           ]);

       }

   

       return redirect()->back()->with('success', 'CSV file imported successfully.');

    }



    // Update Student

    public function updateStudent(Request $request){



        $student = User::where('id', $request->id)->first(); 

        $student->student_first_name = $request->student_first_name;

        $student->student_last_name = $request->student_last_name;

        $student->student_email = $request->student_email;

        $student->student_number = $request->student_number['main'];

        $student->student_address = $request->student_address;

        $student->student_otp = rand(111111,999999);

        $student->is_lock = 1;  // 0 means lock, 1 means unlock.

        $student->is_delete = 1; // 0 means delete, 1 means no delete.

        $student->is_role = 1; // 1 means admin, 2 means student.

        $student->password = Hash::make($request->student_password);

        $student->update();

    

        return redirect()->route('admin.student.list')->with('message', 'Student Updated Successfully.');

    }    



    // Delete Student

    public function deleteStudent($id)

    {

        $student = User::find($id);

        if ($student) {

            try {

                $student->update(['is_delete' => 0]); 

                return response()->json(['success' => true]);

            } catch (\Exception $e) {

                return response()->json(['success' => false, 'message' => 'Error updating student: ' . $e->getMessage()], 500);

            }

        } else {

            return response()->json(['success' => false, 'message' => 'Student not found'], 404);

        }



        return $student;

    }

    

    // Lock Student

    public function lockStudent($id)

    {

        $student = User::find($id);

        if ($student) {

            try {

                $student->update(['is_lock' => 0]); 

                return response()->json(['success' => true]);

            } catch (\Exception $e) {

                return response()->json(['success' => false, 'message' => 'Error updating student: ' . $e->getMessage()], 500);

            }

        } else {

            return response()->json(['success' => false, 'message' => 'Student not found'], 404);

        }



        return $student;

    }



    // Logout 

    public function logout_function(Request $request)

    {

        Auth::guard('web')->logout();

        return redirect()->route('login');

    }

    

    // Course List

    public function course_list(){

        $courses = Course::where('is_delete',1)->get();

        return view('Admin/Course/course-list',compact('courses'));

    }



    // Add course

    public function add_course(){

        return view('Admin/Course/add-course');

    }



    // Store course

    public function store_course(Request $request){

        $request->validate([

            'course_name' => 'required|string|max:255',

            'course_rate' => 'required|numeric',

        ]);        



        $imageName = null;

        if ($request->hasFile('course_image')) {

            $image = $request->file('course_image');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images/course_image'), $imageName);

        }

        

        $course = new Course;

        $course->course_name = $request->course_name;

        $course->course_rate = $request->course_rate;

        $course->course_duration = $request->course_duration;

        $course->course_month_year = $request->course_month_year;

        $course->course_start_date = $request->course_start_date;

        $course->course_expiry_date = $request->course_expiry_date;

        $course->course_description = $request->course_description;

        $course->course_image = $imageName;

        $course->save();



        return redirect()->route('admin.course.list')->with('message', 'course Added Successfully.');

    }



    // Edit Course

    public function edit_course($id){

        $course = Course::find($id);

        return view('Admin/Course/edit-course',compact('course'));

    }



    // Update Course

    public function update_course(Request $request) {

        $request->validate([

            'course_name' => 'required|string|max:255',

            'course_rate' => 'required|numeric',

            // 'course_duration' => 'required|string|max:255',

            // 'course_start_date' => 'required|date',

            // 'course_expiry_date' => 'required|date|after:course_start_date',

            // 'course_description' => 'nullable|string',

            // 'course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 

        ]);        

    

        $course = Course::find($request->c_id);

    

        if ($request->hasFile('course_image')) {



            $request->validate([

                // 'course_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 

            ]);

    

            $image = $request->file('course_image');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('images/course_image'), $imageName);

    

            if (isset($course->course_image)) {

                $oldImagePath = public_path('images/course_image/') . $course->course_image;

                if (file_exists($oldImagePath)) {

                    unlink($oldImagePath);

                }

            }

    

            $course->course_image = $imageName;

        }

    

        $course->course_name = $request->course_name;

        $course->course_rate = $request->course_rate;

        $course->course_duration = $request->course_duration;

        $course->course_start_date = $request->course_start_date;

        $course->course_expiry_date = $request->course_expiry_date;

        $course->course_description = $request->course_description;

        $course->save();

    

        return redirect()->route('admin.course.list')->with('message', 'Course updated successfully.');

    }

    



    // Delete Course

    public function delete_course($id)

    {

        $course = Course::find($id);

        if ($course) {

            try {

                $course->update(['is_delete' => 0]); 

                return response()->json(['success' => true]);

            } catch (\Exception $e) {

                return response()->json(['success' => false, 'message' => 'Error updating course: ' . $e->getMessage()], 500);

            }

        } else {

            return response()->json(['success' => false, 'message' => 'Course not found'], 404);

        }



        return $course;

    }



    // Status change of course

    public function status_course(Request $request, $id)

    {

        $course = Course::findOrFail($id);



        $newStatus = $course->status == 1 ? 0 : 1;

        $course->status = $newStatus;

        $course->save();



        $response = [

            'newStatus' => $newStatus,

            'newStatusText' => $newStatus ? 'Active' : 'Inactive'

        ];



        return response()->json($response);

    }





    // Youtube Video List

    public function youtube_video(){

        return view('Admin/Youtube_video/youtube-video');

    }



    // Admin Full screen open video

    public function admin_fullsize_video(Request $request){

        $id = $request->id;

        $video = Video::with('comments')->findOrFail($id); 

        return view('Admin.admin-fullsize-video', compact('video'));

    }    



    // Show All Video List

    public function showAllVideo(){

        $videos = Video::with('comments.student')->get(); 

        return view('Admin/All_video/video-list', compact('videos'));

    }



    // Video Upload page

    public function uploadVideo(){

        return view('Admin/All_video/upload-video');

    }



    // Upload Video

    public function storeVideo(Request $request)

    {

        $request->validate([

            'video' => 'required', 

            'video_name' => 'required|string|max:255',

            'description' => 'nullable|string',

        ]);

    

        if ($request->hasFile('video')) {

            $filename = uniqid() . '.' . $request->file('video')->getClientOriginalExtension();

            $videoPath = $request->file('video')->storeAs('public/videos', $filename);

            $videoUrl = Storage::url($videoPath); 

        } else {

            return back()->with('error', 'No video file uploaded.');

        }

        

        $video = new Video;

        $video->video_name = $request->video_name;

        $video->description = $request->description;

        $video->is_delete = 1;

        $video->video = $videoUrl; 

        $video->save();

    

        return redirect()->route('admin.showAllVideo')->with('success', 'Video uploaded successfully.');

    }

      public function uploadLargeFiles(Request $request) {
        $receiver = new FileReceiver('file', $request, HandlerFactory::classFromRequest($request));
    
        if (!$receiver->isUploaded()) {
            // File not uploaded
            return response()->json(['error' => 'File not uploaded'], 400);
        }
    
        $fileReceived = $receiver->receive(); // Receive file
    
        if ($fileReceived->isFinished()) { // File uploading is complete / all chunks are uploaded
            $file = $fileReceived->getFile(); // Get file
            $extension = $file->getClientOriginalExtension();
            $fileName = uniqid() . '.' . $extension; // Unique file name
           
            // Store the file in the public disk
            $path = 'videos/' . $fileName;
            Storage::disk('public')->putFileAs('videos', $file, $fileName);
    
            // Save file details to the database
            $video = new Video();
            $video->video_name = $request->input('video_name');
            $video->video = $path;
            $video->description = $request->input('description'); // Assuming 'description' is passed in the request
            $video->save();
            unlink($file->getPathname());
    
            return response()->json([
                'path' => asset('storage/' . $path),
                'filename' => $fileName
            ]);
        }
    
        // Otherwise, return percentage information
        $handler = $fileReceived->handler();
        return response()->json([
            'done' => $handler->getPercentageDone(),
            'status' => true
        ]);
    }


    public function deleteVideo(Request $request)

    {

        $id = $request->id;

        $data = Video::find($id);

        $data->delete();

        return back();



    }



    // Store upcoming event .

    public function upcoming_event_form(Request $request){

       return view('Admin/Event/create');

    }



    // Store upcoming event .

    public function list_upcoming_event(){

        $events = Event::where('is_delete', 1)->get();

        return view('Admin/Event/list',compact('events'));

    }



    // Store upcoming event .

    public function store_upcoming_event(Request $request){


// dd($request->all());
        $validator = Validator::make($request->all(), [

            'event_name' => 'required|string|max:255',

            'event_start_date' => ['required', 'string', 'before_or_equal:event_end_date', new ValidCurrentOrFutureDateForEvents],

            'event_end_date' => ['required', 'string', 'after_or_equal:event_start_date'],

            'event_location' => 'required|string|max:255',

            'event_description' => 'nullable|string',
            
            'event_registered_limit' => 'required|string|max:255',
        ], [

            'event_start_date.required' => 'The start date is required.',

            'event_start_date.date_format' => 'The start date must be in the format dd-mm-yyyy hh:mm AM/PM.',

            'event_start_date.before_or_equal' => 'The start date must be before or equal to the end date.',

            'event_end_date.required' => 'The end date is required.',

            'event_end_date.date_format' => 'The end date must be in the format dd-mm-yyyy hh:mm AM/PM.',

            'event_end_date.after_or_equal' => 'The end date must be after or equal to the start date.',

            'event_end_date.after_or_equal' => 'The event end date must be after or equal to the event start date.',

        ]);

        

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        }

    

        $timezone = 'Asia/Kolkata';

    

        $start_date = $request->input('event_start_date');

        $end_date = $request->input('event_end_date');

    

        $event = new Event;

        $event->event_name = $request->event_name;

        $event->event_start_date = $start_date;

        $event->event_end_date = $end_date;

        $event->event_location = $request->event_location;

        $event->event_description = $request->event_description;

        $event->is_delete = 1;

        $event->event_registered_limit = $request->event_registered_limit;

        $event->save();

    

        return redirect()->route('admin.list_upcoming_event')->with('success', "Upcoming event scheduled successfully.");

    }

    

    

    

    // Edit upcoming event .

    public function edit_upcoming_event($id){

        $event = Event::find($id);

        return view('Admin/Event/edit', compact('event'));

    }



    // Update upcoming event .

    public function update_upcoming_event(Request $request){

        $validator = Validator::make($request->all(), [

            'event_name' => 'required|string|max:255',

            'event_start_date' => ['required', 'string', new ValidCurrentOrFutureDateForEvents],

            'event_end_date' => 'required|string|after_or_equal:event_start_date',

            'event_location' => 'required|string|max:255',

            'event_description' => 'nullable|string',

            'total_registered_users' => 'required|string|max:255',

        ], [

            'event_end_date.after_or_equal' => 'The event end date must be after or equal to the event start date.',

        ]);

        

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();

        }

        $event = Event::find($request->event_id);

        $event->event_name = $request->event_name;

        $event->event_start_date = $request->event_start_date;

        $event->event_end_date = $request->event_end_date;

        $event->event_location = $request->event_location;

        $event->event_description = $request->event_description;

        $event->is_delete = 1;

        $event->total_registered_users = $request->total_registered_users;

        $event->update();



        return redirect()->route('admin.list_upcoming_event')->with('success', "Upcoming event schedule updated successfully.");

    }



    // Delete upcoming event .

    public function delete_upcoming_event($id){

        $event = Event::find($id);

        if ($event) {

            try {

                $event->update(['is_delete' => 0]); 

                return response()->json(['success' => true]);

            } catch (\Exception $e) {

                return response()->json(['success' => false, 'message' => 'Error updating event: ' . $e->getMessage()], 500);

            }

        } else {

            return response()->json(['success' => false, 'message' => 'Event not found'], 404);

        }



        return $student;

    }



    public function list_detail(){

        $details = Detail::where('is_delete',1)->get();

        return view('Admin/Detail/list',compact('details'));

    }



    public function store_detail(Request $request) {
        $rules = [

            'mobile_number_or_email' => [

                'required',

                'unique:details',

                'regex:/^(?:[\w-]+(?:\.[\w-]+)*@(?:[\w-]+\.)+[a-zA-Z]{2,7}|\d{10})$/',

            ],

        ];         

        

        $messages = [

            'mobile_number_or_email.required' => 'DMAF>, G\AZ VYJF >D[, OLÿ0 H~ZL K[P',

            'mobile_number_or_email.regex' => 'DMAF., G\AZ VYJF .D[., OMD¢8 VDFgI K[P',

            'mobile_number_or_email.unique' => "VF >D[, VYJF DMAF>, G\AZ 5C[,FYL H V˜:TtJDF\ K[P S'5F SZLG[ AL•[ DMAF>, G\AZ VYJF >D[, NFB, SZM",

        ];

    

        $validator = Validator::make($request->all(), $rules, $messages);

    

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()->first()], 422);

        }

    

        $detail = new Detail;

        $detail->mobile_number_or_email = $request->mobile_number_or_email;

        $detail->is_delete = 1;

        $detail->save();

    

        return response()->json(['success_detail' => 'TD[ ;O/TF5}J"S •[0FIF KMP']);

    }

    public function store_detail_english(Request $request) {
        $rules = [

            'mobile_number_or_email' => [

                'required',

                'unique:details',

                'regex:/^(?:[\w-]+(?:\.[\w-]+)*@(?:[\w-]+\.)+[a-zA-Z]{2,7}|\d{10})$/',

            ],

        ];         

        

        $messages = [

            'mobile_number_or_email.required' => 'Mobile number or email field is required.',

            'mobile_number_or_email.regex' => 'The mobile number or email format is invalid.',

            'mobile_number_or_email.unique' => "This email or mobile number already exists. Please enter another mobile number or email",

        ];

    

        $validator = Validator::make($request->all(), $rules, $messages);

    

        if ($validator->fails()) {

            return response()->json(['error' => $validator->errors()->first()], 422);

        }

    

        $detail = new Detail;

        $detail->mobile_number_or_email = $request->mobile_number_or_email;

        $detail->is_delete = 1;

        $detail->save();

    

        return response()->json(['success_detail' => 'You have successfully joined.']);

    }



    public function delete_detail($id){

        $detail = Detail::find($id);

        if ($detail) {

            try {

                $detail->is_delete = 0;

                $detail->update();

                return response()->json(['success' => true]);

            } catch (\Exception $e) {

                return response()->json(['success' => false, 'message' => 'Error updating detail: ' . $e->getMessage()], 500);

            }

        } else {

            return response()->json(['success' => false, 'message' => 'Detail not found'], 404);

        }



        return $student;

    }



    // Registered students

    public function registered_student(){



        $registered_students = DB::table('users')

                              ->leftjoin('courses', 'courses.id', '=' , 'users.course_id')

                              ->select('users.*', 'courses.course_name')

                              ->get();

        return view('Admin/Registered_student/registered-student',compact('registered_students'));

    }



    public function contact_us_view()

    {

        $data = DB::table('register_user_in_sites')->get();

        return view('Admin.countactUs', compact('data'));

    }
    
     public function about_eng()
    {
        return view('Home.aboutenglish');
    }

    public function cont_eng()
    {
        return view('Home.contactenglish');
    }

    public function cancellation_and_refund()
    {
        return view('Home/cancellation_and_refund');
    }

    public function shipping_and_delivery()
    {
        return view('Home/shipping_and_delivery');
    }

    public function privacy_policy_eng()
    {
        return view('Home.privacy_policyenglish');
    }

    public function term_and_condition_eng()
    {
         return view('Home.term_and_condition_eng');
    }

}