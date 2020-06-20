<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $lawyer = Lawyer::select('id', 'name', 'email', 'company', 'phone', 'document', 'oab', 'date_of_birth')
            ->where(function ($query) use ($request) {
                if (!empty($request->date_of_birth)) {
                    $query->where('date_of_birth', $request->date_of_birth);
                }
                if (!empty($request->oab)) {
                    $query->where('oab', $request->oab);
                }
                if (!empty($request->name)) {
                    $query->where('name', 'like', '%'.$request->name.'%');
                }
                if (!empty($request->email)) {
                    $query->where('email', $request->email);
                }
                if (!empty($request->company)) {
                    $query->where('company', 'like', '%'.$request->company.'%');
                }
            })
            ->paginate(50);
        return response()->json($lawyer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $lawyer = new Lawyer;
        $this->validate($request, $lawyer->rules(), $lawyer->messages());

        $lawyer->name = $request->name;
        $lawyer->email = $request->email;
        $lawyer->company = $request->company;
        $lawyer->phone = $request->phone;
        $lawyer->document = $request->document;
        $lawyer->oab = $request->oab;
        $lawyer->date_of_birth = $request->date_of_birth;

        $lawyer->save();

        return response()->json($lawyer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $lawyer = Lawyer::find($id);
        return response()->json($lawyer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $lawyer = Lawyer::find($id);
        $this->validate($request, $lawyer->rules(), $lawyer->messages());

        $lawyer->name = $request->name;
        $lawyer->email = $request->email;
        $lawyer->company = $request->company;
        $lawyer->phone = $request->phone;
        $lawyer->document = $request->document;
        $lawyer->oab = $request->oab;
        $lawyer->date_of_birth = $request->date_of_birth;

        $lawyer->update();
        return response()->json($lawyer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lawyer = Lawyer::find($id);
        $lawyer->delete();
        return response('Usuário deletado com sucesso.', 200);
    }
}
