<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">Maklumat Bayaran Sagu hati</h5>
    <p style="text-align: justify">
        Kumpulan penyelidik merakamkan ucapan ribuan terima kasih atas kesudian Tuan/Puan melengkapkan soal selidik I-KOBT. Sebagai tanda penghargaan, pihak penyelidik akan membayar sagu hati berjumlah RM10.00 ke e-wallet atau akaun bank Tuan/Puan. Justeru, pihak kami memohon jasa baik dan kerjasama daripada pihak Tuan/Puan memberikan maklumat berikut:
    </p>
    <x-form-global-error/>
    <form action="" method="POST" id="rewardSumit">
    @csrf
    <div class="wrapper">
        <input type="radio" name="paymentChoose" value="ewallet" id="ewallet" {{ $userData[0]->paymentChoose == 'ewallet' ? 'checked' : '' }}>
        <input type="radio" name="paymentChoose" value="bank" id="bank" {{ $userData[0]->paymentChoose == 'bank' ? 'checked' : '' }}>
          <label for="ewallet" class="option option-1" onclick="openEwallet()">
            <div class="dot"></div>
             <span>e-Wallet Boost</span>
             </label>
             <label>ATAU</label>
          <label for="bank" class="option option-2" onclick="openBank();">
            <div class="dot"></div>
             <span>Akaun Bank</span>
          </label>
    </div>
    
    <div class="ewalletForm" {{ $userData[0]->paymentChoose == 'ewallet' ? 'style=display:block;' : '' }}>
        <div>
        <span class="six columns">Masukkan Nombor telefon yang berdaftar dengan Boost</span>
        <input class="six columns" type="text" value="{{ $userData[0]->phone == NULL ? '' : $userData[0]->phone }}" name="phone">
        </div>
    </div>
    <div class="bankForm" {{ $userData[0]->paymentChoose == 'bank' ? 'style=display:block;' : '' }}>
        <div>
            <span class="three columns">Nama Bank</span>
            <input class="nine columns" type="text" placeholder="Maybank, CIMB, RHB" name="bankCompany" value="{{ $userData[0]->bankCompany == NULL ? '' : $userData[0]->bankCompany }}">
        </div> 
        <div>
            <span class="three columns">Nombor akaun</span>
            <input class="nine columns" type="text" placeholder="12347654335434" name="bankAccNo" value="{{ $userData[0]->bankAccNo == NULL ? '' : $userData[0]->bankAccNo }}">
        </div>
        <div>
            <span class="three columns">Nama penuh</span>
            <input class="nine columns" type="text" placeholder="John Bryce" name="bankFullName" value="{{ $userData[0]->bankFullName == NULL ? '' : $userData[0]->bankFullName }}">
        </div>
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
modal.setContent('<span>Anda Yakin?</span>');
modal.addFooterBtn('Ya', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
    // here goes some logic
    document.getElementById("rewardSumit").submit();
});
modal.addFooterBtn('Tidak', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
    // here goes some logic
    modal.close();
});
modal.open();
}

function openEwallet(){
    document.querySelector('.ewalletForm').style.display = 'block';
    document.querySelector('.bankForm').style.display = 'none';
}
function openBank(){
    document.querySelector('.ewalletForm').style.display = 'none';
    document.querySelector('.bankForm').style.display = 'block';
}
 </script>
<x-footer/>