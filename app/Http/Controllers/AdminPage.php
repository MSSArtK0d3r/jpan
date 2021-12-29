<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Brackets\AdminListing\AdminListing;
use App\Models\Entry;
use Brackets\AdminListing\Facades\AdminListing;
use Spatie\Permission\Models\Role;
use Brackets\AdminAuth\Models\AdminUser;
use Illuminate\Support\Facades\Auth;

class AdminPage extends Controller
{
    public function index(){
       
        // $currentUserId = Auth::id();
        // $permissionId = DB::table('model_has_roles')->select('role_id')->where('model_id', $currentUserId)->get();
        // $guardIdToName = DB::table('roles')->select('guard_name')->where('id',$permissionId[0]->role_id)->get();
        // $guardName = $guardIdToName[0]->guard_name;
        // $agensi = 'Pejabat Ketua Menteri';
        // $countData = DB::table('entries')->where('completedR', 1)->where('agensi', $agensi)->get()->count();


        //return $notZero;
        return view('admin.devadmin', compact('countData'));
    }

    public function welcome(){
 
        return view('admin.welcome');
    }

    public function mydashboard(){

        $currentUserId = Auth::id();
        $permissionId = DB::table('model_has_roles')->select('role_id')->where('model_id', $currentUserId)->get();
        $guardIdToName = DB::table('roles')->select('guard_name')->where('id',$permissionId[0]->role_id)->get();
        $guardName = $guardIdToName[0]->guard_name;

        $data = $this->getData($guardName);
        
        return view('admin.mydashboard', compact('data'));
    }

    public function getData($agensi){

        //$data['default'] = '';
        $countData = DB::table('entries')->where('completedR', 1)->where('agensi', $agensi)->get()->count();
        $data['title'] = $agensi;
        if ( $countData === 0 ) {
            $data['nodata'] = 1;
            return $data;
        }
        $data['nodata'] = 0;
        $data['totalRatingB'] = round(($this->calculateTotalBGaji($agensi) + $this->calculateTotalBPangkat($agensi) + $this->calculateTotalBKetua($agensi) + $this->calculateTotalBProsedurOperasi($agensi) + $this->calculateTotalBRakanSekerja($agensi) + $this->calculateTotalBSifatKerja($agensi) + $this->calculateTotalBKomunikasi($agensi) + $this->calculateTotalBPersekitaran($agensi)) / 800 * 100, 2);
        $data['totalRatingBMale'] = round(($this->calculateTotalBGajiMale($agensi) + $this->calculateTotalBPangkatMale($agensi) + $this->calculateTotalBKetuaMale($agensi) + $this->calculateTotalBProsedurOperasiMale($agensi) + $this->calculateTotalBRakanSekerjaMale($agensi) + $this->calculateTotalBSifatKerjaMale($agensi) + $this->calculateTotalBKomunikasiMale($agensi) + $this->calculateTotalBPersekitaranMale($agensi)) / 800 * 100, 2);
        $data['totalRatingBFemale'] = round(($this->calculateTotalBGajiFemale($agensi) + $this->calculateTotalBPangkatFemale($agensi) + $this->calculateTotalBKetuaFemale($agensi) + $this->calculateTotalBProsedurOperasiFemale($agensi) + $this->calculateTotalBRakanSekerjaFemale($agensi) + $this->calculateTotalBSifatKerjaFemale($agensi) + $this->calculateTotalBKomunikasiFemale($agensi) + $this->calculateTotalBPersekitaranFemale($agensi)) / 800 * 100, 2);
        $data['totalRatingBGaji'] = $this->calculateTotalBGaji($agensi);
        $data['totalRatingBPangkat'] = $this->calculateTotalBPangkat($agensi);
        $data['totalRatingBKetua'] = $this->calculateTotalBKetua($agensi);
        $data['totalRatingBProsedurOperasi'] = $this->calculateTotalBProsedurOperasi($agensi);
        $data['totalRatingBRakanSekerja'] = $this->calculateTotalBRakanSekerja($agensi);
        $data['totalRatingBSifatKerja'] = $this->calculateTotalBSifatKerja($agensi);
        $data['totalRatingBKomunikasi'] = $this->calculateTotalBKomunikasi($agensi);
        $data['totalRatingBPersekitaran'] = $this->calculateTotalBPersekitaran($agensi);
        $data['totalRatingBMale'] = $this->calculateTotalBMale($agensi);
        $data['totalRatingBFemale'] = $this->calculateTotalBFemale($agensi);
        $data['totalRatingC'] = $this->calculateTotalC($agensi);
        $data['totalRatingCMale'] = $this->calculateTotalCMale($agensi);
        $data['totalRatingCFemale'] = $this->calculateTotalCFemale($agensi);
        $data['totalRatingD'] = $this->calculateTotalD($agensi);
        $data['totalRatingDMale'] = $this->calculateTotalDMale($agensi);
        $data['totalRatingDFemale'] = $this->calculateTotalDFemale($agensi);
        $data['totalRatingE'] = $this->calculateTotalE($agensi);
        $data['totalRatingEMale'] = $this->calculateTotalEMale($agensi);
        $data['totalRatingEFemale'] = $this->calculateTotalEFemale($agensi);
        $data['totalRatingF'] = $this->calculateTotalF($agensi);
        $data['totalRatingFMale'] = $this->calculateTotalFMale($agensi);
        $data['totalRatingFFemale'] = $this->calculateTotalFFemale($agensi);
        $data['totalRatingFSemangat'] = $this->calculateTotalFSemangat($agensi);
        $data['totalRatingFDedikasi'] = $this->calculateTotalFDedikasi($agensi);
        $data['totalRatingFKesungguhan'] = $this->calculateTotalFKesungguhan($agensi);
        $data['totalRatingG'] = $this->calculateTotalG($agensi);
        $data['totalRatingGMale'] = $this->calculateTotalGMale($agensi);
        $data['totalRatingGFemale'] = $this->calculateTotalGFemale($agensi);
        $data['totalRatingGPrestasiTugas'] = $this->calculateTotalGPrestasiTugas($agensi);
        $data['totalRatingGPrestasiKontekstual'] = $this->calculateTotalGPrestasiKontekstual($agensi);
        $data['totalRatingGTingkahLakuKerjaTidakProduktif'] = $this->calculateTotalGTingkahLakuKerjaTidakProduktif($agensi);
        $data['totalRatingH'] = $this->calculateTotalH($agensi);
        $data['totalRatingHMale'] = $this->calculateTotalHMale($agensi);
        $data['totalRatingHFemale'] = $this->calculateTotalHFemale($agensi);
        $data['totalRatingHKualitiPengurusan'] = $this->calculateTotalHKualitiPengurusan($agensi);
        $data['totalRatingHPPB'] = $this->calculateTotalHPPB($agensi);
        $data['totalRatingHOJP'] = $this->calculateTotalHOJP($agensi);
        $data['totalRatingHKP2'] = $this->calculateTotalHKP2($agensi);
        $data['totalRatingHKOT'] = $this->calculateTotalHKOT($agensi);
        $data['totalRatingI'] = $this->calculateTotalI($agensi);
        $data['totalRatingJ'] = $this->calculateTotalJ($agensi);
        $data['totalRatingK'] = $this->calculateTotalK($agensi);
        $data['totalRatingL'] = $this->calculateTotalL($agensi);
        $data['totalRatingM'] = $this->calculateTotalM($agensi);
        $data['totalRatingN'] = $this->calculateTotalN($agensi);
        $data['totalRatingO'] = $this->calculateTotalO($agensi);
        $data['totalRatingP'] = $this->calculateTotalP($agensi);
        $data['totalRatingQ'] = $this->calculateTotalQ($agensi);
        
        $data['IndeksKegembiraanKeseluruhan'] = round(($data['totalRatingB'] + $this->calculateTotalC($agensi) + $this->calculateTotalD($agensi) + $this->calculateTotalE($agensi) + $this->calculateTotalF($agensi) + $this->calculateTotalG($agensi)) / 600 * 100, 2);
        $data['IndeksOBTKeseluruhan'] = $this->calculateTotalH($agensi);
        $data['IndeksKegembiraanKeseluruhanMale'] = round(($data['totalRatingBMale'] + $this->calculateTotalCMale($agensi) + $this->calculateTotalDMale($agensi) + $this->calculateTotalEMale($agensi) + $this->calculateTotalFMale($agensi) + $this->calculateTotalGMale($agensi)) / 600 * 100, 2);
        $data['IndeksKegembiraanKeseluruhanFemale'] = round(($data['totalRatingBFemale'] + $this->calculateTotalCFemale($agensi) + $this->calculateTotalDFemale($agensi) + $this->calculateTotalEFemale($agensi) + $this->calculateTotalFFemale($agensi) + $this->calculateTotalGFemale($agensi)) / 600 * 100, 2);
        $data['IndeksOBTKeseluruhanMale'] = $this->calculateTotalHMale($agensi);
        $data['IndeksOBTKeseluruhanFemale'] = $this->calculateTotalHFemale($agensi);   
        $data['totalResponden'] = DB::table('entries')
                ->where('completedR','=', '1')
                ->where('agensi', $agensi)
                ->count();

        return $data;
    }

    public function calculateTotalBGaji($agensi){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B2');

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

    public function calculateTotalBPangkat($agensi){
        
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B3');

        $TotalResponden = count($TotalOfBRatingB3->toArray());
        

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;


        $totalB = $TotalPangkatPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKetua($agensi){
        
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B5');

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

    public function calculateTotalBProsedurOperasi($agensi){
        
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B8');
        
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

    public function calculateTotalBRakanSekerja($agensi){
        
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B10');
        
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

    public function calculateTotalBSifatKerja($agensi){
        
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B13');

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

    public function calculateTotalBKomunikasi($agensi){
        
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B16');
        
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

    public function calculateTotalBPersekitaran($agensi){
        
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('B18');

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

    public function calculateTotalBGajiMale($agensi){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B2');

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

    public function calculateTotalBGajiFemale($agensi){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B2');

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

    public function calculateTotalBPangkatMale($agensi){
        
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B3');

        $TotalResponden = count($TotalOfBRatingB3->toArray());
        

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;


        $totalB = $TotalPangkatPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBPangkatFemale($agensi){
        
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B3');

        $TotalResponden = count($TotalOfBRatingB3->toArray());
        

        $TotalPangkat = array_sum(array_merge(
            $TotalOfBRatingB3->toArray()
        ));

        $MaxPointRespondenPangkat = $TotalResponden * 10;
        $TotalPangkatPercentage = $TotalPangkat / $MaxPointRespondenPangkat * 100;


        $totalB = $TotalPangkatPercentage / 100 * 100;

        return round($totalB,2);

    }

    public function calculateTotalBKetuaMale($agensi){
        
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B5');

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

    public function calculateTotalBKetuaFemale($agensi){
        
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B5');

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

    public function calculateTotalBProsedurOperasiMale($agensi){
        
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B8');
        
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

    public function calculateTotalBProsedurOperasiFemale($agensi){
        
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B8');
        
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

    public function calculateTotalBRakanSekerjaMale($agensi){
        
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B10');
        
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

    public function calculateTotalBRakanSekerjaFemale($agensi){
        
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B10');
        
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

    public function calculateTotalBSifatKerjaMale($agensi){
        
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B13');

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

    public function calculateTotalBSifatKerjaFemale($agensi){
        
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B13');

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

    public function calculateTotalBKomunikasiMale($agensi){
        
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B16');
        
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

    public function calculateTotalBKomunikasiFemale($agensi){
        
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B16');
        
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

    public function calculateTotalBPersekitaranMale($agensi){
        
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B18');

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

    public function calculateTotalBPersekitaranFemale($agensi){
        
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B18');

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

    public function calculateTotalBMale($agensi){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B2');
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B3');
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B5');
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B8');
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B10');
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B13');
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B16');
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B18');

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

    public function calculateTotalBFemale($agensi){
        
        $TotalOfBRatingB1 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B1');
        $TotalOfBRatingB2 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B2');
        $TotalOfBRatingB3 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B3');
        $TotalOfBRatingB4 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B4');
        $TotalOfBRatingB5 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B5');
        $TotalOfBRatingB6 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B6');
        $TotalOfBRatingB7 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B7');
        $TotalOfBRatingB8 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B8');
        $TotalOfBRatingB9 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B9');
        $TotalOfBRatingB10 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B10');
        $TotalOfBRatingB11 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B11');
        $TotalOfBRatingB12 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B12');
        $TotalOfBRatingB13 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B13');
        $TotalOfBRatingB14 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B14');
        $TotalOfBRatingB15 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B15');
        $TotalOfBRatingB16 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B16');
        $TotalOfBRatingB17 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B17');
        $TotalOfBRatingB18 = DB::table('entries')->where('completedR', 1)->where('jantina','Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('B18');

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

    public function calculateTotalC($agensi){
        $TotalOfCRatingC1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('C2');
        
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

    public function calculateTotalCMale($agensi){
        $TotalOfCRatingC1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('C2');
        
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

    public function calculateTotalCFemale($agensi){
        $TotalOfCRatingC1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('C1');
        $TotalOfCRatingC2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('C2');
        
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

    public function calculateTotalD($agensi){
        $TotalOfDRatingD1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('D1');
        
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

    public function calculateTotalDMale($agensi){
        $TotalOfDRatingD1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('D1');
        
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

    public function calculateTotalDFemale($agensi){
        $TotalOfDRatingD1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('D1');
        
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

    public function calculateTotalE($agensi){
        $TotalOfERatingE1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('E6');
        
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

    public function calculateTotalEMale($agensi){
        $TotalOfERatingE1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E6');
        
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

    public function calculateTotalEFemale($agensi){
        $TotalOfERatingE1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E1');
        $TotalOfERatingE2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E2');
        $TotalOfERatingE3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E3');
        $TotalOfERatingE4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E4');
        $TotalOfERatingE5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E5');
        $TotalOfERatingE6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('E6');
        
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

    public function calculateTotalF($agensi){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F6');
        
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

    public function calculateTotalFMale($agensi){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F6');
        
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

    public function calculateTotalFFemale($agensi){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F2');
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F4');
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('F6');
        
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

    public function calculateTotalFSemangat($agensi){
        $TotalOfFRatingF1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F1');
        $TotalOfFRatingF2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F2');
        
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

    public function calculateTotalFDedikasi($agensi){
        $TotalOfFRatingF3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F3');
        $TotalOfFRatingF4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F4');
        
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

    public function calculateTotalFKesungguhan($agensi){
        $TotalOfFRatingF5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F5');
        $TotalOfFRatingF6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('F6');
        
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

    public function calculateTotalG($agensi){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G10');

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

    public function calculateTotalGMale($agensi){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('jantina','Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G10');

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

    public function calculateTotalGFemale($agensi){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G3');
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G8');
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('G10');

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

    public function calculateTotalGPrestasiTugas($agensi){
        
        $TotalOfGRatingG1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G1');
        $TotalOfGRatingG2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G2');
        $TotalOfGRatingG3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G3');
        
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

    public function calculateTotalGPrestasiKontekstual($agensi){
        
        $TotalOfGRatingG4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G4');
        $TotalOfGRatingG5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G5');
        $TotalOfGRatingG6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G6');
        $TotalOfGRatingG7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G7');
        $TotalOfGRatingG8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G8');
        
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

    public function calculateTotalGTingkahLakuKerjaTidakProduktif($agensi){
        
        $TotalOfGRatingG9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G9');
        $TotalOfGRatingG10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('G10');

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

    public function calculateTotalH($agensi){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H35');
        
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

    public function calculateTotalHMale($agensi){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Lelaki')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H35');
        
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

    public function calculateTotalHFemale($agensi){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H12');
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H20');
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H25');
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H29');
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('jantina', 'Perempuan')->where('verified', 'verified')->where('agensi', $agensi)->pluck('H35');
        
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

    public function calculateTotalHKualitiPengurusan($agensi){
        
        $TotalOfHRatingH1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H1');
        $TotalOfHRatingH2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H2');
        $TotalOfHRatingH3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H3');
        $TotalOfHRatingH4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H4');
        $TotalOfHRatingH5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H5');
        $TotalOfHRatingH6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H6');
        $TotalOfHRatingH7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H7');
        $TotalOfHRatingH8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H8');
        $TotalOfHRatingH9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H9');
        $TotalOfHRatingH10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H10');
        $TotalOfHRatingH11 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H11');
        $TotalOfHRatingH12 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H12');
        
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

    public function calculateTotalHPPB($agensi){
        
        $TotalOfHRatingH13 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H13');
        $TotalOfHRatingH14 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H14');
        $TotalOfHRatingH15 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H15');
        $TotalOfHRatingH16 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H16');
        $TotalOfHRatingH17 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H17');
        $TotalOfHRatingH18 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H18');
        $TotalOfHRatingH19 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H19');
        $TotalOfHRatingH20 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H20');

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

    public function calculateTotalHOJP($agensi){
        
        $TotalOfHRatingH21 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H21');
        $TotalOfHRatingH22 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H22');
        $TotalOfHRatingH23 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H23');
        $TotalOfHRatingH24 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H24');
        $TotalOfHRatingH25 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H25');
        
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

    public function calculateTotalHKP2($agensi){
        
        $TotalOfHRatingH26 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H26');
        $TotalOfHRatingH27 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H27');
        $TotalOfHRatingH28 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H28');
        $TotalOfHRatingH29 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H29');
        
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

    public function calculateTotalHKOT($agensi){
        
        $TotalOfHRatingH30 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H30');
        $TotalOfHRatingH31 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H31');
        $TotalOfHRatingH32 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H32');
        $TotalOfHRatingH33 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H33');
        $TotalOfHRatingH34 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H34');
        $TotalOfHRatingH35 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('H35');
        
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

    public function calculateTotalI($agensi){
        $TotalOfIRatingI1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('I1');
        $TotalOfIRatingI2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('I2');
        $TotalOfIRatingI3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('I3');
        
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

    public function calculateTotalJ($agensi){
        
        $TotalOfJRatingJ1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J1');
        $TotalOfJRatingJ2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J2');
        $TotalOfJRatingJ3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J3');
        $TotalOfJRatingJ4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J4');
        $TotalOfJRatingJ5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J5');
        $TotalOfJRatingJ6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J6');
        $TotalOfJRatingJ7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J7');
        $TotalOfJRatingJ8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J8');
        $TotalOfJRatingJ9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J9');
        $TotalOfJRatingJ10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('J10');
        
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

    public function calculateTotalK($agensi){
        
        $TotalOfKRatingK1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K1');
        $TotalOfKRatingK2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K2');
        $TotalOfKRatingK3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K3');
        $TotalOfKRatingK4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K4');
        $TotalOfKRatingK5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K5');
        $TotalOfKRatingK6 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K6');
        $TotalOfKRatingK7 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K7');
        $TotalOfKRatingK8 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K8');
        $TotalOfKRatingK9 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K9');
        $TotalOfKRatingK10 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('K10');

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

    public function calculateTotalL($agensi){
        $TotalOfLRatingL1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('L1');
        $TotalOfLRatingL2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('L2');
        $TotalOfLRatingL3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('L3');
        $TotalOfLRatingL4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('L4');
        
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

    public function calculateTotalM($agensi){
        $TotalOfMRatingM1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('M1');
        $TotalOfMRatingM2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('M2');
        $TotalOfMRatingM3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('M3');
    
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

    public function calculateTotalN($agensi){
        $TotalOfNRatingN1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('N1');
        $TotalOfNRatingN2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('N2');
        $TotalOfNRatingN3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('N3');
        $TotalOfNRatingN4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('N4');
    
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

    public function calculateTotalO($agensi){
        $TotalOfORatingO1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('O1');
        $TotalOfORatingO2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('O2');
        $TotalOfORatingO3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('O3');
        $TotalOfORatingO4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('O4');
        $TotalOfORatingO5 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('O5');
    
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

    public function calculateTotalP($agensi){
        $TotalOfPRatingP1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('P1');
        $TotalOfPRatingP2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('P2');
        
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

    public function calculateTotalQ($agensi){
        $TotalOfQRatingQ1 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('Q1');
        $TotalOfQRatingQ2 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('Q2');
        $TotalOfQRatingQ3 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('Q3');
        $TotalOfQRatingQ4 = DB::table('entries')->where('completedR', 1)->where('verified', 'verified')->where('agensi', $agensi)->pluck('Q4');
    
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


}
