<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Check;

use App\Models\Check_info;

use App\Models\Message;

use App\Models\user;

use App\Models\pricing;

use DB;

use Carbon\Carbon;

class AdminController extends Controller
{
    public function AddView()
        {
            return view('admin.add_check');
        }
    
    public function showcheck()
        {
            $data=check::paginate(3);
            return view('admin.showcheck',compact('data'));
        }

    public function upload(Request $request)
        {
            $check=new check;
            $image=$request->image;
            $imagename=time().'.'.$image->getClientoriginalExtension();
            $request->image->move('images',$imagename);
            $check->image=$imagename;

            $check->banktype=$request->banktype;
            $check->width=$request->width;
            $check->height=$request->height;
            $check->Dx_order=$request->Dx_date;
            $check->Dy_date=$request->Dy_date;
            $check->Dx_date=$request->Dx_order;
            $check->Dy_order=$request->Dy_order;
            $check->Dx_Montant=$request->Dx_Montant;
            $check->Dy_Montant=$request->Dy_Montant;
            $check->Dxcv_Montant=$request->Dxcv_Montant;
            $check->Dycv_Montant=$request->Dycv_Montant;
            $check->Dx_for=$request->Dx_for;
            $check->Dy_for=$request->Dy_for;
            $check->Dx_bares=$request->Dx_bares;
            $check->Dy_bares=$request->Dy_bares;
            $check->pay=$request->pay;
            

            $check->save();

            return redirect()->back()->with('message','check added successfully');
        }

    public function updatecheck($id)
        {
            $data=check::find($id);
            return view('admin.update_check',compact('data'));
        }

        public function updatePricing($id)
        {
            $data=pricing::find($id);
            return view('admin.update_pricing',compact('data'));
        }

    public function updateUser($id)
        {
            $data=user::find($id);
            return view('admin.update_user',compact('data'));
        }

    public function editcheck(Request $request,$id)
        {
            $data=check::find($id);
            $data->banktype=$request->banktype;
            $data->pay=$request->pay;
            $data->width=$request->width;
            $data->height=$request->height;
            $data->Dx_date=$request->Dx_date;
            $data->Dy_date=$request->Dy_date;
            $data->Dx_order=$request->Dx_order;
            $data->Dy_order=$request->Dy_order;
            $data->Dx_Montant=$request->Dx_Montant;
            $data->Dy_Montant=$request->Dy_Montant;
            $data->Dxcv_Montant=$request->Dxcv_Montant;
            $data->Dycv_Montant=$request->Dycv_Montant;
            $data->Dx_for=$request->Dx_for;
            $data->Dy_for=$request->Dy_for;
            $data->Dx_bares=$request->Dx_bares;
            $data->Dy_bares=$request->Dy_bares;

            $image=$request->file;
            $imagename=time().'.'.$image->getClientoriginalExtension(); 
            $request->file->move('images',$imagename);
            $data->image=$imagename;

            $data->save();

            return redirect()->back()->with('message','check Details Updated Succsessfully');
            
        }

        public function editPricing(Request $request,$id)
        {
            $price=pricing::find($id);
            $price->type=$request->type;
            $price->price=$request->price;
            $price->proprity=$request->proprity;
            $price->save();

            return redirect()->back()->with('message','pricing Details Updated Succsessfully');
            
        }

    public function editUser(Request $request,$id){
        $data=user::find($id);

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->usertype=$request->usertype;

        $data->save();

        return redirect()->back()->with('message','user Details Updated Succsessfully');
    }

    public function deletecheck($id)
        {
            $data=check::find($id);
            $data->delete(); 
            return redirect()->back();   
        }

        public function deletePricing($id)
        {
            $data=pricing::find($id);
            $data->delete(); 
            return redirect()->back();   
        }

    public function deleteUser($id)
        {
            $data=user::find($id);
            $data->delete(); 
            return redirect()->back();   
        }

    public function deleteMssj($id)
        {
            $data=message::find($id);
            $data->delete(); 
            return redirect()->back();   
        }

        public function showUsers()
        {
            $data=user::paginate(3);
            return view('admin.showUsers',compact('data'));
        }

    public function show_dashboard()
        {
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

            
        
            return view('admin.dashboard', compact('dates', 'userCount', 'user1', 'checkI', 'date', 'checkCount'));
        }

        public function show_message()
        {
            $data=message::all();
            return view('admin.message',compact('data'));
        }

        public function view_message($id)
        {
            $data=message::find($id);
            return view('admin.view_message',compact('data'));
        }

        public function add_pricing_view()
        {
            $price=pricing::all();
           return view('admin.pricing_view',compact('price'));
        }


        
        



        
}
