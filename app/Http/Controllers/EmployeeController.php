<?php

namespace App\Http\Controllers;
use App\Model\Employee;
use App\Http\Requests\Empvalidate;

use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

    

           
        $list=Employee::paginate(5);
        return view('list',['lists'=>$list]);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ajayakv-rest-countries-v1.p.rapidapi.com/rest/v1/all",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: ajayakv-rest-countries-v1.p.rapidapi.com",
                "x-rapidapi-key: d5d1df4521msh596286d46ccfdf0p109043jsnc8180c354dbd"
            ),
        ));

            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);

            curl_close($curl);

           
        return view('add',['country'=>$response]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Empvalidate $request)
    {
      $validated = $request->validated();
   

        
        $employee = new Employee;
        $employee->type = $request->type;
        $employee->prefix = $request->prefix;
        $employee->firstname=$request->fname;
        $employee->middlename=$request->mname;
        $employee->lastname=$request->lname;
        $employee->email=$request->email;
        $employee->mobile=$request->mobile;
        $employee->altmobile=$request->altmobile;
        $employee->extnumber=$request->extmobile;
        $employee->uan=$request->uan;
        $employee->role=$request->role;
        $employee->report_manager=$request->rmanager;
        $employee->department=$request->department;
        $employee->designation=$request->designation;
        $employee->emp_group=$request->empgroup;
        $employee->dob=$request->dob;
        $employee->actual_dob=$request->adob;
        $employee->gender=$request->gender;
        $employee->martial_status=$request->martialstatus;
        $employee->nationlity=$request->nationality;
        $employee->blood_group=$request->blood;
        $employee->father_name=$request->fathername;
         $employee->mother_name=$request->mothername;
        $employee->address1=$request->address1;
        $employee->address2=$request->address2;
        $employee->city=$request->city;
        $employee->country=$request->country;
        $employee->state=$request->state;
        $employee->zip=$request->pincode;

        $employee->save();
        session()->flash('msg','Sucessfully Added');
        return redirect()->route('emplist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $emp=Employee::where('id','=',$id)->first();
        return view('view',['emp'=>$emp]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp=Employee::where('id','=',$id)->first();
        $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://ajayakv-rest-countries-v1.p.rapidapi.com/rest/v1/all",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: ajayakv-rest-countries-v1.p.rapidapi.com",
                "x-rapidapi-key: d5d1df4521msh596286d46ccfdf0p109043jsnc8180c354dbd"
            ),
        ));

            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);

            curl_close($curl);
        
        $emp=Employee::where('id','=',$id)->first();
        return view('edit',['emp'=>$emp,'country'=>$response]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Empvalidate $request, $id)
    {
        

        $this->validate($request, [
        'type' => 'required',
        'prefix' => 'required',
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'mobile' => 'required',
        'role' => 'required',
        'rmanager' => 'required',
        'department' => 'required',
        'designation' => 'required',
        'empgroup' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'martialstatus' => 'required',
        'nationality' => 'required',
        'blood' => 'required',
        'fathername' => 'required',
        'mothername' => 'required'
    ]);

        
         $employee = new Employee;
         $employee->exists = true;
         $employee->id=$id;
        $employee->type = $request->type;
        $employee->prefix = $request->prefix;
        $employee->firstname=$request->fname;
        $employee->middlename=$request->mname;
        $employee->lastname=$request->lname;
        $employee->email=$request->email;
        $employee->mobile=$request->mobile;
        $employee->altmobile=$request->altmobile;
        $employee->extnumber=$request->extmobile;
        $employee->uan=$request->uan;
        $employee->role=$request->role;
        $employee->report_manager=$request->rmanager;
        $employee->department=$request->department;
        $employee->designation=$request->designation;
        $employee->emp_group=$request->empgroup;
        $employee->dob=$request->dob;
        $employee->actual_dob=$request->adob;
        $employee->gender=$request->gender;
        $employee->martial_status=$request->martialstatus;
        $employee->nationlity=$request->nationality;
        $employee->blood_group=$request->blood;
        $employee->father_name=$request->fathername;
         $employee->mother_name=$request->mothername;
        $employee->address1=$request->address1;
        $employee->address2=$request->address2;
        $employee->city=$request->city;
        $employee->country=$request->country;
        $employee->state=$request->state;
        $employee->zip=$request->pincode;

        $employee->save();
        session()->flash('msg','Sucessfully Updated');
        return redirect()->route('emplist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        return redirect()->route('emplist');
    }
}
