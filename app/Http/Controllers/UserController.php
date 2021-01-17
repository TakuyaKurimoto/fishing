<?php

namespace App\Http\Controllers;

use App\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request){
        
        $authUser = Auth::user();
        $users = User::all();
        $param = [
            'authUser'=>$authUser,
            'users'=>$users
        ];
        $name = $request->Name;
        
        //$usr_id = $request->user()
        //$user = DB::table('users')->where('id', $usr_id)->first();
        
        return view('user.index',$param);
    }

    public function userEdit(Request $request){
        $authUser = Auth::user();
        $param = [
            'authUser'=>$authUser,
        ];
        return view('user.userEdit',$param);
    }

    public function userUpdate(Request $request){
        // Validator check
        $rules = [
            'user_id' => 'integer|required',
            'name' => 'required',
        ];
        $messages = [
            'user_id.integer' => 'SystemError:システム管理者にお問い合わせください',
            'user_id.required' => 'SystemError:システム管理者にお問い合わせください',
            'name.required' => 'ユーザー名が未入力です',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);

        if($validator->fails()){
            return redirect('/user/userEdit')
                ->withErrors($validator)
                ->withInput();
        }

        $uploadfile = $request->file('thumbnail');

          if(!empty($uploadfile)){
            $thumbnailname = $request->file('thumbnail')->hashName();
            $request->file('thumbnail')->storeAs('public/user', $thumbnailname);

            $param = [
                'name'=>$request->name,
                'thumbnail'=>$thumbnailname,
            ];
          }else{
               $param = [
                    'name'=>$request->name,
               ];
          }

        User::where('id',$request->user_id)->update($param);
        return redirect(route('user.userEdit'))->with('success', '保存しました。');
    }
    public function show($id)
    {
        
        $user = User::findOrFail($id);
        
        $user_id = $user->id;
        $posts = Post::where('user_id', $user_id)->orderBy('created_at', 'desc')->paginate(5);
       

        return view('user.show',compact('posts', 'user'));
    }
}

