<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThankYouResult extends Controller
{
    
    public function index($uuid) {

        $data = array();

        $entry = DB::table('entries')->where('uuid', $uuid)->first();
        if ($entry !== null){
        $data['renderData'] = true;
        $userRateB = (($entry->B1 + $entry->B2 + $entry->B3 + $entry->B4 + $entry->B5 + $entry->B6 + $entry->B7 + $entry->B8 + $entry->B9 + $entry->B10 + $entry->B11 + $entry->B12 + $entry->B13 + $entry->B14 + $entry->B15 + $entry->B16 + $entry->B17 + $entry->B18 + $entry->B19 ) * 100) / 190;
        $userRateC = (($entry->C1 + $entry->C2) * 100) / 20;
        $userRateD = ($entry->D1 * 100) / 10;
        $userRateE = (($entry->E1 + $entry->E2 + $entry->E3 + $entry->E4 + $entry->E5 + $entry->E6) * 100) / 60;
        $userRateF = (($entry->F1 + $entry->F2 + $entry->F3 + $entry->F4 + $entry->F5 + $entry->F6) * 100) / 60;
        $userRateG = (($entry->G1 + $entry->G2 + $entry->G3 + $entry->G4 + $entry->G5 + $entry->G6 + $entry->G7 + $entry->G8 + $entry->G9 + $entry->G10) * 100) / 100;
        $userRateH = (($entry->H1 + $entry->H2 + $entry->H3 + $entry->H4 + $entry->H5 + $entry->H6 + $entry->H7 + $entry->H8 + $entry->H9 + $entry->H10 + $entry->H11 + $entry->H12 + $entry->H13 + $entry->H14 + $entry->H15 + $entry->H16 + $entry->H17 + $entry->H18 + $entry->H19 + $entry->H20 + $entry->H21+ $entry->H22 + $entry->H23 + $entry->H24 + $entry->H25 + $entry->H26 + $entry->H27 + $entry->H28 + $entry->H29 + $entry->H30 + $entry->H31 + $entry->H32 + $entry->H33 + $entry->H34 + $entry->H35 ) * 100) / 350;
        $userRateI = (($entry->I1 + $entry->I2 + $entry->I3) * 100) / 30;
        $userRateJ = (($entry->J1 + $entry->J2 + $entry->J3 + $entry->J4 + $entry->J5 + $entry->J6 + $entry->J7 + $entry->J8 + $entry->J9 + $entry->J10) * 100) / 100;
        $userRateK = (($entry->K1 + $entry->K2 + $entry->K3 + $entry->K4 + $entry->K5 + $entry->K6 + $entry->K7 + $entry->K8 + $entry->K9 + $entry->K10) * 100) / 100;
        $userRateL = (($entry->L1 + $entry->L2 + $entry->L3 + $entry->L4) * 100) / 40;
        $userRateM = (($entry->M1 + $entry->M2 + $entry->M3) * 100) / 30;
        $userRateN = (($entry->N1 + $entry->N2 + $entry->N3 + $entry->N4) * 100) / 40;
        $userRateO = (($entry->O1 + $entry->O2 + $entry->O3 + $entry->O4 + $entry->O5) * 100) / 50;
        $userRateP = (($entry->P1 + $entry->P2) * 100) / 20;
        $userRateQ = (($entry->Q1 + $entry->Q2 + $entry->Q3 + $entry->Q4) * 100) / 40;
       
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
        
        return view('thankyou',['data' => $data]);
        
        }
        
        return redirect('/');
        
    }

    public function dashboardIndex() {

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

        return view('admin.dashboard',['data' => $data]);
        
        
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
        $TotalOfBRatingB19 = DB::table('entries')->pluck('B19');
        
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
            $TotalOfBRatingB18->toArray(),
            $TotalOfBRatingB19->toArray(),
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

}
