<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Queue\NullQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    public function adminDashboard(){
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

            $totalResponden = DB::table('entries')
                ->where('completedR','=', '1')
                ->count();

        return view('admin.dashboard', compact('data','totalResponden'));
    }

    public function index(Request $request){
        $user = $this->getUser($request);

        if ($user != NULL) {
            $data = array();

            $entry = DB::table('entries')->where('email','=', $user)->first();
        
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
            $totalIndex['indexD'] = $this->calculateIndexD($entry->D1);
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
            $subDimension['subDimensionDPenilaianHidup'] = $this->calculateIndexD($entry->D1);


            
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
            $subDimension['subDimensionHOBT'] = $this->calculateSubDimensionHOBT($subDimension['subDimensionHKualitiPengurusan'], $subDimension['subDimensionHPenambahbaikanDanPembaharuanBerterusan'], $subDimension['subDimensionHOrientasiJangkaPanjang'], $subDimension['subDimensionHKualitiPekerja'], $subDimension['subDimensionHKeterbukaanDanOrientasiTindakan']);

            $subDimension['subDimensionI'] = $this->calculateIndexI($entry->E1, $entry->E2, $entry->E3); 
            $subDimension['subDimensionJ'] = $this->calculateIndexJ($entry->J1, $entry->J2, $entry->J3, $entry->J4, $entry->J5, $entry->J6, $entry->J7, $entry->J8, $entry->J9, $entry->J10);
            $subDimension['subDimensionK'] = $this->calculateIndexK($entry->K1, $entry->K2, $entry->K3, $entry->K4, $entry->K5, $entry->K6, $entry->K7, $entry->K8, $entry->K9, $entry->K10);
            $subDimension['subDimensionL'] = $this->calculateIndexL($entry->L1, $entry->L2, $entry->L3, $entry->L4);
            $subDimension['subDimensionM'] = $this->calculateIndexM($entry->M1, $entry->M2, $entry->M3);
            $subDimension['subDimensionN'] = $this->calculateIndexN($entry->N1, $entry->N2, $entry->N3, $entry->N4);
            $subDimension['subDimensionO'] = $this->calculateIndexO($entry->O1, $entry->O2, $entry->O3, $entry->O4, $entry->O5);      
            $subDimension['subDimensionP'] = $this->calculateIndexP($entry->P1, $entry->P2);
            $subDimension['subDimensionQ'] = $this->calculateIndexQ($entry->Q1, $entry->Q2, $entry->Q3, $entry->Q4);
            return view('users.user', compact('user', 'data', 'hasCompleted', 'userProgress', 'totalIndex', 'indexKegembiraan', 'indexOBT', 'subDimension'));
        }
        return view('users.user', compact('user'));
    }

    public function storeData(Request $request){
        $validateEmail = $request->validate([
            'email' => 'required|email',
            //'email' => 'required|email|regex:/(.*)sabah\.gov\.my$/i',
        ]);
        $userData = DB::table('entries')->where('email', $request->email)->first();
            
        if ($userData == NULL) {
                DB::table('entries')->insert(['email' => $request->email, 'start_at' => now(+8)]);
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
        'penilai',
        'lntp',
        'completedA'
        );
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.demography', compact('user', 'userData','userProgress'));
    }

    public function storeDataDemografi(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            // $validateData = $request->validate([
            //     'umur' => 'nullable|numeric',
            //     'jantina' => 'nullable|string',
            //     'agama' => 'nullable|string',
            //     'lainAgamaDetail' => 'nullable',
            //     'bangsa' => 'nullable|string',
            //     'daerahBertugas' => 'nullable',
            //     'status' => 'nullable',
            //     'bilAnak' => 'nullable',
            //     'bilIsiRumah' => 'nullable',
            //     'tinggalBersamaPasangan' => 'nullable',
            //     'bilBilikTidur' => 'nullable',
            //     'education' => 'nullable',
            //     'agensi' => 'nullable',
            //     'kumpulanPerkhidmatan' => 'nullable',
            //     'tarafJawatan' => 'nullable',
            //     'skimPerkhidmatan' => 'nullable',
            //     'gredJawatan' => 'nullable',
            //     'gajiKasarBulanan' => 'nullable',
            //     'gajiBersihBulanan' => 'nullable',
            //     'kesukaranGaji' => 'nullable',
            //     'tempohPerkhidmatanTahun' => 'nullable',
            //     'tempohPerkhidmatanBulan' => 'nullable',
            //     'masalahKesihatan' => 'nullable',
            //     'masalahKesihatanDetail' => 'nullable',
            //     'tempatTinggal' => 'nullable',
            //     'tempatTinggalDetail' => 'nullable',
            //     'tinggalBersama' => 'nullable',
            //     'tinggalBersamaDetail' => 'nullable',
            //     'kenderaanKerja' => 'nullable',
            //     'kenderaanKerjaDetail' => 'nullable'
            // ]);
            $hasCompleted = NULL;
            if ( 
                $request->umur != NULL && 
                $request->jantina != NULL && 
                $request->agama != NULL && 
                $request->bangsa != NULL && 
                $request->daerahBertugas != NULL && 
                $request->status != NULL && 
                $request->bilAnak != NULL && 
                $request->bilIsiRumah != NULL &&
                $request->tinggalBersamaPasangan != NULL &&
                $request->bilBilikTidur != NULL &&
                $request->education != NULL &&
                $request->agensi != NULL &&
                $request->kumpulanPerkhidmatan != NULL &&
                $request->tarafJawatan != NULL &&
                $request->skimPerkhidmatan != NULL &&
                $request->gredJawatan != NULL &&
                $request->gajiKasarBulanan != NULL &&
                $request->gajiBersihBulanan != NULL &&
                $request->kesukaranGaji != NULL &&
                $request->tempohPerkhidmatanTahun != NULL &&
                $request->tempohPerkhidmatanBulan != NULL &&
                $request->masalahKesihatan != NULL &&
                $request->tempatTinggal != NULL &&
                $request->tinggalBersama != NULL &&
                $request->kenderaanKerja != NULL &&
                $request->penilai != NULL &&
                $request->lntp != NULL
                ){
                    $hasCompleted = 1;
                }
            
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
                'penilai' => $request->penilai,
                'lntp' => $request->lntp,
                'completedA' => $hasCompleted,
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sb');
            }
            return redirect('/users/demografi');
        }

        return redirect('users');
        
    }

    public function sectionB(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $hasCompleted = DB::table('entries')->select('completedA')->where('email', '=', $user)->get()->toArray();
        
        if ($hasCompleted[0]->completedA == NULL) {
            return redirect()->route('demograph');
        }

        $i = 0;
        $data = array();
        while ( $i <= 17 ) {
            $i++;
            array_push($data, 'B'.$i);
        }
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        $penilai = DB::table('entries')->select('penilai')->where('email', '=', $user)->get();
        return view('users.sb', compact('user', 'userData', 'userProgress', 'penilai'));
    }

    public function storeSectionB(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            // $validateData = $request->validate([
            //     'B1' => 'required|numeric',
            //     'B2' => 'required|numeric',
            //     'B3' => 'required|numeric',
            //     'B4' => 'required|numeric',
            //     'B5' => 'nullable|numeric',
            //     'B6' => 'required|numeric',
            //     'B7' => 'required|numeric',
            //     'B8' => 'required|numeric',
            //     'B9' => 'required|numeric',
            //     'B10' => 'required|numeric',
            //     'B11' => 'required|numeric',
            //     'B12' => 'required|numeric',
            //     'B13' => 'required|numeric',
            //     'B14' => 'required|numeric',
            //     'B15' => 'required|numeric',
            //     'B16' => 'required|numeric',
            //     'B17' => 'required|numeric',
            //     'B18' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;

            if ( $request->B1 != NULL && $request->B2 != NULL && $request->B3 != NULL && $request->B4 != NULL && $request->B6 != NULL && $request->B7 != NULL && $request->B8 != NULL && $request->B9 != NULL && $request->B10 != NULL && $request->B11 != NULL && $request->B12 != NULL && $request->B13 != NULL && $request->B14 != NULL && $request->B15 != NULL && $request->B16 != NULL && $request->B17 != NULL && $request->B18 != NULL )
            {
                $hasCompleted = 1;
            }
            
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
                'completedB' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sc');
            }
            return redirect('/users/sb');
        }

        return redirect('users');
    }

    public function sectionC(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        $hasCompleted = DB::table('entries')->select('completedB')->where('email', '=', $user)->get()->toArray();
        
        if ($hasCompleted[0]->completedB == NULL) {
            return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'C1' => 'required|numeric',
            //     'C2' => 'required|numeric',
            //]);
            $hasCompleted = NULL;
            if ($request->C1 != NULL && $request->C2 != NULL) {
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'C1' => $request->C1,
                'C2' => $request->C2,
                'completedC' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sd');
            }
            return redirect('/users/sc');
        }

        return redirect('users');
    }

    public function sectionD(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedC')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedC == NULL) {
                    return redirect()->route('demograph');
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

            $hasCompleted = NULL;
            if ($request->D1 != NULL){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'D1' => $request->D1,
                'completedD' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/se');
            }
            return redirect('/users/sd');
        }

        return redirect('users');
    }

    public function sectionE(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $hasCompleted = DB::table('entries')->select('completedD')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedD == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'E1' => 'required|numeric',
            //     'E2' => 'required|numeric',
            //     'E3' => 'required|numeric',
            //     'E4' => 'required|numeric',
            //     'E5' => 'required|numeric',
            //     'E6' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if ( $request->E1 != NULL && $request->E2 != NULL && $request->E3 != NULL && $request->E4 != NULL && $request->E5 != NULL && $request->E6 != NULL ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'E1' => $request->E1,
                'E2' => $request->E2,
                'E3' => $request->E3,
                'E4' => $request->E4,
                'E5' => $request->E5,
                'E6' => $request->E6,
                'completedE' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sf');
            }
            return redirect('/users/se');
        }

        return redirect('users');
    }

    public function sectionF(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedE')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedE == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'F1' => 'required|numeric',
            //     'F2' => 'required|numeric',
            //     'F3' => 'required|numeric',
            //     'F4' => 'required|numeric',
            //     'F5' => 'required|numeric',
            //     'F6' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if ( $request->F1 != NULL && $request->F2 != NULL && $request->F3 != NULL && $request->F4 != NULL && $request->F5 != NULL && $request->F6 != NULL ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'F1' => $request->F1,
                'F2' => $request->F2,
                'F3' => $request->F3,
                'F4' => $request->F4,
                'F5' => $request->F5,
                'F6' => $request->F6,
                'completedF' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sg');
            }
            return redirect('/users/sf');
            }
        return redirect('users');
    }

    public function sectionG(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        
        $hasCompleted = DB::table('entries')->select('completedF')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedF == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'G1' => 'required|numeric',
            //     'G2' => 'required|numeric',
            //     'G3' => 'required|numeric',
            //     'G4' => 'required|numeric',
            //     'G5' => 'required|numeric',
            //     'G6' => 'required|numeric',
            //     'G7' => 'required|numeric',
            //     'G8' => 'required|numeric',
            //     'G9' => 'required|numeric',
            //     'G10' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if ( $request->G1 != NULL && $request->G2 != NULL && $request->G3 != NULL && $request->G4 != NULL && $request->G5 != NULL && $request->G6 != NULL && $request->G7 != NULL && $request->G8 != NULL && $request->G9 != NULL && $request->G10 != NULL ){
                $hasCompleted = 1;
            }
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
                'completedG' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sh1');
            }
            return redirect('/users/g');
            }
        return redirect('users');
    }

    public function sectionH1(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedG')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedG == NULL) {
                    return redirect()->route('demograph');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 11 ) {
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
            // $validateData = $request->validate([
            //     'H1' => 'required|numeric',
            //     'H2' => 'required|numeric',
            //     'H3' => 'required|numeric',
            //     'H4' => 'required|numeric',
            //     'H5' => 'required|numeric',
            //     'H6' => 'required|numeric',
            //     'H7' => 'required|numeric',
            //     'H8' => 'required|numeric',
            //     'H9' => 'required|numeric',
            //     'H10' => 'required|numeric',
            //     'H11' => 'required|numeric',
            //     'H12' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if ( $request->H1 != NULL && $request->H2 != NULL && $request->H3 != NULL && $request->H4 != NULL && $request->H5 != NULL && $request->H6 != NULL && $request->H7 != NULL && $request->H8 != NULL && $request->H9 != NULL && $request->H10 != NULL && $request->H11 != NULL && $request->H12 != NULL ){
                $hasCompleted = 1;
            }
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
                'H11' => $request->H11,
                'H12' => $request->H12,
                'completedH1' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sh2');
            }
            return redirect('/users/sh1');
            }
        return redirect('users');
    }

    public function sectionH2(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedH1')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH1 == NULL) {
                    return redirect()->route('demograph');
                }
        
        $i = 12;
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
            // $validateData = $request->validate([
            //     'H13' => 'required|numeric',
            //     'H14' => 'required|numeric',
            //     'H15' => 'required|numeric',
            //     'H16' => 'required|numeric',
            //     'H17' => 'required|numeric',
            //     'H18' => 'required|numeric',
            //     'H19' => 'required|numeric',
            //     'H20' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->H13 != NULL &&
                $request->H14 != NULL &&
                $request->H15 != NULL &&
                $request->H16 != NULL &&
                $request->H17 != NULL &&
                $request->H18 != NULL &&
                $request->H19 != NULL &&
                $request->H20 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'H13' => $request->H13,
                'H14' => $request->H14,
                'H15' => $request->H15,
                'H16' => $request->H16,
                'H17' => $request->H17,
                'H18' => $request->H18,
                'H19' => $request->H19,
                'H20' => $request->H20,
                'completedH2' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sh3');
            }
            return redirect('/users/sh2');
            }
        return redirect('users');
    }

    public function sectionH3(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedH2')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH2 == NULL) {
                    return redirect()->route('demograph');
                }
        
        $i = 20;
        $data = array();
        while ( $i <= 28 ) {
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
            // $validateData = $request->validate([
            //     'H21' => 'required|numeric',
            //     'H22' => 'required|numeric',
            //     'H23' => 'required|numeric',
            //     'H24' => 'required|numeric',
            //     'H25' => 'required|numeric',
            //     'H26' => 'required|numeric',
            //     'H27' => 'required|numeric',
            //     'H28' => 'required|numeric',
            //     'H29' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->H21 != NULL &&
                $request->H22 != NULL &&
                $request->H23 != NULL &&
                $request->H24 != NULL &&
                $request->H25 != NULL &&
                $request->H26 != NULL &&
                $request->H27 != NULL &&
                $request->H28 != NULL &&
                $request->H29 != NULL
            ){
                $hasCompleted = 1;
            }
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
                'completedH3' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sh4');
            }
            return redirect('/users/sh3');
            }
        return redirect('users');
    }

    public function sectionH4(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedH3')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH3 == NULL) {
                    return redirect()->route('demograph');
                }
        
        $i = 29;
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
            // $validateData = $request->validate([
            //     'H30' => 'required|numeric',
            //     'H31' => 'required|numeric',
            //     'H32' => 'required|numeric',
            //     'H33' => 'required|numeric',
            //     'H34' => 'required|numeric',
            //     'H35' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->H30 != NULL &&
                $request->H31 != NULL &&
                $request->H32 != NULL &&
                $request->H33 != NULL &&
                $request->H34 != NULL &&
                $request->H35 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'H30' => $request->H30,
                'H31' => $request->H31,
                'H32' => $request->H32,
                'H33' => $request->H33,
                'H34' => $request->H34,
                'H35' => $request->H35,
                'completedH4' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/si');
            }
            return redirect('/users/sh4');
            }
        return redirect('users');
    }

    public function sectionI(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedH4')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH4 == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'I1' => 'required|numeric',
            //     'I2' => 'required|numeric',
            //     'I3' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->I1 != NULL &&
                $request->I2 != NULL &&
                $request->I3 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'I1' => $request->I1,
                'I2' => $request->I2,
                'I3' => $request->I3,
                'completedI' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sj');
            }
            return redirect('/users/si');
            }
        return redirect('users');
    }

    public function sectionJ(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedI')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedI == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'J1' => 'required|numeric',
            //     'J2' => 'required|numeric',
            //     'J3' => 'required|numeric',
            //     'J4' => 'required|numeric',
            //     'J5' => 'required|numeric',
            //     'J6' => 'required|numeric',
            //     'J7' => 'required|numeric',
            //     'J8' => 'required|numeric',
            //     'J9' => 'required|numeric',
            //     'J10' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->J1 != NULL &&
                $request->J2 != NULL &&
                $request->J3 != NULL &&
                $request->J4 != NULL &&
                $request->J5 != NULL &&
                $request->J6 != NULL &&
                $request->J7 != NULL &&
                $request->J8 != NULL &&
                $request->J9 != NULL &&
                $request->J10 != NULL
            ){
                $hasCompleted = 1;
            }
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
                'completedJ' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sk');
            }
            return redirect('/users/sj');
            }
        return redirect('users');
    }

    public function sectionK(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedJ')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedJ == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'K1' => 'required|numeric',
            //     'K2' => 'required|numeric',
            //     'K3' => 'required|numeric',
            //     'K4' => 'required|numeric',
            //     'K5' => 'required|numeric',
            //     'K6' => 'required|numeric',
            //     'K7' => 'required|numeric',
            //     'K8' => 'required|numeric',
            //     'K9' => 'required|numeric',
            //     'K10' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->K1 != NULL &&
                $request->K2 != NULL &&
                $request->K3 != NULL &&
                $request->K4 != NULL &&
                $request->K5 != NULL &&
                $request->K6 != NULL &&
                $request->K7 != NULL &&
                $request->K8 != NULL &&
                $request->K9 != NULL &&
                $request->K10 != NULL
            ){
                $hasCompleted = 1;
            }
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
                'completedK' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sl');
            }
            return redirect('/users/sk');
            }
        return redirect('users');
    }

    public function sectionL(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedK')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedK == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'L1' => 'required|numeric',
            //     'L2' => 'required|numeric',
            //     'L3' => 'required|numeric',
            //     'L4' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->L1 != NULL &&
                $request->L2 != NULL &&
                $request->L3 != NULL &&
                $request->L4 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'L1' => $request->L1,
                'L2' => $request->L2,
                'L3' => $request->L3,
                'L4' => $request->L4,
                'completedL' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sm');
            }
            return redirect('/users/sl');
            }
        return redirect('users');
    }

    public function sectionM(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedL')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedL == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'M1' => 'required|numeric',
            //     'M2' => 'required|numeric',
            //     'M3' => 'required|numeric',
            // ]);
            $hasCompleted = NULL;
            if (
                $request->M1 != NULL &&
                $request->M2 != NULL &&
                $request->M3 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'M1' => $request->M1,
                'M2' => $request->M2,
                'M3' => $request->M3,
                'completedM' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sn');
            }
            return redirect('/users/sm');
            }
        return redirect('users');
    }

    public function sectionN(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedM')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedM == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'N1' => 'required|numeric',
            //     'N2' => 'required|numeric',
            //     'N3' => 'required|numeric',
            //     'N4' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->N1 != NULL &&
                $request->N2 != NULL &&
                $request->N3 != NULL &&
                $request->N4 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'N1' => $request->N1,
                'N2' => $request->N2,
                'N3' => $request->N3,
                'N4' => $request->N4,
                'completedN' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/so');
            }
            return redirect('/users/sn');
            }
        return redirect('users');
    }

    public function sectionO(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedN')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedN == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'O1' => 'required|numeric',
            //     'O2' => 'required|numeric',
            //     'O3' => 'required|numeric',
            //     'O4' => 'required|numeric',
            //     'O5' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->O1 != NULL &&
                $request->O2 != NULL &&
                $request->O3 != NULL &&
                $request->O4 != NULL &&
                $request->O5 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'O1' => $request->O1,
                'O2' => $request->O2,
                'O3' => $request->O3,
                'O4' => $request->O4,
                'O5' => $request->O5,
                'completedO' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sp');
            }
            return redirect('/users/so');
            }
        return redirect('users');
    }

    public function sectionP(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedO')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedO == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'P1' => 'required|numeric',
            //     'P2' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->P1 != NULL &&
                $request->P2 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'P1' => $request->P1,
                'P2' => $request->P2,
                'completedP' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sq');
            }
            return redirect('/users/sp');
            }
        return redirect('users');
    }    

    public function sectionQ(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedP')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedP == NULL) {
                    return redirect()->route('demograph');
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
            // $validateData = $request->validate([
            //     'Q1' => 'required|numeric',
            //     'Q2' => 'required|numeric',
            //     'Q3' => 'required|numeric',
            //     'Q4' => 'required|numeric'
            // ]);
            $hasCompleted = NULL;
            if (
                $request->Q1 != NULL &&
                $request->Q2 != NULL &&
                $request->Q3 != NULL &&
                $request->Q4 != NULL
            ){
                $hasCompleted = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'Q1' => $request->Q1,
                'Q2' => $request->Q2,
                'Q3' => $request->Q3,
                'Q4' => $request->Q4,
                'completedQ' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sr');
            }
            return redirect('/users/sq');
            }
        return redirect('users');
    }

    public function sectionR(Request $request){
        
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedQ')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedQ == NULL) {
                    return redirect()->route('demograph');
                }
        
        $data = array(
            'komen',
            'cadangan'
        );
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sr', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionR(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            // $validateData = $request->validate([
            //     'komen' => 'nullable',
            //     'cadangan' => 'nullable',
            //     'phone' => 'required'
            // ]);
            // $hasCompleted = NULL;
            // if ($request->phone != NULL){
            //     $hasCompleted = 1;
            // }
            DB::table('entries')->where('email', $user)->update(array(
                'komen' => $request->komen,
                'cadangan' => $request->cadangan,
                'finish_at' => now(+8),
                'completedR' => 1
            ));
            
            return redirect('/form');
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

        //calculate Normal Item
        //calculate B1
        $countTotalVoteB1 = count(array_filter($TotalOfBRatingB1->toArray()));
        $totalMaxpointsB1 = $countTotalVoteB1 * 10;
        $respondedTotalPointsB1 = array_sum($TotalOfBRatingB1->toArray());

        //calculate B2
        $countTotalVoteB2 = count(array_filter($TotalOfBRatingB2->toArray()));
        $totalMaxpointsB2 = $countTotalVoteB2 * 10;
        $respondedTotalPointsB2 = array_sum($TotalOfBRatingB2->toArray());

        //calculate B3
        $countTotalVoteB3 = count(array_filter($TotalOfBRatingB3->toArray()));
        $totalMaxpointsB3 = $countTotalVoteB3 * 10;
        $respondedTotalPointsB3 = array_sum($TotalOfBRatingB3->toArray());

        //calculate B4
        $countTotalVoteB4 = count(array_filter($TotalOfBRatingB4->toArray()));
        $totalMaxpointsB4 = $countTotalVoteB4 * 10;
        $respondedTotalPointsB4 = array_sum($TotalOfBRatingB4->toArray());

        //calculate B5
        $countTotalVoteB5 = count(array_filter($TotalOfBRatingB5->toArray()));
        $totalMaxpointsB5 = $countTotalVoteB5 * 10;
        $respondedTotalPointsB5 = array_sum($TotalOfBRatingB5->toArray());

        //calculate B7
        $countTotalVoteB7 = count(array_filter($TotalOfBRatingB7->toArray()));
        $totalMaxpointsB7 = $countTotalVoteB7 * 10;
        $respondedTotalPointsB7 = array_sum($TotalOfBRatingB7->toArray());

        //calculate B12
        $countTotalVoteB12 = count(array_filter($TotalOfBRatingB12->toArray()));
        $totalMaxpointsB12 = $countTotalVoteB12 * 10;
        $respondedTotalPointsB12 = array_sum($TotalOfBRatingB12->toArray());

        //calculate B13
        $countTotalVoteB13 = count(array_filter($TotalOfBRatingB13->toArray()));
        $totalMaxpointsB13 = $countTotalVoteB13 * 10;
        $respondedTotalPointsB13 = array_sum($TotalOfBRatingB13->toArray());

        //calculate B14
        $countTotalVoteB14 = count(array_filter($TotalOfBRatingB14->toArray()));
        $totalMaxpointsB14 = $countTotalVoteB14 * 10;
        $respondedTotalPointsB14 = array_sum($TotalOfBRatingB14->toArray());

        //calculate B17
        $countTotalVoteB17 = count(array_filter($TotalOfBRatingB17->toArray()));
        $totalMaxpointsB17 = $countTotalVoteB17 * 10;
        $respondedTotalPointsB17 = array_sum($TotalOfBRatingB17->toArray());

        //calculate B18
        $countTotalVoteB18 = count(array_filter($TotalOfBRatingB18->toArray()));
        $totalMaxpointsB18 = $countTotalVoteB18 * 10;
        $respondedTotalPointsB18 = array_sum($TotalOfBRatingB18->toArray());
        
        //calculate B6 (Reversed item)
        $countTotalVoteB6 = count(array_filter($TotalOfBRatingB6->toArray()));
        $totalPointB6 = array_sum($TotalOfBRatingB6->toArray());
        $totalMaxpointsB6 = $countTotalVoteB6 * 10;
        $respondedTotalPointsB6 = $totalMaxpointsB6 - $totalPointB6;
        
        //calculate B8 (Reversed item)
        $countTotalVoteB8 = count(array_filter($TotalOfBRatingB8->toArray()));
        $totalPointB8 = array_sum($TotalOfBRatingB8->toArray());
        $totalMaxpointsB8 = $countTotalVoteB8 * 10;
        $respondedTotalPointsB8 = $totalMaxpointsB8 - $totalPointB8;
        
        //calculate B9 (Reversed item)
        $countTotalVoteB9 = count(array_filter($TotalOfBRatingB9->toArray()));
        $totalPointB9 = array_sum($TotalOfBRatingB9->toArray());
        $totalMaxpointsB9 = $countTotalVoteB9 * 10;
        $respondedTotalPointsB9 = $totalMaxpointsB9 - $totalPointB9;
        
        //calculate B10 (Reversed item)
        $countTotalVoteB10 = count(array_filter($TotalOfBRatingB10->toArray()));
        $totalPointB10 = array_sum($TotalOfBRatingB10->toArray());
        $totalMaxpointsB10 = $countTotalVoteB10 * 10;
        $respondedTotalPointsB10 = $totalMaxpointsB10 - $totalPointB10;
        
        //calculate B11 (Reversed item)
        $countTotalVoteB11 = count(array_filter($TotalOfBRatingB11->toArray()));
        $totalPointB11 = array_sum($TotalOfBRatingB11->toArray());
        $totalMaxpointsB11 = $countTotalVoteB11 * 10;
        $respondedTotalPointsB11 = $totalMaxpointsB11 - $totalPointB11;

        //calculate B15 (Reversed item)
        $countTotalVoteB15 = count(array_filter($TotalOfBRatingB15->toArray()));
        $totalPointB15 = array_sum($TotalOfBRatingB15->toArray());
        $totalMaxpointsB15 = $countTotalVoteB15 * 10;
        $respondedTotalPointsB15 = $totalMaxpointsB15 - $totalPointB15;

        //calculate B16 (Reversed item)
        $countTotalVoteB16 = count(array_filter($TotalOfBRatingB16->toArray()));
        $totalPointB16 = array_sum($TotalOfBRatingB16->toArray());
        $totalMaxpointsB16 = $countTotalVoteB16 * 10;
        $respondedTotalPointsB16 = $totalMaxpointsB16 - $totalPointB16;

        $X = $respondedTotalPointsB1 + $respondedTotalPointsB2 + $respondedTotalPointsB3 + $respondedTotalPointsB4 + $respondedTotalPointsB5 + $respondedTotalPointsB7 + $respondedTotalPointsB12 + $respondedTotalPointsB13 + $respondedTotalPointsB14 + $respondedTotalPointsB17 + $respondedTotalPointsB18;
        $M = 0;
        $J = $countTotalVoteB1 * 110;
        $totalBPositive = ($X - $M)/$J*100;
        $totalBNegative = (($respondedTotalPointsB6 + $respondedTotalPointsB8 + $respondedTotalPointsB9 + $respondedTotalPointsB10 + $respondedTotalPointsB11 + $respondedTotalPointsB15 + $respondedTotalPointsB16) - $M) / ($countTotalVoteB1 * 70) * 100;
        $totalB = ($totalBPositive + $totalBNegative) / 200 * 100;
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
        
        //calculate E1
        $countTotalVoteE1 = count(array_filter($TotalOfERatingE1->toArray()));
        $totalMaxpointsE1 = $countTotalVoteE1 * 10;
        $respondedTotalPointsE1 = array_sum($TotalOfERatingE1->toArray());

        //calculate E2
        $countTotalVoteE2 = count(array_filter($TotalOfERatingE2->toArray()));
        $totalMaxpointsE2 = $countTotalVoteE2 * 10;
        $respondedTotalPointsE2 = array_sum($TotalOfERatingE2->toArray());

        //calculate E3
        $countTotalVoteE3 = count(array_filter($TotalOfERatingE3->toArray()));
        $totalMaxpointsE3 = $countTotalVoteE3 * 10;
        $respondedTotalPointsE3 = array_sum($TotalOfERatingE3->toArray());

        //calculate E4 (Reversed item)
        $countTotalVoteE4 = count(array_filter($TotalOfERatingE4->toArray()));
        $totalPointE4 = array_sum($TotalOfERatingE4->toArray());
        $totalMaxpointsE4 = $countTotalVoteE4 * 10;
        $respondedTotalPointsE4 = $totalMaxpointsE4 - $totalPointE4;

        //calculate E5 (Reversed item)
        $countTotalVoteE5 = count(array_filter($TotalOfERatingE5->toArray()));
        $totalPointE5 = array_sum($TotalOfERatingE5->toArray());
        $totalMaxpointsE5 = $countTotalVoteE5 * 10;
        $respondedTotalPointsE5 = $totalMaxpointsE5 - $totalPointE5;
        
        //calculate E6 (Reversed item)
        $countTotalVoteE6 = count(array_filter($TotalOfERatingE6->toArray()));
        $totalPointE6 = array_sum($TotalOfERatingE6->toArray());
        $totalMaxpointsE6 = $countTotalVoteE6 * 10;
        $respondedTotalPointsE6 = $totalMaxpointsE6 - $totalPointE6;

        $X = $respondedTotalPointsE1 + $respondedTotalPointsE2 + $respondedTotalPointsE3;
        $M = 0;
        $J = $countTotalVoteE1 * 30;
        $totalEPositive = ($X - $M)/$J*100;
        $totalENegative = (($respondedTotalPointsE4 + $respondedTotalPointsE5 + $respondedTotalPointsE6) - $M) / ($countTotalVoteE1 * 30) * 100;
        $totalE = ($totalEPositive + $totalENegative) / 200 * 100;
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

        //calculate G1
        $countTotalVoteG1 = count(array_filter($TotalOfGRatingG1->toArray()));
        $totalMaxpointsG1 = $countTotalVoteG1 * 10;
        $respondedTotalPointsG1 = array_sum($TotalOfGRatingG1->toArray());

        //calculate G2
        $countTotalVoteG2 = count(array_filter($TotalOfGRatingG2->toArray()));
        $totalMaxpointsG2 = $countTotalVoteG2 * 10;
        $respondedTotalPointsG2 = array_sum($TotalOfGRatingG2->toArray());

        //calculate G3
        $countTotalVoteG3 = count(array_filter($TotalOfGRatingG3->toArray()));
        $totalMaxpointsG3 = $countTotalVoteG3 * 10;
        $respondedTotalPointsG3 = array_sum($TotalOfGRatingG3->toArray());

        //calculate G4
        $countTotalVoteG4 = count(array_filter($TotalOfGRatingG4->toArray()));
        $totalMaxpointsG4 = $countTotalVoteG4 * 10;
        $respondedTotalPointsG4 = array_sum($TotalOfGRatingG4->toArray());

        //calculate G5
        $countTotalVoteG5 = count(array_filter($TotalOfGRatingG5->toArray()));
        $totalMaxpointsG5 = $countTotalVoteG5 * 10;
        $respondedTotalPointsG5 = array_sum($TotalOfGRatingG5->toArray());

        //calculate G6
        $countTotalVoteG6 = count(array_filter($TotalOfGRatingG6->toArray()));
        $totalMaxpointsG6 = $countTotalVoteG6 * 10;
        $respondedTotalPointsG6 = array_sum($TotalOfGRatingG6->toArray());

        //calculate G7
        $countTotalVoteG7 = count(array_filter($TotalOfGRatingG7->toArray()));
        $totalMaxpointsG7 = $countTotalVoteG7 * 10;
        $respondedTotalPointsG7 = array_sum($TotalOfGRatingG7->toArray());

        //calculate G8
        $countTotalVoteG8 = count(array_filter($TotalOfGRatingG8->toArray()));
        $totalMaxpointsG8 = $countTotalVoteG8 * 10;
        $respondedTotalPointsG8 = array_sum($TotalOfGRatingG8->toArray());

        //calculate G9 (Reversed item)
        $countTotalVoteG9 = count(array_filter($TotalOfGRatingG9->toArray()));
        $totalPointG9 = array_sum($TotalOfGRatingG9->toArray());
        $totalMaxpointsG9 = $countTotalVoteG9 * 10;
        $respondedTotalPointsG9 = $totalMaxpointsG9 - $totalPointG9;

        //calculate G10 (Reversed item)
        $countTotalVoteG10 = count(array_filter($TotalOfGRatingG10->toArray()));
        $totalPointG10 = array_sum($TotalOfGRatingG10->toArray());
        $totalMaxpointsG10 = $countTotalVoteG10 * 10;
        $respondedTotalPointsG10 = $totalMaxpointsG10 - $totalPointG10;

        $X = $respondedTotalPointsG1 + $respondedTotalPointsG2 + $respondedTotalPointsG3  + $respondedTotalPointsG4 + $respondedTotalPointsG5 + $respondedTotalPointsG6 + $respondedTotalPointsG7 + $respondedTotalPointsG8;
        $M = 0;
        $J = $countTotalVoteG1 * 80;
        $totalGPositive = ($X - $M)/$J*100;
        $totalGNegative = (($respondedTotalPointsG9 + $respondedTotalPointsG10) - $M) / ($countTotalVoteG1 * 20) * 100;
        
        $totalG = ($totalGPositive + $totalGNegative) / 200 * 100;
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
        
        //calculate I1
        $countTotalVoteI1 = count(array_filter($TotalOfIRatingI1->toArray()));
        $totalMaxpointsI1 = $countTotalVoteI1 * 10;
        $respondedTotalPointsI1 = array_sum($TotalOfIRatingI1->toArray());

        //calculate I3
        $countTotalVoteI3 = count(array_filter($TotalOfIRatingI3->toArray()));
        $totalMaxpointsI3 = $countTotalVoteI3 * 10;
        $respondedTotalPointsI3 = array_sum($TotalOfIRatingI3->toArray());

        //calculate I2 (Reversed item)
        $countTotalVoteI2 = count(array_filter($TotalOfIRatingI2->toArray()));
        $totalPointI2 = array_sum($TotalOfIRatingI2->toArray());
        $totalMaxpointsI2 = $countTotalVoteI2 * 10;
        $respondedTotalPointsI2 = $totalMaxpointsI2 - $totalPointI2;

        $X = $respondedTotalPointsI1 + $respondedTotalPointsI3;
        $M = 0;
        $J = $countTotalVoteI1 * 20;
        $totalIPositive = ($X - $M)/$J*100;
        $totalINegative = ($respondedTotalPointsI2 - $M) / ($countTotalVoteI1 * 10) * 100;
        
        $totalI = ($totalIPositive + $totalINegative) / 200 * 100;
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
        
        //calculate K1
        $countTotalVoteK1 = count(array_filter($TotalOfKRatingK1->toArray()));
        $totalMaxpointsK1 = $countTotalVoteK1 * 10;
        $respondedTotalPointsK1 = array_sum($TotalOfKRatingK1->toArray());

        //calculate K2
        $countTotalVoteK2 = count(array_filter($TotalOfKRatingK2->toArray()));
        $totalMaxpointsK2 = $countTotalVoteK2 * 10;
        $respondedTotalPointsK2 = array_sum($TotalOfKRatingK2->toArray());

        //calculate K3
        $countTotalVoteK3 = count(array_filter($TotalOfKRatingK3->toArray()));
        $totalMaxpointsK3 = $countTotalVoteK3 * 10;
        $respondedTotalPointsK3 = array_sum($TotalOfKRatingK3->toArray());

        //calculate K4
        $countTotalVoteK4 = count(array_filter($TotalOfKRatingK4->toArray()));
        $totalMaxpointsK4 = $countTotalVoteK4 * 10;
        $respondedTotalPointsK4 = array_sum($TotalOfKRatingK4->toArray());

        //calculate K5
        $countTotalVoteK5 = count(array_filter($TotalOfKRatingK5->toArray()));
        $totalMaxpointsK5 = $countTotalVoteK5 * 10;
        $respondedTotalPointsK5 = array_sum($TotalOfKRatingK5->toArray());

        //calculate K6
        $countTotalVoteK6 = count(array_filter($TotalOfKRatingK6->toArray()));
        $totalMaxpointsK6 = $countTotalVoteK6 * 10;
        $respondedTotalPointsK6 = array_sum($TotalOfKRatingK6->toArray());

        //calculate K7
        $countTotalVoteK7 = count(array_filter($TotalOfKRatingK7->toArray()));
        $totalMaxpointsK7 = $countTotalVoteK7 * 10;
        $respondedTotalPointsK7 = array_sum($TotalOfKRatingK7->toArray());

        //calculate K8
        $countTotalVoteK8 = count(array_filter($TotalOfKRatingK8->toArray()));
        $totalMaxpointsK8 = $countTotalVoteK8 * 10;
        $respondedTotalPointsK8 = array_sum($TotalOfKRatingK8->toArray());

        //calculate K9
        $countTotalVoteK9 = count(array_filter($TotalOfKRatingK9->toArray()));
        $totalMaxpointsK9 = $countTotalVoteK9 * 10;
        $respondedTotalPointsK9 = array_sum($TotalOfKRatingK9->toArray());

        //calculate K10 (Reversed item)
        $countTotalVoteK10 = count(array_filter($TotalOfKRatingK10->toArray()));
        $totalPointK10 = array_sum($TotalOfKRatingK10->toArray());
        $totalMaxpointsK10 = $countTotalVoteK10 * 10;
        $respondedTotalPointsK10 = $totalMaxpointsK10 - $totalPointK10;
        
        $X = $respondedTotalPointsK1 + $respondedTotalPointsK2 + $respondedTotalPointsK3 + $respondedTotalPointsK4 + $respondedTotalPointsK5 + $respondedTotalPointsK6 + $respondedTotalPointsK7 + $respondedTotalPointsK8 + $respondedTotalPointsK9;
        $M = 0;
        $J = $countTotalVoteK1 * 90;
        $totalKPositive = ($X - $M)/$J*100;
        $totalKNegative = ($respondedTotalPointsK10 - $M) / ($countTotalVoteK1 * 10) * 100;
        
        $totalK = ($totalKPositive + $totalKNegative) / 200 * 100;
        $totalK = round($totalK, 2);

        return $totalK;

    }

    public function calculateTotalL(){
        $TotalOfLRatingL1 = DB::table('entries')->pluck('L1');
        $TotalOfLRatingL2 = DB::table('entries')->pluck('L2');
        $TotalOfLRatingL3 = DB::table('entries')->pluck('L3');
        $TotalOfLRatingL4 = DB::table('entries')->pluck('L4');
        
        //calculate L4
        $countTotalVoteL4 = count(array_filter($TotalOfLRatingL4->toArray()));
        $totalMaxpointsL4 = $countTotalVoteL4 * 10;
        $respondedTotalPointsL4 = array_sum($TotalOfLRatingL4->toArray());

        //calculate L1 (Reversed item)
        $countTotalVoteL1 = count(array_filter($TotalOfLRatingL1->toArray()));
        $totalPointL1 = array_sum($TotalOfLRatingL1->toArray());
        $totalMaxpointsL1 = $countTotalVoteL1 * 10;
        $respondedTotalPointsL1 = $totalMaxpointsL1 - $totalPointL1;

        //calculate L2 (Reversed item)
        $countTotalVoteL2 = count(array_filter($TotalOfLRatingL2->toArray()));
        $totalPointL2 = array_sum($TotalOfLRatingL2->toArray());
        $totalMaxpointsL2 = $countTotalVoteL2 * 10;
        $respondedTotalPointsL2 = $totalMaxpointsL2 - $totalPointL2;

        //calculate L3 (Reversed item)
        $countTotalVoteL3 = count(array_filter($TotalOfLRatingL3->toArray()));
        $totalPointL3 = array_sum($TotalOfLRatingL3->toArray());
        $totalMaxpointsL3 = $countTotalVoteL3 * 10;
        $respondedTotalPointsL3 = $totalMaxpointsL3 - $totalPointL3;

        $X = $respondedTotalPointsL4;
        $M = 0;
        $J = $countTotalVoteL1 * 10;
        $totalLPositive = ($X - $M)/$J*100;
        $totalLNegative = (($respondedTotalPointsL1 + $respondedTotalPointsL2 + $respondedTotalPointsL3) - $M) / ($countTotalVoteL1 * 30) * 100;
        
        $totalL = ($totalLPositive + $totalLNegative) / 200 * 100;
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

    public function calculateIndexD($d1){
        $dimensi = $d1 / 10 * 100;
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

    public function calculateIndexI($I1, $I2, $I3){
        $dimensi = round(($I1 + ( 10 - $I2 ) + $I3) / 30 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexJ($J1, $J2, $J3, $J4, $J5, $J6, $J7, $J8, $J9, $J10){
        $dimensi = round(( $J1 + $J2 + $J3 + $J4 + $J5 + $J6 + $J7 + $J8 + $J9 + $J10 ) / 100 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexK($K1, $K2, $K3, $K4, $K5, $K6, $K7, $K8, $K9, $K10){
        $dimensi = round(( $K1 + $K2 + $K3 + $K4 + $K5 + $K6 + $K7 + $K8 + $K9 + ( 10 - $K10 ) ) / 100 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexL($L1, $L2, $L3, $L4){
        $dimensi = round(( (30 - ($L1 + $L2 + $L3)) + $L4) / 40 * 100, 2);
        
        return $dimensi;
    }

    public function calculateIndexM($M1, $M2, $M3){
        $dimensi = round(( $M1 + $M2 + $M3) / 30 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexN($N1, $N2, $N3, $N4){
        $dimensi = round(( $N1 + $N2 + $N3 + $N4 ) / 40 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexO($O1, $O2, $O3, $O4, $O5){
        $dimensi = round(( $O1 + $O2 + $O3 + $O4 + $O5 ) / 50 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexP($P1, $P2){
        $dimensi = round(( $P1 + $P2 ) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateIndexQ($Q1, $Q2, $Q3, $Q4){
        $dimensi = round(( $Q1 + $Q2 + $Q3 + $Q4 ) / 40 * 100, 2);
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
        $dimensi = round((($b7 + (10 - $b6) + (10 - $b8))) / 30 * 100,2);
        return $dimensi;
    }

    public function calculateSubDimensionBRakanSekerja($b9,$b10){
        $dimensi = round(((10 - $b9) + (10 - $b10)) / 20 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBSifatKerja($b11,$b12,$b13){
        $dimensi = round(((10 - $b11) + $b12 + $b13) / 30 * 100, 2);
        return $dimensi;
    }

    public function calculateSubDimensionBKomunikasi($b14,$b15,$b16){
        $dimensi = round(( $b14 + ( 10 - $b15 ) + ( 10 - $b16 )) / 30 * 100, 2);
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

    public function getReward(Request $request){
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }

        $hasCompleted = DB::table('entries')->select('completedR')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedR == NULL) {
                    return redirect()->route('demograph');
                }
        
        $data = array(
            'paymentChoose',
            'phone',
            'bankCompany',
            'bankAccNo',
            'bankFullName'
        );

        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        $userProgress = $this->getUserProgress($request);
        return view('users.reward', compact('user','userData','userProgress'));
    }

    public function storeReward(Request $request){
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        DB::table('entries')->where('email', $user)->update(array(
            'paymentChoose' => $request->paymentChoose,
            'phone' => $request->phone,
            'bankCompany' => $request->bankCompany,
            'bankAccNo' => $request->bankAccNo,
            'bankFullName' => $request->bankFullName
        ));
        return redirect()->route('home');
    }


}
