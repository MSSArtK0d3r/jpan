<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN R (SOALAN TERBUKA)</h5>
    <x-form-global-error/>
    <form method="POST" id="srSumit">
    @csrf
    <div class="introPage" style="margin-bottom: 10px;">
        <label>1. Apakah komen anda mengenai soal selidik ini? (Jika ada)</label>
        <textarea {{$userData[0]->saguhati == 1 || $userProgress[0]->completedR == 1 ? 'disabled' : ''}} rows="10" class="big-input" name="komen">{{ $userData[0]->komen == NULL ? '' : $userData[0]->komen }}</textarea><br>
        <label>2. Apakah cadangan/komen ada berkaitan kegembiraan dan prestasi anda sebagai penjawat awam negeri Sabah? (Jika ada)</label><br>
        <textarea {{$userData[0]->saguhati == 1 || $userProgress[0]->completedR == 1 ? 'disabled' : ''}} rows="10" class="big-input" name="cadangan" >{{ $userData[0]->cadangan == NULL ? '' : $userData[0]->cadangan }}</textarea>
    </div>
    @if ($totalRespondedWithReward < 6123)
    <div style="display:none;" class="introPage <x-form-validation-error key='saguhati'/>" style="margin-bottom: 10px;">
        <p style="text-align:justify;">Pihak penyelidik dengan berbesar hati memberikan bayaran sagu hati sebanyak RM10 atas penglibatan anda dalam kajian ini. Adakah anda bersetuju menerima bayaran tersebut? (Sekiranya <strong>BERSETUJU</strong>, sila lengkapkan maklumat anda di bahagian <strong>Maklumat Bayaran Sagu Hati</strong> setelah anda membuat Pengesahan)</p>
        <input {{$userData[0]->saguhati == 1 || $userProgress[0]->completedR == 1 ? 'disabled' : ''}} style="margin-left: 15px" type="radio" name="saguhati" id="setuju" value="1" {{ $userData[0]->saguhati == 1 ? 'checked' : ''}}>
        <label class="inBlock" for="setuju">Setuju</label>
        <input {{$userData[0]->saguhati == 1 || $userProgress[0]->completedR == 1 ? 'disabled' : ''}} style="margin-left: 15px" type="radio" name="saguhati" id="tidaksetuju" value="0" {{ $userData[0]->saguhati == 0 ? 'checked' : ''}}>
        <label class="inBlock" for="tidaksetuju">Tidak Setuju</label>
    </div>
    @else
    <input type="hidden" name="saguhati" value="0" readonly>
    @endif
    </form>
    @if ($userProgress[0]->completedR == NULL && $userData[0]->saguhati == NULL)
        <button class="subBtn twelve columns" onclick="confirm()" >Simpan dan Lihat Keputusan I-KOBT Anda</button>
        <button style="display: none" class="subBtn twelve columns" >Simpan dan Lihat Keputusan I-KOBT Anda</button>
    @endif
    
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
 <script src="{{ url('js/tingle.min.js') }}"></script>
 <script>
    function confirm() {
    var modal = new tingle.modal({
    footer: true,
    stickyFooter: false,
    closeMethods: ['overlay', 'button', 'escape'],
    closeLabel: "Close",
    cssClass: ['custom-class-1', 'custom-class-2'],
});
modal.setContent('<span>Sekiranya anda berpuas hati dan membuat pengesahan, pilihan jawapan dalam I-KOBT <strong>TIDAK BOLEH</strong> diubah.</span>');
modal.addFooterBtn('Saya berpuas hati dan mengesahkan jawapan saya', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
    SaveFormNow();
});
modal.addFooterBtn('Saya ingin ubah jawapan', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function() {
    halfSave();
    modal.close();

});
modal.open();

form = document.getElementById("srSumit");
function SaveFormNow() {
    form.action="{{route('updateSectionR')}}";
    form.submit();
}
function halfSave() {
    form.action="{{route('updateSectionR2')}}";
    form.submit();
}
}
 </script>
<x-footer/>