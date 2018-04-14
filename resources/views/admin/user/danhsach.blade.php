        @extends('admin.layout.index')
        @section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>id</th>
                                <th>username</th>
                                <th>fullname</th>
                                <th>gender</th>
                                <th>email</th>
                                <th>phone</th>
                                <th>adress</th>
                                <th>quyen</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $u)
                            <tr class="odd gradeX" align="center">
                                <td>{{$u->id}}</td>
                                <td>{{$u->username}}</td>
                                <td>{{$u->fullname}}</td>
                                <td>
                                    @if($u->gender==0)
                                    {{"Nam"}}
                                    @elseif($u->gender==1)
                                    {{"Nữ"}}
                                    @else
                                    {{"Giới tính khác"}}
                                    @endif
                                </td>
                                <td>{{$u->email}}</td>
                                <td>{{$u->phone}}</td>
                                <td>{{$u->address}}</td>
                                <td>{{$u->quyen}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="xoa()" href="admin/user/xoa/{{$u->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a  href="admin/user/sua/{{$u->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
        @section('script')
        <script type="text/javascript">
            function xoa(){
                if(confirm("Bạn muốn xóa hay không")==true){

                }else{

                }
            }
        </script>
        @endsection