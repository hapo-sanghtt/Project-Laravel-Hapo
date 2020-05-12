<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Requests\SaveCustomer;
use App\Customer;
use Illuminate\Http\Request;
use Redirect;
use Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customers.index', ['customers' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {dd($request->all());
        $customer = Customer::create([
            'image' => $request['image'],
            'name' => $request['name'],
            'gender' => $request['gender'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'projects_id' => $request['projects_id'],
        ]);
        if ($request -> hasFile('image')) {
            $imageupload = $request->file('image');
            $imagename = time() . '.' . $imageupload->getClientOriginalExtension();
            $imagepath = public_path('/image/');
            $imageupload->move($imagepath, $imagename);
            $customer->image = '/image/'. $imagename;
        } else {
            $customer->image = '';
        }
        $customer->save();
        return redirect()->route('customers.index')->with('success', 'Customer save!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', ['customers' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', ['customers' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request
            ->only([
                'name', 'gender', 'email', 'phone', 'address', 'projects_id',
            ]));

        return redirect()->route('customers.index')->with('success', 'Customer update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer delete!');
    }
}
