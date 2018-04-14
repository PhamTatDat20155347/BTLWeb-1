<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cv;
use Illuminate\Support\Facades\Auth; // phải có lớp này mới có thể sử dụng để đăng nhập
class PagesController extends Controller
{
    //
	function __construct(){
		$cv = Cv::all();
		view()->share('cv',$cv);
		if(Auth::check()){
			view()->share('hosocanhan',Auth::user());
		}
	}

	public function getTrangchu(){
		return  view('pages.trangchu');
	}

	public function gioithieu(){
		return view('pages.gioithieu');
	}
	public function lienhe(){
		return view('pages.lienhe');
	}

	public function getDangnhap(){
		return view('pages.dangnhap');
	}

	public function postDangnhap(Request $request){
		$this->validate($request,
			[
				'email' =>'required',
				'password'=>'required|min:6|max:20'
			],
			[
				'email.required' => 'Bạn chưa nhập email',
				'password.required' => 'Bạn chưa nhập password',
				'password.min' => 'Password không được nhỏ hơn 6 kí tự',
				'password.max' =>'Password không được lớn hơn 20 kí tự'
			]);
		$data_user = ['email'=>$request->email,'password'=>$request->password,'quyen' => 1];
		$data_recruiter = ['email'=>$request->email,'password'=>$request->password, 'quyen' => 2];
        // kiểm tra đăng nhập
		if(Auth::attempt($data_user)){
			return redirect('trangchu');
		}elseif (Auth::attempt($data_recruiter)) {
			$recruiter = User::find($id)->where('quyen',2)->get();
			return redirect('page_recruiter');
		}
		else{
			$request->session()->flash('loi', 'Đăng nhập thất bại');
			return redirect('dangnhap');
		}
	}

	public function dangxuat(){
		Auth::logout();
		return redirect('trangchu');
	}

	public function getdangky(){
		return view('pages.dangky');
	}
	public function postdangky(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3',
				'email' => 'required|email|unique:users,email',
				'password'=>'required|min:3|max:32',
				'passwordAgain' =>'required|same:password'
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
		$user->fullname = $request->fullname;
		$user->gender=$request->gender;
		$user->phone= $request->phone;
		$user->address=$request->address;
		$user->quyen = "User";
		$user->quyen = 0;


		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã đăng ký thành công!');
		return redirect('dangky');
		return view('pages.dangky');
	}

	public function getHosocanhan(){
		return view('pages.hosocanhan');
	}

	public function postHosocanhan(Request $request){
		$this->validate($request,
			[
				'username' => 'required|min:3'
			],
			[
				'username.required' => 'Bạn chưa nhập tên người dùng',
				'username.min' => 'Tên người dùng phải có ít nhất 3 kí tự'
			]);
		$user = Auth::user();
		$user->username = $request->username;
		$user->fullname= $request->fullname;
		$user->gender= $request->gender;
		$user->phone= $request->phone;
		$user->address= $request->address;

		if($request->checkpassword == "on"){
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

		$user->save();
		$request->session()->flash('thongbao', 'Bạn đã sửa thành công!');
		return redirect('hosocanhan');
	}

	public function getHoso($id){
		$cv = Cv::find($id);
		return view('pages.hoso',['cv'=>$cv]);
	}

	public function getHosoxinviec($id){
		$cv = Cv::find($id);
		return view('pages.hosoxinviec',['cv'=>$cv]);
	}

	public function getTest(){
		return view('pages.hosoxinviec');
	}

	public function suaHoso(Request $request){
		
	}
}
