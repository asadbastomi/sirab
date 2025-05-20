<?php

function input($modelName, $form, $method, $id = null, $defaultFlash = false)
{
    $model = 'App\Models\\' . $modelName;
    $data = $model;
    // dd($form);
    if ($method === 'post') {

        try {
            if (isset($form['password'])) $form['password'] = useHas($form['password']);
            if (isset($form['penghasilan'])) $form['penghasilan'] = str_replace('.', '', $form['penghasilan']);
            if (isset($form['penghasilanPasangan'])) $form['penghasilanPasangan'] = str_replace('.', '', $form['penghasilanPasangan']);
            // dd($form);
            $data = $model::create($form);
            if ($defaultFlash) toastr()->success('Data berhasil disimpan');
        } catch (\Throwable $th) {
            dd($th);
            if ($defaultFlash) toastr()->error('Data gagal disimpan');
        }
    } else {
        try {
            $data = $model::findOrFail($id);
            if (isset($form['password'])) $form['password'] = useHas($form['password']);
            if (isset($form['penghasilan'])) $form['penghasilan'] = str_replace('.', '', $form['penghasilan']);
            if (isset($form['penghasilanPasangan'])) $form['penghasilanPasangan'] = str_replace('.', '', $form['penghasilanPasangan']);
            // dd($form);
            $data->update($form);
            if ($defaultFlash) toastr()->success('Data berhasil diubah');
        } catch (\Throwable $th) {
            dd($th);
            if ($defaultFlash) toastr()->error('Data gagal diubah');
        }
    }

    return $data;
}
