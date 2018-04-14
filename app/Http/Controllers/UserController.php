<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    //
	public function getdanhsach(){
		$user = User::all();
		return view('admin.user.danhsach',['user'=>$user]);

	}
	public function getThem(){
		return view('admin.user.them');
	}

	public function postThem(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password'=>'required|min:3|max:32',
				'passwordAgain' =>'required|same:password',
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự',
				'email.required' => 'Bạn chưa nhập vào địa chỉ email',
				'email.email' =>'Bạn chưa nhập đúng định dạng email',
				'email.unique' =>'Email đã tồn tại',
				'password.required' => 'Bạn chưa nhập mật khẩu',
				'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
				'password.max' => 'Mật khẩu chỉ được phép tối đa 32 kí tự',
				'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
				'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
			]);
		$user = new User;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->gender = $request->gender;
		$user->fullname = $request->fullname;
		$user->phone = $request->phone;
		$user->address=$request->address;
		$user->quyen = $request->quyen;
		// if($request->hasFile('upload')){
		// 	$file = $request ->file('upload');
		// 	$duoi = $file->getClientOriginalExtension();
		// 	if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
		// 		$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
		// 		return redirect('admin/user/them');
		// 	}
		// 	$name = $file->getClientOriginalName();
		// 	$cv_upload = str_random(4)."_".$name;
		// 	while(file_exists("upload/cv/".$cv_upload)){
		// 		$cv_upload = str_random(4)."_".$name;
		// 	}
  //   		//echo $Hinh;
		// 	$file->move("upload/cv",$cv_upload);
		// 	$user->cv_upload = $cv_upload;
		// }else{
		// 	$user->cv_upload="";
		// }


		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã thêm thành công!');
		return redirect('admin/user/them');
	}


	// sửa
	public function getSua($id){
		$user = User::find($id);
		return view('admin.user.sua',['user'=>$user]);
	}

	public function postSua(Request $request,$id){
		$this->validate($request,
			[
				'username' => 'required|min:3'
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự'
			]);
		$user = User::find($id);
		$user->username = $request->username;
		$user->email = $request->email;
		$user->gender = $request->gender;
		$user->fullname = $request->fullname;
		$user->phone = $request->phone;
		$user->address=$request->address;

		if($request->changePassword == "on"){
			$this->validate($request,
				[
					'password'=>'required|min:3|max:32',
					'passwordAgain' =>'required|same:password'
				],
				[
					'password.required' => 'Bạn chưa nhập mật khẩu',
					'password.min' => 'Mật khẩu phải có ít nhất 3 kí tự',
					'password.max' => 'Mật khẩu chỉ được phép tối đa 32 kí tự',
					'passwordAgain.required' => 'Bạn chưa nhập lại mật khẩu',
					'passwordAgain.same' => 'Mật khẩu nhập lại chưa đúng'
				]);
			$user->password = bcrypt($request->password);
		}
		$user->quyen = $request->quyen;

		// if($request->hasFile('upload')){
		// 	$file = $request ->file('upload');
		// 	$duoi = $file->getClientOriginalExtension();
		// 	if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'JPG'){
		// 		$request->session()->flash('loi', 'Bạn chỉ được chọn file jpg,png');
		// 		return redirect('admin/user/them');
		// 	}
		// 	$name = $file->getClientOriginalName();
		// 	$cv_upload = str_random(4)."_".$name;
		// 	while(file_exists("upload/cv/".$cv_upload)){
		// 		$cv_upload = str_random(4)."_".$name;
		// 	}
  //   		//echo $Hinh;
  //   		unlink("upload/cv/".$user->cv_upload);
		// 	$file->move("upload/cv",$cv_upload);
			
		// 	$user->cv_upload = $cv_upload;
		// }else{
		// 	$user->cv_upload="";
		// }

		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('admin/user/sua/'.$id);
	}


	// xóa
	public function getXoa(Request $request,$id){
		$user = User::find($id);
		$user->delete();
		$request->session()->flash('thongbao','Xóa thành công!');
		return redirect('admin/user/danhsach');
	}
}
