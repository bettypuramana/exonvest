@extends('layouts.admin.admin_layout')
@section('content')
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="d-flex justify-content-between">
                    <h2>News Letter Subscribers</h2>
                    <a href="{{route('admin.export')}}" class="btn cur-p btn-warning">Export</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row column1">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
            @if(session()->has('status'))
                    <div class="alert alert-success">
                    {{ session()->get('status') }}
                    </div>
                @endif
                @if(session()->has('Fail'))
                    <div class="alert alert-danger">
                    {{ session()->get('Fail') }}
                    </div>
                @endif
               <div class="full price_table padding_infor_info">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="table-responsive-sm">
                           <table class="table table-striped projects">
                              <thead class="thead-dark">
                                 <tr>
                                    <th style="width: 2%">No</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @php
                                    $i=1;
                                    @endphp
                                    @if(!empty($newsL))
                                    @foreach($newsL as $row)
                                 <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$row->email}}</td>
                                    <td class="project_progress"><a href="{{ route('delete_news_letter', ['id' => $row->id]) }}" onclick="return confirm('Are you sure you want to delete this record?')" class="fa fa-trash-o text-danger"></a></td>
                                 </tr>
                                @php
                                    $i++;
                                @endphp
                                @endforeach                           
                                @endif
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
@endsection
@section('js')
@endsection
