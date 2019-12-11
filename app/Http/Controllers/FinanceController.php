<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Campus;
use App\Student;
use App\Sponsorinformation;
use App\Employerinformation;
use App\Academicinformation;
use App\Collage;
use App\Course;
use App\Courseapp;
use App\Finance;
use App\Paymenthistory;
use App\Invoice;
use DB;
use Redirect;
use PDF;
use Date;

class FinanceController extends Controller
{
    //
    public function dashboard()
    {
        
        return view('finances.dashboard');
    }
    public function index()
    {
       
        $all_student=DB::table('students')->orderBy('id','DESC')->paginate(10);
        return view('finances.index')->with('all_student',$all_student);
    }
    public function show()
    {
        return view('finances.show');
    }
    public function create()
    {
        return view('finances.create');
    }
    public function view()
    {
        return view('finances.view');
    }
    public function update()
    {
        $update=new Student;
        $update->status="Not Debited";
        $update->course_period="Fulltime Classes";
        $update->self_sponsered="Parent/Guardian";
        $update->save();
        return view('finances.update');
    }
    public function delete()
    {
        return view('finances.delete');
    }

    public function debit($id)
    {
        $course=Courseapp::where(['student_id'=>$id])->first();
        $student=Student::find($id);
        return view('finances.debit')->with(['course'=>$course,'student'=>$student]);
    }

    public function insertdebit(Request $request,$id)
    {
        $student=DB::table('students')->where(['id'=>$id])->first();
        $intake=$student->intake;
        $name=$student->full_name;
        $admno=$student->student_id;
        $year=Date('Y');
        $finance=new Finance;
        $finance->student_id=$id;
        $finance->required_amount=$request->required_amount;
        $finance->amount_to_pay=$request->amount_to_pay;
        $finance->amount_paid=0;
        $finance->balance=$request->amount_to_pay;
        $finance->year=$year;
        $finance->intake=$intake;
        $finance->name=$name;
        $finance->adm_no=$admno;
         if($finance->required_amount >=$finance->amount_to_pay){
             $finance->save();
             return redirect()->route('finances.debitedstudent')->with('debitedstatus', 'Deit is successfully');

         }else{
            
             //return redirect()->route('finances.index')->withSuccessMessage('successfully added');
             return redirect()->back()->with('failedstatus','Failed! Amount to pay should be less required amount');
         }

       
    }
    public function debitedstudent()
    {
        
        $student= DB::table('students')->join('finances','finances.student_id','students.id')->select('students.full_name','finances.*')->get();
        return view('finances.debitedstudent')->with(['student'=>$student]);
    }

    public function makepayment($student_id)
    {
      $studentno=$student_id;
      $one_record=Student::where(['id'=>$student_id])->first();
      $regfees=DB::table('regfees')->where(['student_no'=>$studentno])->first();
      if(!empty($regfees)){
         
          return view('finances.makepayment')->with(['one_record'=>$one_record,'regfees'=>$regfees]);
      }else{
          Alert::warning('This student has not paid registration fee of ksh 1500, ksh 1500 will be deducted from fee to make this payment')->showConfirmButton('Ok');
          return view('finances.makepayment')->with(['one_record'=>$one_record,'regfees'=>$regfees]);
      }
      
    }

    public function insertcredit(Request $request,$id)
    {
     $payment=new Paymenthistory;
     $validateData=$request->validate(['reference_no'=>'required|unique:paymenthistories']);
     $studentid=$id;
     $feereg=DB::table('regfees')->where(['student_no'=>$studentid])->first();
     if(empty($feereg)){
         $data=DB::table('students')->where(['id'=>$studentid])->first();
         $name=$data->full_name;
         $studentid=$data->student_id;
         $studentno=$data->id;
         $fee=1500;
         $amountpaid=$request->amount_paid;
         $balance=$amountpaid-$fee;
         $campus=$data->campus;
         $payRegFee=DB::table('regfees')->insert([
             'student_id'=>$studentid,
             'student_no'=>$studentno,
             'amount'=>$fee,
             'name'=>$name,
             'campus'=>$campus,
             'day'=>Date('d'),
             'month'=>Date('m'),
             'year'=>Date('Y'),
             'date_paid'=>Date('d/m/Y'),
             ]);
         
         $rand=rand(100,100000);
         $payment->student_id=$id;
         $payment->amount_paid=$balance;
         $payment->payment_mode=$request->payment_mode;
         $payment->reference_no=$request->reference_no;
         $payment->date_paid=Date('d/m/Y');
         $payment->receipt_no=$rand;
         if($payment->save()){
            
            $total_amount_paid =DB::table('paymenthistories')->where(['student_id'=> $id])->sum('amount_paid');
            $amount_to_pay= DB::table('finances')->where(['student_id'=> $id])->sum('amount_to_pay');
            $new_balance=$amount_to_pay-$total_amount_paid;
            $upfinance=Finance::where(['student_id'=>$id])->first();
            $upfinance->balance= $new_balance;
            $upfinance->amount_paid=$total_amount_paid;
            $upfinance->save();
            Alert::success('success')->autoclose(1100);
            return redirect()->route('finances.debitedstudent')->withSuccessMessage('successfully added');
           
           
         }
     
     }else{
             $rand=rand(100,100000);
             $payment->student_id=$id;
             $payment->amount_paid=$request->amount_paid;
             $payment->payment_mode=$request->payment_mode;
             $payment->reference_no=$request->reference_no;
             $payment->date_paid=Date('d/m/Y');
             $payment->receipt_no=$rand;
             if($payment->save()){
                
                $total_amount_paid =DB::table('paymenthistories')->where(['student_id'=> $id])->sum('amount_paid');
                $amount_to_pay= DB::table('finances')->where(['student_id'=> $id])->sum('amount_to_pay');
                $new_balance=$amount_to_pay-$total_amount_paid;
                $upfinance=Finance::where(['student_id'=>$id])->first();
                $upfinance->balance= $new_balance;
                $upfinance->amount_paid=$total_amount_paid;
                $upfinance->save();
                Alert::success('success')->autoclose(1100);
                return redirect()->route('finances.debitedstudent')->withSuccessMessage('successfully added');
               
               
             }
     }
    
     
    }
    public function feepaymenthistory($student_id)
    {
     //$paymenthistory=DB::table('paymenthistories')->where(['student_id'=>$student_id]);
     $paymenthistory=Paymenthistory::where('student_id',$student_id)->get();
     $student=Student::where(['id'=>$student_id])->first();

     
     return view('finances.feepaymenthistory')->with(['paymenthistory'=>$paymenthistory,'student'=>$student]);
    
    }
    
    public function printinvoice($id)
    {
        $student=Student::where(['id'=>$id])->first();
        //$upfinance=Finance::where(['student_id'=>$id])->first();
        $finance=Finance::where('student_id',$id)->first();
        $paymenthistory=Paymenthistory::where('student_id',$id)->get();

        return view('finances.printinvoice')->with(['student'=>$student,'paymenthistory'=>$paymenthistory,'finance'=>$finance,'student'=>$student]);
    }
    public function insertinvoice(Request $request,$id)
    {
        $invoice =new Invoice();
        $invoice->student_id=$id;
        $invoice->account_no=$request->account_no;
        $invoice->due_date=$request->due_date;
       
        if( $invoice->save()){
             //$invoice=Invoice::where(['student_id'=>$id]);
             $student=Student::where(['id'=>$id])->first();
             $paymenthistory=Paymenthistory::where('student_id',$id)->get();
             ?>
                <script>
                  window.alert('Suceess');
                <script>
             <?php
              return redirect()->route('finances.invoice')->with(['invoice'=>$invoice,'student'=>$student,'paymenthistory'=>$paymenthistory]);

        }
       

    }
    public function pdf($id)
    {
        $student=Student::where(['id'=>$id])->first();
        //$upfinance=Finance::where(['student_id'=>$id])->first();
        $finance=Finance::where('student_id',$id)->first();
        $paymenthistory=Paymenthistory::where('student_id',$id)->get();
        $pdf = PDF::loadView('finances.printinvoice', ['student'=>$student,'paymenthistory'=>$paymenthistory,'finance'=>$finance]);
        return $pdf->download('tuts_notes.pdf');

    }
    
    public function printreceipt($id){
        $std=DB::table('paymenthistories')->where(['id'=>$id])->first();
        $studentid=$std->student_id;
        $student=DB::table('students')->where(['id'=> $studentid])->first();
        $finance=Finance::where('student_id',$studentid)->first();
        //$paymenthistory=Paymenthistory::where('student_id',$id)->get();
        return view('finances.printreceipt')->with(['std'=>$std,'student'=>$student,'finance'=>$finance]);
    }
    //registratin fee
    public function registrationfee(){
        $student=DB::table('regfees')->orderBy('id','DESC')->get();
        return view('finances.registrationfee')->with(['student'=>$student]);
    }
    public function searchstudent(Request $request){
        $studentid=$request->get('search');
        $data=DB::table('students')->where(['student_id'=>$studentid])->first();
        $student=DB::table('regfees')->orderBy('id','DESC')->get();
        return view('finances.registrationfee')->with(['data'=>$data,'student'=>$student]);
    }
    public function addregistrationpayment(Request $request){
        $day=Date('d');
        $month=Date('m');
        $year=Date('Y');
        $datepaid=Date('d/m/Y');
        $id=$request->student_no;
        $student=DB::table('regfees')->where(['student_no'=>$id])->first();
        if(empty($student)){
            $insertData=DB::table('regfees')->insert([
            'student_id'=>$request->student_id,
            'student_no'=>$request->student_no,
            'amount'=>$request->amount,
            'name'=>$request->name,
            'campus'=>$request->campus,
            'day'=>$day,
            'month'=>$month,
            'year'=>$year,
            'date_paid'=>$datepaid,
            ]);
            Alert::success('success')->autoclose(1500);
            return redirect()->back();
        }else{
            Alert::warning('Failed. This student has paid registration fees ')->autoclose(1500);
            return redirect()->back();
        }
        
    }
}