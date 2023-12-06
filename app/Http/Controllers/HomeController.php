<?php

namespace App\Http\Controllers;

use App\Models\Check_info;

use Illuminate\Http\Request;


use App\Models\Check;

use App\Models\Message;

use App\Models\pricing;


use DB;

use Carbon\Carbon;


use Illuminate\Support\Facades\Auth;


use App\Models\User;


class HomeController extends Controller
{


    public function index()
        {
            if (Auth::id()) {
                $price=pricing::all();
                return view('user.home',compact('price'));
            }
            else{
                $price=pricing::all();
                return view('index.home',compact('price'));
            }
            
        }



    public function redirect()
        {
            if (Auth::id()) {
                if (Auth::user()->usertype == '0') {
                    $country_list = DB::table('checks')
                        ->groupBy('pay')
                        ->get();
                    $check = Check_info::all();
                    $checks = Check::all();
                    $price=pricing::all();
            
                    return view('user.home', compact('check', 'country_list', 'checks','price'));
                }
            
            
                else {
                    $message = message::count();
                    $user1 = User::count();
                    $checkI = check_info::count();
            
        
            $userCountsByDate = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
                ->groupBy('date')
                ->get();
        
            $dates = $userCountsByDate->pluck('date');
            $userCount = $userCountsByDate->pluck('total');

           
                        
                        
    

            // Fetch the check count data from your database or any other source
            $checkCountsByDate = check_info::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
            ->groupBy('date')
            ->get();
        
        $date = $checkCountsByDate->pluck('date');
        $checkCount = $checkCountsByDate->pluck('total');
        
      
                    return view('admin.home',compact('message','dates', 'userCount', 'user1', 'checkI', 'date', 'checkCount'));
                }
            }
            else {
                return redirect()->back();
            }
                
        }


    public function upload_check(REQUEST $request)
    {
            $check = new Check_info();
            $check->bank=$request->bank;
            $check->pay=$request->pay;
            
            $check->montant=$request->montant;
            $check->datecheque=$request->datecheque;
            $check->order=$request->order;
            $check->payerpour=$request->payerpour;
            $check->chequebarre=$request->chequebarre;
            $check->user_id = Auth::user()->id;

            $check->save();
            return redirect()->back();
    }
    

    public function getBanks($pay_id)
            {
                $banks = Check::where('pay', $pay_id)->get();
                $data = array();
                foreach($banks as $bank){
                    $data[$bank->id] = array('name'=>$bank->banktype, 'image'=>$bank->image, 'width'=>$bank->width, 'height'=>$bank->height);
                }
                return response()->json($data);
            }


    public function getPOS($bank)
            {
                $banks = Check::where('banktype', $bank)->get();
                $data = array();
                foreach($banks as $b){
                    $data[$b->id] = array('orderX'=>$b->Dx_order,'orderY'=>$b->Dy_order,
                    'MontantX'=>$b->Dx_Montant,'MontantY'=>$b->Dy_Montant,
                    'MontantXv'=>$b->Dxcv_Montant,'MontantYv'=>$b->Dycv_Montant,
                    'forX'=>$b->Dx_for,'forY'=>$b->Dy_for,
                    'baresX'=>$b->Dx_bares,'baresY'=>$b->Dy_bares,
                    'width'=>$b->width,'height'=>$b->height,
                    'dateX'=>$b->Dx_date,'dateY'=>$b->Dy_date);
                }   

                return response()->json($data);
            }

    public function check_page()
            {
                $country_list = DB::table('checks')
                ->groupBy('pay')
                ->get()
                ;
                $remainingAttempts =user::all(); 
                return view('user.check_page',compact('country_list','remainingAttempts'));
            }

    public function return_hero(){
                $price=pricing::all();
                return view('user.home',compact('price'));
            }

    public function historique_page()
            {
                $user = Auth::user();
                $data = Check_info::where('user_id', $user->id)->get();
                 return view('user.historique',compact('data',));
            }
    
    public function paiment_page($id)
            {
                if (Auth::id()) {
                    $data=pricing::find($id);
                    return view('user.paiment',compact('data'));
                }
                else{
                    return view('auth.login');
                }

                
            }

    public function Confirm_Payment(REQUEST $request)
    {
        $user = Auth::user();

                        if ($user->remaining_attempts == 0) {
                            // Decrement the attempts
                            $remainingAttempts = intval($request->price); // Use intval() for integer or floatval() for float

                            // Update the user's remaining attempts
                            $user->remaining_attempts = $remainingAttempts;
                            $user->save();
                            return redirect()->back();
                            
                        } 
                    

    }


     public function printCheck()
                {
                    $user = Auth::user();

                    if ($user) {
                        if ($user->remaining_attempts > 0) {
                            // Decrement the attempts
                            $user->remaining_attempts--;
                            $user->save();
                            return redirect()->back();
                            // Logic to print the check
                            // ...
                        } 
                    }
                } 

    public function deleteHistorique($id)
                    {
                        $data=check_info::find($id);
                        $data->delete(); 
                        return redirect()->back();   
                    }

    public function clearTable()
                    {
                        $userId = Auth::id();
                        check_info::where('user_id', $userId)->delete();
                    
                        return redirect()->back();
                    }

    public function upload_message(REQUEST $request)
                    {
                            $messages = new message();
                            $messages->name=$request->name;
                            $messages->email=$request->email;
                            $messages->message=$request->message;
                            $messages->save();


                            return redirect()->back()->with('message','message sending Succsessfully');
                    }
    


    
    





}
