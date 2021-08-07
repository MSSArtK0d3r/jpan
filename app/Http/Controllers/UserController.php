<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getUser(Request $request){
        $user = NULL;
        if ( $request->session()->exists('identity') ) {
            $user = $request->session()->get('identity');
            return $user;
        }
        return $user;
    }

    public function getUserProgress(Request $request) {
        $user = $this->getUser($request);
        $data = array(
            'completedA',
            'completedB',
            'completedC',
            'completedD',
            'completedE',
            'completedF',
            'completedG',
            'completedH1',
            'completedH2',
            'completedH3',
            'completedH4',
            'completedI',
            'completedJ',
            'completedK',
            'completedL',
            'completedM',
            'completedN',
            'completedO',
            'completedP',
            'completedQ',
            'completedR'
        );
        $userProgeress = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return $userProgeress;

    }

    public function index(Request $request){
        $user = $this->getUser($request);

        if ($user != NULL) {
            $data = array();

            $entry = DB::table('entries')->where('email','=', $user)->first();
            $userRateB = (($entry->B1 + $entry->B2 + $entry->B3 + $entry->B4 + $entry->B5 + $entry->B6 + $entry->B7 + $entry->B8 + $entry->B9 + $entry->B10 + $entry->B11 + $entry->B12 + $entry->B13 + $entry->B14 + $entry->B15 + $entry->B16 + $entry->B17 + $entry->B18 ) * 100) / 180;
            $userRateC = (($entry->C1 + $entry->C2) * 100) / 20;
            $userRateD = ($entry->D1 * 100) / 10;
            $userRateE = (($entry->E1 + $entry->E2 + $entry->E3 + $entry->E4 + $entry->E5 + $entry->E6) * 100) / 60;
            $userRateF = (($entry->F1 + $entry->F2 + $entry->F3 + $entry->F4 + $entry->F5 + $entry->F6) * 100) / 60;
            $userRateG = (($entry->G1 + $entry->G2 + $entry->G3 + $entry->G4 + $entry->G5 + $entry->G6 + $entry->G7 + $entry->G8 + $entry->G9 + $entry->G10) * 100) / 100;
            $userRateH = (($entry->H1 + $entry->H2 + $entry->H3 + $entry->H4 + $entry->H5 + $entry->H6 + $entry->H7 + $entry->H8 + $entry->H9 + $entry->H10 + $entry->H11 + $entry->H12 + $entry->H13 + $entry->H14 + $entry->H15 + $entry->H16 + $entry->H17 + $entry->H18 + $entry->H19 + $entry->H20 + $entry->H21+ $entry->H22 + $entry->H23 + $entry->H24 + $entry->H25 + $entry->H26 + $entry->H27 + $entry->H28 + $entry->H29 + $entry->H30 + $entry->H31 + $entry->H32 + $entry->H33 + $entry->H34 + $entry->H35 ) * 100) / 350;
            $userRateI = ((($entry->I1 + $entry->I3) / 20 * 100 ) + (( 10 - $entry->I2) / 10 * 100)) / 200 * 100;
            $userRateJ = (($entry->J1 + $entry->J2 + $entry->J3 + $entry->J4 + $entry->J5 + $entry->J6 + $entry->J7 + $entry->J8 + $entry->J9 + $entry->J10) * 100) / 100;
            $userRateK = ((($entry->K1 + $entry->K2 + $entry->K3 + $entry->K4 + $entry->K5 + $entry->K6 + $entry->K7 + $entry->K8 + $entry->K9) * 100) / 90) + (( 10 - $entry->K10 ) / 10 * 100) / 200 * 100;
            $userRateL = ((30 - ($entry->L1 + $entry->L2 + $entry->L3)) * 100 / 30) + ($entry->L4 / 10 * 100) / 200 * 100;
            $userRateM = (($entry->M1 + $entry->M2 + $entry->M3) * 100) / 30;
            $userRateN = (($entry->N1 + $entry->N2 + $entry->N3 + $entry->N4) * 100) / 40;
            $userRateO = (($entry->O1 + $entry->O2 + $entry->O3 + $entry->O4 + $entry->O5) * 100) / 50;
            $userRateP = (($entry->P1 + $entry->P2) * 100) / 20;
            $userRateQ = (($entry->Q1 + $entry->Q2 + $entry->Q3 + $entry->Q4) * 100) / 40;
        
            $hasCompleted['completedA'] = $entry->completedA;
            $hasCompleted['completedB'] = $entry->completedB;
            $hasCompleted['completedC'] = $entry->completedC;
            $hasCompleted['completedD'] = $entry->completedD;
            $hasCompleted['completedE'] = $entry->completedE;
            $hasCompleted['completedF'] = $entry->completedF;
            $hasCompleted['completedG'] = $entry->completedG;
            $hasCompleted['completedH1'] = $entry->completedH1;
            $hasCompleted['completedH2'] = $entry->completedH2;
            $hasCompleted['completedH3'] = $entry->completedH3;
            $hasCompleted['completedH4'] = $entry->completedH4;
            $hasCompleted['completedI'] = $entry->completedI;
            $hasCompleted['completedJ'] = $entry->completedJ;
            $hasCompleted['completedK'] = $entry->completedK;
            $hasCompleted['completedL'] = $entry->completedL;
            $hasCompleted['completedM'] = $entry->completedM;
            $hasCompleted['completedN'] = $entry->completedO;
            $hasCompleted['completedO'] = $entry->completedP;
            $hasCompleted['completedP'] = $entry->completedQ;
            $hasCompleted['completedQ'] = $entry->completedR;

            $BRate = round($userRateB, 2);
            $CRate = round($userRateC, 2);
            $DRate = round($userRateD, 2);
            $ERate = round($userRateE, 2);
            $FRate = round($userRateF, 2);
            $GRate = round($userRateG, 2);
            $HRate = round($userRateH, 2);
            $IRate = round($userRateI, 2);
            $JRate = round($userRateJ, 2);
            $KRate = round($userRateK, 2);
            $LRate = round($userRateL, 2);
            $MRate = round($userRateM, 2);
            $NRate = round($userRateN, 2);
            $ORate = round($userRateO, 2);
            $PRate = round($userRateP, 2);
            $QRate = round($userRateQ, 2);

            $data['userRatingB'] = $BRate;
            $data['userRatingC'] = $CRate;
            $data['userRatingD'] = $DRate;
            $data['userRatingE'] = $ERate;
            $data['userRatingF'] = $FRate;
            $data['userRatingG'] = $GRate;
            $data['userRatingH'] = $HRate;
            $data['userRatingI'] = $IRate;
            $data['userRatingJ'] = $JRate;
            $data['userRatingK'] = $KRate;
            $data['userRatingL'] = $LRate;
            $data['userRatingM'] = $MRate;
            $data['userRatingN'] = $NRate;
            $data['userRatingO'] = $ORate;
            $data['userRatingP'] = $PRate;
            $data['userRatingQ'] = $QRate;

            $data['totalRatingB'] = $this->calculateTotalB();
            $data['totalRatingC'] = $this->calculateTotalC();
            $data['totalRatingD'] = $this->calculateTotalD();
            $data['totalRatingE'] = $this->calculateTotalE();
            $data['totalRatingF'] = $this->calculateTotalF();
            $data['totalRatingG'] = $this->calculateTotalG();
            $data['totalRatingH'] = $this->calculateTotalH();
            $data['totalRatingI'] = $this->calculateTotalI();
            $data['totalRatingJ'] = $this->calculateTotalJ();
            $data['totalRatingK'] = $this->calculateTotalK();
            $data['totalRatingL'] = $this->calculateTotalL();
            $data['totalRatingM'] = $this->calculateTotalM();
            $data['totalRatingN'] = $this->calculateTotalN();
            $data['totalRatingO'] = $this->calculateTotalO();
            $data['totalRatingP'] = $this->calculateTotalP();
            $data['totalRatingQ'] = $this->calculateTotalQ();
            $userProgress = $this->getUserProgress($request);
            
            //Index Data
            $totalIndex['indexB'] = $this->calculateIndexB($user);
            $totalIndex['indexC'] = $this->calculateIndexC($user);
            $totalIndex['indexD'] = $this->calculateIndexD($user);
            $totalIndex['indexE'] = $this->calculateIndexE($user);
            $totalIndex['indexF'] = $this->calculateIndexF($user);
            $totalIndex['indexG'] = $this->calculateIndexG($user);

            $indexKegembiraan = $this->calculateTotalIndexKegembiraan($totalIndex['indexB'],$totalIndex['indexC'],$totalIndex['indexD'],$totalIndex['indexE'],$totalIndex['indexF'],$totalIndex['indexG']);
            $indexOBT = $this->calculateIndexH($user);

            //Calculate Sub Dimension
            $subDimension['subDimensionBGaji'] = $this->calculateSubDimensionBGaji($entry->B1,$entry->B2);
            $subDimension['subDimensionBPangkat'] = $this->calculateSubDimensionBPangkat($entry->B3);
            $subDimension['subDimensionBKetua'] = $this->calculateSubDimensionBKetua($entry->B4,$entry->B5);
            $subDimension['subDimensionBProsedurOperasi'] = $this->calculateSubDimensionBProsedurOperasi($entry->B6, $entry->B7, $entry->B8);
            $subDimension['subDimensionBRakanSekerja'] = $this->calculateSubDimensionBRakanSekerja($entry->B9, $entry->B10);
            $subDimension['subDimensionBSifatKerja'] = $this->calculateSubDimensionBSifatKerja($entry->B11, $entry->B12, $entry->B13);
            $subDimension['subDimensionBKomunikasi'] = $this->calculateSubDimensionBKomunikasi($entry->B14, $entry->B15, $entry->B16);
            $subDimension['subDimensionBPersekitaran'] = $this->calculateSubDimensionBPersekitaran($entry->B17, $entry->B18);
            $subDimension['subDimensionBKepuasanKerja'] = $this->calculateSubDimensionB($subDimension['subDimensionBGaji'], $subDimension['subDimensionBPangkat'], $subDimension['subDimensionBKetua'], $subDimension['subDimensionBProsedurOperasi'], $subDimension['subDimensionBRakanSekerja'], $subDimension['subDimensionBSifatKerja'], $subDimension['subDimensionBKomunikasi'], $subDimension['subDimensionBPersekitaran']);

            $subDimension['subDimensionCKepuasanHidup'] = $this->calculateIndexC($user);

            $subDimension['subDimensionEAfekPositif'] = $this->calculateSubDimensionEAfekPositif($entry->E1, $entry->E2, $entry->E3);
            $subDimension['subDimensionEAfekNegatif'] = $this->calculateSubDimensionEAfekNegatif($entry->E4, $entry->E5, $entry->E6);
            $subDimension['subDimensionEAfek'] = $this->calculateSubDimensionEAfek($subDimension['subDimensionEAfekPositif'], $subDimension['subDimensionEAfekNegatif']);
            
            $subDimension['subDimensionFSemangat'] = $this->calculateSubDimensionFSemangat($entry->F1, $entry->F2);
            $subDimension['subDimensionFDedikasi'] = $this->calculateSubDimensionFDedikasi($entry->F3, $entry->F4);
            $subDimension['subDimensionFKesungguhan'] = $this->calculateSubDimensionFKesungguhan($entry->F5, $entry->F6);
            $subDimension['subDimensionFKeterlibatanKerja'] = $this->calculateSubDimensionFKeterlibatanKerja($subDimension['subDimensionFSemangat'], $subDimension['subDimensionFDedikasi'], $subDimension['subDimensionFKesungguhan']);
            
            $subDimension['subDimensionGPrestasiTugas'] = $this->calculateSubDimensionGPrestasiTugas($entry->G1, $entry->G2, $entry->G3);
            $subDimension['subDimensionGPrestasiKontekstual'] = $this->calculateSubDimensionGPrestasiKontekstual($entry->G4, $entry->G5, $entry->G6, $entry->G7, $entry->G8);
            $subDimension['subDimensionGTingkahLakuKerjaTidakProduktif'] = $this->calculateSubDimensionGTingkahLakuKerjaTidakProduktif($entry->G9, $entry->G10);
            $subDimension['subDimensionGPrestasiKerja'] = $this->calculateSubDimensionGPrestasiKerja($subDimension['subDimensionGPrestasiTugas'], $subDimension['subDimensionGPrestasiKontekstual'], $subDimension['subDimensionGTingkahLakuKerjaTidakProduktif']);

            $subDimension['subDimensionHKualitiPengurusan'] = $this->calculateSubDimensionHKualitiPengurusan($entry->H1, $entry->H2, $entry->H3, $entry->H4, $entry->H5, $entry->H6, $entry->H7, $entry->H8, $entry->H9, $entry->H10, $entry->H11, $entry->H12);
            $subDimension['subDimensionHPenambahbaikanDanPembaharuanBerterusan'] = $this->calculateSubDimensionHPenambahbaikanDanPembaharuanBerterusan($entry->H13, $entry->H14, $entry->H15, $entry->H16, $entry->H17, $entry->H18, $entry->H19, $entry->H20);
            $subDimension['subDimensionHOrientasiJangkaPanjang'] = $this->calculateSubDimensionHOrientasiJangkaPanjang($entry->H21, $entry->H22, $entry->H23, $entry->H24, $entry->H25);
            $subDimension['subDimensionHKualitiPekerja'] = $this->calculateSubDimensionHKualitiPekerja($entry->H26, $entry->H27, $entry->H28, $entry->H29);
            $subDimension['subDimensionHKeterbukaanDanOrientasiTindakan'] = $this->calculateSubDimensionHKeterbukaanDanOrientasiTindakan($entry->H30, $entry->H31, $entry->H32, $entry->H33, $entry->H34, $entry->H35);
            $subDimension['subDimensionHOBT'] = $this->calculateSubDimensionHOBT($subDimension['subDimensionHKualitiPengurusan'], $subDimension['subDimensionHPenambahbaikanDanPembaharuanBerterusan'], $subDimension['subDimensionHOrientasiJangkaPanjang'], $subDimension['subDimensionHKualitiPekerja'], $subDimension['subDimensionGPrestasiTugas']);

            return view('users.user', compact('user', 'data', 'hasCompleted', 'userProgress', 'totalIndex', 'indexKegembiraan', 'indexOBT', 'subDimension'));
        }
        return view('users.user', compact('user'));
    }

    public function storeData(Request $request){
        $validateEmail = $request->validate([
            'email' => 'required|email',
        ]);
        $userData = DB::table('entries')->where('email', $request->email)->first();
            
        if ($userData == NULL) {
                DB::table('entries')->insert(['email' => $request->email]);
                $ses = $request->session()->put('identity', $request->email);
                return redirect('users/demografi');
        }
        $ses = $request->session()->put('identity', $request->email);
        return redirect('/users');
        }

    public function clearSession(Request $request){
        $request->session()->forget('identity');
        return redirect('users');
    }

    public function demoGraphy(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $data = array(
        'umur',
        'jantina',
        'agama',
        'lainAgamaDetail',
        'bangsa',
        'daerahBertugas',
        'status',
        'bilAnak',
        'bilIsiRumah',
        'tinggalBersamaPasangan',
        'bilBilikTidur',
        'education',
        'agensi',
        'kumpulanPerkhidmatan',
        'tarafJawatan',
        'skimPerkhidmatan',
        'gredJawatan',
        'gajiKasarBulanan',
        'gajiBersihBulanan',
        'kesukaranGaji',
        'tempohPerkhidmatanTahun',
        'tempohPerkhidmatanBulan',
        'masalahKesihatan',
        'masalahKesihatanDetail',
        'tempatTinggal',
        'tempatTinggalDetail',
        'tinggalBersama',
        'tinggalBersamaDetail',
        'kenderaanKerja',
        'kenderaanKerjaDetail',
        'completedA'
        );
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.demography', compact('user', 'userData','userProgress'));
    }

    public function storeDataDemografi(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'umur' => 'required|numeric',
                'jantina' => 'required|string',
                'agama' => 'required|string',
                'lainAgamaDetail' => 'nullable',
                'bangsa' => 'required|string',
                'daerahBertugas' => 'required',
                'status' => 'required',
                'bilAnak' => 'required',
                'bilIsiRumah' => 'required',
                'tinggalBersamaPasangan' => 'required',
                'bilBilikTidur' => 'required',
                'education' => 'required',
                'agensi' => 'required',
                'kumpulanPerkhidmatan' => 'required',
                'tarafJawatan' => 'required',
                'skimPerkhidmatan' => 'required',
                'gredJawatan' => 'required',
                'gajiKasarBulanan' => 'required',
                'gajiBersihBulanan' => 'required',
                'kesukaranGaji' => 'required',
                'tempohPerkhidmatanTahun' => 'required',
                'tempohPerkhidmatanBulan' => 'required',
                'masalahKesihatan' => 'required',
                'masalahKesihatanDetail' => 'nullable',
                'tempatTinggal' => 'required',
                'tempatTinggalDetail' => 'nullable',
                'tinggalBersama' => 'required',
                'tinggalBersamaDetail' => 'nullable',
                'kenderaanKerja' => 'required',
                'kenderaanKerjaDetail' => 'nullable'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'umur' => $request->umur,
                'jantina' => $request->jantina,
                'agama' => $request->agama,
                'lainAgamaDetail' => $request->lainAgamaDetail,
                'bangsa' => $request->bangsa,
                'daerahBertugas' => $request->daerahBertugas,
                'status' => $request->status,
                'bilAnak' => $request->bilAnak,
                'bilIsiRumah' => $request->bilIsiRumah,
                'tinggalBersamaPasangan' => $request->tinggalBersamaPasangan,
                'bilBilikTidur' => $request->bilBilikTidur,
                'education' => $request->education,
                'agensi' => $request->agensi,
                'kumpulanPerkhidmatan' => $request->kumpulanPerkhidmatan,
                'tarafJawatan' => $request->tarafJawatan,
                'skimPerkhidmatan' => $request->skimPerkhidmatan,
                'gredJawatan' => $request->gredJawatan,
                'gajiKasarBulanan' => $request->gajiKasarBulanan,
                'gajiBersihBulanan' => $request->gajiBersihBulanan,
                'kesukaranGaji' => $request->kesukaranGaji,
                'tempohPerkhidmatanTahun' => $request->tempohPerkhidmatanTahun,
                'tempohPerkhidmatanBulan' => $request->tempohPerkhidmatanBulan,
                'masalahKesihatan' => $request->masalahKesihatan,
                'masalahKesihatanDetail' => $request->masalahKesihatanDetail,
                'tempatTinggal' => $request->tempatTinggal,
                'tempatTinggalDetail' => $request->tempatTinggalDetail,
                'tinggalBersama' => $request->tinggalBersama,
                'tinggalBersamaDetail' => $request->tinggalBersamaDetail,
                'kenderaanKerja' => $request->kenderaanKerja,
                'kenderaanKerjaDetail' => $request->kenderaanKerjaDetail,
                'completedA' => 1
            ));
            return redirect('/users/sb');
        }

        return redirect('users');
        
    }

    public function sectionB(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 17 ) {
            $i++;
            array_push($data, 'B'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sb', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionB(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'B1' => 'required|numeric',
                'B2' => 'required|numeric',
                'B3' => 'required|numeric',
                'B4' => 'required|numeric',
                'B5' => 'nullable|numeric',
                'B6' => 'required|numeric',
                'B7' => 'required|numeric',
                'B8' => 'required|numeric',
                'B9' => 'required|numeric',
                'B10' => 'required|numeric',
                'B11' => 'required|numeric',
                'B12' => 'required|numeric',
                'B13' => 'required|numeric',
                'B14' => 'required|numeric',
                'B15' => 'required|numeric',
                'B16' => 'required|numeric',
                'B17' => 'required|numeric',
                'B18' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'B1' => $request->B1,
                'B2' => $request->B2,
                'B3' => $request->B3,
                'B4' => $request->B4,
                'B5' => $request->B5,
                'B6' => $request->B6,
                'B7' => $request->B7,
                'B8' => $request->B8,
                'B9' => $request->B9,
                'B10' => $request->B10,
                'B11' => $request->B11,
                'B12' => $request->B12,
                'B13' => $request->B13,
                'B14' => $request->B14,
                'B15' => $request->B15,
                'B16' => $request->B16,
                'B17' => $request->B17,
                'B18' => $request->B18,
                'completedB' => 1
            ));
            return redirect('/users/sc');
        }

        return redirect('users');
    }

    public function sectionC(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 1 ) {
            $i++;
            array_push($data, 'C'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sc', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionC(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'C1' => 'required|numeric',
                'C2' => 'required|numeric',
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'C1' => $request->C1,
                'C2' => $request->C2,
                'completedC' => 1
            ));
            return redirect('/users/sd');
        }

        return redirect('users');
    }

    public function sectionD(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 0 ) {
            $i++;
            array_push($data, 'D'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sd', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionD(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'D1' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'D1' => $request->D1,
                'completedD' => 1
            ));
            return redirect('/users/se');
        }

        return redirect('users');
    }

    public function sectionE(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 5 ) {
            $i++;
            array_push($data, 'E'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.se', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionE(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'E1' => 'required|numeric',
                'E2' => 'required|numeric',
                'E3' => 'required|numeric',
                'E4' => 'required|numeric',
                'E5' => 'required|numeric',
                'E6' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'E1' => $request->E1,
                'E2' => $request->E2,
                'E3' => $request->E3,
                'E4' => $request->E4,
                'E5' => $request->E5,
                'E6' => $request->E6,
                'completedE' => 1
            ));
            return redirect('/users/sf');
        }

        return redirect('users');
    }

    public function sectionF(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 5 ) {
            $i++;
            array_push($data, 'F'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sf', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionF(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'F1' => 'required|numeric',
                'F2' => 'required|numeric',
                'F3' => 'required|numeric',
                'F4' => 'required|numeric',
                'F5' => 'required|numeric',
                'F6' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'F1' => $request->F1,
                'F2' => $request->F2,
                'F3' => $request->F3,
                'F4' => $request->F4,
                'F5' => $request->F5,
                'F6' => $request->F6,
                'completedF' => 1
            ));
            return redirect('/users/sg');
            }
        return redirect('users');
    }

    public function sectionG(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'G'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sg', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionG(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'G1' => 'required|numeric',
                'G2' => 'required|numeric',
                'G3' => 'required|numeric',
                'G4' => 'required|numeric',
                'G5' => 'required|numeric',
                'G6' => 'required|numeric',
                'G7' => 'required|numeric',
                'G8' => 'required|numeric',
                'G9' => 'required|numeric',
                'G10' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'G1' => $request->G1,
                'G2' => $request->G2,
                'G3' => $request->G3,
                'G4' => $request->G4,
                'G5' => $request->G5,
                'G6' => $request->G6,
                'G7' => $request->G7,
                'G8' => $request->G8,
                'G9' => $request->G9,
                'G10' => $request->G10,
                'completedG' => 1
            ));
            return redirect('/users/sh1');
            }
        return redirect('users');
    }

    public function sectionH1(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh1', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH1(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'H1' => 'required|numeric',
                'H2' => 'required|numeric',
                'H3' => 'required|numeric',
                'H4' => 'required|numeric',
                'H5' => 'required|numeric',
                'H6' => 'required|numeric',
                'H7' => 'required|numeric',
                'H8' => 'required|numeric',
                'H9' => 'required|numeric',
                'H10' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'H1' => $request->H1,
                'H2' => $request->H2,
                'H3' => $request->H3,
                'H4' => $request->H4,
                'H5' => $request->H5,
                'H6' => $request->H6,
                'H7' => $request->H7,
                'H8' => $request->H8,
                'H9' => $request->H9,
                'H10' => $request->H10,
                'completedH1' => 1
            ));
            return redirect('/users/sh2');
            }
        return redirect('users');
    }

    public function sectionH2(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 10;
        $data = array();
        while ( $i <= 19 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh2', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH2(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'H11' => 'required|numeric',
                'H12' => 'required|numeric',
                'H13' => 'required|numeric',
                'H14' => 'required|numeric',
                'H15' => 'required|numeric',
                'H16' => 'required|numeric',
                'H17' => 'required|numeric',
                'H18' => 'required|numeric',
                'H19' => 'required|numeric',
                'H20' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'H11' => $request->H11,
                'H12' => $request->H12,
                'H13' => $request->H13,
                'H14' => $request->H14,
                'H15' => $request->H15,
                'H16' => $request->H16,
                'H17' => $request->H17,
                'H18' => $request->H18,
                'H19' => $request->H19,
                'H20' => $request->H20,
                'completedH2' => 1
            ));
            return redirect('/users/sh3');
            }
        return redirect('users');
    }

    public function sectionH3(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 20;
        $data = array();
        while ( $i <= 29 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh3', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH3(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'H21' => 'required|numeric',
                'H22' => 'required|numeric',
                'H23' => 'required|numeric',
                'H24' => 'required|numeric',
                'H25' => 'required|numeric',
                'H26' => 'required|numeric',
                'H27' => 'required|numeric',
                'H28' => 'required|numeric',
                'H29' => 'required|numeric',
                'H30' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'H21' => $request->H21,
                'H22' => $request->H22,
                'H23' => $request->H23,
                'H24' => $request->H24,
                'H25' => $request->H25,
                'H26' => $request->H26,
                'H27' => $request->H27,
                'H28' => $request->H28,
                'H29' => $request->H29,
                'H30' => $request->H30,
                'completedH3' => 1
            ));
            return redirect('/users/sh4');
            }
        return redirect('users');
    }

    public function sectionH4(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 30;
        $data = array();
        while ( $i <= 34 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh4', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH4(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'H31' => 'required|numeric',
                'H32' => 'required|numeric',
                'H33' => 'required|numeric',
                'H34' => 'required|numeric',
                'H35' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'H31' => $request->H31,
                'H32' => $request->H32,
                'H33' => $request->H33,
                'H34' => $request->H34,
                'H35' => $request->H35,
                'completedH4' => 1
            ));
            return redirect('/users/si');
            }
        return redirect('users');
    }

    public function sectionI(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 2 ) {
            $i++;
            array_push($data, 'I'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.si', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionI(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'I1' => 'required|numeric',
                'I2' => 'required|numeric',
                'I3' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'I1' => $request->I1,
                'I2' => $request->I2,
                'I3' => $request->I3,
                'completedI' => 1
            ));
            return redirect('/users/sj');
            }
        return redirect('users');
    }

    public function sectionJ(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'J'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sj', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionJ(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'J1' => 'required|numeric',
                'J2' => 'required|numeric',
                'J3' => 'required|numeric',
                'J4' => 'required|numeric',
                'J5' => 'required|numeric',
                'J6' => 'required|numeric',
                'J7' => 'required|numeric',
                'J8' => 'required|numeric',
                'J9' => 'required|numeric',
                'J10' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'J1' => $request->J1,
                'J2' => $request->J2,
                'J3' => $request->J3,
                'J4' => $request->J4,
                'J5' => $request->J5,
                'J6' => $request->J6,
                'J7' => $request->J7,
                'J8' => $request->J8,
                'J9' => $request->J9,
                'J10' => $request->J10,
                'completedJ' => 1
            ));
            return redirect('/users/sk');
            }
        return redirect('users');
    }

    public function sectionK(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'K'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sk', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionK(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'K1' => 'required|numeric',
                'K2' => 'required|numeric',
                'K3' => 'required|numeric',
                'K4' => 'required|numeric',
                'K5' => 'required|numeric',
                'K6' => 'required|numeric',
                'K7' => 'required|numeric',
                'K8' => 'required|numeric',
                'K9' => 'required|numeric',
                'K10' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'K1' => $request->K1,
                'K2' => $request->K2,
                'K3' => $request->K3,
                'K4' => $request->K4,
                'K5' => $request->K5,
                'K6' => $request->K6,
                'K7' => $request->K7,
                'K8' => $request->K8,
                'K9' => $request->K9,
                'K10' => $request->K10,
                'completedK' => 1
            ));
            return redirect('/users/sl');
            }
        return redirect('users');
    }

    public function sectionL(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 3 ) {
            $i++;
            array_push($data, 'L'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sl', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionL(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'L1' => 'required|numeric',
                'L2' => 'required|numeric',
                'L3' => 'required|numeric',
                'L4' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'L1' => $request->L1,
                'L2' => $request->L2,
                'L3' => $request->L3,
                'L4' => $request->L4,
                'completedL' => 1
            ));
            return redirect('/users/sm');
            }
        return redirect('users');
    }

    public function sectionM(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 2 ) {
            $i++;
            array_push($data, 'M'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sm', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionM(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'M1' => 'required|numeric',
                'M2' => 'required|numeric',
                'M3' => 'required|numeric',
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'M1' => $request->M1,
                'M2' => $request->M2,
                'M3' => $request->M3,
                'completedM' => 1
            ));
            return redirect('/users/sn');
            }
        return redirect('users');
    }

    public function sectionN(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 3 ) {
            $i++;
            array_push($data, 'N'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sn', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionN(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'N1' => 'required|numeric',
                'N2' => 'required|numeric',
                'N3' => 'required|numeric',
                'N4' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'N1' => $request->N1,
                'N2' => $request->N2,
                'N3' => $request->N3,
                'N4' => $request->N4,
                'completedN' => 1
            ));
            return redirect('/users/so');
            }
        return redirect('users');
    }

    public function sectionO(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 4 ) {
            $i++;
            array_push($data, 'O'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.so', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionO(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'O1' => 'required|numeric',
                'O2' => 'required|numeric',
                'O3' => 'required|numeric',
                'O4' => 'required|numeric',
                'O5' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'O1' => $request->O1,
                'O2' => $request->O2,
                'O3' => $request->O3,
                'O4' => $request->O4,
                'O5' => $request->O5,
                'completedO' => 1
            ));
            return redirect('/users/sp');
            }
        return redirect('users');
    }

    public function sectionP(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 1 ) {
            $i++;
            array_push($data, 'P'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sp', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionP(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'P1' => 'required|numeric',
                'P2' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'P1' => $request->P1,
                'P2' => $request->P2,
                'completedP' => 1
            ));
            return redirect('/users/sq');
            }
        return redirect('users');
    }    

    public function sectionQ(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 3 ) {
            $i++;
            array_push($data, 'Q'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sq', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionQ(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'Q1' => 'required|numeric',
                'Q2' => 'required|numeric',
                'Q3' => 'required|numeric',
                'Q4' => 'required|numeric'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'Q1' => $request->Q1,
                'Q2' => $request->Q2,
                'Q3' => $request->Q3,
                'Q4' => $request->Q4,
                'completedQ' => 1
            ));
            return redirect('/users/sr');
            }
        return redirect('users');
    }

    public function sectionR(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $data = array(
            'komen',
            'cadangan',
            'phone'
        );
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sr', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionR(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $validateData = $request->validate([
                'komen' => 'nullable',
                'cadangan' => 'nullable',
                'phone' => 'required'
            ]);
            DB::table('entries')->where('email', $user)->update(array(
                'komen' => $request->komen,
                'cadangan' => $request->cadangan,
                'phone' => $request->phone,
                'completedR' => 1
            ));
            return redirect('/users');
            }
        return redirect('users');
    }

    public function calculateTotalB(){
        
        $TotalOfBRatingB1 = DB::table('entries')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->pluck('B2');
        $TotalOfBRatingB3 = DB::table('entries')->pluck('B3');
        $TotalOfBRatingB4 = DB::table('entries')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->pluck('B5');
        $TotalOfBRatingB6 = DB::table('entries')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->pluck('B8');
        $TotalOfBRatingB9 = DB::table('entries')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->pluck('B10');
        $TotalOfBRatingB11 = DB::table('entries')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->pluck('B13');
        $TotalOfBRatingB14 = DB::table('entries')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->pluck('B16');
        $TotalOfBRatingB17 = DB::table('entries')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->pluck('B18');
        
        $totalB = array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray(),
            $TotalOfBRatingB3->toArray(),
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray(),
            $TotalOfBRatingB6->toArray(),
            $TotalOfBRatingB7->toArray(),
            $TotalOfBRatingB8->toArray(),
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray(),
            $TotalOfBRatingB11->toArray(),
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray(),
            $TotalOfBRatingB14->toArray(),
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray(),
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        );

        $countTotalB = count($TotalOfBRatingB1->toArray());
        $totalB = array_sum($totalB);
        $totalPointsB = $countTotalB * 18 * 10;
        $totalB = ($totalB * 100) / $totalPointsB;
        $totalB = round($totalB, 2);

        return $totalB;

    }

    public function calculateTotalC(){
        $TotalOfCRatingC1 = DB::table('entries')->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->pluck('C2');
        
        $totalC = array_merge(
            $TotalOfCRatingC1->toArray(),
            $TotalOfCRatingC2->toArray(),
        );
        
        $countTotalC = count($TotalOfCRatingC1->toArray());
        $totalC = array_sum($totalC);
        $totalPointsC = $countTotalC * 2 * 10;
        $totalC = ($totalC * 100) / $totalPointsC;
        $totalC = round($totalC, 2);

        return $totalC;
    }

    public function calculateTotalD(){
        $TotalOfDRatingD1 = DB::table('entries')->pluck('D1');
        
        $totalD = array_merge(
            $TotalOfDRatingD1->toArray(),
        );

        $countTotalD = count($TotalOfDRatingD1->toArray());
        $totalD = array_sum($totalD);
        $totalPointsD = $countTotalD * 1 * 10;
        $totalD = ($totalD * 100) / $totalPointsD;
        $totalD = round($totalD, 2);

        return $totalD;
    }

    public function calculateTotalE(){
        $TotalOfERatingE1 = DB::table('entries')->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->pluck('E6');
        
        $totalE = array_merge(
            $TotalOfERatingE1->toArray(),
            $TotalOfERatingE2->toArray(),
            $TotalOfERatingE3->toArray(),
            $TotalOfERatingE4->toArray(),
            $TotalOfERatingE5->toArray(),
            $TotalOfERatingE6->toArray(),
        );

        $countTotalE = count($TotalOfERatingE1->toArray());
        $totalE = array_sum($totalE);
        $totalPointsE = $countTotalE * 6 * 10;
        $totalE = ($totalE * 100) / $totalPointsE;
        $totalE = round($totalE, 2);

        return $totalE;
    }

    public function calculateTotalF(){
        $TotalOfFRatingF1 = DB::table('entries')->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->pluck('F6');
        
        $totalF = array_merge(
            $TotalOfFRatingF1->toArray(),
            $TotalOfFRatingF2->toArray(),
            $TotalOfFRatingF3->toArray(),
            $TotalOfFRatingF4->toArray(),
            $TotalOfFRatingF5->toArray(),
            $TotalOfFRatingF6->toArray(),
        );

        $countTotalF = count($TotalOfFRatingF1->toArray());
        $totalF = array_sum($totalF);
        $totalPointsF = $countTotalF * 6 * 10;
        $totalF = ($totalF * 100) / $totalPointsF;
        $totalF = round($totalF, 2);

        return $totalF;
    }

    public function calculateTotalG(){
        
        $TotalOfGRatingG1 = DB::table('entries')->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->pluck('G10');
        
        $totalG = array_merge(
            $TotalOfGRatingG1->toArray(),
            $TotalOfGRatingG2->toArray(),
            $TotalOfGRatingG3->toArray(),
            $TotalOfGRatingG4->toArray(),
            $TotalOfGRatingG5->toArray(),
            $TotalOfGRatingG6->toArray(),
            $TotalOfGRatingG7->toArray(),
            $TotalOfGRatingG8->toArray(),
            $TotalOfGRatingG9->toArray(),
            $TotalOfGRatingG10->toArray(),
        );

        $countTotalG = count($TotalOfGRatingG1->toArray());
        $totalG = array_sum($totalG);
        $totalPointsG = $countTotalG * 10 * 10;
        $totalG = ($totalG * 100) / $totalPointsG;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalH(){
        
        $TotalOfHRatingH1 = DB::table('entries')->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->pluck('H35');
        
        $totalH = array_merge(
            $TotalOfHRatingH1->toArray(),
            $TotalOfHRatingH2->toArray(),
            $TotalOfHRatingH3->toArray(),
            $TotalOfHRatingH4->toArray(),
            $TotalOfHRatingH5->toArray(),
            $TotalOfHRatingH6->toArray(),
            $TotalOfHRatingH7->toArray(),
            $TotalOfHRatingH8->toArray(),
            $TotalOfHRatingH9->toArray(),
            $TotalOfHRatingH10->toArray(),
            $TotalOfHRatingH11->toArray(),
            $TotalOfHRatingH12->toArray(),
            $TotalOfHRatingH13->toArray(),
            $TotalOfHRatingH14->toArray(),
            $TotalOfHRatingH15->toArray(),
            $TotalOfHRatingH16->toArray(),
            $TotalOfHRatingH17->toArray(),
            $TotalOfHRatingH18->toArray(),
            $TotalOfHRatingH19->toArray(),
            $TotalOfHRatingH20->toArray(),
            $TotalOfHRatingH21->toArray(),
            $TotalOfHRatingH22->toArray(),
            $TotalOfHRatingH23->toArray(),
            $TotalOfHRatingH24->toArray(),
            $TotalOfHRatingH25->toArray(),
            $TotalOfHRatingH26->toArray(),
            $TotalOfHRatingH27->toArray(),
            $TotalOfHRatingH28->toArray(),
            $TotalOfHRatingH29->toArray(),
            $TotalOfHRatingH30->toArray(),
            $TotalOfHRatingH31->toArray(),
            $TotalOfHRatingH32->toArray(),
            $TotalOfHRatingH33->toArray(),
            $TotalOfHRatingH34->toArray(),
            $TotalOfHRatingH35->toArray(),
        );

        $countTotalH = count($TotalOfHRatingH1->toArray());
        $totalH = array_sum($totalH);
        $totalPointsH = $countTotalH * 35 * 10;
        $totalH = ($totalH * 100) / $totalPointsH;
        $totalH = round($totalH, 2);

        return $totalH;

    }

    public function calculateTotalI(){
        $TotalOfIRatingI1 = DB::table('entries')->pluck('I1');
        $TotalOfIRatingI2 = DB::table('entries')->pluck('I2');
        $TotalOfIRatingI3 = DB::table('entries')->pluck('I3');
        
        $totalI = array_merge(
            $TotalOfIRatingI1->toArray(),
            $TotalOfIRatingI2->toArray(),
            $TotalOfIRatingI3->toArray(),
        );

        $countTotalI = count($TotalOfIRatingI1->toArray());
        $totalI = array_sum($totalI);
        $totalPointsI = $countTotalI * 3 * 10;
        $totalI = ($totalI * 100) / $totalPointsI;
        $totalI = round($totalI, 2);

        return $totalI;
    }

    public function calculateTotalJ(){
        
        $TotalOfJRatingJ1 = DB::table('entries')->pluck('J1');
        $TotalOfJRatingJ2 = DB::table('entries')->pluck('J2');
        $TotalOfJRatingJ3 = DB::table('entries')->pluck('J3');
        $TotalOfJRatingJ4 = DB::table('entries')->pluck('J4');
        $TotalOfJRatingJ5 = DB::table('entries')->pluck('J5');
        $TotalOfJRatingJ6 = DB::table('entries')->pluck('J6');
        $TotalOfJRatingJ7 = DB::table('entries')->pluck('J7');
        $TotalOfJRatingJ8 = DB::table('entries')->pluck('J8');
        $TotalOfJRatingJ9 = DB::table('entries')->pluck('J9');
        $TotalOfJRatingJ10 = DB::table('entries')->pluck('G10');
        
        $totalJ = array_merge(
            $TotalOfJRatingJ1->toArray(),
            $TotalOfJRatingJ2->toArray(),
            $TotalOfJRatingJ3->toArray(),
            $TotalOfJRatingJ4->toArray(),
            $TotalOfJRatingJ5->toArray(),
            $TotalOfJRatingJ6->toArray(),
            $TotalOfJRatingJ7->toArray(),
            $TotalOfJRatingJ8->toArray(),
            $TotalOfJRatingJ9->toArray(),
            $TotalOfJRatingJ10->toArray(),
        );

        $countTotalJ = count($TotalOfJRatingJ1->toArray());
        $totalJ = array_sum($totalJ);
        $totalPointsJ = $countTotalJ * 10 * 10;
        $totalJ = ($totalJ * 100) / $totalPointsJ;
        $totalJ = round($totalJ, 2);

        return $totalJ;

    }

    public function calculateTotalK(){
        
        $TotalOfKRatingK1 = DB::table('entries')->pluck('K1');
        $TotalOfKRatingK2 = DB::table('entries')->pluck('K2');
        $TotalOfKRatingK3 = DB::table('entries')->pluck('K3');
        $TotalOfKRatingK4 = DB::table('entries')->pluck('K4');
        $TotalOfKRatingK5 = DB::table('entries')->pluck('K5');
        $TotalOfKRatingK6 = DB::table('entries')->pluck('K6');
        $TotalOfKRatingK7 = DB::table('entries')->pluck('K7');
        $TotalOfKRatingK8 = DB::table('entries')->pluck('K8');
        $TotalOfKRatingK9 = DB::table('entries')->pluck('K9');
        $TotalOfKRatingK10 = DB::table('entries')->pluck('K10');
        
        $totalK = array_merge(
            $TotalOfKRatingK1->toArray(),
            $TotalOfKRatingK2->toArray(),
            $TotalOfKRatingK3->toArray(),
            $TotalOfKRatingK4->toArray(),
            $TotalOfKRatingK5->toArray(),
            $TotalOfKRatingK6->toArray(),
            $TotalOfKRatingK7->toArray(),
            $TotalOfKRatingK8->toArray(),
            $TotalOfKRatingK9->toArray(),
            $TotalOfKRatingK10->toArray(),
        );

        $countTotalK = count($TotalOfKRatingK1->toArray());
        $totalK = array_sum($totalK);
        $totalPointsK = $countTotalK * 10 * 10;
        $totalK = ($totalK * 100) / $totalPointsK;
        $totalK = round($totalK, 2);

        return $totalK;

    }

    public function calculateTotalL(){
        $TotalOfLRatingL1 = DB::table('entries')->pluck('L1');
        $TotalOfLRatingL2 = DB::table('entries')->pluck('L2');
        $TotalOfLRatingL3 = DB::table('entries')->pluck('L3');
        $TotalOfLRatingL4 = DB::table('entries')->pluck('L4');
        
        $totalL = array_merge(
            $TotalOfLRatingL1->toArray(),
            $TotalOfLRatingL2->toArray(),
            $TotalOfLRatingL3->toArray(),
            $TotalOfLRatingL4->toArray(),
        );

        $countTotalL = count($TotalOfLRatingL1->toArray());
        $totalL = array_sum($totalL);
        $totalPointsL = $countTotalL * 4 * 10;
        $totalL = ($totalL * 100) / $totalPointsL;
        $totalL = round($totalL, 2);

        return $totalL;
    }

    public function calculateTotalM(){
        $TotalOfMRatingM1 = DB::table('entries')->pluck('M1');
        $TotalOfMRatingM2 = DB::table('entries')->pluck('M2');
        $TotalOfMRatingM3 = DB::table('entries')->pluck('M3');
    
        $totalM = array_merge(
            $TotalOfMRatingM1->toArray(),
            $TotalOfMRatingM2->toArray(),
            $TotalOfMRatingM3->toArray(),
        );

        $countTotalM = count($TotalOfMRatingM1->toArray());
        $totalM = array_sum($totalM);
        $totalPointsM = $countTotalM * 3 * 10;
        $totalM = ($totalM * 100) / $totalPointsM;
        $totalM = round($totalM, 2);

        return $totalM;
    }

    public function calculateTotalN(){
        $TotalOfNRatingN1 = DB::table('entries')->pluck('N1');
        $TotalOfNRatingN2 = DB::table('entries')->pluck('N2');
        $TotalOfNRatingN3 = DB::table('entries')->pluck('N3');
        $TotalOfNRatingN4 = DB::table('entries')->pluck('N4');
    
        $totalN = array_merge(
            $TotalOfNRatingN1->toArray(),
            $TotalOfNRatingN2->toArray(),
            $TotalOfNRatingN3->toArray(),
            $TotalOfNRatingN4->toArray(),
        );

        $countTotalN = count($TotalOfNRatingN1->toArray());
        $totalN = array_sum($totalN);
        $totalPointsN = $countTotalN * 4 * 10;
        $totalN = ($totalN * 100) / $totalPointsN;
        $totalN = round($totalN, 2);

        return $totalN;
    }

    public function calculateTotalO(){
        $TotalOfORatingO1 = DB::table('entries')->pluck('O1');
        $TotalOfORatingO2 = DB::table('entries')->pluck('O2');
        $TotalOfORatingO3 = DB::table('entries')->pluck('O3');
        $TotalOfORatingO4 = DB::table('entries')->pluck('O4');
    
        $totalO = array_merge(
            $TotalOfORatingO1->toArray(),
            $TotalOfORatingO2->toArray(),
            $TotalOfORatingO3->toArray(),
            $TotalOfORatingO4->toArray(),
        );

        $countTotalO = count($TotalOfORatingO1->toArray());
        $totalO = array_sum($totalO);
        $totalPointsO = $countTotalO * 4 * 10;
        $totalO = ($totalO * 100) / $totalPointsO;
        $totalO = round($totalO, 2);

        return $totalO;
    }

    public function calculateTotalP(){
        $TotalOfPRatingP1 = DB::table('entries')->pluck('P1');
        $TotalOfPRatingP2 = DB::table('entries')->pluck('P2');
        
        $totalP = array_merge(
            $TotalOfPRatingP1->toArray(),
            $TotalOfPRatingP2->toArray(),
        );

        $countTotalP = count($TotalOfPRatingP1->toArray());
        $totalP = array_sum($totalP);
        $totalPointsP = $countTotalP * 2 * 10;
        $totalP = ($totalP * 100) / $totalPointsP;
        $totalP = round($totalP, 2);

        return $totalP;
    }

    public function calculateTotalQ(){
        $TotalOfQRatingQ1 = DB::table('entries')->pluck('Q1');
        $TotalOfQRatingQ2 = DB::table('entries')->pluck('Q2');
        $TotalOfQRatingQ3 = DB::table('entries')->pluck('Q3');
        $TotalOfQRatingQ4 = DB::table('entries')->pluck('Q4');
    
        $totalQ = array_merge(
            $TotalOfQRatingQ1->toArray(),
            $TotalOfQRatingQ2->toArray(),
            $TotalOfQRatingQ3->toArray(),
            $TotalOfQRatingQ4->toArray(),
        );

        $countTotalQ = count($TotalOfQRatingQ1->toArray());
        $totalQ = array_sum($totalQ);
        $totalPointsQ = $countTotalQ * 4 * 10;
        $totalQ = ($totalQ * 100) / $totalPointsQ;
        $totalQ = round($totalQ, 2);

        return $totalQ;
    }

    public function calculateTotalIndexKegembiraan($ib,$ic,$id,$ie,$if,$ig){
        $result = round(($ib + $ic + $id + $ie + $if + $ig) / 600 * 100,2);
        return $result;
    }

    public function calculateIndexB($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        if ($entry->E5 != NULL){
            $positive = ($entry->B1 + $entry->B2 + $entry->B3 + $entry->B4 + $entry->B5 + $entry->B7 + $entry->B12 + $entry->B13 + $entry->B14 + $entry->B17 + $entry->B18) / 110 * 100;
        }else{
            $positive = ($entry->B1 + $entry->B2 + $entry->B3 + $entry->B4 + $entry->B7 + $entry->B12 + $entry->B13 + $entry->B14 + $entry->B17 + $entry->B18) / 100 * 100;  
        }
        $negative = ((10 - $entry->B6)+(10 - $entry->B8)+(10 - $entry->B9)+(10 - $entry->B10)+(10 - $entry->B11)+(10 - $entry->B15)+(10 - $entry->B16)) / 70 * 100;
        $dimensi = ( $positive + $negative ) / 200 * 100;
        return $dimensi;
    } 

    public function calculateIndexC($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        $dimensi = ( $entry->C1 + $entry->C2 ) / 20 * 100;
        return $dimensi;
    } 

    public function calculateIndexD($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        $dimensi = ($entry->D1 / 10) * 100;
        return $dimensi;
    } 

    public function calculateIndexE($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        $positive = ($entry->E1 + $entry->E2 + $entry->E3) / 30 * 100;
        $negative = ((10 - $entry->E4)+(10 - $entry->E5)+(10 - $entry->E6)) / 30 * 100;
        $dimensi = ( $positive + $negative ) / 200 * 100;
        return $dimensi;
    } 

    public function calculateIndexF($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        $dimensi = ($entry->F1 + $entry->F2 + $entry->F3 + $entry->F4 + $entry->F5 + $entry->F6) / 60 * 100;
        return $dimensi;
    } 

    public function calculateIndexG($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        $positive = ($entry->G1 + $entry->G2 + $entry->G3 + $entry->G4 + $entry->G5 + $entry->G6 + $entry->G7 + $entry->G8) / 80 * 100;
        $negative = ((10 - $entry->G9) + (10 - $entry->G10)) / 20 * 100;
        $dimensi = ( $positive + $negative ) / 200 * 100;
        return $dimensi;
    } 

    public function calculateIndexH($user){
        $entry = DB::table('entries')->where('email','=', $user)->first();
        $dimensi = round(($entry->H1 + $entry->H2 + $entry->H3 + $entry->H4 + $entry->H5 + $entry->H6 + $entry->H7 + $entry->H8 + $entry->H9 + $entry->H10 + $entry->H11 + $entry->H12 + $entry->H13 + $entry->H14 + $entry->H15 + $entry->H16 + $entry->H17 + $entry->H18 + $entry->H19 + $entry->H20 + $entry->H21+ $entry->H22 + $entry->H23 + $entry->H24 + $entry->H25 + $entry->H26 + $entry->H27 + $entry->H28 + $entry->H29 + $entry->H30 + $entry->H31 + $entry->H32 + $entry->H33 + $entry->H34 + $entry->H35) / 350 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionB($b1,$b2,$b3,$b4,$b5,$b6,$b7,$b8){
        $dimensi = round(( $b1 + $b2 + $b3 + $b4 + $b5 + $b6 + $b7 + $b8) / 800 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBGaji($b1,$b2){
        $dimensi = round(($b1 + $b2) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBPangkat($b3){
        $dimensi = round($b3 / 10 * 100, 2);
        return $dimensi;
    }
    public function calculateSubDimensionBKetua($b4,$b5){
        if ($b5 != NULL){
            $dimensi = round(($b4 + $b5)/ 20 * 100, 2);
        }
        $dimensi = round($b4 / 10 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBProsedurOperasi($b6,$b7,$b8){
        $positive = $b7 / 10 * 100;
        $negatif = ((10 - $b6) + (10 - $b8)) / 20 * 100;
        $dimensi = round(($positive + $negatif) / 200 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBRakanSekerja($b9,$b10){
        $dimensi = round(($b9 + $b10) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBSifatKerja($b11,$b12,$b13){
        $positive = ( $b12 + $b13 ) / 20 * 100;
        $negatif = (10 - $b11) / 10 * 100;
        $dimensi = round(($positive + $negatif) / 200 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBKomunikasi($b14,$b15,$b16){
        $positive = $b14 / 10 * 100;
        $negatif = ((10 - $b15) + (10 - $b16)) / 20 * 100;
        $dimensi = round(($positive + $negatif) / 200 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBPersekitaran($b17,$b18){
        $dimensi = round(($b17 + $b18) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionEAfek($e1,$e2){
        $dimensi = round(($e1 + $e2) / 200 * 100, 2);
        return $dimensi;
    }
    
    public function calculateSubDimensionEAfekPositif($e1,$e2,$e3){
        $dimensi = round(($e1 + $e2 + $e3) / 30 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionEAfekNegatif($e4,$e5,$e6){
        $dimensi = round((( 10 - $e4 ) + ( 10 - $e5 ) + ( 10 - $e6 ) ) / 30 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionFSemangat($f1,$f2){
        $dimensi = round(($f1 + $f2) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionFDedikasi($f3,$f4){
        $dimensi = round(($f3 + $f4) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionFKesungguhan($f5,$f6){
        $dimensi = round(($f5 + $f6) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionFKeterlibatanKerja($f1,$f2,$f3){
        $dimensi = round(($f1 + $f2 + $f3) / 300 * 100, 2);
        return $dimensi;
    }
    
    public function calculateSubDimensionGPrestasiTugas($g1,$g2,$g3){
        $dimensi = round(($g1 + $g2 + $g3) / 30 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionGPrestasiKontekstual($g4,$g5,$g6,$g7,$g8){
        $dimensi = round(($g4 + $g5 + $g6 + $g7 + $g8) / 50 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionGTingkahLakuKerjaTidakProduktif($g9,$g10){
        $dimensi = round((( 10 - $g9 ) + ( 10 - $g10 )) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionGPrestasiKerja($g1,$g2,$g3){
        $dimensi = round(($g1 + $g2 + $g3 ) / 300 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionHKualitiPengurusan($h1,$h2,$h3,$h4,$h5,$h6,$h7,$h8,$h9,$h10,$h11,$h12){
        $dimensi = round(($h1 + $h2 + $h3 + $h4 + $h5 + $h6 + $h7 + $h8 + $h9 + $h10 + $h11 + $h12 ) / 120 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionHPenambahbaikanDanPembaharuanBerterusan($h13,$h14,$h15,$h16,$h17,$h18,$h19,$h20){
        $dimensi = round(($h13 + $h14 + $h15 + $h16 + $h17 + $h18 + $h19 + $h20) / 80 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionHOrientasiJangkaPanjang($h21,$h22,$h23,$h24,$h25){
        $dimensi = round(( $h21 + $h22 + $h23 + $h24 + $h25) / 50 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionHKualitiPekerja($h26,$h27,$h28,$h29){
        $dimensi = round(( $h26 + $h27 + $h28 + $h29) / 40 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionHKeterbukaanDanOrientasiTindakan($h30,$h31,$h32,$h33,$h34,$h35){
        $dimensi = round(( $h30 + $h31 + $h32 + $h33 + $h34 + $h35) / 60 * 100, 2);
        return $dimensi;
    }
    
    public function calculateSubDimensionHOBT($h1,$h2,$h3,$h4,$h5){
        $dimensi = round(($h1 + $h2 + $h3 + $h4 + $h5 ) / 500 * 100, 2);
        return $dimensi;
    }


}
