<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN P: KINDNESS</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <i>kindness</i> di tempat kerja.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p> 
    <x-form-global-error/>
    <form action="{{route('updateSectionP')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error key='P1'/>" style="margin-bottom: 10px;">
        <p>1. Organisasi bersikap fleksibel dan mengambil berat dalam isu-isu keperluan kebajikan pekerja.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="1" sectionQuestion="P" :userData="$userData[0]->P1"/>
     </div>
     <div class="introPage <x-form-validation-error key='P2'/>" style="margin-bottom: 10px;">
        <p>2. Organisasi bersikap fleksibel tentang keseimbangan kehidupan berkerjaya dan kehidupan seharian.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="2" sectionQuestion="P" :userData="$userData[0]->P2"/>
     </div>
     <x-btn-submit/>
    </form>
</div>
<div class="four columns userLinks">
    <x-users-links :user="$user" 
    :completedA="$userProgress[0]->completedA"
    :completedB="$userProgress[0]->completedB"
    :completedC="$userProgress[0]->completedC"
    :completedD="$userProgress[0]->completedD"
    :completedE="$userProgress[0]->completedE"
    :completedF="$userProgress[0]->completedF"
    :completedG="$userProgress[0]->completedG"
    :completedH1="$userProgress[0]->completedH1"
    :completedH2="$userProgress[0]->completedH2"
    :completedH3="$userProgress[0]->completedH3"
    :completedH4="$userProgress[0]->completedH4"
    :completedI="$userProgress[0]->completedI"
    :completedJ="$userProgress[0]->completedJ"
    :completedK="$userProgress[0]->completedK"
    :completedL="$userProgress[0]->completedL"
    :completedM="$userProgress[0]->completedM"
    :completedN="$userProgress[0]->completedN"
    :completedO="$userProgress[0]->completedO"
    :completedP="$userProgress[0]->completedP"
    :completedQ="$userProgress[0]->completedQ"
    :completedR="$userProgress[0]->completedR"
    :paymentChoose="$userProgress[0]->paymentChoose"
    />
 </div>
<x-footer/>