@extends('layout_recruiter.master_recruiter')
@section('content')
	<p style="color: white;">{{$i=1}}</p>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách 
                            <small>Các bài Post</small>
                        </h1>
                    </div>

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover">
                    	
                        <thead>
                            <tr align="center">
                                <th>id</th>
                                <th>Congty</th>
                                <th>User_id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Content</th>
                                <th>Keyword</th>
                                <th>Category_id</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        	@foreach($listpost as $lp)
                        		
	                            <tr class="odd gradeX" align="center">
                                
	                                <td>{{$lp->id}}</td>
	                                <td>{{$lp->congty}}</td>
	                                <td>{{$lp->user_id}}</td>
	                                <td>{{$lp->title}}</td>
	                                <td>{{$lp->description}}</td>
	                                <td>{{$lp->content}}</td>
	                                <td>{{$lp->keywork}}</td>
	                                <td>{{$lp->category_id}}</td>
	                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Sửa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Xóa</a></td>

	                            </tr>
                             
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
	
@endsection