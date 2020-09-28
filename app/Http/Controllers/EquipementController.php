<?php

namespace App\Http\Controllers;

use App\DataTables\EquipementDataTable;
use App\Equipement;
use App\FamilleEquipement;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class EquipementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return datatables()->of(Equipement::with('familleEquipement'))
                ->addColumn('familleEquipement', function (Equipement $equipement) {
                    return $equipement->familleEquipement->fam_equip_code;
                })
                ->addColumn('btns', 'equipements.actions')
                ->rawColumns(['btns'])
                ->toJson();
        }
        return view('equipements.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function show(Equipement $equipement)
    {
        return view('equipements.show')->with('equipement', $equipement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipement $equipement)
    {
        $familleEquipements = FamilleEquipement::all();

        return view('equipements.edit')->with('equipement', $equipement)->with('familleEquipements', $familleEquipements);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipement $equipement)
    {
        $data = $request->validate([
            'equip_code' => 'required',
            'designation' => 'required'
        ]);
        $equipement->update($data);

        return redirect('equipements/' . $equipement->id)->with("success", "L'equipement $equipement->id a été mis a jour! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipement  $equipement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipement $equipement)
    {
        if (Gate::denies('edit-users')) {
            return redirect(route('admin.users.index'));
        }

        $equip = Equipement::findOrFail($equipement->id);
        $equip->delete();

        return redirect()->route('equipements.index')->with("warning", "L'equipement $equipement->id a été supprimé! ");
    }
}
