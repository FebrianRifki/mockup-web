@extends('master')
@section('content')
<div class="content-wrapper">
        @include('breadcrumb')
        <div class="card">
                <div class="card-header">
                  <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
      
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Product ID</th>
                        <th>Product Platform Name</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                            @if (!$data)
                            <tr>
                                <td colspan="8">Data Not Found!</td>
                            </tr>
                        @else
                            @foreach ($data as $index => $data) 
                            <tr>
                                <td scope="row">{{ $index + 1 }}</td>    
                                <td>{{ $data->product_id }}</td>
                                <td>{{ $data->platforms_name }}</td>
                                <td>{{ $data->product_name }}</td>
                                <td>{{ $data->product_description }}</td>
                                <td>{{ $data->created_at}}</td>
                                @if(!$data->updated_at) 
                                    <td>Null</td>
                                @else
                                    <td>{{ $data->updated_at }}</td>
                                @endif
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
</div>
@endsection