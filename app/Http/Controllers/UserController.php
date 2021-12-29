<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRecoverPin;

class UserController extends Controller
{
    public function getUser(Request $request){
        $user = NULL;
        if ( $request->session()->has('identity') ) {
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
            'completedR',
            'paymentChoose'
        );
        $userProgeress = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return $userProgeress;

    }

    public function adminDashboard(){

            if ( Auth::id() != 1 ) {
                abort(403, 'Unauthorized action.');
            }

            $notZero = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->first();
            if (is_null($notZero) == false){
            //$data['totalRatingB'] = $this->calculateTotalB();
            $data['totalRatingB'] = round(($this->calculateTotalBGaji() + $this->calculateTotalBPangkat() + $this->calculateTotalBKetua() + $this->calculateTotalBProsedurOperasi() + $this->calculateTotalBRakanSekerja() + $this->calculateTotalBSifatKerja() + $this->calculateTotalBKomunikasi() + $this->calculateTotalBPersekitaran()) / 800 * 100, 2);
            $data['totalRatingBMale'] = round(($this->calculateTotalBGajiMale() + $this->calculateTotalBPangkatMale() + $this->calculateTotalBKetuaMale() + $this->calculateTotalBProsedurOperasiMale() + $this->calculateTotalBRakanSekerjaMale() + $this->calculateTotalBSifatKerjaMale() + $this->calculateTotalBKomunikasiMale() + $this->calculateTotalBPersekitaranMale()) / 800 * 100, 2);
            $data['demo'] = $this->calculateTotalBPersekitaranMale();
            $data['totalRatingBFemale'] = round(($this->calculateTotalBGajiFemale() + $this->calculateTotalBPangkatFemale() + $this->calculateTotalBKetuaFemale() + $this->calculateTotalBProsedurOperasiFemale() + $this->calculateTotalBRakanSekerjaFemale() + $this->calculateTotalBSifatKerjaFemale() + $this->calculateTotalBKomunikasiFemale() + $this->calculateTotalBPersekitaranFemale()) / 800 * 100, 2);
            $data['totalRatingBGaji'] = $this->calculateTotalBGaji();
            $data['totalRatingBPangkat'] = $this->calculateTotalBPangkat();
            $data['totalRatingBKetua'] = $this->calculateTotalBKetua();
            $data['totalRatingBProsedurOperasi'] = $this->calculateTotalBProsedurOperasi();
            $data['totalRatingBRakanSekerja'] = $this->calculateTotalBRakanSekerja();
            $data['totalRatingBSifatKerja'] = $this->calculateTotalBSifatKerja();
            $data['totalRatingBKomunikasi'] = $this->calculateTotalBKomunikasi();
            $data['totalRatingBPersekitaran'] = $this->calculateTotalBPersekitaran();
            $data['totalRatingBMale'] = $this->calculateTotalBMale();
            $data['totalRatingBFemale'] = $this->calculateTotalBFemale();
            $data['totalRatingC'] = $this->calculateTotalC();
            $data['totalRatingCMale'] = $this->calculateTotalCMale();
            $data['totalRatingCFemale'] = $this->calculateTotalCFemale();
            $data['totalRatingD'] = $this->calculateTotalD();
            $data['totalRatingDMale'] = $this->calculateTotalDMale();
            $data['totalRatingDFemale'] = $this->calculateTotalDFemale();
            $data['totalRatingE'] = $this->calculateTotalE();
            $data['totalRatingEMale'] = $this->calculateTotalEMale();
            $data['totalRatingEFemale'] = $this->calculateTotalEFemale();
            $data['totalRatingF'] = $this->calculateTotalF();
            $data['totalRatingFMale'] = $this->calculateTotalFMale();
            $data['totalRatingFFemale'] = $this->calculateTotalFFemale();
            $data['totalRatingFSemangat'] = $this->calculateTotalFSemangat();
            $data['totalRatingFDedikasi'] = $this->calculateTotalFDedikasi();
            $data['totalRatingFKesungguhan'] = $this->calculateTotalFKesungguhan();
            $data['totalRatingG'] = $this->calculateTotalG();
            $data['totalRatingGMale'] = $this->calculateTotalGMale();
            $data['totalRatingGFemale'] = $this->calculateTotalGFemale();
            $data['totalRatingGPrestasiTugas'] = $this->calculateTotalGPrestasiTugas();
            $data['totalRatingGPrestasiKontekstual'] = $this->calculateTotalGPrestasiKontekstual();
            $data['totalRatingGTingkahLakuKerjaTidakProduktif'] = $this->calculateTotalGTingkahLakuKerjaTidakProduktif();
            $data['totalRatingH'] = $this->calculateTotalH();
            $data['totalRatingHMale'] = $this->calculateTotalHMale();
            $data['totalRatingHFemale'] = $this->calculateTotalHFemale();
            $data['totalRatingHKualitiPengurusan'] = $this->calculateTotalHKualitiPengurusan();
            $data['totalRatingHPPB'] = $this->calculateTotalHPPB();
            $data['totalRatingHOJP'] = $this->calculateTotalHOJP();
            $data['totalRatingHKP2'] = $this->calculateTotalHKP2();
            $data['totalRatingHKOT'] = $this->calculateTotalHKOT();
            $data['totalRatingI'] = $this->calculateTotalI();
            $data['totalRatingJ'] = $this->calculateTotalJ();
            $data['totalRatingK'] = $this->calculateTotalK();
            $data['totalRatingL'] = $this->calculateTotalL();
            $data['totalRatingM'] = $this->calculateTotalM();
            $data['totalRatingN'] = $this->calculateTotalN();
            $data['totalRatingO'] = $this->calculateTotalO();
            $data['totalRatingP'] = $this->calculateTotalP();
            $data['totalRatingQ'] = $this->calculateTotalQ();

            $data['IndeksKegembiraanKeseluruhan'] = round(($data['totalRatingB'] + $this->calculateTotalC() + $this->calculateTotalD() + $this->calculateTotalE() + $this->calculateTotalF() + $this->calculateTotalG()) / 600 * 100, 2);
            $data['IndeksOBTKeseluruhan'] = $this->calculateTotalH();
            $data['IndeksKegembiraanKeseluruhanMale'] = round(($data['totalRatingBMale'] + $this->calculateTotalCMale() + $this->calculateTotalDMale() + $this->calculateTotalEMale() + $this->calculateTotalFMale() + $this->calculateTotalGMale()) / 600 * 100, 2);
            $data['IndeksKegembiraanKeseluruhanFemale'] = round(($data['totalRatingBFemale'] + $this->calculateTotalCFemale() + $this->calculateTotalDFemale() + $this->calculateTotalEFemale() + $this->calculateTotalFFemale() + $this->calculateTotalGFemale()) / 600 * 100, 2);
            $data['IndeksOBTKeseluruhanMale'] = $this->calculateTotalHMale();
            $data['IndeksOBTKeseluruhanFemale'] = $this->calculateTotalHFemale();
            $totalResponden = DB::table('entries')
                ->where('completedR','=', '1')
                ->count();
            return view('admin.dashboard', compact('data','totalResponden', 'notZero'));
            }
            
        return view('admin.dashboard', compact('notZero'));
    }

    public function index(Request $request){
        
        $user = $this->getUser($request);

        if ($user != NULL) {
            if ($request->session()->get('verifiedAccount') == NULL){
                return redirect()->route('verifypinpage');
            }
            $accountStatus = DB::table('entries')->select('verified')->where('email', $user)->first();
            if($accountStatus->verified == 'pending'){
                return redirect()->route('send-verification');
            }
            
            $entry = DB::table('entries')->where('email','=', $user)->first();
            $notZero = DB::table('entries')->where('completedR', 1)->where('verified','verified')->first();
            $userProgress = $this->getUserProgress($request);

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
            
            if (is_null($notZero) == true){
                return view('users.user', compact('user', 'notZero', 'userProgress', 'userProgress'));
            }

            $data = array();
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
            
            $subDimension['subDimensionIKB'] = round(($subDimension['subDimensionBKepuasanKerja'] + $subDimension['subDimensionCKepuasanHidup'] + $subDimension['subDimensionDPenilaianHidup'] + $subDimension['subDimensionEAfek'] + $subDimension['subDimensionFKeterlibatanKerja'] + $subDimension['subDimensionGPrestasiKerja']) / 600 * 100, 2);
            $subDimension['subDimensionHOBT'] = $this->calculateSubDimensionHOBT($subDimension['subDimensionHKualitiPengurusan'], $subDimension['subDimensionHPenambahbaikanDanPembaharuanBerterusan'], $subDimension['subDimensionHOrientasiJangkaPanjang'], $subDimension['subDimensionHKualitiPekerja'], $subDimension['subDimensionHKeterbukaanDanOrientasiTindakan']);

            $subDimension['subDimensionI'] = $this->calculateIndexI($entry->I1, $entry->I2, $entry->I3); 
            $subDimension['subDimensionJ'] = $this->calculateIndexJ($entry->J1, $entry->J2, $entry->J3, $entry->J4, $entry->J5, $entry->J6, $entry->J7, $entry->J8, $entry->J9, $entry->J10);
            $subDimension['subDimensionK'] = $this->calculateIndexK($entry->K1, $entry->K2, $entry->K3, $entry->K4, $entry->K5, $entry->K6, $entry->K7, $entry->K8, $entry->K9, $entry->K10);
            $subDimension['subDimensionL'] = $this->calculateIndexL($entry->L1, $entry->L2, $entry->L3, $entry->L4);
            $subDimension['subDimensionM'] = $this->calculateIndexM($entry->M1, $entry->M2, $entry->M3);
            $subDimension['subDimensionN'] = $this->calculateIndexN($entry->N1, $entry->N2, $entry->N3, $entry->N4);
            $subDimension['subDimensionO'] = $this->calculateIndexO($entry->O1, $entry->O2, $entry->O3, $entry->O4, $entry->O5);      
            $subDimension['subDimensionP'] = $this->calculateIndexP($entry->P1, $entry->P2);
            $subDimension['subDimensionQ'] = $this->calculateIndexQ($entry->Q1, $entry->Q2, $entry->Q3, $entry->Q4);
            
            return view('users.user', compact('user', 'data', 'hasCompleted', 'userProgress', 'subDimension', 'notZero','accountStatus'));
            
            
        }
        return view('users.user', compact('user'));
    }

    public function storeData(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            //'email' => 'required|email|regex:/(.*)sabah\.gov\.my$/i',
        ]);
        
        $userData = DB::table('entries')->where('email', $request->email)->first();
        if ($userData == NULL) {
            $uuid = Uuid::generate();
            $temporaryPin = rand(100000,999999);
                DB::table('entries')->insert([
                    'email' => $request->email,
                    'start_at' => now(+8),
                    'uuid' => $uuid,
                    'pin' => $temporaryPin
                ]);

                $data = ['pin' => $temporaryPin ];
                Mail::to($request->email)->send(new SendRecoverPin($data));
                //$request->session()->put('identity', $request->email);
                //email account creation
                return redirect()->route('home');
        }

        $userPin = DB::table('entries')->select('pin')->where('email', $request->email)->first();
        if ($userPin->pin == NULL) {
            $request->session()->put('identity', $request->email);
            return redirect()->route('createpinpage');
        }
        $request->session()->put('identity', $request->email);
        return redirect()->route('verifypinpage');
        }
    
    public function verifyPinPage(Request $request){
        $user = $this->getUser($request);
        $userPin = DB::table('entries')->select('pin')->where('email', $user)->first();
        if ($userPin->pin == NULL) {
            return redirect()->route('createpinpage');
        }
        // $userPin = DB::table('entries')->select('pin')->where('email', $user)->first();
        // if ($userPin == NULL) {
        //     return redirect()->route('createpinpage');
        // }
        return view('users.verifipin', compact('user'));

    }

    public function verifyPin(Request $request){
        $user = $this->getUser($request);
        $userPin = DB::table('entries')->select('pin')->where('email', $user)->first();
        if ($userPin->pin != NULL) {
            if ($userPin->pin == $request->pin){
                //$request->session()->put('identity', $user);
                $request->session()->push('verifiedAccount', 1);
                return redirect()->route('demograph');
            }else{
                return back()->withErrors(['PIN tidak sah!!!']);
            }
        } else {
            return redirect()->route('createpinpage');
        }
    }

    public function newPinPage(Request $request){
        $user = $this->getUser($request);
        return view('users.createpin', compact('user'));
    }

    public function createPin(Request $request){
        $user = $this->getUser($request);
        $request->validate([
            'pin' => 'digits:6'
        ]);
        DB::table('entries')->where('email', $user)->update([
            'pin' => $request->pin
        ]);
        return redirect()->route('verifypinpage');
    }

    public function clearSession(Request $request){
        $request->session()->flush();
        return redirect('users');
    }

    public function demoGraphy(Request $request){
        
        $user = $this->getUser($request);
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }
        $data = array(
        'umur',
        'jantina',
        'agama',
        'lainAgamaDetail',
        'bangsa',
        'lainBangsaDetail',
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
        'filledA',
        'completedA'
        );
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        
        return view('users.demography', compact('user', 'userData','userProgress'));
    }

    public function storeDataDemografi(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
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
                $request->kesukaranGaji != NULL &&
                $request->tempohPerkhidmatanTahun != NULL &&
                $request->tempohPerkhidmatanBulan != NULL &&
                $request->masalahKesihatan != NULL &&
                $request->tempatTinggal != NULL &&
                $request->tinggalBersama != NULL &&
                $request->kenderaanKerja != NULL &&
                $request->penilai != NULL
                ){
                    $hasCompleted = 1;
                    $hasFilled = 1;
                } else {
                    $hasFilled = 1;
                    $hasCompleted = NULL;
                }
            
                DB::table('entries')->where('email', $user)->update(array(
                'umur' => $request->umur,
                'jantina' => $request->jantina,
                'agama' => $request->agama,
                'lainAgamaDetail' => $request->lainAgamaDetail,
                'bangsa' => $request->bangsa,
                'lainBangsaDetail' => $request->lainBangsaDetail,
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
                'filledA' => $hasFilled,
                'completedA' => $hasCompleted
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
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
        $extra = 'filledB';
        array_push($data, 'filledB');
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        $penilai = DB::table('entries')->select('penilai')->where('email', '=', $user)->get();
        return view('users.sb', compact('user', 'userData', 'userProgress', 'penilai'));
    }

    public function storeSectionB(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
            $hasCompleted = NULL;

            if ( $request->B1 != NULL && $request->B2 != NULL && $request->B3 != NULL && $request->B4 != NULL && $request->B6 != NULL && $request->B7 != NULL && $request->B8 != NULL && $request->B9 != NULL && $request->B10 != NULL && $request->B11 != NULL && $request->B12 != NULL && $request->B13 != NULL && $request->B14 != NULL && $request->B15 != NULL && $request->B16 != NULL && $request->B17 != NULL && $request->B18 != NULL )
            {
                $hasCompleted = 1;
                $hasFilled = 1;
            }else{
                $hasCompleted = NULL;
                $hasFilled = 1;
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
                'filledB' => $hasFilled,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedB')->where('email', '=', $user)->get()->toArray();
        
        if ($hasCompleted[0]->completedB == NULL) {
            return redirect()->route('home');
        }
        
        $i = 0;
        $data = array();
        while ( $i <= 1 ) {
            $i++;
            array_push($data, 'C'.$i);
        }
        $extra = 'filledC';
        array_push($data,$extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sc', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionC(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
            $hasCompleted = NULL;
            if ($request->C1 != NULL && $request->C2 != NULL) {
                $hasCompleted = 1;
                $hasFilled = 1;
            } else {
                $hasCompleted = NULL;
                $hasFilled = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'C1' => $request->C1,
                'C2' => $request->C2,
                'filledC' => $hasFilled,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedC')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedC == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 0 ) {
            $i++;
            array_push($data, 'D'.$i);
        }
        $extra = 'filledD';
        array_push($data,$extra);
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
                $hasFilled = 1;
            } else {
                $hasCompleted = NULL;
                $hasFilled = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'D1' => $request->D1,
                'filledD' => $hasFilled,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }
        
        $hasCompleted = DB::table('entries')->select('completedD')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedD == NULL) {
                    return redirect()->route('home');
                }

        $i = 0;
        $data = array();
        while ( $i <= 5 ) {
            $i++;
            array_push($data, 'E'.$i);
        }
        $extra = 'filledE';
        array_push($data,$extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.se', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionE(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
            $hasCompleted = NULL;
            if ( $request->E1 != NULL && $request->E2 != NULL && $request->E3 != NULL && $request->E4 != NULL && $request->E5 != NULL && $request->E6 != NULL ){
                $hasCompleted = 1;
                $hasFilled = 1;
            } else {
                $hasCompleted = NULL;
                $hasFilled = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'E1' => $request->E1,
                'E2' => $request->E2,
                'E3' => $request->E3,
                'E4' => $request->E4,
                'E5' => $request->E5,
                'E6' => $request->E6,
                'filledE' => $hasFilled,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedE')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedE == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 5 ) {
            $i++;
            array_push($data, 'F'.$i);
        }
        $extra = 'filledF';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sf', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionF(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
            $hasCompleted = NULL;
            if ( $request->F1 != NULL && $request->F2 != NULL && $request->F3 != NULL && $request->F4 != NULL && $request->F5 != NULL && $request->F6 != NULL ){
                $hasCompleted = 1;
                $hasFilled = 1;
            } else {
                $hasCompleted = NULL;
                $hasFilled = 1;
            }
            DB::table('entries')->where('email', $user)->update(array(
                'F1' => $request->F1,
                'F2' => $request->F2,
                'F3' => $request->F3,
                'F4' => $request->F4,
                'F5' => $request->F5,
                'F6' => $request->F6,
                'filledF' => $hasFilled,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }
        
        $hasCompleted = DB::table('entries')->select('completedF')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedF == NULL) {
                    return redirect()->route('home');
                }

        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'G'.$i);
        }
        $extra = 'filledG';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sg', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionG(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
            $hasCompleted = NULL;
            if ( $request->G1 != NULL && $request->G2 != NULL && $request->G3 != NULL && $request->G4 != NULL && $request->G5 != NULL && $request->G6 != NULL && $request->G7 != NULL && $request->G8 != NULL && $request->G9 != NULL && $request->G10 != NULL ){
                $hasCompleted = 1;
                $hasFilled = 1;
            } else {
                $hasCompleted = NULL;
                $hasFilled = 1;
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
                'filledG' => $hasFilled,
                'completedG' => $hasCompleted
            ));
            if ($hasCompleted == 1) {
                return redirect('/users/sh1');
            }
            return redirect('/users/sg');
            }
        return redirect('users');
    }

    public function sectionH1(Request $request){
        
        $user = $this->getUser($request);
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedG')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedG == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 11 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $extra = 'filledH1';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh1', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH1(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
            $hasCompleted = NULL;
            if ( $request->H1 != NULL && $request->H2 != NULL && $request->H3 != NULL && $request->H4 != NULL && $request->H5 != NULL && $request->H6 != NULL && $request->H7 != NULL && $request->H8 != NULL && $request->H9 != NULL && $request->H10 != NULL && $request->H11 != NULL && $request->H12 != NULL ){
                $hasCompleted = 1;
                $hasFilled = 1;
            } else {
                $hasCompleted = NULL;
                $hasFilled = 1;
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
                'filledH1' => $hasFilled,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedH1')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH1 == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 12;
        $data = array();
        while ( $i <= 19 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $extra = 'filledH2';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh2', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH2(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
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
            } else {
                $hasCompleted = NULL;
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
                'filledH2' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedH2')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH2 == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 20;
        $data = array();
        while ( $i <= 28 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $extra = 'filledH3';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh3', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH3(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
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
            } else {
                $hasCompleted = NULL;
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
                'filledH3' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedH3')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH3 == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 29;
        $data = array();
        while ( $i <= 34 ) {
            $i++;
            array_push($data, 'H'.$i);
        }
        $extra = 'filledH4';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sh4', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionH4(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledH4' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedH4')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedH4 == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 2 ) {
            $i++;
            array_push($data, 'I'.$i);
        }
        $extra = 'filledI';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.si', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionI(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledI' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedI')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedI == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'J'.$i);
        }
        $extra = 'filledJ';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sj', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionJ(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledJ' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedJ')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedJ == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 9 ) {
            $i++;
            array_push($data, 'K'.$i);
        }
        $extra = 'filledK';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        $statusPerkahwinan = DB::table('entries')->select('status')->where('email', '=', $user)->get();
        return view('users.sk', compact('user', 'userData', 'userProgress','statusPerkahwinan'));
    }

    public function storeSectionK(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            $statusPerkahwinan = DB::table('entries')->select('status')->where('email', '=', $user)->get();
            $hasCompleted = NULL;
            if ($statusPerkahwinan[0]->status =='Berkahwin'){
                if ( $request->K1 != NULL && $request->K2 != NULL && $request->K3 != NULL && $request->K4 != NULL && $request->K5 != NULL && $request->K6 != NULL && $request->K7 != NULL && $request->K8 != NULL && $request->K9 != NULL && $request->K10 != NULL )
                {
                    $hasCompleted = 1;
                }
                DB::table('entries')->where('email', $user)->update(array( 'K1' => $request->K1, 'K2' => $request->K2, 'K3' => $request->K3, 'K4' => $request->K4, 'K5' => $request->K5, 'K6' => $request->K6, 'K7' => $request->K7, 'K8' => $request->K8, 'K9' => $request->K9, 'K10' => $request->K10, 'filledK' => 1, 'completedK' => $hasCompleted ));
                } else {
                if ( $request->K2 != NULL && $request->K3 != NULL && $request->K4 != NULL && $request->K5 != NULL && $request->K6 != NULL && $request->K7 != NULL && $request->K8 != NULL && $request->K9 != NULL && $request->K10 != NULL )
                {
                    $hasCompleted = 1;
                }
                DB::table('entries')->where('email', $user)->update(array( 'K1' => 0, 'K2' => $request->K2, 'K3' => $request->K3, 'K4' => $request->K4, 'K5' => $request->K5, 'K6' => $request->K6, 'K7' => $request->K7, 'K8' => $request->K8, 'K9' => $request->K9, 'K10' => $request->K10, 'filledK' => 1, 'completedK' => $hasCompleted ));
            
            }
            if ($hasCompleted == 1) {
                return redirect('/users/sl');
            }
            return redirect('/users/sk');
            }
        return redirect('users');
    }

    public function sectionL(Request $request){
        
        $user = $this->getUser($request);
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedK')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedK == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 3 ) {
            $i++;
            array_push($data, 'L'.$i);
        }
        $extra = 'filledL';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sl', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionL(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledL' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedL')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedL == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 2 ) {
            $i++;
            array_push($data, 'M'.$i);
        }
        $extra = 'filledM';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sm', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionM(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
            
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
                'filledM' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedM')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedM == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 3 ) {
            $i++;
            array_push($data, 'N'.$i);
        }
        $extra = 'filledN';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sn', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionN(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledN' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedN')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedN == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 4 ) {
            $i++;
            array_push($data, 'O'.$i);
        }
        $extra = 'filledO';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.so', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionO(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledO' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedO')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedO == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 1 ) {
            $i++;
            array_push($data, 'P'.$i);
        }
        $extra = 'filledP';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sp', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionP(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledP' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedP')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedP == NULL) {
                    return redirect()->route('home');
                }
        
        $i = 0;
        $data = array();
        while ( $i <= 3 ) {
            $i++;
            array_push($data, 'Q'.$i);
        }
        $extra = 'filledQ';
        array_push($data, $extra);
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        return view('users.sq', compact('user', 'userData', 'userProgress'));
    }

    public function storeSectionQ(Request $request){
        
        $user = $this->getUser($request);
        if ( $user != NULL ){
           
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
                'filledQ' => 1,
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
        if ( $user == NULL ){
            return redirect()->route('home');
        }
        if ($request->session()->get('verifiedAccount') == NULL){
            return redirect()->route('verifypinpage');
        }

        $hasCompleted = DB::table('entries')->select('completedQ')->where('email', '=', $user)->get()->toArray();
                
                if ($hasCompleted[0]->completedQ == NULL) {
                    return redirect()->route('home');
                }
        
        $data = array(
            'komen',
            'cadangan',
            'saguhati'
        );
        $userProgress = $this->getUserProgress($request);
        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        $totalRespondedWithReward = $users = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('saguhati',1)->count();
        return view('users.sr', compact('user', 'userData', 'userProgress','totalRespondedWithReward'));
    }

    public function storeSectionR(Request $request){
        
        $user = $this->getUser($request);

        
        if ( $user != NULL ){

            $validateData = $request->validate([
                'saguhati' => 'required|numeric',
            ]);
            
            if ($request->saguhati == 0){
                
            
            DB::table('entries')->where('email', $user)->update(array(
                'komen' => $request->komen,
                'cadangan' => $request->cadangan,
                'finish_at' => now(+8),
                'saguhati' => $request->saguhati,
                'verified' => 'pending',
                'completedR' => 1
            ));
            
            return redirect()->route('home');

            } elseif ($request->saguhati == 1) {
                
                DB::table('entries')->where('email', $user)->update(array(
                    'komen' => $request->komen,
                    'cadangan' => $request->cadangan,
                    'finish_at' => now(+8),
                    'saguhati' => $request->saguhati,
                    'completedR' => NULL
                ));
                
                return redirect()->route('reward'); 
            }

        }
        return redirect('users');
    }

    public function storeSectionR2(Request $request){
        
        $user = $this->getUser($request);

        
        if ( $user != NULL ){
                
                DB::table('entries')->where('email', $user)->update(array(
                    'komen' => $request->komen,
                    'cadangan' => $request->cadangan
                ));
                
                return redirect()->route('reward'); 
            }

        return redirect('users');
    }

    public function calculateTotalB(){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B2');
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B3');
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B5');
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B8');
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B10');
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B13');
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B16');
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B18');

        $TotalResponden = count($TotalOfBRatingB1->toArray());
        
        $TotalGaji = array_sum(array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray()
        ));

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $TotalKetua = array_sum(array_merge(
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray()
        ));

        $TotalProsedurOperasiPositif = array_sum(array_merge($TotalOfBRatingB7->toArray()));
        $TotalProsedurOperasiNegatif = array_sum(array_merge(
          $TotalOfBRatingB6->toArray(),
          $TotalOfBRatingB8->toArray()
          ));

        $TotalRakanSekerja = array_sum(array_merge(
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray()
        ));

        $TotalSifatKerjaPositif = array_sum(array_merge(
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray()
        ));
       
        $TotalSifatKerjaNegatif = array_sum(array_merge(
            $TotalOfBRatingB11->toArray()
        ));

        $TotalKomunikasiPositif = array_sum(array_merge(
            $TotalOfBRatingB14->toArray()
        ));

        $TotalKomunikasiNegatif = array_sum(array_merge(
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray()
        ));

        $TotalPersekitaran = array_sum(array_merge(
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        ));

        $MaxPointRespondenGaji = $TotalResponden * 20;
        $TotalGajiPercentage = $TotalGaji / $MaxPointRespondenGaji * 100;

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;

        $MaxPointRespondenKetua = $TotalResponden * 20;
        $TotalKetuaPercentage = $TotalKetua / $MaxPointRespondenKetua * 100;

        $MaxPointRespondenProsedurOperasi = $TotalResponden * 30;
        $MaxTotalPONeg = $TotalResponden * 20;
        $TotalPONeg = $MaxTotalPONeg - $TotalProsedurOperasiNegatif;
        $TotalPOPercentage = ($TotalProsedurOperasiPositif + $TotalPONeg) / $MaxPointRespondenProsedurOperasi * 100;

        $MaxPointRS = $TotalResponden * 20;
        $TotalRSPercent = ($MaxPointRS - $TotalRakanSekerja)  / $MaxPointRS * 100;
        
        $MaxPointRespondenSifatKerja = $TotalResponden * 30; 
        $MaxPSKNeg = $TotalResponden * 10;
        $TotalSKNeg = $MaxPSKNeg - $TotalSifatKerjaNegatif;
        $TotalSKPercentage = ($TotalSifatKerjaPositif + $TotalSKNeg) / $MaxPointRespondenSifatKerja * 100;
        
        $MaxPointRespondenKom = $TotalResponden * 30; 
        $MaxPKomNeg = $TotalResponden * 20;
        $TotalKomNeg = $MaxPKomNeg - $TotalKomunikasiNegatif;
        $TotalKomPercentage = ($TotalKomunikasiPositif + $TotalKomNeg) / $MaxPointRespondenKom * 100;

        $MaxPointRespondenPersekitaran = $TotalResponden * 20;
        $TotalPersekitaranPercentage = $TotalPersekitaran / $MaxPointRespondenPersekitaran * 100;

        $totalB = round(($TotalGajiPercentage + $TotalPangkatPercentage + $TotalPOPercentage + $TotalKetuaPercentage + $TotalRSPercent + $TotalSKPercentage + $TotalKomPercentage + $TotalPersekitaranPercentage) / 800 * 100, 2);

        return $totalB;
    }

    public function calculateTotalBGaji(){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B2');

        $TotalResponden = count($TotalOfBRatingB1->toArray());
        
        $TotalGaji = array_sum(array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray()
        ));

        $MaxPointRespondenGaji = $TotalResponden * 20;
        $TotalGajiPercentage = $TotalGaji / $MaxPointRespondenGaji * 100;

        $totalBGaji = $TotalGajiPercentage / 100 * 100;

        return round($totalBGaji,2);

    }

    public function calculateTotalBGajiMale(){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B2');

        $TotalResponden = count($TotalOfBRatingB1->toArray());
        
        $TotalGaji = array_sum(array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray()
        ));

        $MaxPointRespondenGaji = $TotalResponden * 20;
        $TotalGajiPercentage = $TotalGaji / $MaxPointRespondenGaji * 100;

        $totalBGaji = $TotalGajiPercentage / 100 * 100;

        return round($totalBGaji,2);

    }

    public function calculateTotalBGajiFemale(){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B2');

        $TotalResponden = count($TotalOfBRatingB1->toArray());
        
        $TotalGaji = array_sum(array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray()
        ));

        $MaxPointRespondenGaji = $TotalResponden * 20;
        $TotalGajiPercentage = $TotalGaji / $MaxPointRespondenGaji * 100;

        $totalBGaji = $TotalGajiPercentage / 100 * 100;

        return round($totalBGaji,2);

    }

    public function calculateTotalBPangkat(){
        
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B3');

        $TotalResponden = count($TotalOfBRatingB3->toArray());
        

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;


        $totalB = $TotalPangkatPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBPangkatMale(){
        
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B3');

        $TotalResponden = count($TotalOfBRatingB3->toArray());
        

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;


        $totalB = $TotalPangkatPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBPangkatFemale(){
        
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B3');

        $TotalResponden = count($TotalOfBRatingB3->toArray());
        

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;


        $totalB = $TotalPangkatPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKetua(){
        
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B5');

        $TotalResponden = count($TotalOfBRatingB4->toArray());

        $TotalKetua = array_sum(array_merge(
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray()
        ));

        $MaxPointRespondenKetua = $TotalResponden * 20;
        $TotalKetuaPercentage = $TotalKetua / $MaxPointRespondenKetua * 100;

        $totalB = $TotalKetuaPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKetuaMale(){
        
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B5');

        $TotalResponden = count($TotalOfBRatingB4->toArray());

        $TotalKetua = array_sum(array_merge(
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray()
        ));

        $MaxPointRespondenKetua = $TotalResponden * 20;
        $TotalKetuaPercentage = $TotalKetua / $MaxPointRespondenKetua * 100;

        $totalB = $TotalKetuaPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKetuaFemale(){
        
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B5');

        $TotalResponden = count($TotalOfBRatingB4->toArray());

        $TotalKetua = array_sum(array_merge(
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray()
        ));

        $MaxPointRespondenKetua = $TotalResponden * 20;
        $TotalKetuaPercentage = $TotalKetua / $MaxPointRespondenKetua * 100;

        $totalB = $TotalKetuaPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBProsedurOperasi(){
        
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B8');
        
        $TotalResponden = count($TotalOfBRatingB6->toArray());
        

        $TotalProsedurOperasiPositif = array_sum(array_merge($TotalOfBRatingB7->toArray()));
        
        $TotalProsedurOperasiNegatif = array_sum(array_merge(
          $TotalOfBRatingB6->toArray(),
          $TotalOfBRatingB8->toArray()
          ));

        $MaxPointRespondenProsedurOperasi = $TotalResponden * 30;
        $MaxTotalPONeg = $TotalResponden * 20;
        $TotalPONeg = $MaxTotalPONeg - $TotalProsedurOperasiNegatif;
        $TotalPOPercentage = ($TotalProsedurOperasiPositif + $TotalPONeg) / $MaxPointRespondenProsedurOperasi * 100;

        $totalB = $TotalPOPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBProsedurOperasiMale(){
        
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B8');
        
        $TotalResponden = count($TotalOfBRatingB6->toArray());
        

        $TotalProsedurOperasiPositif = array_sum(array_merge($TotalOfBRatingB7->toArray()));
        
        $TotalProsedurOperasiNegatif = array_sum(array_merge(
          $TotalOfBRatingB6->toArray(),
          $TotalOfBRatingB8->toArray()
          ));

        $MaxPointRespondenProsedurOperasi = $TotalResponden * 30;
        $MaxTotalPONeg = $TotalResponden * 20;
        $TotalPONeg = $MaxTotalPONeg - $TotalProsedurOperasiNegatif;
        $TotalPOPercentage = ($TotalProsedurOperasiPositif + $TotalPONeg) / $MaxPointRespondenProsedurOperasi * 100;

        $totalB = $TotalPOPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBProsedurOperasiFemale(){
        
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B8');
        
        $TotalResponden = count($TotalOfBRatingB6->toArray());
        

        $TotalProsedurOperasiPositif = array_sum(array_merge($TotalOfBRatingB7->toArray()));
        
        $TotalProsedurOperasiNegatif = array_sum(array_merge(
          $TotalOfBRatingB6->toArray(),
          $TotalOfBRatingB8->toArray()
          ));

        $MaxPointRespondenProsedurOperasi = $TotalResponden * 30;
        $MaxTotalPONeg = $TotalResponden * 20;
        $TotalPONeg = $MaxTotalPONeg - $TotalProsedurOperasiNegatif;
        $TotalPOPercentage = ($TotalProsedurOperasiPositif + $TotalPONeg) / $MaxPointRespondenProsedurOperasi * 100;

        $totalB = $TotalPOPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBRakanSekerja(){
        
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B10');
        
        $TotalResponden = count($TotalOfBRatingB9->toArray());
        
        $TotalRakanSekerja = array_sum(array_merge(
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray()
        ));

        $MaxPointRS = $TotalResponden * 20;
        $TotalRSPercent = ($MaxPointRS - $TotalRakanSekerja)  / $MaxPointRS * 100;
        
        $totalB = $TotalRSPercent / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBRakanSekerjaMale(){
        
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B10');
        
        $TotalResponden = count($TotalOfBRatingB9->toArray());
        
        $TotalRakanSekerja = array_sum(array_merge(
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray()
        ));

        $MaxPointRS = $TotalResponden * 20;
        $TotalRSPercent = ($MaxPointRS - $TotalRakanSekerja)  / $MaxPointRS * 100;
        
        $totalB = $TotalRSPercent / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBRakanSekerjaFemale(){
        
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B10');
        
        $TotalResponden = count($TotalOfBRatingB9->toArray());
        
        $TotalRakanSekerja = array_sum(array_merge(
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray()
        ));

        $MaxPointRS = $TotalResponden * 20;
        $TotalRSPercent = ($MaxPointRS - $TotalRakanSekerja)  / $MaxPointRS * 100;
        
        $totalB = $TotalRSPercent / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBSifatKerja(){
        
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B13');

        $TotalResponden = count($TotalOfBRatingB11->toArray());
        

        $TotalSifatKerjaPositif = array_sum(array_merge(
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray()
        ));
       
        $TotalSifatKerjaNegatif = array_sum(array_merge(
            $TotalOfBRatingB11->toArray()
        ));

        $MaxPointRespondenSifatKerja = $TotalResponden * 30; 
        $MaxPSKNeg = $TotalResponden * 10;
        $TotalSKNeg = $MaxPSKNeg - $TotalSifatKerjaNegatif;
        $TotalSKPercentage = ($TotalSifatKerjaPositif + $TotalSKNeg) / $MaxPointRespondenSifatKerja * 100;
        
        $totalB = $TotalSKPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBSifatKerjaMale(){
        
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B13');

        $TotalResponden = count($TotalOfBRatingB11->toArray());
        

        $TotalSifatKerjaPositif = array_sum(array_merge(
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray()
        ));
       
        $TotalSifatKerjaNegatif = array_sum(array_merge(
            $TotalOfBRatingB11->toArray()
        ));

        $MaxPointRespondenSifatKerja = $TotalResponden * 30; 
        $MaxPSKNeg = $TotalResponden * 10;
        $TotalSKNeg = $MaxPSKNeg - $TotalSifatKerjaNegatif;
        $TotalSKPercentage = ($TotalSifatKerjaPositif + $TotalSKNeg) / $MaxPointRespondenSifatKerja * 100;
        
        $totalB = $TotalSKPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBSifatKerjaFemale(){
        
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B13');

        $TotalResponden = count($TotalOfBRatingB11->toArray());
        

        $TotalSifatKerjaPositif = array_sum(array_merge(
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray()
        ));
       
        $TotalSifatKerjaNegatif = array_sum(array_merge(
            $TotalOfBRatingB11->toArray()
        ));

        $MaxPointRespondenSifatKerja = $TotalResponden * 30; 
        $MaxPSKNeg = $TotalResponden * 10;
        $TotalSKNeg = $MaxPSKNeg - $TotalSifatKerjaNegatif;
        $TotalSKPercentage = ($TotalSifatKerjaPositif + $TotalSKNeg) / $MaxPointRespondenSifatKerja * 100;
        
        $totalB = $TotalSKPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKomunikasi(){
        
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B16');
        
        $TotalResponden = count($TotalOfBRatingB14->toArray());

        $TotalKomunikasiPositif = array_sum(array_merge(
            $TotalOfBRatingB14->toArray()
        ));

        $TotalKomunikasiNegatif = array_sum(array_merge(
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray()
        ));

        $MaxPointRespondenKom = $TotalResponden * 30; 
        $MaxPKomNeg = $TotalResponden * 20;
        $TotalKomNeg = $MaxPKomNeg - $TotalKomunikasiNegatif;
        $TotalKomPercentage = ($TotalKomunikasiPositif + $TotalKomNeg) / $MaxPointRespondenKom * 100;

        $totalB = $TotalKomPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKomunikasiMale(){
        
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B16');
        
        $TotalResponden = count($TotalOfBRatingB14->toArray());

        $TotalKomunikasiPositif = array_sum(array_merge(
            $TotalOfBRatingB14->toArray()
        ));

        $TotalKomunikasiNegatif = array_sum(array_merge(
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray()
        ));

        $MaxPointRespondenKom = $TotalResponden * 30; 
        $MaxPKomNeg = $TotalResponden * 20;
        $TotalKomNeg = $MaxPKomNeg - $TotalKomunikasiNegatif;
        $TotalKomPercentage = ($TotalKomunikasiPositif + $TotalKomNeg) / $MaxPointRespondenKom * 100;

        $totalB = $TotalKomPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKomunikasiFemale(){
        
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B16');
        
        $TotalResponden = count($TotalOfBRatingB14->toArray());

        $TotalKomunikasiPositif = array_sum(array_merge(
            $TotalOfBRatingB14->toArray()
        ));

        $TotalKomunikasiNegatif = array_sum(array_merge(
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray()
        ));

        $MaxPointRespondenKom = $TotalResponden * 30; 
        $MaxPKomNeg = $TotalResponden * 20;
        $TotalKomNeg = $MaxPKomNeg - $TotalKomunikasiNegatif;
        $TotalKomPercentage = ($TotalKomunikasiPositif + $TotalKomNeg) / $MaxPointRespondenKom * 100;

        $totalB = $TotalKomPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBPersekitaran(){
        
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('B18');

        $TotalResponden = count($TotalOfBRatingB17->toArray());
        
        $TotalPersekitaran = array_sum(array_merge(
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        ));

        $MaxPointRespondenPersekitaran = $TotalResponden * 20;
        $TotalPersekitaranPercentage = $TotalPersekitaran / $MaxPointRespondenPersekitaran * 100;

        $totalB = $TotalPersekitaranPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBPersekitaranMale(){
        
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('B18');

        $TotalResponden = count($TotalOfBRatingB17->toArray());
        
        $TotalPersekitaran = array_sum(array_merge(
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        ));

        $MaxPointRespondenPersekitaran = $TotalResponden * 20;
        $TotalPersekitaranPercentage = $TotalPersekitaran / $MaxPointRespondenPersekitaran * 100;

        $totalB = $TotalPersekitaranPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBPersekitaranFemale(){
        
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('B18');

        $TotalResponden = count($TotalOfBRatingB17->toArray());
        
        $TotalPersekitaran = array_sum(array_merge(
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        ));

        $MaxPointRespondenPersekitaran = $TotalResponden * 20;
        $TotalPersekitaranPercentage = $TotalPersekitaran / $MaxPointRespondenPersekitaran * 100;

        $totalB = $TotalPersekitaranPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBMale(){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B2');
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B3');
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B5');
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B8');
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B10');
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B13');
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B16');
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('B18');

        $TotalResponden = count($TotalOfBRatingB1->toArray());
        
        $TotalGaji = array_sum(array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray()
        ));

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $TotalKetua = array_sum(array_merge(
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray()
        ));

        $TotalProsedurOperasiPositif = array_sum(array_merge($TotalOfBRatingB7->toArray()));
        $TotalProsedurOperasiNegatif = array_sum(array_merge(
          $TotalOfBRatingB6->toArray(),
          $TotalOfBRatingB8->toArray()
          ));

        $TotalRakanSekerja = array_sum(array_merge(
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray()
        ));

        $TotalSifatKerjaPositif = array_sum(array_merge(
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray()
        ));
       
        $TotalSifatKerjaNegatif = array_sum(array_merge(
            $TotalOfBRatingB11->toArray()
        ));

        $TotalKomunikasiPositif = array_sum(array_merge(
            $TotalOfBRatingB14->toArray()
        ));

        $TotalKomunikasiNegatif = array_sum(array_merge(
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray()
        ));

        $TotalPersekitaran = array_sum(array_merge(
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        ));

        $MaxPointRespondenGaji = $TotalResponden * 20;
        $TotalGajiPercentage = $TotalGaji / $MaxPointRespondenGaji * 100;

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;

        $MaxPointRespondenKetua = $TotalResponden * 20;
        $TotalKetuaPercentage = $TotalKetua / $MaxPointRespondenKetua * 100;

        $MaxPointRespondenProsedurOperasi = $TotalResponden * 30;
        $MaxTotalPONeg = $TotalResponden * 20;
        $TotalPONeg = $MaxTotalPONeg - $TotalProsedurOperasiNegatif;
        $TotalPOPercentage = ($TotalProsedurOperasiPositif + $TotalPONeg) / $MaxPointRespondenProsedurOperasi * 100;

        $MaxPointRS = $TotalResponden * 20;
        $TotalRSPercent = ($MaxPointRS - $TotalRakanSekerja)  / $MaxPointRS * 100;
        
        $MaxPointRespondenSifatKerja = $TotalResponden * 30; 
        $MaxPSKNeg = $TotalResponden * 10;
        $TotalSKNeg = $MaxPSKNeg - $TotalSifatKerjaNegatif;
        $TotalSKPercentage = ($TotalSifatKerjaPositif + $TotalSKNeg) / $MaxPointRespondenSifatKerja * 100;
        
        $MaxPointRespondenKom = $TotalResponden * 30; 
        $MaxPKomNeg = $TotalResponden * 20;
        $TotalKomNeg = $MaxPKomNeg - $TotalKomunikasiNegatif;
        $TotalKomPercentage = ($TotalKomunikasiPositif + $TotalKomNeg) / $MaxPointRespondenKom * 100;

        $MaxPointRespondenPersekitaran = $TotalResponden * 20;
        $TotalPersekitaranPercentage = $TotalPersekitaran / $MaxPointRespondenPersekitaran * 100;

        $totalB = round(($TotalGajiPercentage + $TotalPangkatPercentage + $TotalPOPercentage + $TotalKetuaPercentage + $TotalRSPercent + $TotalSKPercentage + $TotalKomPercentage + $TotalPersekitaranPercentage) / 800 * 100, 2);

        return $totalB;

    }

    public function calculateTotalBFemale(){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B2');
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B3');
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B5');
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B8');
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B10');
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B13');
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B16');
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->pluck('B18');

        $TotalResponden = count($TotalOfBRatingB1->toArray());
        
        $TotalGaji = array_sum(array_merge(
            $TotalOfBRatingB1->toArray(),
            $TotalOfBRatingB2->toArray()
        ));

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $TotalKetua = array_sum(array_merge(
            $TotalOfBRatingB4->toArray(),
            $TotalOfBRatingB5->toArray()
        ));

        $TotalProsedurOperasiPositif = array_sum(array_merge($TotalOfBRatingB7->toArray()));
        $TotalProsedurOperasiNegatif = array_sum(array_merge(
          $TotalOfBRatingB6->toArray(),
          $TotalOfBRatingB8->toArray()
          ));

        $TotalRakanSekerja = array_sum(array_merge(
            $TotalOfBRatingB9->toArray(),
            $TotalOfBRatingB10->toArray()
        ));

        $TotalSifatKerjaPositif = array_sum(array_merge(
            $TotalOfBRatingB12->toArray(),
            $TotalOfBRatingB13->toArray()
        ));
       
        $TotalSifatKerjaNegatif = array_sum(array_merge(
            $TotalOfBRatingB11->toArray()
        ));

        $TotalKomunikasiPositif = array_sum(array_merge(
            $TotalOfBRatingB14->toArray()
        ));

        $TotalKomunikasiNegatif = array_sum(array_merge(
            $TotalOfBRatingB15->toArray(),
            $TotalOfBRatingB16->toArray()
        ));

        $TotalPersekitaran = array_sum(array_merge(
            $TotalOfBRatingB17->toArray(),
            $TotalOfBRatingB18->toArray()
        ));

        $MaxPointRespondenGaji = $TotalResponden * 20;
        $TotalGajiPercentage = $TotalGaji / $MaxPointRespondenGaji * 100;

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;

        $MaxPointRespondenKetua = $TotalResponden * 20;
        $TotalKetuaPercentage = $TotalKetua / $MaxPointRespondenKetua * 100;

        $MaxPointRespondenProsedurOperasi = $TotalResponden * 30;
        $MaxTotalPONeg = $TotalResponden * 20;
        $TotalPONeg = $MaxTotalPONeg - $TotalProsedurOperasiNegatif;
        $TotalPOPercentage = ($TotalProsedurOperasiPositif + $TotalPONeg) / $MaxPointRespondenProsedurOperasi * 100;

        $MaxPointRS = $TotalResponden * 20;
        $TotalRSPercent = ($MaxPointRS - $TotalRakanSekerja)  / $MaxPointRS * 100;
        
        $MaxPointRespondenSifatKerja = $TotalResponden * 30; 
        $MaxPSKNeg = $TotalResponden * 10;
        $TotalSKNeg = $MaxPSKNeg - $TotalSifatKerjaNegatif;
        $TotalSKPercentage = ($TotalSifatKerjaPositif + $TotalSKNeg) / $MaxPointRespondenSifatKerja * 100;
        
        $MaxPointRespondenKom = $TotalResponden * 30; 
        $MaxPKomNeg = $TotalResponden * 20;
        $TotalKomNeg = $MaxPKomNeg - $TotalKomunikasiNegatif;
        $TotalKomPercentage = ($TotalKomunikasiPositif + $TotalKomNeg) / $MaxPointRespondenKom * 100;

        $MaxPointRespondenPersekitaran = $TotalResponden * 20;
        $TotalPersekitaranPercentage = $TotalPersekitaran / $MaxPointRespondenPersekitaran * 100;

        $totalB = round(($TotalGajiPercentage + $TotalPangkatPercentage + $TotalPOPercentage + $TotalKetuaPercentage + $TotalRSPercent + $TotalSKPercentage + $TotalKomPercentage + $TotalPersekitaranPercentage) / 800 * 100, 2);
        
        return $totalB;

    }

    public function calculateTotalC(){
        $TotalOfCRatingC1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('C2');
        
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

    public function calculateTotalCMale(){
        $TotalOfCRatingC1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('C2');
        
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

    public function calculateTotalCFemale(){
        $TotalOfCRatingC1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('C2');
        
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
        $TotalOfDRatingD1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('D1');
        
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

    public function calculateTotalDMale(){
        $TotalOfDRatingD1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('D1');
        
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

    public function calculateTotalDFemale(){
        $TotalOfDRatingD1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('D1');
        
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
        $TotalOfERatingE1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('E6');
        
        $TotalResponden = count($TotalOfERatingE1->toArray());

        $TotalAP = array_sum(array_merge(
            $TotalOfERatingE1->toArray(),
            $TotalOfERatingE2->toArray(),
            $TotalOfERatingE3->toArray()
        ));

        $TotalAN = array_sum(array_merge(
            $TotalOfERatingE4->toArray(),
            $TotalOfERatingE5->toArray(),
            $TotalOfERatingE6->toArray()
        ));

        $MaxPointsAP = $TotalResponden * 30;
        $TotalAPPercent = $TotalAP / $MaxPointsAP * 100;

        $MaxPointsAN = $TotalResponden * 30; 
        $TotalANPercent = ($MaxPointsAN - $TotalAN) / $MaxPointsAN * 100;        
        
        $totalE = round(($TotalAPPercent + $TotalANPercent) / 200 * 100, 2);
        

        return $totalE;
    }

    public function calculateTotalEMale(){
        $TotalOfERatingE1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('E6');
        
        $TotalResponden = count($TotalOfERatingE1->toArray());

        $TotalAP = array_sum(array_merge(
            $TotalOfERatingE1->toArray(),
            $TotalOfERatingE2->toArray(),
            $TotalOfERatingE3->toArray()
        ));

        $TotalAN = array_sum(array_merge(
            $TotalOfERatingE4->toArray(),
            $TotalOfERatingE5->toArray(),
            $TotalOfERatingE6->toArray()
        ));

        $MaxPointsAP = $TotalResponden * 30;
        $TotalAPPercent = $TotalAP / $MaxPointsAP * 100;

        $MaxPointsAN = $TotalResponden * 30; 
        $TotalANPercent = ($MaxPointsAN - $TotalAN) / $MaxPointsAN * 100;        
        
        $totalE = round(($TotalAPPercent + $TotalANPercent) / 200 * 100, 2);
        

        return $totalE;
    }

    public function calculateTotalEFemale(){
        $TotalOfERatingE1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('E6');
        
        $TotalResponden = count($TotalOfERatingE1->toArray());

        $TotalAP = array_sum(array_merge(
            $TotalOfERatingE1->toArray(),
            $TotalOfERatingE2->toArray(),
            $TotalOfERatingE3->toArray()
        ));

        $TotalAN = array_sum(array_merge(
            $TotalOfERatingE4->toArray(),
            $TotalOfERatingE5->toArray(),
            $TotalOfERatingE6->toArray()
        ));

        $MaxPointsAP = $TotalResponden * 30;
        $TotalAPPercent = $TotalAP / $MaxPointsAP * 100;

        $MaxPointsAN = $TotalResponden * 30; 
        $TotalANPercent = ($MaxPointsAN - $TotalAN) / $MaxPointsAN * 100;        
        
        $totalE = round(($TotalAPPercent + $TotalANPercent) / 200 * 100, 2);
        

        return $totalE;
    }

    public function calculateTotalF(){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F6');
        
        $totalFS = array_sum(array_merge(
            $TotalOfFRatingF1->toArray(),
            $TotalOfFRatingF2->toArray(),
        ));
        $totalFD = array_sum(array_merge(
            $TotalOfFRatingF3->toArray(),
            $TotalOfFRatingF4->toArray(),
        ));
        $totalFK = array_sum(array_merge(
            $TotalOfFRatingF5->toArray(),
            $TotalOfFRatingF6->toArray(),
        ));

        $TotalResponden = count($TotalOfFRatingF1->toArray());
        
        $MaxPointFS = $TotalResponden * 20;
        $TotalFSPercent = $totalFS / $MaxPointFS * 100;
        
        $MaxPointFD = $TotalResponden * 20;
        $TotalFDPercent = $totalFD / $MaxPointFD * 100;
        
        $MaxPointFK = $TotalResponden * 20;
        $TotalFKPercent = $totalFK / $MaxPointFK * 100;

        $totalF = round(($TotalFSPercent + $TotalFDPercent + $TotalFKPercent) / 300 * 100, 2);

        return $totalF;
    }

    public function calculateTotalFMale(){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('F6');
        
        $totalFS = array_sum(array_merge(
            $TotalOfFRatingF1->toArray(),
            $TotalOfFRatingF2->toArray(),
        ));
        $totalFD = array_sum(array_merge(
            $TotalOfFRatingF3->toArray(),
            $TotalOfFRatingF4->toArray(),
        ));
        $totalFK = array_sum(array_merge(
            $TotalOfFRatingF5->toArray(),
            $TotalOfFRatingF6->toArray(),
        ));

        $TotalResponden = count($TotalOfFRatingF1->toArray());
        
        $MaxPointFS = $TotalResponden * 20;
        $TotalFSPercent = $totalFS / $MaxPointFS * 100;
        
        $MaxPointFD = $TotalResponden * 20;
        $TotalFDPercent = $totalFD / $MaxPointFD * 100;
        
        $MaxPointFK = $TotalResponden * 20;
        $TotalFKPercent = $totalFK / $MaxPointFK * 100;

        $totalF = round(($TotalFSPercent + $TotalFDPercent + $TotalFKPercent) / 300 * 100, 2);

        return $totalF;
    }

    public function calculateTotalFFemale(){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('F6');
        
        $totalFS = array_sum(array_merge(
            $TotalOfFRatingF1->toArray(),
            $TotalOfFRatingF2->toArray(),
        ));
        $totalFD = array_sum(array_merge(
            $TotalOfFRatingF3->toArray(),
            $TotalOfFRatingF4->toArray(),
        ));
        $totalFK = array_sum(array_merge(
            $TotalOfFRatingF5->toArray(),
            $TotalOfFRatingF6->toArray(),
        ));

        $TotalResponden = count($TotalOfFRatingF1->toArray());
        
        $MaxPointFS = $TotalResponden * 20;
        $TotalFSPercent = $totalFS / $MaxPointFS * 100;
        
        $MaxPointFD = $TotalResponden * 20;
        $TotalFDPercent = $totalFD / $MaxPointFD * 100;
        
        $MaxPointFK = $TotalResponden * 20;
        $TotalFKPercent = $totalFK / $MaxPointFK * 100;

        $totalF = round(($TotalFSPercent + $TotalFDPercent + $TotalFKPercent) / 300 * 100, 2);

        return $totalF;
    }


    public function calculateTotalFSemangat(){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F2');
        
        $totalFS = array_sum(array_merge(
            $TotalOfFRatingF1->toArray(),
            $TotalOfFRatingF2->toArray(),
        ));

        $TotalResponden = count($TotalOfFRatingF1->toArray());
        
        $MaxPointFS = $TotalResponden * 20;
        $TotalFSPercent = $totalFS / $MaxPointFS * 100;

        $totalF = round($TotalFSPercent / 100 * 100, 2);

        return $totalF;
    }
    public function calculateTotalFDedikasi(){
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F4');
        
        $totalFD = array_sum(array_merge(
            $TotalOfFRatingF3->toArray(),
            $TotalOfFRatingF4->toArray(),
        ));

        $TotalResponden = count($TotalOfFRatingF3->toArray());
        
        $MaxPointFD = $TotalResponden * 20;
        $TotalFDPercent = $totalFD / $MaxPointFD * 100;
        
        $totalF = round($TotalFDPercent / 100 * 100, 2);

        return $totalF;
    }
    public function calculateTotalFKesungguhan(){
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('F6');
        
        $totalFK = array_sum(array_merge(
            $TotalOfFRatingF5->toArray(),
            $TotalOfFRatingF6->toArray(),
        ));

        $TotalResponden = count($TotalOfFRatingF5->toArray());
        
        $MaxPointFK = $TotalResponden * 20;
        $TotalFKPercent = $totalFK / $MaxPointFK * 100;

        $totalF = round($TotalFKPercent / 100 * 100, 2);

        return $totalF;
    }

    public function calculateTotalG(){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G10');

        $countTotalResponden = count($TotalOfGRatingG1->toArray());
        
        $TotalPrestasiTugas = array_sum(array_merge(
            $TotalOfGRatingG1->toArray(),
            $TotalOfGRatingG2->toArray(),
            $TotalOfGRatingG3->toArray()
        ));

        $TotalPrestasiKontekstual = array_sum(array_merge(
            $TotalOfGRatingG4->toArray(),
            $TotalOfGRatingG5->toArray(),
            $TotalOfGRatingG6->toArray(),
            $TotalOfGRatingG7->toArray(),
            $TotalOfGRatingG8->toArray()
        ));

        $TotalTingkahLakuKerjaTidakProduktif = array_sum(array_merge(
            $TotalOfGRatingG9->toArray(),
            $TotalOfGRatingG10->toArray()
        ));
        
        $MaxPointsRespondenPrestasiTugas = $countTotalResponden * 30;
        $TotalPrestasiTugasPercentage = round($TotalPrestasiTugas / $MaxPointsRespondenPrestasiTugas * 100, 2);

        $MaxPointsRespondenPrestasiKontekstual = $countTotalResponden * 50;
        $TotalPrestasiKontekstualPercentage = round($TotalPrestasiKontekstual / $MaxPointsRespondenPrestasiKontekstual * 100, 2);
        
        $MaxPointsTingkahLakuKerjaTidakProduktif = $countTotalResponden * 20;
        $TotalTingkahLakuKerjaTidakProduktifPercentage = round(($MaxPointsTingkahLakuKerjaTidakProduktif - $TotalTingkahLakuKerjaTidakProduktif) / $MaxPointsTingkahLakuKerjaTidakProduktif * 100,2);
        
        $totalG = ($TotalPrestasiTugasPercentage + $TotalPrestasiKontekstualPercentage + $TotalTingkahLakuKerjaTidakProduktifPercentage) / 300 * 100;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalGMale(){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->pluck('G10');

        $countTotalResponden = count($TotalOfGRatingG1->toArray());
        
        $TotalPrestasiTugas = array_sum(array_merge(
            $TotalOfGRatingG1->toArray(),
            $TotalOfGRatingG2->toArray(),
            $TotalOfGRatingG3->toArray()
        ));

        $TotalPrestasiKontekstual = array_sum(array_merge(
            $TotalOfGRatingG4->toArray(),
            $TotalOfGRatingG5->toArray(),
            $TotalOfGRatingG6->toArray(),
            $TotalOfGRatingG7->toArray(),
            $TotalOfGRatingG8->toArray()
        ));

        $TotalTingkahLakuKerjaTidakProduktif = array_sum(array_merge(
            $TotalOfGRatingG9->toArray(),
            $TotalOfGRatingG10->toArray()
        ));
        
        $MaxPointsRespondenPrestasiTugas = $countTotalResponden * 30;
        $TotalPrestasiTugasPercentage = round($TotalPrestasiTugas / $MaxPointsRespondenPrestasiTugas * 100, 2);

        $MaxPointsRespondenPrestasiKontekstual = $countTotalResponden * 50;
        $TotalPrestasiKontekstualPercentage = round($TotalPrestasiKontekstual / $MaxPointsRespondenPrestasiKontekstual * 100, 2);
        
        $MaxPointsTingkahLakuKerjaTidakProduktif = $countTotalResponden * 20;
        $TotalTingkahLakuKerjaTidakProduktifPercentage = round(($MaxPointsTingkahLakuKerjaTidakProduktif - $TotalTingkahLakuKerjaTidakProduktif) / $MaxPointsTingkahLakuKerjaTidakProduktif * 100,2);
        
        $totalG = ($TotalPrestasiTugasPercentage + $TotalPrestasiKontekstualPercentage + $TotalTingkahLakuKerjaTidakProduktifPercentage) / 300 * 100;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalGFemale(){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('G10');

        $countTotalResponden = count($TotalOfGRatingG1->toArray());
        
        $TotalPrestasiTugas = array_sum(array_merge(
            $TotalOfGRatingG1->toArray(),
            $TotalOfGRatingG2->toArray(),
            $TotalOfGRatingG3->toArray()
        ));

        $TotalPrestasiKontekstual = array_sum(array_merge(
            $TotalOfGRatingG4->toArray(),
            $TotalOfGRatingG5->toArray(),
            $TotalOfGRatingG6->toArray(),
            $TotalOfGRatingG7->toArray(),
            $TotalOfGRatingG8->toArray()
        ));

        $TotalTingkahLakuKerjaTidakProduktif = array_sum(array_merge(
            $TotalOfGRatingG9->toArray(),
            $TotalOfGRatingG10->toArray()
        ));
        
        $MaxPointsRespondenPrestasiTugas = $countTotalResponden * 30;
        $TotalPrestasiTugasPercentage = round($TotalPrestasiTugas / $MaxPointsRespondenPrestasiTugas * 100, 2);

        $MaxPointsRespondenPrestasiKontekstual = $countTotalResponden * 50;
        $TotalPrestasiKontekstualPercentage = round($TotalPrestasiKontekstual / $MaxPointsRespondenPrestasiKontekstual * 100, 2);
        
        $MaxPointsTingkahLakuKerjaTidakProduktif = $countTotalResponden * 20;
        $TotalTingkahLakuKerjaTidakProduktifPercentage = round(($MaxPointsTingkahLakuKerjaTidakProduktif - $TotalTingkahLakuKerjaTidakProduktif) / $MaxPointsTingkahLakuKerjaTidakProduktif * 100,2);
        
        $totalG = ($TotalPrestasiTugasPercentage + $TotalPrestasiKontekstualPercentage + $TotalTingkahLakuKerjaTidakProduktifPercentage) / 300 * 100;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalGPrestasiTugas(){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G3');
        
        $countTotalResponden = count($TotalOfGRatingG1->toArray());
        
        $TotalPrestasiTugas = array_sum(array_merge(
            $TotalOfGRatingG1->toArray(),
            $TotalOfGRatingG2->toArray(),
            $TotalOfGRatingG3->toArray()
        ));
        
        $MaxPointsRespondenPrestasiTugas = $countTotalResponden * 30;
        $TotalPrestasiTugasPercentage = round($TotalPrestasiTugas / $MaxPointsRespondenPrestasiTugas * 100, 2);

        $totalG = $TotalPrestasiTugasPercentage / 100 * 100;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalGPrestasiKontekstual(){
        
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G8');
        
        $countTotalResponden = count($TotalOfGRatingG4->toArray());

        $TotalPrestasiKontekstual = array_sum(array_merge(
            $TotalOfGRatingG4->toArray(),
            $TotalOfGRatingG5->toArray(),
            $TotalOfGRatingG6->toArray(),
            $TotalOfGRatingG7->toArray(),
            $TotalOfGRatingG8->toArray()
        ));
        
        $MaxPointsRespondenPrestasiKontekstual = $countTotalResponden * 50;
        $TotalPrestasiKontekstualPercentage = round($TotalPrestasiKontekstual / $MaxPointsRespondenPrestasiKontekstual * 100, 2);
        
        $totalG = $TotalPrestasiKontekstualPercentage / 100 * 100;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalGTingkahLakuKerjaTidakProduktif(){
        
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('G10');

        $countTotalResponden = count($TotalOfGRatingG9->toArray());

        $TotalTingkahLakuKerjaTidakProduktif = array_sum(array_merge(
            $TotalOfGRatingG9->toArray(),
            $TotalOfGRatingG10->toArray()
        ));
        
        $MaxPointsTingkahLakuKerjaTidakProduktif = $countTotalResponden * 20;
        $TotalTingkahLakuKerjaTidakProduktifPercentage = round(($MaxPointsTingkahLakuKerjaTidakProduktif - $TotalTingkahLakuKerjaTidakProduktif) / $MaxPointsTingkahLakuKerjaTidakProduktif * 100,2);
        
        $totalG = $TotalTingkahLakuKerjaTidakProduktifPercentage / 100 * 100;
        $totalG = round($totalG, 2);

        return $totalG;

    }

    public function calculateTotalH(){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H35');
        
        $TotalHKP1 = array_sum(array_merge(
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
            $TotalOfHRatingH12->toArray()
        ));

        $TotalHPPB = array_sum(array_merge(
            $TotalOfHRatingH13->toArray(),
            $TotalOfHRatingH14->toArray(),
            $TotalOfHRatingH15->toArray(),
            $TotalOfHRatingH16->toArray(),
            $TotalOfHRatingH17->toArray(),
            $TotalOfHRatingH18->toArray(),
            $TotalOfHRatingH19->toArray(),
            $TotalOfHRatingH20->toArray()
        )); 
        $TotalHOJP = array_sum(array_merge(
            $TotalOfHRatingH21->toArray(),
            $TotalOfHRatingH22->toArray(),
            $TotalOfHRatingH23->toArray(),
            $TotalOfHRatingH24->toArray(),
            $TotalOfHRatingH25->toArray()
        ));
        $TotalHKP2 = array_sum(array_merge(
            $TotalOfHRatingH26->toArray(),
            $TotalOfHRatingH27->toArray(),
            $TotalOfHRatingH28->toArray(),
            $TotalOfHRatingH29->toArray()
        ));
        $TotalHKOT = array_sum(array_merge(
            $TotalOfHRatingH30->toArray(),
            $TotalOfHRatingH31->toArray(),
            $TotalOfHRatingH32->toArray(),
            $TotalOfHRatingH33->toArray(),
            $TotalOfHRatingH34->toArray(),
            $TotalOfHRatingH35->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH1->toArray());

        $MaxPointHKP1 = $TotalResponden * 120;
        $TotalHKP1Percent = $TotalHKP1 / $MaxPointHKP1 * 100;

        $MaxPointHPPB = $TotalResponden * 80;
        $TotalHPPBPercent = $TotalHPPB / $MaxPointHPPB * 100;

        $MaxPointHOJP = $TotalResponden * 50;
        $TotalHOJPPercent = $TotalHOJP / $MaxPointHOJP * 100;

        $MaxPointHKP2 = $TotalResponden * 40;
        $TotalHKP2Percent = $TotalHKP2 / $MaxPointHKP2 * 100;

        $MaxPointHKOT = $TotalResponden * 60;
        $TotalHKOTPercent = $TotalHKOT / $MaxPointHKOT * 100;

        $totalH = round(($TotalHKP1Percent + $TotalHPPBPercent + $TotalHOJPPercent + $TotalHKP2Percent + $TotalHKOTPercent) / 500 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHMale(){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->pluck('H35');
        
        $TotalHKP1 = array_sum(array_merge(
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
            $TotalOfHRatingH12->toArray()
        ));

        $TotalHPPB = array_sum(array_merge(
            $TotalOfHRatingH13->toArray(),
            $TotalOfHRatingH14->toArray(),
            $TotalOfHRatingH15->toArray(),
            $TotalOfHRatingH16->toArray(),
            $TotalOfHRatingH17->toArray(),
            $TotalOfHRatingH18->toArray(),
            $TotalOfHRatingH19->toArray(),
            $TotalOfHRatingH20->toArray()
        )); 
        $TotalHOJP = array_sum(array_merge(
            $TotalOfHRatingH21->toArray(),
            $TotalOfHRatingH22->toArray(),
            $TotalOfHRatingH23->toArray(),
            $TotalOfHRatingH24->toArray(),
            $TotalOfHRatingH25->toArray()
        ));
        $TotalHKP2 = array_sum(array_merge(
            $TotalOfHRatingH26->toArray(),
            $TotalOfHRatingH27->toArray(),
            $TotalOfHRatingH28->toArray(),
            $TotalOfHRatingH29->toArray()
        ));
        $TotalHKOT = array_sum(array_merge(
            $TotalOfHRatingH30->toArray(),
            $TotalOfHRatingH31->toArray(),
            $TotalOfHRatingH32->toArray(),
            $TotalOfHRatingH33->toArray(),
            $TotalOfHRatingH34->toArray(),
            $TotalOfHRatingH35->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH1->toArray());

        $MaxPointHKP1 = $TotalResponden * 120;
        $TotalHKP1Percent = $TotalHKP1 / $MaxPointHKP1 * 100;

        $MaxPointHPPB = $TotalResponden * 80;
        $TotalHPPBPercent = $TotalHPPB / $MaxPointHPPB * 100;

        $MaxPointHOJP = $TotalResponden * 50;
        $TotalHOJPPercent = $TotalHOJP / $MaxPointHOJP * 100;

        $MaxPointHKP2 = $TotalResponden * 40;
        $TotalHKP2Percent = $TotalHKP2 / $MaxPointHKP2 * 100;

        $MaxPointHKOT = $TotalResponden * 60;
        $TotalHKOTPercent = $TotalHKOT / $MaxPointHKOT * 100;

        $totalH = round(($TotalHKP1Percent + $TotalHPPBPercent + $TotalHOJPPercent + $TotalHKP2Percent + $TotalHKOTPercent) / 500 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHFemale(){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->pluck('H35');
        
        $TotalHKP1 = array_sum(array_merge(
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
            $TotalOfHRatingH12->toArray()
        ));

        $TotalHPPB = array_sum(array_merge(
            $TotalOfHRatingH13->toArray(),
            $TotalOfHRatingH14->toArray(),
            $TotalOfHRatingH15->toArray(),
            $TotalOfHRatingH16->toArray(),
            $TotalOfHRatingH17->toArray(),
            $TotalOfHRatingH18->toArray(),
            $TotalOfHRatingH19->toArray(),
            $TotalOfHRatingH20->toArray()
        )); 
        $TotalHOJP = array_sum(array_merge(
            $TotalOfHRatingH21->toArray(),
            $TotalOfHRatingH22->toArray(),
            $TotalOfHRatingH23->toArray(),
            $TotalOfHRatingH24->toArray(),
            $TotalOfHRatingH25->toArray()
        ));
        $TotalHKP2 = array_sum(array_merge(
            $TotalOfHRatingH26->toArray(),
            $TotalOfHRatingH27->toArray(),
            $TotalOfHRatingH28->toArray(),
            $TotalOfHRatingH29->toArray()
        ));
        $TotalHKOT = array_sum(array_merge(
            $TotalOfHRatingH30->toArray(),
            $TotalOfHRatingH31->toArray(),
            $TotalOfHRatingH32->toArray(),
            $TotalOfHRatingH33->toArray(),
            $TotalOfHRatingH34->toArray(),
            $TotalOfHRatingH35->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH1->toArray());

        $MaxPointHKP1 = $TotalResponden * 120;
        $TotalHKP1Percent = $TotalHKP1 / $MaxPointHKP1 * 100;

        $MaxPointHPPB = $TotalResponden * 80;
        $TotalHPPBPercent = $TotalHPPB / $MaxPointHPPB * 100;

        $MaxPointHOJP = $TotalResponden * 50;
        $TotalHOJPPercent = $TotalHOJP / $MaxPointHOJP * 100;

        $MaxPointHKP2 = $TotalResponden * 40;
        $TotalHKP2Percent = $TotalHKP2 / $MaxPointHKP2 * 100;

        $MaxPointHKOT = $TotalResponden * 60;
        $TotalHKOTPercent = $TotalHKOT / $MaxPointHKOT * 100;

        $totalH = round(($TotalHKP1Percent + $TotalHPPBPercent + $TotalHOJPPercent + $TotalHKP2Percent + $TotalHKOTPercent) / 500 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHKualitiPengurusan(){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H12');
        
        $TotalHKP1 = array_sum(array_merge(
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
            $TotalOfHRatingH12->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH1->toArray());

        $MaxPointHKP1 = $TotalResponden * 120;
        $TotalHKP1Percent = $TotalHKP1 / $MaxPointHKP1 * 100;

        $totalH = round($TotalHKP1Percent / 100 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHPPB(){
        
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H20');

        $TotalHPPB = array_sum(array_merge(
            $TotalOfHRatingH13->toArray(),
            $TotalOfHRatingH14->toArray(),
            $TotalOfHRatingH15->toArray(),
            $TotalOfHRatingH16->toArray(),
            $TotalOfHRatingH17->toArray(),
            $TotalOfHRatingH18->toArray(),
            $TotalOfHRatingH19->toArray(),
            $TotalOfHRatingH20->toArray()
        )); 

        $TotalResponden = count($TotalOfHRatingH13->toArray());

        $MaxPointHPPB = $TotalResponden * 80;
        $TotalHPPBPercent = $TotalHPPB / $MaxPointHPPB * 100;
        
        $totalH = round($TotalHPPBPercent / 100 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHOJP(){
        
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H25');
        
        $TotalHOJP = array_sum(array_merge(
            $TotalOfHRatingH21->toArray(),
            $TotalOfHRatingH22->toArray(),
            $TotalOfHRatingH23->toArray(),
            $TotalOfHRatingH24->toArray(),
            $TotalOfHRatingH25->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH21->toArray());

        $MaxPointHOJP = $TotalResponden * 50;
        $TotalHOJPPercent = $TotalHOJP / $MaxPointHOJP * 100;

        $totalH = round($TotalHOJPPercent / 100 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHKP2(){
        
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H29');
        
        $TotalHKP2 = array_sum(array_merge(
            $TotalOfHRatingH26->toArray(),
            $TotalOfHRatingH27->toArray(),
            $TotalOfHRatingH28->toArray(),
            $TotalOfHRatingH29->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH26->toArray());

        $MaxPointHKP2 = $TotalResponden * 40;
        $TotalHKP2Percent = $TotalHKP2 / $MaxPointHKP2 * 100;

        $totalH = round($TotalHKP2Percent / 100 * 100, 2);

        return $totalH;

    }

    public function calculateTotalHKOT(){
        
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('H35');
        
        $TotalHKOT = array_sum(array_merge(
            $TotalOfHRatingH30->toArray(),
            $TotalOfHRatingH31->toArray(),
            $TotalOfHRatingH32->toArray(),
            $TotalOfHRatingH33->toArray(),
            $TotalOfHRatingH34->toArray(),
            $TotalOfHRatingH35->toArray()
        ));

        $TotalResponden = count($TotalOfHRatingH30->toArray());

        $MaxPointHKOT = $TotalResponden * 60;
        $TotalHKOTPercent = $TotalHKOT / $MaxPointHKOT * 100;

        $totalH = round($TotalHKOTPercent / 100 * 100, 2);

        return $totalH;

    }

    public function calculateTotalI(){
        $TotalOfIRatingI1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('I1');
        $TotalOfIRatingI2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('I2');
        $TotalOfIRatingI3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('I3');
        
        $TotalIP = array_sum(array_merge(
            $TotalOfIRatingI1->toArray(),
            $TotalOfIRatingI3->toArray()
        ));
        $TotalIN = array_sum(array_merge($TotalOfIRatingI2->toArray()));
    
        $TotalResponden = count($TotalOfIRatingI1->toArray());

        $MaxPointI = $TotalResponden * 30;
        $MaxTotalIN = $TotalResponden * 10;
        $TotalINRev = $MaxTotalIN - $TotalIN;
        
        $totalI = round(( $TotalIP + $TotalINRev ) / $MaxPointI * 100, 2);

        return $totalI;
    }

    public function calculateTotalJ(){
        
        $TotalOfJRatingJ1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J1');
        $TotalOfJRatingJ2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J2');
        $TotalOfJRatingJ3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J3');
        $TotalOfJRatingJ4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J4');
        $TotalOfJRatingJ5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J5');
        $TotalOfJRatingJ6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J6');
        $TotalOfJRatingJ7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J7');
        $TotalOfJRatingJ8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J8');
        $TotalOfJRatingJ9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J9');
        $TotalOfJRatingJ10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('J10');
        
        $totalPointJ = array_sum(array_merge(
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
        ));

        $TotalResponden = count($TotalOfJRatingJ1->toArray());

        $MaxTotalJ = $TotalResponden * 100;
        
        $totalJ = round($totalPointJ / $MaxTotalJ * 100, 2);

        return $totalJ;

    }

    public function calculateTotalK(){
        
        $TotalOfKRatingK1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K1');
        $TotalOfKRatingK2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K2');
        $TotalOfKRatingK3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K3');
        $TotalOfKRatingK4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K4');
        $TotalOfKRatingK5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K5');
        $TotalOfKRatingK6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K6');
        $TotalOfKRatingK7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K7');
        $TotalOfKRatingK8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K8');
        $TotalOfKRatingK9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K9');
        $TotalOfKRatingK10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('K10');

        $TotalPos = array_sum(array_merge(
            $TotalOfKRatingK1->toArray(),
            $TotalOfKRatingK2->toArray(),
            $TotalOfKRatingK3->toArray(),
            $TotalOfKRatingK4->toArray(),
            $TotalOfKRatingK5->toArray(),
            $TotalOfKRatingK6->toArray(),
            $TotalOfKRatingK7->toArray(),
            $TotalOfKRatingK8->toArray(),
            $TotalOfKRatingK9->toArray()
        ));
        $TotalKNeg = array_sum(array_merge(
            $TotalOfKRatingK10->toArray()
        ));

        $TotalResponden = count($TotalOfKRatingK1->toArray());

        $MaxPointsK = $TotalResponden * 100;
        $MaxKPontNeg = $TotalResponden * 10;
        $TotalPointKNeg = $MaxKPontNeg - $TotalKNeg;
        
        $totalK = round(($TotalPos + $TotalPointKNeg) / $MaxPointsK * 100,2);

        return $totalK;

    }

    public function calculateTotalL(){
        $TotalOfLRatingL1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('L1');
        $TotalOfLRatingL2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('L2');
        $TotalOfLRatingL3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('L3');
        $TotalOfLRatingL4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('L4');
        
        $TotalLP = array_sum(array_merge(
            $TotalOfLRatingL4->toArray()
        ));

        $TotalLN = array_sum(array_merge(
            $TotalOfLRatingL1->toArray(),
            $TotalOfLRatingL2->toArray(),
            $TotalOfLRatingL3->toArray()
        ));
        
        $TotalResponden = count($TotalOfLRatingL1->toArray());
        $MaxPointsL = $TotalResponden * 40;

        $MaxPointNeg = $TotalResponden * 30;
        $TotalPointLNeg = $MaxPointNeg - $TotalLN;

        $totalL = ($TotalLP + $TotalPointLNeg) / $MaxPointsL * 100;
        $totalL = round($totalL, 2);

        return $totalL;
    }

    public function calculateTotalM(){
        $TotalOfMRatingM1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('M1');
        $TotalOfMRatingM2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('M2');
        $TotalOfMRatingM3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('M3');
    
        $TotalM = array_sum(array_merge(
            $TotalOfMRatingM1->toArray(),
            $TotalOfMRatingM2->toArray(),
            $TotalOfMRatingM3->toArray(),
        ));

        $TotalResponden = count($TotalOfMRatingM1->toArray());

        $MaxPointM = $TotalResponden * 30;
        
        $TotalM = $TotalM / $MaxPointM * 100;
        $TotalM = round($TotalM, 2);

        return $TotalM;
    }

    public function calculateTotalN(){
        $TotalOfNRatingN1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('N1');
        $TotalOfNRatingN2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('N2');
        $TotalOfNRatingN3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('N3');
        $TotalOfNRatingN4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('N4');
    
        $TotalN = array_sum(array_merge(
            $TotalOfNRatingN1->toArray(),
            $TotalOfNRatingN2->toArray(),
            $TotalOfNRatingN3->toArray(),
            $TotalOfNRatingN4->toArray(),
        ));

        $TotalResponden = count($TotalOfNRatingN1->toArray());

        $MaxPointN = $TotalResponden * 40;
        
        $TotalN = $TotalN / $MaxPointN * 100;
        $TotalN = round($TotalN, 2);

        return $TotalN;
    }

    public function calculateTotalO(){
        $TotalOfORatingO1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('O1');
        $TotalOfORatingO2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('O2');
        $TotalOfORatingO3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('O3');
        $TotalOfORatingO4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('O4');
        $TotalOfORatingO5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('O5');
    
        $TotalO = array_sum(array_merge(
            $TotalOfORatingO1->toArray(),
            $TotalOfORatingO2->toArray(),
            $TotalOfORatingO3->toArray(),
            $TotalOfORatingO4->toArray(),
            $TotalOfORatingO5->toArray()
        ));

        $TotalResponden = count($TotalOfORatingO1->toArray());

        $MaxPointO = $TotalResponden * 50;
        
        $TotalO = $TotalO / $MaxPointO * 100;
        $TotalO = round($TotalO, 2);

        return $TotalO;
    }

    public function calculateTotalP(){
        $TotalOfPRatingP1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('P1');
        $TotalOfPRatingP2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('P2');
        
        $TotalP = array_sum(array_merge(
            $TotalOfPRatingP1->toArray(),
            $TotalOfPRatingP2->toArray(),
        ));

        $TotalResponden = count($TotalOfPRatingP1->toArray());

        $MaxPointP = $TotalResponden * 20;
        
        $TotalP = $TotalP / $MaxPointP * 100;
        $TotalP = round($TotalP, 2);

        return $TotalP;
    }

    public function calculateTotalQ(){
        $TotalOfQRatingQ1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('Q1');
        $TotalOfQRatingQ2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('Q2');
        $TotalOfQRatingQ3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('Q3');
        $TotalOfQRatingQ4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->pluck('Q4');
    
        $TotalQ = array_sum(array_merge(
            $TotalOfQRatingQ1->toArray(),
            $TotalOfQRatingQ2->toArray(),
            $TotalOfQRatingQ3->toArray(),
            $TotalOfQRatingQ4->toArray(),
        ));

        $TotalResponden = count($TotalOfQRatingQ1->toArray());

        $MaxPointQ = $TotalResponden * 40;
        
        $TotalQ = $TotalQ / $MaxPointQ * 100;
        $TotalQ = round($TotalQ, 2);

        return $TotalQ;
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
        if (is_null($b5) == false){
            return $dimensi = round(($b4 + $b5)/ 20 * 100, 2);
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
        $dimensi = round((( 20 - ($g9 + $g10) )) / 20 * 100, 2);
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
        $getSaguHati = DB::table('entries')->select('saguhati')->where('email', '=', $user)->get()->toArray();        
        if ($hasCompleted[0]->completedR == NULL && $getSaguHati[0]->saguhati == NULL) {
            return redirect()->route('home');
        } elseif ($hasCompleted[0]->completedR == 1 && $getSaguHati[0]->saguhati == 0) {
            return redirect()->route('home');
        } 
        $data = array(
            'paymentChoose',
            'bankCompany',
            'bankAccNo',
            'bankFullName'
        );

        $userData = DB::table('entries')->select($data)->where('email', '=', $user)->get();
        $userProgress = $this->getUserProgress($request);
        return view('users.reward', compact('user','userData','userProgress','getSaguHati','hasCompleted'));
    }

    public function storeReward(Request $request){
        $user = $this->getUser($request);
        if ( !$user ){
            return redirect('users');
        }
        DB::table('entries')->where('email', $user)->update(array(
            'paymentChoose' => 'bank',
            'bankCompany' => $request->bankCompany,
            'bankAccNo' => $request->bankAccNo,
            'bankFullName' => $request->bankFullName,
            'verified' => 'pending',
            'completedR' => 1
        ));
        return redirect()->route('home');
    }

    public function sendPinToEmail(){
        return redirect()->route('send-password');
    }


}
