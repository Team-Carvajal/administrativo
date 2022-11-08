<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\shirtColor;
use App\Models\shirtSize;
use App\Models\shirtType;
use App\Models\typePrint;
use App\Models\category;
use App\Models\descount;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color=shirtColor::all();
        $size=shirtSize::all();
        $type=shirtType::all();
        $print=typePrint::all();
        $category=category::all();
        $descount=descount::all();
        $data=products::select('*')
            ->join('shirtType', 'shirtType_idShirtType', '=', 'idShirtType')
            ->join('shirtSize', 'shirtSIze_idShirtSize', '=', 'idShirtSize')
            ->join('shirtColors', 'shirtColors_idShirtColor', '=', 'idShirtColor')
            ->join('descountSettings', 'descountSettings_id', '=', 'idDescountSettings')
            ->join('typePrint', 'typePrint_idTypePrint', '=', 'idTypePrint')
            ->join('categories', 'category_idCategory', '=', 'idCategory')->where('QuantityAvailable','>', 0)
            ->get();
            
            return view('pages.products', compact('data','color', 'size', 'type', 'print', 'category', 'descount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $color=shirtColor::all();
            $size=shirtSize::all();
            $type=shirtType::all();
            $print=typePrint::all();
            $category=category::all();
            $descount=descount::all();
        
        return view('pages.createProduct', compact('color', 'size', 'type', 'print', 'category', 'descount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('_token');
        if($request->hasFile('image')){
            $imageUrl= '/uploads/images/products/';
            $imageName= time().'-'.$request->file('image')->getClientOriginalName();
            $success= $data['image']->move(public_path($imageUrl), $imageName);
            $data['image']=$imageUrl . $imageName;
        }

        products::create($data);
        return redirect('productos');
    }  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $idproduct)
    {
        $data=products::find($idproduct);
        return view('pages.showProduct', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($idproduct)
    {
        $product=products::find($idproduct)->toArray();
            // ->join('shirtType', 'shirtType_idShirtType', '=', 'idShirtType')
            // ->join('shirtSize', 'shirtSIze_idShirtSize', '=', 'idShirtSize')
            // ->join('shirtColors', 'shirtColors_idShirtColor', '=', 'idShirtColor')
            // ->join('descountSettings', 'descountSettings_id', '=', 'idDescountSettings')
            // ->join('typePrint', 'typePrint_idTypePrint', '=', 'idTypePrint')
            // ->join('categories', 'category_idCategory', '=', 'idCategory')->where('idproduct', $idproduct)
            // ->get();

        $color=shirtColor::all();
        $size=shirtSize::all();
        $type=shirtType::all();
        $print=typePrint::all();
        $category=category::all();
        $descount=descount::all();
        return view('pages.editProduct', compact('product', 'color', 'size', 'type', 'print', 'category', 'descount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $idproduct)
    {
        $data=products::findOrFail($idproduct);        
        if($request->hasFile('image')){
            $data->image != '' ? unlink(public_path($data->image)) : false;
            $imageUrl= '/uploads/images/products/';
            $imageName= time().'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path($imageUrl), $imageName);
            $data->image=$imageUrl.$imageName;
        }
        $data->nameProduct=$request->nameProduct;
        $data->descriptionProduct=$request->descriptionProduct;
        $data->price=$request->price;
        $data->garanty=$request->garanty;
        $data->QuantityAvailable=$request->QuantityAvailable;
        $data->shirtType_idShirtType=$request->shirtType_idShirtType;
        $data->shirtSize_idShirtSize=$request->shirtSize_idShirtSize;
        $data->shirtColors_idShirtColor=$request->shirtColors_idShirtColor;
        $data->descountSettings_id=$request->descountSettings_id;
        $data->typePrint_idTypePrint=$request->typePrint_idTypePrint;
        $data->category_idCategory=$request->category_idCategory;
        $data->update();
        return redirect('productos');
        
    }

    public function hide($idproduct){
        $data=products::findOrfail($idproduct);
        $data->QuantityAvailable=0;
        $data->update();
        return redirect('productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
    }
}
