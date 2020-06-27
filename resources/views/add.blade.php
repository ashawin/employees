@extends('layouts/app');
@section('content')
<div class="content">
        <div class="container-fluid">
          @if(session()->has('msg'))
          <p class="alert-success">{{session()->get('msg')}}</p>
          @endif
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title"> Add Employee</h4>
                  <p class="card-category">Add Employee Details</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{route('saveemp')}}">
                  	@csrf
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Employee Type *</label>
                          <select class="form-control" name="type">
								<option value=""  selected>Choose your option</option>
								<option value="Full Time">Full Time </option>
								<option value="Contract">Contract</option>
							</select>
                        </div>
                        @if($errors->has('type'))
                         <p class="alert alert-danger"> {{ $errors->first('type') }}</p>
                       @endif
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">PreFix *</label>
                           <select class="form-control" name="prefix">
								<option value=""  selected>Choose your option</option>
								<option value="Mr">Mr </option>
								<option value="Ms">Ms</option>
								<option value="Mrs">Mrs</option>
							</select>
                        </div>
                         @if($errors->has('prefix'))
                         <p class="alert alert-danger"> {{ $errors->first('prefix') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">First Name *</label>
                          <input type="text" name="fname" class="form-control" value="{{old('fname')}}">
                        </div>
                         @if($errors->has('fname'))
                         <p class="alert alert-danger"> {{ $errors->first('fname') }}</p>
                       @endif
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input type="text" name="mname" class="form-control" value="{{old('mname')}}">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name *</label>
                          <input type="text" name="lname" class="form-control" value="{{old('lname')}}">
                        </div>
                         @if($errors->has('lname'))
                         <p class="alert alert-danger"> {{ $errors->first('lname') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email Id *</label>
                          <input type="email" name="email" class="form-control" value="{{old('email')}}">
                        </div>
                         @if($errors->has('email'))
                         <p class="alert alert-danger"> {{ $errors->first('email') }}</p>
                       @endif
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number *</label>
                          <input type="mobile" name="mobile" class="form-control" value="{{old('mobile')}}">
                        </div>
                         @if($errors->has('mobile'))
                         <p class="alert alert-danger"> {{ $errors->first('mobile') }}</p>
                         @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alternate Mobile Number </label>
                          <input type="mobile" name="altmobile" class="form-control" value="{{old('altname')}}">
                        </div>
                         @if($errors->has('altmobile'))
                         <p class="alert alert-danger"> {{ $errors->first('altmobile') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Extention Number</label>
                          <input type="text" name="extmobile" class="form-control" value="{{old('extmobile')}}">
                        </div>
                        
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">UAN Number *</label>
                          <input type="mobile" name="uan" class="form-control" value=" {{old('uan')}}">
                        </div>
                         @if($errors->has('uan'))
                         <p class="alert alert-danger"> {{ $errors->first('uan') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Role * </label>
							<select class="form-control" name="role">
								<option value=""  selected>Choose your option</option>
								<option value="Company Admin">Company Admin</option>
								<option value="Quality Manager">Quality Manager</option>
								<option value="Tech Engineer">Tech Engineer</option>
								<option value="Tech Head">Tech Head</option>
								<option value="Tech Manager">Tech Manager</option>
							</select>
                        </div>
                         @if($errors->has('role'))
                         <p class="alert alert-danger"> {{ $errors->first('role') }}</p>
                       @endif
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Reporting Manager * </label>
							<select class="form-control" name="rmanager">
								<option value=""  selected>Choose your option</option>
								<option value="Admin">Admin</option>
								
							</select>
                        </div>
                         @if($errors->has('rmanager'))
                         <p class="alert alert-danger"> {{ $errors->first('rmanager') }}</p>
                       @endif
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Department * </label>
							<select class="form-control" name="department">
								<option value=""  selected>Choose your option</option>
								<option value="Quality">Quality </option>
								<option value="Technology">Technology </option>
								
							</select>
                        </div>
                          @if($errors->has('department'))
                         <p class="alert alert-danger"> {{ $errors->first('department') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Designation * </label>
							<select class="form-control" name="designation">
								<option value=""  selected>Choose your option</option>
								<option value="Software Engineer Trainee">Software Engineer Trainee</option>
								<option value="Software Engineer">Software Engineer</option>
								<option value="Senior Software Engineer">Senior Software Engineer</option>
							</select>
                        </div>
                        @if($errors->has('designation'))
                         <p class="alert alert-danger"> {{ $errors->first('designation') }}</p>
                       @endif
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Emp Group * </label>
							<select class="form-control" name="empgroup">
								<option value=""  selected>Choose your option</option>
								<option value="Tech Group">Tech Group</option>
							</select>
                        </div>
                         @if($errors->has('empgroup'))
                         <p class="alert alert-danger"> {{ $errors->first('empgroup') }}</p>
                       @endif
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Birth *</label>
                          <input type="date" class="form-control" name="dob" value="{{old('dob')}}">
                        </div>
                         @if($errors->has('dob'))
                         <p class="alert alert-danger"> {{ $errors->first('dob') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Actual Date of birth </label>
                       <input type="date" class="form-control" name="adob" value="{{old('adob')}}">
                        </div>
                        
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender *</label>
                             <select class="form-control" name="gender">
                <option value=""  selected>Choose your option</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
                        </div>
                        
                        @if($errors->has('gender'))
                         <p class="alert alert-danger"> {{ $errors->first('gender') }}</p>
                       @endif
                      </div>
                    </div>
                      <div class="row">
                     
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Martial Status * </label>
							<select class="form-control" name="martialstatus">
								<option value=""  selected>Choose your option</option>
								<option value="Single">Single</option>
								<option value="Married">Married</option>
							</select>
                        </div>
                         @if($errors->has('martialstatus'))
                         <p class="alert alert-danger"> {{ $errors->first('martialstatus') }}</p>
                       @endif
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nationality * </label>
							<input type="text" class="form-control" name="nationality" value="{{old('nationality')}}">
                        </div>
                          @if($errors->has('nationality'))
                         <p class="alert alert-danger"> {{ $errors->first('nationality') }}</p>
                       @endif
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Blood Group* </label>
                          <input type="text" class="form-control" name="blood" value="{{old('blood')}}">
							
                        </div>
                          @if($errors->has('blood'))
                         <p class="alert alert-danger"> {{ $errors->first('blood') }}</p>
                       @endif
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Father Name * </label>
							<input type="text" class="form-control" name="fathername" value="{{old('fathername')}}">
                        </div>
                          @if($errors->has('fathername'))
                         <p class="alert alert-danger"> {{ $errors->first('fathername') }}</p>
                       @endif
                      </div>
                       <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mother Name * </label>
							<input type="text" class="form-control" name="mothername" value="{{old('mothername')}}">
                        </div>
                          @if($errors->has('mothername'))
                         <p class="alert alert-danger"> {{ $errors->first('mothername') }}</p>
                       @endif
                      </div>
                    </div>
                     <h3 class="bmd-label-floating">Address </h3>
                     <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address 1 </label>
                          <textarea class="form-control" name="address1">{{old('address1')}}</textarea> 
                        </div>

                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address 2</label>
                          <textarea class="form-control" name="address2">{{old('address2')}}</textarea>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">city </label>
                          <input type="text" class="form-control" name="city" value="{{old('city')}}">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country </label>
                          <select class="form-control" name="country">
								<option value=""  selected>Choose your option</option>
								@foreach($country as $con)
                <option value="{{$con->name}}">{{$con->name}} </option>
                @endforeach
								
							</select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">State </label>
                           <select class="form-control" name="state">
								<option value=""  selected>Choose your option</option>
               
								<option value="Karnataka">Karnatka</option>
                <option value="Goa">Goa</option>
                <option value="Bihar">Bihar</option>
                
                
								
							</select>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">ZipCode </label>
                          <input type="text" class="form-control" name="pincode" value="{{old('pincode')}}">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection