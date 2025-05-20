<?php
function generateTitle($jenis, $nomor_peraturan, $tahun, $kementerian = null)
{
    $title = '';
    $titleLembaran = '';
    $titleTambahanLembaran = '';

    switch ($jenis) {
        case 'UU':
            $title = 'Undang-Undang Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Lembaran Negara Republik Indonesia';
            $titleTambahanLembaran = 'Tambahan Lembaran Negara Republik Indonesia ';
            break;
        case 'PP':
            $title = 'Peraturan Pemerintah Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Lembaran Negara Republik Indonesia';
            $titleTambahanLembaran = 'Tambahan Lembaran Negara Republik Indonesia ';
            break;
        case 'perpres':
            $title = 'Peraturan Presiden Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Lembaran Negara Republik Indonesia';
            $titleTambahanLembaran = 'Tambahan Lembaran Negara Republik Indonesia ';
            break;
        case 'perppu':
            $title = 'Peraturan ';
            if ($jenis === 'PP') $title .= 'Pemerintah ';
            if ($jenis === 'perpres') $title .= 'Presiden ';
            if ($jenis === 'perppu') $title .= 'Pemerintah Pengganti Undang-Undang ';
            $title .= $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            // dd($title);
            break;
        case 'permen':
            if ($kementerian) {
                $title = 'Peraturan ' . $kementerian . ' Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            }
            $titleLembaran = 'Berita Negara Republik Indonesia';
            break;
        case 'perda_prov':
            $title = 'Peraturan Daerah Provinsi Kalimantan Selatan Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Lembaran Daerah Provinsi Kalimantan Selatan';
            $titleTambahanLembaran = 'Tambahan Lembaran Daerah Provinsi Kalimantan Selatan ';
            break;
        case 'perda_kota':
            $title = 'Peraturan Daerah Kota Banjarmasin Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Lembaran Daerah Kota Banjarmasin';
            $titleTambahanLembaran = 'Tambahan Lembaran Daerah Kota Banjarmasin ';
            break;
        case 'pergub':
            $title = 'Peraturan Gubernur Provinsi Kalimantan Selatan Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Berita Daerah Provinsi Kalimantan Selatan';
            break;
        case 'perwal':
            // $title = 'Peraturan Wali Kota Banjarmasin';
            // if ($jenis === 'pergub') $title .= 'Gubernur ';
            // if ($jenis === 'perwal') $title .= 'Walikota ';
            $title = 'Peraturan Wali Kota Banjarmasin Nomor ' . $nomor_peraturan . ' Tahun ' . $tahun . ' tentang ';
            $titleLembaran = 'Berita Daerah Kota Banjarmasin';
            break;
        default:
            // Handle other cases if needed
            break;
    }

    return [
        'title' => $title,
        'titleLembaran' => $titleLembaran,
        'titleTambahanLembaran' => $titleTambahanLembaran,
    ];
}
