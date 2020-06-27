@extends('layouts/app');
@section('content')
 <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Employee Details</h4>
                  
                </div>
                <div class="card-body">
                  <div class="table-responsive table-upgrade">
                    <table class="table">
                    
                      <tbody>
                        <tr>
                          <td>Type</td>
                          <td class="text-center">{{$emp->type}}</td>
                          
                        </tr>
                        <tr>
                          <td>PreFix</td>
                          <td class="text-center">{{$emp->prefix}}</td>
                          
                        </tr>
                        <tr>
                          <td>First Name</td>
                          <td class="text-center">{{$emp->firstname}}</td>                        
                        </tr>
                                      
                        <tr>
                          <td>Middle Name</td>
                          <td class="text-center">{{$emp->middlename}}</td> 
                        </tr>
                        <tr>
                          <td>Last Name</td>
                          <td class="text-center">{{$emp->lastname}}</td> 
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td class="text-center">{{$emp->email}}</td>
                          
                        </tr>
                         <tr>
                          <td>Mobile</td>
                          <td class="text-center">{{$emp->mobile}}</td>
                          
                        </tr>
                          <tr>
                          <td>Alternate Mobile</td>
                          <td class="text-center">{{$emp->altmobile}}</td>
                          
                        </tr>
                          <tr>
                          <td>Extension Mobile</td>
                          <td class="text-center">{{$emp->extnumber}}</td>
                          
                        </tr>
                          <tr>
                          <td>UAN</td>
                          <td class="text-center">{{$emp->uan}}</td>
                          
                        </tr>
                          <tr>
                          <td>Report Manager</td>
                          <td class="text-center">{{$emp->report_manager}}</td>
                          
                        </tr>
                          <tr>
                          <td>Departments</td>
                          <td class="text-center">{{$emp->department}}</td>
                          
                        </tr>
                          <tr>
                          <td>Designation</td>
                          <td class="text-center">{{$emp->designation}}</td>
                          
                        </tr>
                          <tr>
                          <td>Emp Group</td>
                          <td class="text-center">{{$emp->emp_group}}</td>
                          
                        </tr>
                          <tr>
                          <td>Date of Birth</td>
                          <td class="text-center">{{$emp->dob}}</td>
                          
                        </tr>
                          <tr>
                          <td>Actual DOB</td>
                          <td class="text-center">{{$emp->actual_dob}}</td>
                          
                        </tr>
                          <tr>
                          <td>Gender</td>
                          <td class="text-center">{{$emp->gender}}</td>
                          
                        </tr>
                          <tr>
                          <td>Martial Status</td>
                          <td class="text-center">{{$emp->martial_status}}</td>
                          
                        </tr>
                          <tr>
                          <td>Nationality</td>
                          <td class="text-center">{{$emp->nationlity}}</td>
                          
                        </tr>
                          <tr>
                          <td>Mobile</td>
                          <td class="text-center">{{$emp->mobile}}</td>
                          
                        </tr>
                          <tr>
                          <td>Blood Group</td>
                          <td class="text-center">{{$emp->blood_group}}</td>
                          
                        </tr>
                          <tr>
                          <td>Father Name</td>
                          <td class="text-center">{{$emp->father_name}}</td>
                          
                        </tr>
                          <tr>
                          <td>Mother Name</td>
                          <td class="text-center">{{$emp->mother_name}}</td>
                          
                        </tr>
                          <tr>
                          <td>Address 1</td>
                          <td class="text-center">{{$emp->address1}}</td>
                          
                        </tr>
                          <tr>
                          <td>Address 2</td>
                          <td class="text-center">{{$emp->address2}}</td>
                          
                        </tr>
                          <tr>
                          <td>City</td>
                          <td class="text-center">{{$emp->city}}</td>
                          
                        </tr>
                          <tr>
                          <td>State</td>
                          <td class="text-center">{{$emp->state}}</td>
                          
                        </tr>
                          <tr>
                          <td>Country</td>
                          <td class="text-center">{{$emp->country}}</td>
                          
                        </tr>
                          <tr>
                          <td>Zip Code </td>
                          <td class="text-center">{{$emp->zip}}</td>
                          
                        </tr>
                       
                      
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