<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Image;
use Illuminate\Support\Carbon;

class ServicesController extends Controller
{
    public function AllServices(){

        $services = Services::latest()->get();
        return view('admin.services.services_all',compact('services'));

    } // End Method

    public function AddServices(){
        return view('admin.services.services_add');
    } // End Method


    public function StoreServices(Request $request){

        
        $request->validate([
            'services_title' => 'required',
            'service_description' => 'required',
            'service_long_description' => 'required',
            'service_code' => 'required',
            'service_qty' => 'required',
            'selling_price' => 'required',
            'services_image' => 'required',
            'services_icon' => 'required',
            'services__list_desc_1' => 'required',
            'services__list_desc_2' => 'required',
            'services__list_desc_3' => 'required',
        ],[
            'services_title.required' => 'Service Title is Required',
            'service_description.required' => 'Service Short Description is Required',
            'service_long_description.required' => 'Service Long Description is Required',
            'service_code.required' => 'Service Code is Required',
            'service_qty.required' => 'Service Quantity is Required',
            'selling_price.required' => 'Selling Price is Required',
            'services_image.required' => 'Service Image is Required',
            'services_icon.required' => 'Service Icon is Required',
            'services__list_desc_1.required' => 'Service list Description 1 is Required',
            'services__list_desc_2.required' => 'Service list Description 2  is Required',
            'services__list_desc_3.required' => 'Service list Description 3  is Required',
        ]);
       
        
            $image = $request->file('services_image');
            $name_gen_image = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(323,240)->save('upload/services/images/'.$name_gen_image);

            $save_urlimage = 'upload/services/images/'.$name_gen_image;


            $icon = $request->file('services_icon');
            $name_gen_icon = hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
            Image::make($icon)->resize(86,90)->save('upload/services/icons/'.$name_gen_icon);

            $save_urlicon = 'upload/services/icons/'.$name_gen_icon;


            Services::insert([
                'services_title' => $request->services_title,
                'service_description' => $request->service_description,
                'service_long_description' => $request->service_long_description,
                'service_code' => $request->service_code,
                'service_qty' => $request->service_qty,
                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'services__list_desc_1' => $request->services__list_desc_1,
                'services__list_desc_2' => $request->services__list_desc_2,
                'services__list_desc_3' => $request->services__list_desc_3,
                'services__list_desc_4' => $request->services__list_desc_4,
                'services__list_desc_5' => $request->services__list_desc_5,
                'services__list_desc_6' => $request->services__list_desc_6,
                'services_image' =>  $save_urlimage,
                'services_icon' => $save_urlicon,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Service Inserted Successfully',
                'alert-type' => 'success',
            );
    
            return redirect()->route('all.services')->with($notification);

    } // End Method


    public function EditService($id){

        $service = Services::findOrFail($id);
        return view('admin.services.services_edit',compact('service'));
        
    } // End Method


    public function UpdateService(Request $request){
        
        $service_id = $request->id;

        if($request->file('services_image') && $request->file('services_icon') ){

            $image = $request->file('services_image');
            $name_gen_image = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(323,240)->save('upload/services/images/'.$name_gen_image);

            $save_urlimage = 'upload/services/images/'.$name_gen_image;


            $icon = $request->file('services_icon');
            $name_gen_icon = hexdec(uniqid()).'.'.$icon->getClientOriginalExtension();
            Image::make($icon)->resize(86,90)->save('upload/services/icons/'.$name_gen_icon);

            $save_urlicon = 'upload/services/icons/'.$name_gen_icon;


            Services::findOrFail($service_id)->update([
                'services_title' => $request->services_title,
                'service_description' => $request->service_description,
                'service_long_description' => $request->service_long_description,
                'service_code' => $request->service_code,
                'service_qty' => $request->service_qty,
                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'services__list_desc_1' => $request->services__list_desc_1,
                'services__list_desc_2' => $request->services__list_desc_2,
                'services__list_desc_3' => $request->services__list_desc_3,
                'services__list_desc_4' => $request->services__list_desc_4,
                'services__list_desc_5' => $request->services__list_desc_5,
                'services__list_desc_6' => $request->services__list_desc_6,
                'services_image' =>  $save_urlimage,
                'services_icon' => $save_urlicon,
            ]);


            $notification = array(
                'message' => 'Service Updated With Image Successfully',
                'alert-type' => 'success',
            );
    
            return redirect()->route('all.services')->with($notification);


        }else{

            Services::findOrFail($service_id)->update([
                'services_title' => $request->services_title,
                'service_description' => $request->service_description,
                'service_long_description' => $request->service_long_description,
                'service_code' => $request->service_code,
                'service_qty' => $request->service_qty,
                'selling_price' => $request->selling_price,
                'discount_price' => $request->discount_price,
                'services__list_desc_1' => $request->services__list_desc_1,
                'services__list_desc_2' => $request->services__list_desc_2,
                'services__list_desc_3' => $request->services__list_desc_3,
                'services__list_desc_4' => $request->services__list_desc_4,
                'services__list_desc_5' => $request->services__list_desc_5,
                'services__list_desc_6' => $request->services__list_desc_6,
            ]);


            $notification = array(
                'message' => 'Service Updated Without Image Successfully',
                'alert-type' => 'success',
            );
    
            return redirect()->route('all.services')->with($notification);
        }

        
    } // End Method


    public function DeleteService($id){

        $service = Services::findOrFail($id);
        $image = $service->services_image;
        $icon = $service->services_icon;
        unlink($image);
        unlink($icon);

        $service->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.services')->with($notification);
    

    } // End Method


    public function ServiceDetails($id){

        $service = Services::findOrFail($id);
        return view('frontend.service_details',compact('service'));

    } // End Method


    public function ServicePayment($id){
        $service = Services::findOrFail($id);
        return view('frontend.service_payment',compact('service'));
    } // End Mehtod

} // End Class ServicesController
