<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN M: KESEJAHTERAAN SOSIAL</h5>
    <span>Sila TANDAKAN pada skala yang menunjukkan persetujuan anda mengenai <b>kesejahteraan sosial anda</b>.<br><br>
    <p>Skala 0 menunjukkan anda ‘Sangat Tidak Bersetuju’ dengan pernyataan tersebut, manakala Skala 10 menunjukkan anda ‘Sangat Bersetuju’ dengan pernyataan tersebut.</p>
    <x-form-global-error/>
    <form action="{{route('updateSectionM')}}" method="POST">
    @csrf
    <div class="introPage <x-form-validation-error :key='$userData[0]->filledM' :index='$userData[0]->M1'/>" style="margin-bottom: 10px;">
        <p>1. Saya mempunyai sesuatu yang penting untuk disumbangkan kepada komuniti.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="1" sectionQuestion="M" :userData="$userData[0]->M1"/> 
     </div>
     <div class="introPage <x-form-validation-error :key='$userData[0]->filledM' :index='$userData[0]->M2'/>" style="margin-bottom: 10px;">
        <p>2. Saya terlibat aktif dalam kerja komuniti.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="2" sectionQuestion="M" :userData="$userData[0]->M2"/> 
     </div>
     <div class="introPage <x-form-validation-error :key='$userData[0]->filledM' :index='$userData[0]->M3'/>" style="margin-bottom: 10px;">
        <p>3. Komuniti di tempat saya adalah baik.</p>
        <x-ratings-components initialQuestion="0"  questionNumber="3" sectionQuestion="M" :userData="$userData[0]->M3"/> 
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