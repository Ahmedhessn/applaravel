<?php

namespace App\Http\Controllers;

use App\Models\phone;
use Illuminate\Http\Request;
use App\Models\phone1;

class PhonesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private static function getdata(){
      /*  return[
            ['id'=>'1' , 'name'=>'sumsoung' ,'origin'=>'Korea'],
            ['id'=>'2' , 'name'=>'iphone' ,'origin'=>'us'],
            ['id'=>'3' , 'name'=>'oppo' ,'origin'=>'frunce'],
            ['id'=>'4' , 'name'=>'Xiaomi' ,'origin'=>'china'],
        ];*/

    }


    public function index()
    {
        //
        return view('phones.index',[
          'phones' =>  phone::all()
        ]);

    }


    public function create()
    {
        //
        return view('phones.create');
    }


    public function store(Request $request)
    {
        $request -> validate([
            'phone-name'=>"required",
            'phone-origin'=>"required",
            'phone-price'=>"required"
        ]);
     $phone = new phone();
     $phone -> name = strip_tags($request->input ('phone-name'));
     $phone -> origin = strip_tags($request->input ('phone-origin'));
     $phone -> price = strip_tags($request->input ('phone-price'));
     $phone -> save();
     return redirect()->route ('phones.index');
    }


    public function show($phone)
    {
        //

        return view('phones.show',[
           'phones'=> phone::findorfail($phone)
        ]);
    }

    public function edit($phone)
    {
        return view('phones.edit',[
            'phones'=> phone::findorfail($phone)
         ]);
    }

    public function update(Request $request, $phone)
    {
        $request -> validate([
            'phone-name'=>"required",
            'phone-origin'=>"required",
            'phone-price'=>"required"
        ]);
        $to_update = phone::findorfail($phone);
        $to_update-> name = strip_tags($request->input ('phone-name'));
        $to_update-> origin = strip_tags($request->input ('phone-origin'));
        $to_update-> price = strip_tags($request->input ('phone-price'));
        $to_update-> save();
        return redirect()->route ('phones.show',$phone);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($phone)
    {
        $to_delete= phone::findorfail($phone);
        $to_delete ->delete();
        return redirect()->route ('phones.index');
    }
}
