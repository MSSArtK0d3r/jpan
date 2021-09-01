<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">Maklumat Bayaran Saguhati</h5>
    <p style="text-align: justify">
        Kumpulan penyelidik merakamkan ucapan ribuan terima kasih atas kesudian Tuan/Puan melengkapkan soal selidik I-KOBT. Sebagai tanda penghargaan, pihak penyelidik akan membayar sagu hati berjumlah RM10.00 akaun bank Tuan/Puan. Justeru, pihak kami memohon jasa baik dan kerjasama daripada pihak Tuan/Puan memberikan maklumat berikut:
    </p>
    <p style="text-align: justify;font-size: 12px;font-style: italic;">
        (Nota: Bayaran sagu hati hanya diberikan kepada 6,122 penjawat awam terawal yang mengisi I-KOBT dan telah mendapat pengesahan daripada pihak JPAN)
    </p>
    <form method="POST" id="rewardSumit">
    @csrf
    <div class="wrapper">
        <p style="margin-bottom: 0">Saya sahkan bahawa maklumat dan butir-butir mengenai Akaun Bank seperti di bawah adalah benar dan milik sah saya.</p>
    </div>
    <div class="bankForm" {{ $userData[0]->paymentChoose == 'bank' ? 'style=display:block;' : '' }}>
        <div>
            <span class="three columns">Nama Bank</span>
            <input {{ $userData[0]->paymentChoose == 'bank' ? 'readonly' : ''}} onchange="changeBankCompany()" title="This is the text of the tooltip" required class="nine columns" type="text" placeholder="Maybank, CIMB, RHB" name="bankCompany" id="bankCompany" value="{{ $userData[0]->bankCompany == NULL ? '' : $userData[0]->bankCompany }}">
        </div> 
        <div>
            <span class="three columns">Nombor akaun</span>
            <input {{ $userData[0]->paymentChoose == 'bank' ? 'readonly' : ''}} onchange="changeBankAccNo()" required class="nine columns" type="text" placeholder="12347654335434" name="bankAccNo" id="bankAccNo" value="{{ $userData[0]->bankAccNo == NULL ? '' : $userData[0]->bankAccNo }}">
        </div>
        <div>
            <span class="three columns">Nama penuh</span>
            <input {{ $userData[0]->paymentChoose == 'bank' ? 'readonly' : ''}} onchange="changeBankFullName()" required class="nine columns" type="text" placeholder="John Bryce" name="bankFullName" id="bankFullName" value="{{ $userData[0]->bankFullName == NULL ? '' : $userData[0]->bankFullName }}">
        </div>
    </div>
    </form>
    @if ( $userData[0]->paymentChoose == null)
    <button class="subBtn twelve columns" onclick="confirm()" value="Simpan dan sahkan maklumat">Simpan dan sahkan maklumat</button>
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
     function changeBankCompany(){
        var num = document.getElementById("bankCompany").value;
        if (num != null)
        {
            document.getElementById("bankCompany").classList.remove("rewardErr");
        }
    }
    function changeBankAccNo(){
        var num = document.getElementById("bankAccNo").value;
        if (num != null)
        {
            document.getElementById("bankAccNo").classList.remove("rewardErr");
        }
    }
    function changeBankFullName(){
        var num = document.getElementById("bankFullName").value;
        if (num != null)
        {
            document.getElementById("bankFullName").classList.remove("rewardErr");
        }
    }
    function confirm() {
        var bankName = document.getElementById("bankCompany").value;
        var bankAccNo = document.getElementById("bankAccNo").value;
        var bankFullName = document.getElementById("bankFullName").value;
        if( bankName != '' && bankAccNo != '' && bankFullName != ''){
        var modal = new tingle.modal({
        footer: true,
        stickyFooter: false,
        closeMethods: ['overlay', 'button', 'escape'],
        closeLabel: "Close",
        cssClass: ['custom-class-1', 'custom-class-2'],
        });
        
    modal.setContent('<span>Saya sahkan bahawa maklumat dan butir-butir mengenai Akaun Bank seperti di bawah adalah benar dan milik sah saya.</span><div class="bankPengesahan"><strong>Bank : ' + bankName + '</strong><br><strong>Akaun Bank : ' + bankAccNo + '</strong><br><strong>Nama Penuh : '+bankFullName+'</strong></div>');
    modal.addFooterBtn('SAYA SAHKAN', 'tingle-btn tingle-btn--default tingle-btn--pull-right', function() {
        // here goes some logic
        document.getElementById("rewardSumit").submit();
    });
    modal.addFooterBtn('BUAT PEMBETULAN', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function() {
        // here goes some logic
        modal.close();
    });
    modal.open();
        } else if (!bankName) {
            document.getElementById("bankCompany").placeholder = "Sila isi Nama Bank";
            document.getElementById("bankCompany").classList.add("rewardErr");
        }
        else if (bankAccNo =='') {
            document.getElementById("bankAccNo").placeholder = "Sila isi Akaun Bank";
            document.getElementById("bankAccNo").classList.add("rewardErr");
        }
        else if (bankFullName =='') {
            document.getElementById("bankFullName").placeholder = "Sila isi nama penuh anda";
            document.getElementById("bankFullName").classList.add("rewardErr");
        }
    }
 </script>
<x-footer/>