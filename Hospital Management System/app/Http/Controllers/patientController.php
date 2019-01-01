<?php
namespace App\Http\Controllers;
use App\Patient;
use App\DoctorPatient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    //
     public function create(Request $request)
    {
         if(session()->has('usname')){
    	return view('patient.create.index');}
         else{
            return redirect()->route('login.index');
        }
    }

    public function errorName(Request $request)
    {
         if(session()->has('usname')){
        return view('patient.error.patient.address');}
         else{
            return redirect()->route('login.index');
        }
    }

     public function store(Request $request)
    {
        $pname=$request->name;
        $address=$request->address;
        $phone=$request->phone;
        $dname=$request->doctorname;
        $did=$request->doctorid;

        $n=0;$a=0;$p=0;$dn=0;$di=0;

        if($pname==null){$n=1;}
        else if($address==null){$a=1;}
        else if($phone==null){$p=1;}
        else if($dname==null){$dn=1;}
        else if($did==null){$di=1;}
    else{
        for($i=0;$i<strlen($pname);$i++)
        {
            if($pname[$i]>='a' || $pname[$i]<='z' && $pname[$i]>='A' || $pname[$i]<='Z' || $pname[$i]<=' '){}
            else{$n=1;}
        }
        for($i=0;$i<strlen($address);$i++)
        {
            if($address[$i]>='a' || $address[$i]<='z' && $address[$i]>='A' || $address[$i]<='Z'){}
            else{$a=1;}
        }
        for($i=0;$i<strlen($phone);$i++)
        {
            if($phone[$i]>='a' || $phone[$i]<='z' && $phone[$i]>='A' || $phone[$i]<='Z'){}
            else{$p=1;}
        }
         for($i=0;$i<strlen($dname);$i++)
        {
            if($dname[$i]>='a' || $dname[$i]<='z' && $dname[$i]>='A' || $dname[$i]<='Z'){}
            else{$dn=1;}
        }
         for($i=0;$i<strlen($did);$i++)
        {
            if($did[$i]>='a' || $did[$i]<='z' && $did[$i]>='A' || $did[$i]<='Z'){}
            else{$di=1;}
        }
    }
        
        if($n==1){
            return view('patient.error.patient.address');
            //return $this->routeUrl()->to('patient.error.patient.address');
        }
        else if($a==1){return view('patient.error.patient.address');}
        else if($p==1){return view('patient.error.patient.address');}
        else if($dn==1){return view('patient.error.patient.address');}
        else if($di==1){return view('patient.error.patient.address');}
        else{
    	$patient=new Patient();
    	$patient->pname=$request->name;
    	$patient->paddress=$request->address;
		$patient->pphone=$request->phone;
		$patient->dname=$request->doctorname;
		$patient->pdoctor=$request->doctorid;
    	$patient->save();
        }

    	//return redirect()->route('receptionist.home.home');
         if(session()->has('usname')){
    	return redirect()->route('rhome.index');}
         else{
            return redirect()->route('login.index');
        }
    }

     public function showall(Request $request)
    {
        $patient=DB::table('patients')
                ->get();
                 if(session()->has('usname')){
            return view('patient.show.profile')->with('patients',$patient);}
             else{
            return redirect()->route('login.index');
        }
    }
    
     public function showmypatient(Request $request)
    {
            $patient=DB::table('patients')
                //->join('doctorpatient','patients.id','=','doctorpatient.pid')
                ->where('patients.pdoctor','=',$request->session()->get('usname'))
                //->select('users.*','userType.typeName')
                ->get();
            //return view('home.index')->with('users',$users);
                 if(session()->has('usname')){
            return view('patient.show.matchPatient')->with('patients',$patient);}
             else{
            return redirect()->route('login.index');
        }
    }


     public function editByDoc(Request $request,$id)
    {
        $patient=Patient::find($id);
         if(session()->has('usname')){
        return view('patient.edit.doctor.index')->with('patient',$patient);}
         else{
            return redirect()->route('login.index');
        }
    }


    public function updateByDoc(Request $request,$id)
    {
        $patient=Patient::find($id);
        $patient->prescription=$request->pres;
        $patient->pdiseases=$request->diseases;
        $patient->save();
         if(session()->has('usname')){
        return redirect()->route('patient.showmypatient');}
         else{
            return redirect()->route('login.index');
        }
    }

    

     public function searchByName(Request $request, $name)
    {
        if($name){
        $patient=DB::table('patients')
               -> where('pname','like','%'.$name.'%')
               ->get();
            return response()->json($patient); 
        }
    }

     public function edit(Request $request,$id)
    {
        $patient=Patient::find($id);
         if(session()->has('usname')){
        return view('patient.edit.receptionist.index')->with('patient',$patient);}
         else{
            return redirect()->route('login.index');
        }
    }

    public function update(Request $request,$id)
    {
        $patient=Patient::find($id);
        $patient->pphone=$request->phone;
        $patient->paddress=$request->address;
        $patient->pdoctor=$request->did;
        $patient->dname=$request->name;
        $patient->proom=$request->room;
        $patient->save();
        
         if(session()->has('usname')){
        return redirect()->route('patient.showall');}
         else{
            return redirect()->route('login.index');
        }
    }

}
