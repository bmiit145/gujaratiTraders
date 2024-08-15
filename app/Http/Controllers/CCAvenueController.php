<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Softon\Indipay\Facades\Indipay;
use Softon\Indipay\Exceptions\IndipayParametersMissingException;
use Mail;
use App\Mail\emailPasswordAfterPaymentMail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Course;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use GuzzleHttp\Client;

class CCAvenueController extends Controller
{
    public function index()
    {
        return view('payment');
    }


    //By PHP curl

    // public function process(Request $request)
    // {
    //     $userData = $request->session()->get('user_data_temp');
    //     $request->session()->put('ccavenue_user_data', $userData);

    //     try {
    //         $course_rate = $request->course_rate;
    //         $numeric_course_rate = floatval(preg_replace('/[^0-9.]/', '', $course_rate));

    //         $orderId = uniqid();
    //         $tId = uniqid();
    //         $email = $userData['email'];

    //         // Create transaction table entry
    //         $transaction = new Transaction;
    //         $transaction->order_id = $orderId;
    //         $transaction->tid = $tId;
    //         $transaction->email = $email;
    //         $transaction->save();

    //         $parameters = [
    //             'key' => env('PAYU_MERCHANT_KEY'),
    //             'txnid' => $tId,
    //             'amount' => $numeric_course_rate,
    //             'productinfo' => 'Course for traders',
    //             'firstname' => $userData['full_name'],
    //             'email' => $email,
    //             'phone' => $userData['phone'],
    //             'surl' => route('payment.response'),
    //             'furl' => route('payment.cancel'),
    //             'service_provider' => 'payu_paisa',
    //             'udf1' => '', // Optional user-defined fields
    //             'udf2' => '',
    //             'udf3' => '',
    //             'udf4' => '',
    //             'udf5' => '',
    //         ];

    //         // Create the hash string according to the provided formula
    //         $hashString = implode('|', array_map('trim', [
    //             $parameters['key'],
    //             $parameters['txnid'],
    //             $parameters['amount'],
    //             $parameters['productinfo'],
    //             $parameters['firstname'],
    //             $parameters['email'],
    //             $parameters['udf1'],
    //             $parameters['udf2'],
    //             $parameters['udf3'],
    //             $parameters['udf4'],
    //             $parameters['udf5'],
    //             '', '', '', '', '',
    //             env('PAYU_MERCHANT_SALT')
    //         ]));

    //         // Generate the hash
    //         $parameters['hash'] = strtolower(hash('sha512', $hashString));

    //         // Log hash calculation process for debugging
    //         \Log::info('PayU Hash String:', ['hashString' => $hashString]);
    //         \Log::info('PayU Hash:', ['hash' => $parameters['hash']]);

    //         // Use Guzzle to send the payment request
    //         $client = new Client(['base_uri' => 'https://test.payu.in/']);
    //         $response = $client->post('_payment', [
    //             'form_params' => $parameters,
    //             'headers' => [
    //                 'Content-Type' => 'application/x-www-form-urlencoded',
    //             ],
    //         ]);

    //         return $response->getBody()->getContents(); // Handle the response accordingly

    //     } catch (\Exception $e) {
    //         \Log::error('Payment Processing Error:', ['exception' => $e]);
    //         return response()->json(['error' => 'An error occurred while processing the payment. Please try again. ' . $e->getMessage()], 500);
    //     }
    // }


    // by php new page

    // public function process(Request $request)
    // {
    //     $userData = $request->session()->get('user_data_temp');
    
    //     $request->session()->put('ccavenue_user_data', $userData);
    
    //     try {

    //         $url = "https://test.payu.in/_payment";
    //         $course_rate = $request->course_rate;
    //         $numeric_course_rate = floatval(preg_replace('/[^0-9.]/', '', $course_rate));
    
    //         $orderId = uniqid();
    //         $tId = uniqid();
    //         $email = $userData['email'];
    
    //         // Create transaction table entry
    //         $transaction = new Transaction;
    //         $transaction->order_id = $orderId;
    //         $transaction->tid = $tId;
    //         $transaction->email = $email;
    //         $transaction->save();
    
    //         $parameters = [
    //             'key' => env('PAYU_MERCHANT_KEY'),
    //             'txnid' => $tId,
    //             'amount' => $numeric_course_rate,
    //             'productinfo' => 'Course for traders',
    //             'firstname' => $userData['full_name'],
    //             'email' => $email,
    //             'phone' => $userData['phone'],
    //             'surl' => route('payment.response'),
    //             'furl' => route('payment.cancel'),
    //             'service_provider' => 'payu_paisa',
    //             'udf1' => '', // Optional user-defined fields
    //             'udf2' => '',
    //             'udf3' => '',
    //             'udf4' => '',
    //             'udf5' => '',
    //         ];
    
    //         // Create the hash string according to the provided formula
    //         $hashString = implode('|', array_map('trim', [
    //             $parameters['key'],
    //             $parameters['txnid'],
    //             $parameters['amount'],
    //             $parameters['productinfo'],
    //             $parameters['firstname'],
    //             $parameters['email'],
    //             $parameters['udf1'],
    //             $parameters['udf2'],
    //             $parameters['udf3'],
    //             $parameters['udf4'],
    //             $parameters['udf5'],
    //             '','','','','',
    //             env('PAYU_MERCHANT_SALT')
    //         ]));
    
    //         // Generate the hash
    //         $parameters['hash'] = strtolower(hash('sha512', $hashString));
    
    //         // Log hash calculation process for debugging
    //         \Log::info('PayU Hash String:', ['hashString' => $hashString]);
    //         \Log::info('PayU Hash:', ['hash' => $parameters['hash']]);
    
    //         // Return a view with the payment form to handle the redirect
    //         return view('payment.redirect', compact('parameters', 'url'));
    
    //     } catch (\Exception $e) {
    //         \Log::error('Payment Processing Error:', ['exception' => $e]);
    //         return response()->json(['error' => 'An error occurred while processing the payment. Please try again. ' . $e->getMessage()], 500);
    //     }
    // }


    // by indipay 

    public function process(Request $request)
    {
        $userData = $request->session()->get('user_data_temp');
    
        $request->session()->put('ccavenue_user_data', $userData);

        $reg_id = $request->reg_id;

        try {
            $course_rate = $request->course_rate;
            $numeric_course_rate = floatval(preg_replace('/[^0-9.]/', '', $course_rate));
    
            $orderId = uniqid();
            $tId = uniqid();
            $email = $userData['email'];
    
            // Create transaction table entry
            $transaction = new Transaction;
            $transaction->order_id = $orderId;
            $transaction->tid = $tId;
            $transaction->email = $email;
            $transaction->save();
    
            $parameters = [
                'key' => env('PAYU_MERCHANT_KEY'),
                'txnid' => $tId,
                'amount' => $numeric_course_rate,
                'productinfo' => 'Course for traders',
                'firstname' => $userData['full_name'],
                'email' => $email,
                'phone' => $userData['phone'],
                'surl' => env('PAYU_SUCCESS_URL'),
                'furl' => env('PAYU_FAILURE_URL'),
                'service_provider' => 'payu_paisa',
                'orderId' => $orderId,
                'udf2' => '',
                'udf3' => '',
                'udf4' => '',
                'udf5' => '',
            ];
    
            // Create the hash string according to the provided formula
            $hashString = implode('|', array_map('trim', [
                $parameters['key'],
                $parameters['txnid'],
                $parameters['amount'],
                $parameters['productinfo'],
                $parameters['firstname'],
                $parameters['email'],
                $parameters['orderId'],
                $parameters['udf2'],
                $parameters['udf3'],
                $parameters['udf4'],
                $parameters['udf5'],
                // '','','','','',
                env('PAYU_MERCHANT_SALT')
            ]));

            // Generate the hash
            // $parameters['hash'] = strtolower(hash('sha512', $hashString));

           
            $order = Indipay::gateway('PayUMoney')->prepare($parameters);
            // dd($order);

            return Indipay::process($order);

        }catch(IndipayParametersMissingException $e){
            \Log::error('Missing Parameter Error:', ['exception' => $e]);
            return response()->json(['error' => 'Missing Parameter Please try again. ' . $e->getMessage()], 400);
        }
        catch (\Exception $e) {
            \Log::error('Payment Processing Error:', ['exception' => $e]);
            return response()->json(['error' => 'An error occurred while processing the payment. Please try again. ' . $e->getMessage()], 500);
        }
    }

    // public function response(Request $request)
    // {
    //      \Log::info('Response received', ['data' => $request->all()]);
    //     // dd($request->all());
    //     $userData = $request->session()->get('ccavenue_user_data');

    //     error_reporting(E_ALL);
    //     ini_set('display_errors', 1);

    //     if (!isset($_POST["encResp"])) {
    //         return response()->json(['error' => 'The payload is invalid.'], 400);
    //     }

    //     $workingKey = '8E20420002E1324E6F7A250A70E3AC77';
    //     $encResponse = $_POST["encResp"];
    //     $rcvdString = $this->decryptCC($encResponse, $workingKey);

    //     if ($rcvdString === false || empty($rcvdString)) {
    //         return response()->json(['error' => 'Failed to decrypt the response or the response is empty.'], 400);
    //     }

    //     $decryptValues = explode('&', $rcvdString);
    //     $dataSize = sizeof($decryptValues);

    //     if ($dataSize < 4) {
    //         return response()->json(['error' => 'The decrypted payload is invalid.'], 400);
    //     }

    //     $order_status = "";
    //     $billing_email = "";
    //     $orderId = "";

    //     for ($i = 0; $i < $dataSize; $i++) {
    //         $information = explode('=', $decryptValues[$i]);

    //         if (isset($information[0]) && isset($information[1])) {
    //             if ($information[0] === 'order_status') {
    //                 $order_status = $information[1];
    //             }
    //             if ($information[0] === 'billing_email') {
    //                 $billing_email = $information[1];
    //             }
    //             if ($information[0] === 'order_id') {
    //                 $orderId = $information[1];
    //             }
    //         }
    //     }


    //     $user_email = Transaction::where('order_id', $orderId)->first()->email;

    //     if (empty($user_email)) {
    //         return response()->json(['error' => 'Billing email n  found in the response.'], 400);
    //     }


    //     if ($order_status === "Success") {
    //         echo "<br>Thank you for shopping with us. Your payment has been charged and your transaction is successful.";

    //         $randomPassword = Str::random(10);

    //         $user = User::where('email' , $user_email )->first();


    //         if ($user) {
    //             $user->update([
    //                 'is_payment' => 1,
    //                 'is_lock' => 1,
    //                 'is_role' => 2,
    //                 'password' => bcrypt($randomPassword),
    //                 'course_start_date' => Carbon::now()->toDateString()
    //             ]);


    //             Mail::to($user_email)->send(new emailPasswordAfterPaymentMail($user_email, $randomPassword));


    //             return view('Stripe.email-password-after-payment-mail')->with('success', 'Course Payment Successfully');
    //         } else {
    //             return response()->json(['error' => 'User not found.'], 404);
    //         }
    //     } else if ($order_status === "Aborted") {
    //         echo "<br>Thank you for shopping with us. We will keep you posted regarding the status of your order through e-mail.";
    //     } else if ($order_status === "Failure") {
    //         echo "<br>Thank you for shopping with us. However, the transaction has been declined.";
    //     } else {
    //         echo "<br>Security Error. Illegal access detected.";
    //     }

    //     echo "<br><br>";
    //     echo "<table cellspacing=4 cellpadding=4>";

    //     for ($i = 0; $i < $dataSize; $i++) {
    //         $information = explode('=', $decryptValues[$i]);
    //         if (isset($information[0]) && isset($information[1])) {
    //             echo '<tr><td>' . $information[0] . '</td><td>' . $information[1] . '</td></tr>';
    //         }
    //     }

    //     echo "</table><br>";
    //     echo "</center>";
    // }


    // For PayU

    public function response(Request $request)
    {
        \Log::info('Response received', ['data' => $request->all()]);

        $receivedHash = $request->input('hash');
        $status = $request->input('status');
        $firstname = $request->input('firstname');
        $amount = $request->input('amount');
        $txnid = $request->input('txnid');
        $email = $request->input('email');

        // Retrieve the order and user based on txnid
        $order = Transaction::where('tid', $txnid)->first();
        if (!$order) {
            return response()->json(['error' => 'Order not found.'], 404);
        }

        $user = User::where('email', $email)->first();
        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }
        
        // Handle payment status
        if ($status === "success") {
            echo "<br>Thank you for shopping with us. Your payment has been charged and your transaction is successful.";

            $randomPassword = Str::random(10);

            // $user->update([
            //     'is_payment' => 1,
            //     'is_lock' => 1,
            //     'is_role' => 2,
            //     'password' => bcrypt($randomPassword),
            //     'course_start_date' => Carbon::now()->toDateString()
            // ]);

            $user->is_payment = 1;
            $user->is_lock = 1;
            $user->is_role = 2;
            $user->password = bcrypt($randomPassword);
            $user->course_start_date = Carbon::now()->toDateString();
            $user->save();

            // Send email with new password
            Mail::to($email)->send(new emailPasswordAfterPaymentMail($user->email, $randomPassword));

            return view('Stripe.email-password-after-payment-mail')->with('success', 'Course Payment Successfully');

        } else if ($status === "failure") {
            echo "<br>Thank you for shopping with us. However, the transaction has been declined.";
        } else if ($status === "pending") {
            echo "<br>Thank you for shopping with us. We will keep you posted regarding the status of your order through e-mail.";
        } else {
            echo "<br>Security Error. Illegal access detected.";
        }

        echo "<br><br>";
        echo "<table cellspacing=4 cellpadding=4>";
        foreach ($request->all() as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
        echo "</table><br>";
    }

    private function decryptCC($encryptedText, $key)
    {
        $key = $this->hextobin(md5($key));
        $initVector = pack("C*", 0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f);
        $encryptedText = $this->hextobin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);

        return $decryptedText;
    }

    private function hextobin($hexString)
    {
        $length = strlen($hexString);
        $binString = "";
        $count = 0;
        while ($count < $length) {
            $subString = substr($hexString, $count, 2);
            $packedString = pack("H*", $subString);
            $binString .= $packedString;
            $count += 2;
        }
        return $binString;
    }

    public function cancel(Request $request)
    {
         $redirectUrl = env('CCAvenue_Cancel_Url');
         return redirect($redirectUrl);
    }

    public function ccavenueRedirect()
    {
        return view("ccavenue.ccavenue-payment-success");
    }

    public function ccavenueCancel()
    {
        dd("ccavenueCancel");
    }

    public function student_course_purchase($id){
        $courses = Course::all();
        return view('Stripe/student_course_purchase', compact('courses','id'));
    }

     public function student_course_purchase_test(){
        $courses = Course::all();
        return view('Stripe/course-plan-view-test', compact('courses'));
    }

    public function student_course_purchase_english($id){
        $courses = Course::all();
        return view('Stripe/student_course_purchase', compact('courses','id'));
    }

}
