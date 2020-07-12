<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SupplierStoreRequest;
use App\Http\Requests\SupplierUpdateRequest;
use App\Supplier;
use DB;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->name)) {
            $suppliers = Supplier::where('suppliers.name', 'like', '%' . trim($request->name) . '%')->paginate(6);
        } else {
            $suppliers = Supplier::paginate(6);
        }

        return View('backend.supplier.index',compact('suppliers', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('backend.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierStoreRequest $request)
    {
        $supplierModel               = new Supplier();
        $supplierModel->name         = $request->name;
        $supplierModel->address      = $request->name;
        $supplierModel->phone_number = $request->phone_number;
        $supplierModel->email        = $request->email;
        try {
            $supplierModel->save();
            return redirect()->route('supplier.index');
        } catch (Exception $e) {
            die($e->getMessage());
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //lấy tất cả danh mục ứng với id
        $supplier   = Supplier::find($id);
        return View('backend.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierUpdateRequest $request, $id)
    {
        $supplier               = Supplier::find($id);
        $supplier->name         = $request->name;
        $supplier->address      = $request->name;
        $supplier->phone_number = $request->phone_number;
        $supplier->email        = $request->email;

        try {
            $supplier->save();
            return redirect()->route('supplier.index');
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            Supplier::find($id)->delete();

            DB::commit();
            return redirect()->route('supplier.index');
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('supplier.index');
        }
    }
}
