@extends('layout.index')
@section('content')
	<table>
		<div class="row form_login" style="width: 500px;margin: auto;background: pink;padding: 20px 20px;">
		<form method="post" action="{{route('dangkyntd')}}" >
		<input type="hidden" name="_token" value="{{csrf_token()}}" >
			<h3 style="text-align: center;color: red;">Đăng ký Recruiter</h3>
			<div class="form-group">
				@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}};
						@endforeach
					</div>
				@endif
			    @if(Session::has('thanhcong'))
			    	<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
			    @endif
			  </div>
			  <div class="form-group">
			    <b>Username</b>
			    <input  type="text" class=" form-control"  aria-describedby="emailHelp" placeholder="Nhập Tên tài khoản" name="username">
			  </div>
			   <div class="form-group">
			    <b>Email</b>
			    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Nhập Email">
			  </div>
			  <div class="form-group">
			    <b>Password</b>
			    <input type="password" class="form-control" name="password" placeholder="Nhập Mật khẩu">
			  </div>
			  <div class="form-group">
			    <b>Address</b>
			    <input type="text" class="form-control" name="address" aria-describedby="emailHelp" placeholder="Nhập Địa chỉ">
			  </div>
			   <div class="form-group">
			    <b>Phone</b>
			    <input type="text" class="form-control" name="phone" aria-describedby="emailHelp" placeholder="Nhập Số điện thoại">
			  </div>
			   <div class="form-group" style="text-align: center">
			   	 <button type="submit" class=" col-6 btn btn-danger">Đăng ký</button>
			   	</div>
			 
		</form>
	</table>
@endsection