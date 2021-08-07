<x-header/>
<div class="contents eight columns">
    <h5 class="title-center">BAHAGIAN R (SOALAN TERBUKA)</h5>
    <x-form-global-error/>
    <form action="{{route('updateSectionR')}}" method="POST">
    @csrf
    <div class="introPage" style="margin-bottom: 10px;">
        <label>1. Apakah komen anda mengenai soal selidik ini? (Jika ada)</label>
        <textarea rows="10" class="big-input" name="komen" value="mantp">{{ $userData[0]->komen == NULL ? '' : $userData[0]->komen }}</textarea><br>
        <label>2. Apakah cadangan/komen ada berkaitan kegembiraan dan prestasi anda sebagai penjawat awam negeri Sabah? (Jika ada)</label><br>
        <textarea rows="10" class="big-input" name="cadangan" >{{ $userData[0]->cadangan == NULL ? '' : $userData[0]->cadangan }}</textarea>
        <div class="introPage <x-form-validation-error key='phone'/>" style="margin-bottom: 10px;">
        <label>3. Nombor telefon<br>(untuk kegunaan pembayaran menggunakan e-wallet Boost) : </label>
        <input value="{{ $userData[0]->phone == NULL ? '' : $userData[0]->phone }}" name="phone">
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
<x-footer/>