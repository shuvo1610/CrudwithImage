<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;


class SellerController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function create()
    {
    return view('seller.create');
    }

    public function store(Request $request)
    {

        $request->validate([
                'name' => 'required|string|min:6',
                'phone' => 'required|unique:sellers|min:11|max:13',
                'email' => 'required|email|unique:sellers',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'salary' => 'required|integer|between:5000,50000',

        ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $destinationPath.$profileImage ;

        }


        $seller=Seller::create($input);
        return redirect()->route('seller.index');
    }
    public function show()
    {
        $data=[
            'sellers'=>Seller::all()
        ];
        return view('seller.index',$data);
    }

    public function edit($id)
        {
            $data=[

                'seller'=>Seller::find($id)
            ];


            return view('seller.update',$data);
        }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|min:6',
            'phone' => 'required|min:11|max:13|unique:sellers,phone,'.$id,
            'email' => 'required|email|unique:sellers,email,'.$id,
            'salary' => 'required|integer|between:5000,50000',
        ]);
        $seller = Seller::find($id);


        $seller->update($request->all());

        return redirect()->route('seller.index');
    }

    public function profile($id)
    {
        $data=[

            'seller'=>Seller::find($id)
        ];


        return view('seller.profile',$data);
    }

    public function destroy($id)
    {
        Seller::destroy($id);
        return back();
    }





}
