@extends('admin.fragement.layout')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Control list</li>
        </ol>
        @if(Session::has('deleted_user'))
                <p class="bg-danger">{{session('deleted_user')}}</p>
            @endif
        <!-- Page Content -->
        @if(Auth::user()->role->name=='Admin')
        <a href="{{route('sys_statics.create')}}" class="color:white;">
            <button class="btn btn-primary">Add new</button>
        </a>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead  class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Control Name</th>
                        <th scope="col">English</th>
                        <th scope="col">Khmer</th>
                        <th scope="col">File</th>
                        {{--<th scope="col">Created</th>--}}
                        {{--<th scope="col">Updated</th>--}}
                        <th scope="col">Edit</th>
                        @if(Auth::user()->role->name=='Admin')
                            <th scope="col">Delete</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sys_statics as $sys_static)
                        <tr>
                            <th scope="row">{{$sys_static->id}}</th>
                            <td>{{$sys_static->control_name}}</td>
                            <td>{{str_limit($sys_static->value_en,10)}}</td>
                            <td>{{str_limit($sys_static->value_kh,10)}}</td>
                            <td><img height="50px;" width="50px" src="{{$sys_static->photo?$sys_static->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>
                            <td>
                                <a href="{{route('sys_statics.edit',$sys_static->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                            </td>
                            @if(Auth::user()->role->name=='Admin')
                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['SysStaticController@destroy',$sys_static->id]]) !!}
                                    <div class="form-group ">
                                        <button class="btn btn-danger fas fa-trash-alt" type="submit" value=""></button>
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            @endif
                        </tr>
                        @endforeach

                    </tbody>
                </table>


    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop
