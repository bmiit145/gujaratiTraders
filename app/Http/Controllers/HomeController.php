<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\Models\Event;

use Carbon\Carbon;



class HomeController extends Controller

{

    public function home()

    {

        $events = Event::orderBy('event_start_date')->get();

    

        foreach ($events as $event) {

            $event->formatted_start_date = Carbon::parse($event->event_start_date)->toIso8601String();

            $event->formatted_end_date = Carbon::parse($event->event_end_date)->toIso8601String();

        }

    

        return view('Home/index', compact('events'));

    }



    public function about()

    {

        return view('Home/about');

    }



    public function contact()

    {

        return view('Home/contact');

    }



    public function eng_index()

    {



        $events = Event::orderBy('event_start_date')->get();

    

        foreach ($events as $event) {

            $event->formatted_start_date = Carbon::parse($event->event_start_date)->toIso8601String();

            $event->formatted_end_date = Carbon::parse($event->event_end_date)->toIso8601String();

        }

    

        return view('Home.eng_index' , compact('events'));

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

