@extends('layouts/app');
@section('content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <a href="{{route('addemp')}}" class="btn btn-primary">Add</a>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Employee List</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Emp Type
                        </th>
                        <th>
                          Emp Name
                        </th>
                        <th>
                          Designation
                        </th>
                        <th>
                          Reporting Manager
                        </th>
                        <th>
                          Email ID
                        </th>
                        <th>
                          DOB
                        </th>
                        <th>
                         Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($lists as $list)
                        <tr>
                          <td>
                            {{$list->type}}
                          </td>
                          <td>
                           {{$list->firstname}}
                          </td>
                          <td>
                            {{$list->designation}}
                          </td>
                          <td>
                            {{$list->report_manager}}
                          </td>
                          <td >
                            {{$list->email}}
                          </td>
                           <td >
                            {{$list->dob}}
                          </td>
                           <td >
                           
                            <a href="{{route('editemp',$list->id)}}"  class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{route('empshow',$list->id)}}"  class="btn btn-info btn-sm">View</a>
                             <a href="{{route('deleteemp',$list->id)}}" class="btn btn-danger btn-sm">Delete</a>

                          </td>
                          
                        </tr>
                        @endforeach
                      
                      
                      </tbody>
                    </table>
                  </div>
                  {{ $lists->links() }}
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      
@endsection