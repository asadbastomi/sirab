<?php

function useDestroy($modelName, $id, $folder = null, $field = null)
{
    $model = 'App\Models\\' . $modelName;
    $data = $model::findOrFail($id);
    try {

        if ($data[$field] != 'default.jpg' || $data[$field] = 'default.png') {
            useDestroyFile($folder, $data[$field]);
        }

        $data->delete();

        toastr()->success('Data berhasil dihapus');

        // return back();
        // return $data;
    } catch (\Throwable $th) {
        toastr()->error($th);
        // return $data;
    }

    return $data;
}
