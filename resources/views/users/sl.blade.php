<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN L: KESEJAHTERAAN KEWANGAN</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>kesejahteraan kewangan anda</b>.<br><br>
     <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
     <x-form-global-error/>
     <form action="{{route('updateSectionL')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error :key='$userData[0]->filledL' :index='$userData[0]->L1'/>" style="margin-bottom: 10px;">
        <p>1. Kewangan saya cukup-cukup untuk hidup.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="1" sectionQuestion="L" :userData="$userData[0]->L1"/> 
     </div>
     <div class="introPage <x-form-validation-error :key='$userData[0]->filledL' :index='$userData[0]->L2'/>" style="margin-bottom: 10px;">
        <p>2. Saya bimbang simpanan kewangan saya tidak akan bertahan lama.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="2" sectionQuestion="L" :userData="$userData[0]->L2"/> 
     </div>
     <div class="introPage <x-form-validation-error :key='$userData[0]->filledL' :index='$userData[0]->L3'/>" style="margin-bottom: 10px;">
        <p>3. Kewangan saya mengawal hidup saya.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="3" sectionQuestion="L" :userData="$userData[0]->L3"/> 
     </div>
     <div class="introPage <x-form-validation-error :key='$userData[0]->filledL' :index='$userData[0]->L4'/>" style="margin-bottom: 10px;">
        <p>4. Saya mempunyai baki simpanan hingga hujung bulan.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="4" sectionQuestion="L" :userData="$userData[0]->L4"/> 
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
 <script src="{{ url('js/smoothscroll.js') }}"></script>
 <script>
    document.querySelector('.errForm').scrollIntoView({
    block: "start",
    behavior: "smooth"
});
 </script>
<x-footer/>