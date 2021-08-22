<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN O: DAYA TAHAN</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>daya tahan</b> anda di dalam pekerjaan.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionO')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error key='O1'/>" style="margin-bottom: 10px;">
        <p>1. Saya tahu kekuatan peribadi saya dan akan menggunakannya dengan kerap dalam pekerjaan saya.</p>
        <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="1" sectionQuestion="O" :userData="$userData[0]->O1"/>
     </div>
     <div class="introPage <x-form-validation-error key='O2'/>" style="margin-bottom: 10px;">
        <p>2. Saya mempunyai rakan di tempat kerja yang saya percayai boleh menyokong saya apabila saya memerlukan sokongan.</p>
        <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="2" sectionQuestion="O" :userData="$userData[0]->O2"/>
     </div>
     <div class="introPage <x-form-validation-error key='O3'/>" style="margin-bottom: 10px;">
        <p>3. Saya cenderung untuk bangkit semula dengan cepat selepas berhadapan dengan masalah sukar yang berkaitan dengan pekerjaan.</p>
        <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="3" sectionQuestion="O" :userData="$userData[0]->O3"/>
     </div>
     <div class="introPage <x-form-validation-error key='O4'/>" style="margin-bottom: 10px;">
        <p>4. Saya sedar bahawa penyampaian perkhidmatan terbaik adalah menerusi perkhidmatan digital.</p>
        <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="4" sectionQuestion="O" :userData="$userData[0]->O4"/>
     </div>
     <div class="introPage <x-form-validation-error key='O5'/>" style="margin-bottom: 10px;">
        <p>5. Saya mampu beradaptasi dengan keperluan teknologi masa kini.</p>
        <x-ratings-components initialQuestion="0" :completedR="userData[0]->completedR" questionNumber="5" sectionQuestion="O" :userData="$userData[0]->O5"/>
     </div>
     <button class="subBtn twelve columns" type="submit">Simpan</button>
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