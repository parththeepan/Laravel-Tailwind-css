<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    
        //view users
        public function viewUsers(){
            $users['users']=Customer::all();
            return view('view_form',$users);
        }

        //show insert form
        public function showForm(){
            $customers=Customer::get();
            return view('Insert_form',['customers'=>$customers]);
        }
    
        //store data 
        public function store(RegistrationRequest $request){
            $customer=new Customer;
            $customer->id=$request->id;
            $customer->FirstName=$request->FirstName;
            $customer->LastName=$request->LastName;
            $customer->DateOfBirth=$request->DateOfBirth;
            $customer->Gender=$request->Gender;
            $customer->Email=$request->Email;
            $customer->ContactNumber=$request->ContactNumber;
            $customer->password= Hash::make($customer['password']);

               if($customer->save()){
                session()->flash('insert_message',$customer->FirstName.' data was inserted successfully');
                return redirect('/');
                
                }else{
                    
                echo "failed";
                
                } 
        }



        //show update form
        public function showUpdateForm($id){
            $customer['customer']=Customer::find($id);
            return view('Update_form',$customer);
        }
    
    
    
    
        //update data
        public function update(UpdateRequest $request)
        {
            $customer=Customer::find($request->id);
            $customer->FirstName=$request->FirstName;
            $customer->LastName=$request->LastName;
            $customer->DateOfBirth=$request->DateOfBirth;
            $customer->Gender=$request->Gender;
            $customer->Email=$request->Email;
            $customer->ContactNumber=$request->ContactNumber;
            $customer->password=Hash::make($customer['password']);

            if($customer->save()){
                session()->flash('message',$customer->FirstName.' data was updated successfully');
                return redirect('/');
            }else{
                echo "failed";
            }
    
        }

        //delete one row
        public function delete($id){
            $customer=Customer::find($id);
    
            if($customer->delete()){
                return response()->json(['status'=>'deleted successfully']);
                   
            }else{
                 echo "not deleted";
            }
        }

        //delete selected form
        public function deleteSelected(Request $request)
        {
            $ids=$request->ids;
            Customer::whereIn('id',$ids)->delete();
            return response()->json(['status'=>'deleted successfully']);;
        }
        
}
