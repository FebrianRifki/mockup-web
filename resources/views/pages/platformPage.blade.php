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
                        <th>Platform ID</th>
                        <th>Platform Name</th>
                        <th>Created At</th>
                        <th>Updated At</th>
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
                                <td>{{ $data->platforms_id }}</td>
                                <td>{{ $data->platforms_name }}</td>
                                <td>{{ $data->created_at}}</td>
                                @if(!$data->updated_at) 
                                    <td>Not Updated</td>
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
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                                <button type="button" class="btn btn-block bg-gradient-primary">Create New Platform</button>
                        </div>
                    </div>
                </div>
              </div>
</div>
@endsection