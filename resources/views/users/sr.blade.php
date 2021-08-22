<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN R (SOALAN TERBUKA)</h5>
    <x-form-global-error/>
    <form action="{{route('updateSectionR')}}" method="POST" id="srSumit">
    @csrf
    <div class="introPage" style="margin-bottom: 10px;">
        <label>1. Apakah komen anda mengenai soal selidik ini? (Jika ada)</label>
        <textarea rows="10" class="big-input" name="komen">{{ $userData[0]->komen == NULL ? '' : $userData[0]->komen }}</textarea><br>
        <label>2. Apakah cadangan/komen ada berkaitan kegembiraan dan prestasi anda sebagai penjawat awam negeri Sabah? (Jika ada)</label><br>
        <textarea rows="10" class="big-input" name="cadangan" >{{ $userData[0]->cadangan == NULL ? '' : $userData[0]->cadangan }}</textarea>
    </div>
    
    </form>
    <button class="subBtn twelve columns" onclick="confirm()">Simpan dan Lihat keputusan I-KOBT Anda</button>
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
    // here goes some logic
    document.getElementById("srSumit").submit();
});
modal.addFooterBtn('Saya ingin ubah jawapan', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function() {
    // here goes some logic
    modal.close();
});
modal.open();
}
 </script>
<x-footer/>