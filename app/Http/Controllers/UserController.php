<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($param = null)
    {
        $data = User::whereRole('skpd')->get();
        if ($param) {
            $data = User::whereRole($param)->get();
        }
        return view('admin.user.index', compact('data', 'param'));
    }


    public function create($params = null)

    {
        $param = 'skpd';
        if ($params) {
            $param = $params;
        }
        return view('admin.user.form', compact('param'));
    }

    public function store(Request $req, $param)
    {
        $validated = $req->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|unique:users|max:20',
            'password' => 'required|min:3|max:100',
            'photo' => 'mimes:jpg,png',
        ]);

        $input = $req->all();
        $input['role'] = $param;
        // dd($input);

        if ($req->hasFile('photo')) {
            $photo = upload('user', $req, 'photo');
            $input['photo'] = $photo;
        }
        input('User', $input, 'post');
        return redirect()->route('admin.user.index', $param);
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.form', compact('data'));
    }

    public function update(Request $req, $id)
    {

        $validated = $req->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:20|unique:users,email,' . $id,
            'password' => 'nullable|min:3|max:100',
            'phoneNumber' => 'required|min:10|max:15',
            'photo' => 'mimes:jpg,png',
        ]);

        $input = array_filter($req->all());
        if ($req->hasFile('photo')) {
            $photo = upload('user', $req, 'photo');
            $input['photo'] = $photo;
        }

        $auth = useGetAuth();
        $user = input('User', $input, 'put', $id);
        if (
            isset($input['tempatLahir']) ||
            isset($input['tanggalLahir']) ||
            isset($input['kewarganegaraan']) ||
            isset($input['agama']) ||
            isset($input['alamatTinggal']) ||
            isset($input['statusTinggal']) ||
            isset($input['pekerjaan']) ||
            isset($input['alamatKerja']) ||
            isset($input['penghasilan']) ||
            isset($input['pekerjaanPasangan']) ||
            isset($input['penghasilanPasangan']) ||
            isset($input['alamatKerjaPasangan']) ||
            isset($input['nik'])
        ) {
            if ($auth->role === 'user') {
                $biodata = $auth->biodata;
                if (!$biodata) {
                    $input['user_id'] = $id;
                    input('Biodata', $input, 'post');
                } else {
                    input('Biodata', $input, 'put', $biodata->id);
                }

                return back();
            }
        }





        return redirect()->route('admin.user.index', $user->role);
    }

    public function destroy($id)
    {
        useDestroy('User', $id, 'user', 'photo');

        return back();
    }
}
