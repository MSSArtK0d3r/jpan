<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN K: KESEJAHTERAAN KELUARGA</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>kesejahteraan keluarga anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionK')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error key='K1'/>" style="margin-bottom: 10px;">
        <p>1. Secara keseluruhannya, saya berpuas hati dengan hubungan saya bersama pasangan saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="1" sectionQuestion="K" :userData="$userData[0]->K1"/>
     </div>
     <div class="introPage <x-form-validation-error key='K2'/>" style="margin-bottom: 10px;">
        <p>2. Secara keseluruhannya, saya berpuas hati dengan hubungan kekeluargaan saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="2" sectionQuestion="K" :userData="$userData[0]->K2"/>
     </div>
     <div class="introPage <x-form-validation-error key='K3'/>" style="margin-bottom: 10px;">
        <p>3. Secara keseluruhannya, saya berpuas hati dengan pencapaian keluarga saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="3" sectionQuestion="K" :userData="$userData[0]->K3"/>
     </div>
     <div class="introPage <x-form-validation-error key='K4'/>" style="margin-bottom: 10px;">
        <p>4. Secara keseluruhannya, saya berpuas hati dengan tahap kesihatan keluarga saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="4" sectionQuestion="K" :userData="$userData[0]->K4"/>
        
     </div>
     <div class="introPage <x-form-validation-error key='K5'/>" style="margin-bottom: 10px;">
        <p>5. Secara keseluruhannya, saya berpuas hati dengan tahap keselamatan keluarga saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="5" sectionQuestion="K" :userData="$userData[0]->K5"/>
     </div>
     <div class="introPage <x-form-validation-error key='K6'/>" style="margin-bottom: 10px;">
        <p>6. Secara keseluruhannya, saya berpuas hati mengenai hubungan keluarga saya dengan komuniti (cth; Jiran, NGO, Persatuan, dll).</p>
        <x-ratings-components initialQuestion="0"  questionNumber="6" sectionQuestion="K" :userData="$userData[0]->K6"/>
     </div>
     <div class="introPage <x-form-validation-error key='K7'/>" style="margin-bottom: 10px;">
        <p>7. Secara keseluruhannya, saya berpuas hati dengan amalan keagamaan keluarga saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="7" sectionQuestion="K" :userData="$userData[0]->K7"/>
        
     </div>
     <div class="introPage <x-form-validation-error key='K8'/>" style="margin-bottom: 10px;">
        <p>8. Secara keseluruhannya, saya berpuas hati dengan keperluan asas di kawasan tempat tinggal saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="8" sectionQuestion="K" :userData="$userData[0]->K8"/>
        
     </div>
     <div class="introPage <x-form-validation-error key='K9'/>" style="margin-bottom: 10px;">
        <p>9. Keluarga saya mempunyai simpanan kewangan yang cukup.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="9" sectionQuestion="K" :userData="$userData[0]->K9"/>
     </div>
     <div class="introPage <x-form-validation-error key='K10'/>" style="margin-bottom: 10px;">
        <p>10. Keluarga saya mempunyai beban hutang yang banyak.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="10" sectionQuestion="K" :userData="$userData[0]->K10"/>
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