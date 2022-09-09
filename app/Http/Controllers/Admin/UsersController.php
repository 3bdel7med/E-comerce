<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $data=User::all();
        return view('admin.users.index',compact('data'));
    }
    public function admin($id){
        $user=User::find($id);
        $user->admin=1;
        $user->save();
        return redirect()->back();
    }
    public function notadmin($id){
        $user=User::find($id);
        $user->admin=0;
        $user->save();
        return redirect()->back();
    }
    public function destroy($id){
        $user=User::find($id);
        $user->delete($id);
        return redirect()->back();
    }
}
