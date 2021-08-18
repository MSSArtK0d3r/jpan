<x-header/>
<div class="contents {{ $user == NULL ? '' : 'eight columns'}}">
 <h5 class="title-center">SOAL SELIDIK<br>INDEKS-KEGEMBIRAAN ORGANISASI BERPRESTASI TINGGI<br>(I-KOBT)</h5>
    @if ( $user == NULL )
    <x-context-main/>
    <form class="title-center" action="{{route('storeMyForm')}}" method="POST">
        @csrf
        <input class="emailInput" type="email" name="email" placeholder="Masukkan alamat email @sabah.gov.my">
        <button class="subBtn" type="submit" value="mantap">Setuju dan teruskan</button>
        @error('email')
            <br><span class="Err">Sila gunakan alamat e-mail @sabah.gov.my</span>
        @enderror
        {{-- <input class="subBtn" onclick="this.value='Loading...'" type="submit" value="Setuju dan teruskan"/> --}}
    </form>
 </div>
    @else
    @if ($userProgress[0]->completedA != NULL && $userProgress[0]->completedB != NULL && $userProgress[0]->completedC != NULL && $userProgress[0]->completedD != NULL && $userProgress[0]->completedE != NULL && $userProgress[0]->completedF != NULL && $userProgress[0]->completedG != NULL && $userProgress[0]->completedH1 != NULL && $userProgress[0]->completedH2 != NULL  && $userProgress[0]->completedH3 != NULL && $userProgress[0]->completedH4 != NULL && $userProgress[0]->completedI != NULL && $userProgress[0]->completedJ != NULL && $userProgress[0]->completedK != NULL && $userProgress[0]->completedL != NULL && $userProgress[0]->completedM != NULL && $userProgress[0]->completedN != NULL && $userProgress[0]->completedO != NULL && $userProgress[0]->completedP != NULL && $userProgress[0]->completedQ != NULL && $userProgress[0]->completedR != NULL )
    <div class="widgetContainer twelve columns">
        <div class="widgetIndex six columns">
            <span>Indeks Kegembiraan</span>
            <h4 class="noMargin">{{$indexKegembiraan}}%</h4>
            <hr>
        </div>
        <div class="widgetIndex six columns">
            <span>Indeks OBT</span>
            <h4 class="noMargin">{{$indexOBT}}%</h4>
            <hr>
        </div>
    </div>
    <canvas id="myChart" width="400" height="200"></canvas>
    <div class="widgetContainerSubDimensiTitle twelve columns">
    <h5 class="noMargin">Indeks Sub-Dimensi</h5>
    </div>
    <div class="widgetContainerDimensi twelve columns">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">B</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>KEPUASAN KERJA</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensiPercent">{{$subDimension['subDimensionBKepuasanKerja']}}%<x-dimensi-info-point-b :userPoints="$subDimension['subDimensionBKepuasanKerja']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Gaji</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBGaji']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Pangkat</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBPangkat']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Ketua</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBKetua']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Prosedur Operasi</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBProsedurOperasi']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Rakan Sekerja</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBRakanSekerja']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Sifat Kerja</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBSifatKerja']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Komunikasi</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBKomunikasi']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Persekitaran</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionBPersekitaran']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">C</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>KEPUASAN HIDUP</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensiPercent">{{$subDimension['subDimensionCKepuasanHidup']}}%<x-dimensi-info-point-c :userPoints="$subDimension['subDimensionCKepuasanHidup']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">D</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>PENILAIAN HIDUP</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensiPercent">{{$subDimension['subDimensionDPenilaianHidup']}}%<x-dimensi-info-point-d :userPoints="$subDimension['subDimensionDPenilaianHidup']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">E</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>AFEK POSITIF</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionEAfek']}}%<x-dimensi-info-point-e :userPoints="$subDimension['subDimensionEAfek']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">F</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>KETERLIBATAN KERJA</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionFKeterlibatanKerja']}}%<x-dimensi-info-point-f :userPoints="$subDimension['subDimensionFKeterlibatanKerja']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Semangat</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionFSemangat']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Dedikasi</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionFDedikasi']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Kesungguhan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionFKesungguhan']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">G</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>PRESTASI KERJA</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionGPrestasiKerja']}}%<x-dimensi-info-point-g :userPoints="$subDimension['subDimensionGPrestasiKerja']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Prestasi Tugas</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionGPrestasiTugas']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Prestasi Kontekstual</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionGPrestasiKontekstual']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Tingkah laku kerja tidak produktif</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionGTingkahLakuKerjaTidakProduktif']}}%</span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">H</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>ORGANISASI BERPRESTASI TINGGI</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionHOBT']}}%<x-dimensi-info-point-h1 :userPoints="$subDimension['subDimensionHOBT']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Kualiti Pengurusan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionHKualitiPengurusan']}}%<x-dimensi-info-point-h2 :userPoints="$subDimension['subDimensionHKualitiPengurusan']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Penambahbaikan dan Pembaharuan Berterusan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionHPenambahbaikanDanPembaharuanBerterusan']}}%<x-dimensi-info-point-h3 :userPoints="$subDimension['subDimensionHPenambahbaikanDanPembaharuanBerterusan']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Orientasi Jangka Panjang</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionHOrientasiJangkaPanjang']}}%<x-dimensi-info-point-h4 :userPoints="$subDimension['subDimensionHOrientasiJangkaPanjang']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Kualiti Pekerja</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionHKualitiPekerja']}}%<x-dimensi-info-point-h5 :userPoints="$subDimension['subDimensionHKualitiPekerja']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twevle columns noMargin">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px"></span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">SUB-DIMENSI</span><br><span>Keterbukaan dan Orientasi Tindakan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span style="text-align: end;font-size:20px;">{{$subDimension['subDimensionHKeterbukaanDanOrientasiTindakan']}}%<x-dimensi-info-point-h6 :userPoints="$subDimension['subDimensionHKeterbukaanDanOrientasiTindakan']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">I</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Produktiviti</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionI']}}%<x-dimensi-info-point-i :userPoints="$subDimension['subDimensionI']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">J</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Personaliti</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionJ']}}%<x-dimensi-info-point-j :userPoints="$subDimension['subDimensionJ']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">K</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Kesejahteraan Keluarga</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionK']}}%<x-dimensi-info-point-k :userPoints="$subDimension['subDimensionK']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">L</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Kesejahteraan Kewangan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionL']}}%<x-dimensi-info-point-l :userPoints="$subDimension['subDimensionL']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">M</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Kesejahteraan Sosial</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionM']}}%<x-dimensi-info-point-m :userPoints="$subDimension['subDimensionM']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">N</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Tujuan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionN']}}%<x-dimensi-info-point-n :userPoints="$subDimension['subDimensionN']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">O</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Daya Tahan</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionO']}}%<x-dimensi-info-point-o :userPoints="$subDimension['subDimensionO']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">P</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Kindness</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionP']}}%<x-dimensi-info-point-p :userPoints="$subDimension['subDimensionP']"/></span></p></div>
    </div>
    <div class="widgetContainerDimensi twelve columns dimensiLine">
        <div class="dimensiSection"><p class="noMargin"><span style="font-size: 30px">Q</span></p></div>
        <div class="dimensiSubject"><p class="noMargin"><span style="font-size: 11px">DIMENSI</span><br><span>Altruisme</span></p></div>
        <div style="width: 45%;text-align:end;"><p class="noMargin"><span class="dimensipercent">{{$subDimension['subDimensionQ']}}%<x-dimensi-info-point-q :userPoints="$subDimension['subDimensionQ']"/></span></p></div>
    </div>
    @else
        <div class="notCompleteAllSection">
            <p>Sila lengkapkan kesemua bahagian untuk mendapat data.</p>
        </div>
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
    />
 </div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
<script src="{{ url('js/tingle.min.js') }}"></script>
<script src="{{ url('js/dimensi-model.js') }}"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Kepuasan Kerja', 'Kepuasan Hidup', 'Penilaian Hidup', 'Afek Positif', 'Keterlibatan Kerja', 'Prestasi Kerja', 'Organisasi Berprestasi Tinggi', 'Produktiviti', 'Personaliti', 'Kesejahteraan Keluarga', 'Kesejahteraan Kewangan', 'Kesejahteraan Sosial', 'Tujuan', 'Daya Tahan', 'Kindness', 'Altruisme'],
            datasets: [
              {
                label: 'Skor Anda',
                data: [{{$subDimension['subDimensionBKepuasanKerja']}}, {{$subDimension['subDimensionCKepuasanHidup']}}, {{$subDimension['subDimensionDPenilaianHidup']}}, {{$subDimension['subDimensionEAfek']}}, {{$subDimension['subDimensionFKeterlibatanKerja']}}, {{$subDimension['subDimensionGPrestasiKerja']}},{{$subDimension['subDimensionHOBT']}}, {{$subDimension['subDimensionI']}}, {{$subDimension['subDimensionJ']}}, {{$subDimension['subDimensionK']}}, {{$subDimension['subDimensionL']}}, {{$subDimension['subDimensionM']}}, {{$subDimension['subDimensionN']}}, {{$subDimension['subDimensionO']}}, {{$subDimension['subDimensionP']}}, {{$subDimension['subDimensionQ']}}],
                backgroundColor: [
                    'rgba(255, 159, 64, 1)'
                ],
                borderColor: [
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            },
              {
                label: 'Skor Keseluruhan',
                data: [{{$data['totalRatingB']}}, {{$data['totalRatingC']}}, {{$data['totalRatingD']}}, {{$data['totalRatingE']}}, {{$data['totalRatingF']}}, {{$data['totalRatingG']}}, {{$data['totalRatingH']}}, {{$data['totalRatingI']}}, {{$data['totalRatingJ']}}, {{$data['totalRatingK']}}, {{$data['totalRatingL']}}, {{$data['totalRatingM']}}, {{$data['totalRatingN']}}, {{$data['totalRatingO']}}, {{$data['totalRatingP']}}, {{$data['totalRatingQ']}}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)'
                ],
                borderWidth: 1
            }
          ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    suggestedMax: 100,
                }
            }
        }
    });
</script>
@endif
<x-footer/>


