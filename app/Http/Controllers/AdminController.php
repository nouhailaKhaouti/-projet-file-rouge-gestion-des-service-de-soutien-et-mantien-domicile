<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function show_user_denied()
    {  
        $acces='denied';
        $users = User::where('access', 'LIKE', '%' . $acces . '%')->get();
        return view('admin.denied', compact('users'));
    }
    public function show_user_approved()
    {  
        $acces='approved';
        $users = user::where('access', 'LIKE', '%' . $acces . '%')->get();
        return view('admin.tables.approved', compact('users'));
    }
    public function warning()
    {
        $warning='0';
        $users = user::where('warning', '>', '%' . $warning . '%')->get();
        return view('admin.tables.warning', compact('users'));
    }
    public function acces_approved($id)
    {
        $data=User::find($id);
        $data->access='approved';
        $data->save();
        return redirect()->back();
    }

    public function acces_denied($id)
    {
        $data=User::find($id);
        $data->access='denied';
        $data->save();
        return redirect()->back();
    }

    public function warningemail(Request $request,$id){
        
        $user=User::where('id', $id);
        $user->increment('warning');
        $request->validate([
                  'subject'=> 'required',
                  'message'=>'required',
                  'email'=>'required',
                 ]);
        //dd($request);
        $data = array(
          'subject' => $request->subject, 
          'message'=> $request->message ,
           );
        //   Mail::to($request->email)->send(new Email($data));
          return back()->with('success', 'Sent Successfully !');
      }
}
