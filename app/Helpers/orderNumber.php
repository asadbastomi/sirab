<?php
function aturNomorUrut($namaTabel)
{
    $model = app('App\\Models\\' . $namaTabel);

    $urutan = 1;

    // Ambil semua data dari tabel dan urutkan berdasarkan kondisi tertentu, misalnya berdasarkan kolom 'created_at'
    $data = $model::orderBy('created_at', 'asc')->get();

    foreach ($data as $item) {
        $item->no_urut = $urutan;
        $item->save();
        $urutan++;
    }
}


function updateNomorUrut($namaTabel, $nomorUrutGanti, $nomorUrutBaru, $id)
{
    $model = app('App\\Models\\' . $namaTabel);
    // dd($id);
    // Ambil record yang ingin diganti nomor urutnya
    $recordGanti = $model->where('no_urut', $nomorUrutGanti)->first();
    // dd($recordGanti);
    // if (!$recordGanti) {
    // }

    // dd($id);
    $nomorUrutBaru = (int) $nomorUrutBaru;
    // dd($nomorUrutBaru);
    if ($recordGanti) {

        // Perbarui nomor urut record yang ingin diganti dengan nomor urut baru

        // Cek apakah nomor urut baru lebih besar dari nomor urut lama
        // dd($nomorUrutBaru);
        if ($nomorUrutBaru > $nomorUrutGanti) {
            // Ambil semua record yang memiliki nomor urut di antara nomor urut lama dan baru
            // dd('set');
            $recordsDiBawah = $model->whereKepwalId($id)->where('no_urut', '<=', $nomorUrutBaru)->get();
            // dd($recordsDiBawah);
            $minNoUrut = $recordsDiBawah->min('no_urut');
            // Geser nomor urut record-record di antara nomor urut lama dan baru ke bawah
            foreach ($recordsDiBawah as $recordDiBawah) {
                if ($recordDiBawah->no_urut != $minNoUrut) {
                    $recordDiBawah->no_urut--;
                }
                $recordDiBawah->save();
            }
        } elseif ($nomorUrutBaru < $nomorUrutGanti) {
            // dd('tes');
            // Ambil semua record yang memiliki nomor urut lebih besar dari nomor urut baru
            $recordsDiAtas = $model->whereKepwalId($id)->where('no_urut', '>=', $nomorUrutBaru)->get();
            // dd($recordsDiAtas);
            $maxNoUrut = $recordsDiAtas->max('no_urut');
            // Geser nomor urut record-record yang di atas nomor urut baru ke atas
            foreach ($recordsDiAtas as $recordDiAtas) {
                if ($recordDiAtas->no_urut != $maxNoUrut) {
                    $recordDiAtas->no_urut++;
                }
                $recordDiAtas->save();
            }
        }
        $recordGanti->no_urut = $nomorUrutBaru;
        $recordGanti->save();
    }

    // Pastikan tidak ada nomor urut yang sama
    // $model->orderBy('no_urut')->orderBy('id')->get()->each(function ($item, $key) {
    //     $item->no_urut = $key + 1;
    //     $item->save();
    // });
}


function setNomorUrut($namaTabel, $id, $param = null)
{
    $model = app('App\\Models\\' . $namaTabel);

    if (!$param) {
        $noUrut = $model::whereKepwalId($id)->max('no_urut');
    } else {
        $noUrut = $model::where($param, $id)->max('no_urut');
    }

    // dd($noUrut);

    return $noUrut + 1;
}
