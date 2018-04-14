<?php

namespace App\Http\Controllers;
use App\Http\Controllers\NhaTuyenDungController;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Hash;

class NhaTuyenDungController extends Controller
{

	public function page_recruiter(){
		return view('pages_recruiter.recruiter_index');
	}

	public function getdangkyntd(){
		return view ('pages_recruiter.dangkyntd');
	}

	public function postdangkyntd(Request $request){
    	$this->validate($request,
    		[
    			'email'		=>'required|email|unique:users,email',
    			'password'	=>'required|min:6|max:20',
    			'username'	=>'required|unique:users,username',
    		],

    		[
    			'email.required'	=>'Vui lòng nhập email',
    			'email.email'		=>'Không đúng định dạng email',
    			'email.unique'		=>'Email đã có người sử dụng',
                'username.unique'       =>'Tên đã có người sử dụng',
    			'password.required'	=>'Vui lòng nhập password',
    			'username.required'		=>'Vui lòng nhập tên',
                'username.unique'       =>'Tên tài khoản đã tồn tại',
    			'password.min'		=>'Mật khẩu ít nhất 6 kí tự',
    			'password.max'		=>'Mật khẩu nhiều nhất 20 kí tự'
    		]
    	);
    	$users = new User();
    	$users->username 	= $request->username;
    	$users->email   =$request->email;
    	$users->password= Hash::make($request->password);
    	$users->address = $request->address;
    	$users->phone   =$request->phone;
    	$users->quyen = 2; 
    	$users->save();
    	return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }


    public function ListPost()
    {
    	$listpost = Post::all();
    	return view('pages_recruiter.listpost', compact('listpost'));
    }

    public function getAddPost()
    {
    	return view('pages_recruiter.addPost');
    }
}
