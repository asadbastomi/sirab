<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $data =  Biodata::whereUserId(useGetAuth()->id)->first();
        $data = useGetAuth();

        $biodata = Biodata::whereUserId($data->id)->first();
        // dd($biodata);
        return view('user.biodata.index', compact('data', 'biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $validated = $req->validate([
            'tempatLahir' => 'required|max:100',
            'email' => 'required|email|unique:users|max:20',
            'password' => 'required|min:3|max:100',
            'photo' => 'mimes:jpg,png',
        ]);

        $input = $req->all();
        // dd($input);

        if ($req->hasFile('photo')) {
            $photo = upload('user', $req, 'photo');
            $input['photo'] = $photo;
        }
        input('User', $input, 'post');
        return redirect()->route('admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
