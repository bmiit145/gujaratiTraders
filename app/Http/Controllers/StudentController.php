<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Video;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // Student Dashboard
    public function student_dashboard(){
        return view('Student/student-dashboard');
    }

    public function student_profile(){
        $student = Auth::user(); 
        return view('Student.student-profile', compact('student'));
    }    

    public function edit_student_profile($id){
        $student = User::find($id);
        return view('Student.edit-student-profile', compact('student'));
    }    

       public function update_student_profile(Request $request){
            $student = Auth::user();
            if ($request->hasFile('upload_image')) {
                $image = $request->file('upload_image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/profile_image'), $imageName);
        
                $student->profile_image = $imageName;
            }
        
            $student->update();
        
            return redirect()->route('student.profile')->with('edit_student_profile', "Student Profile Updated Successfully.");
        }
    public function student_all_video(){
        $videos = Video::with('comments.student')->get(); 
        return view('Student/All_video/student-video-list', compact('videos'));
    }

    public function student_show_full_screen_video(Request $request){
        $id = $request->id;
        $video = Video::with('comments')->findOrFail($id); 
        return view('Student.student-fullsize-video', compact('video'));
    }

    public function student_comment(Request $request){
        $vid = $request->vid;
        $sid = Auth::user()->id;
        $sname = Auth::user()->full_name;
        $semail = Auth::user()->email;
        $s_is_delete = Auth::user()->is_delete;
        $commentValue = $request->comment;

        $comment = new Comment;
        $comment->video_id = $vid;
        $comment->student_id = $sid;
        $comment->student_name = $sname;
        $comment->student_email = $semail;
        $comment->comment = $commentValue;
        $comment->is_delete = $s_is_delete;
        $comment->save();

        return redirect()->route('student.student_all_video')->with('comment_success', "Your comment is successfully sent.");
    }
}