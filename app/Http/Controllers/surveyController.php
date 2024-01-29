<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use App\Models\Pertanyaan;
use Illuminate\Http\Request;
use App\Models\Response;

class surveyController extends Controller
{
    public function konsumen()
    {
        return view('survey.konsumen');
    }

    public function createKonsumen(Request $request)
    {
        $nama = $request->input('namaK');
        session(['nama' => $nama]);
        $survey = new Konsumen();
        $survey->namaKonsumen = $request->input('namaK');
        $survey->jenisKelamin = $request->input('flexRadioDefault');
        $survey->umurKonsumen = $request->input('umurK');
        $survey->pekerjaanKonsumen = $request->input('pekerjaan');
        $survey->save();
        return redirect('/survey')->with('success', 'Data Konsumen berhasil disimpan!');
    }

    public function kuis()
    {
        $nama = session('nama');
        if (!$nama) {
            return redirect('/')->with('error', 'Isi data diri terlebih dahulu !!');
        }
        $tangible = Pertanyaan::where('dimensiID', 1)->get();
        $reliability = Pertanyaan::where('dimensiID', 2)->get();
        $responsiveness = Pertanyaan::where('dimensiID', 3)->get();
        $assurance = Pertanyaan::where('dimensiID', 4)->get();
        $emphaty = Pertanyaan::where('dimensiID', 5)->get();
        return view('survey.kuis', [
            'tangible' => $tangible,
            'reliability' => $reliability,
            'responsiveness' => $responsiveness,
            'assurance' => $assurance,
            'emphaty' => $emphaty,
            'nama' => $nama,
        ]);
    }
    public function createKuis(Request $request)
    {
        $namaKonsumen = session('nama');
        $responses = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, '_P') !== false || strpos($key, '_H') !== false) {
                $response = new Response();
                $response->namaKonsumen = $namaKonsumen;
                $pertanyaan_id = explode('-', $key)[1];
                $response->pertanyaanID = $pertanyaan_id;
                $jenisPertanyaan = strpos($key, '_P') !== false ? 'Persepsi' : 'Harapan';
                if ($jenisPertanyaan == 'Persepsi') {
                    $response->jawabanPersepsi = $value;
                } else {
                    $response->jawabanHarapan = $value;
                }
                $responses[] = $response;
            }
        }

        foreach ($responses as $response) {
            $response->save();
        }
        session()->forget('nama');
        return redirect('/')->with('success', 'Data survey berhasil disimpan. Trimakasih telah mengisi survey');
    }
}
