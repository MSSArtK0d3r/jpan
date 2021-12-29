<x-header/>
{{-- your data is {{var_dump($userData[0])}} --}}
{{-- your data is {{var_dump($userProgress[0])}} --}}
<div class="contents twelve columns">
    <h5 class="title-center">Penukaran PIN Keselamatan</h5>
    <p class="title-center">Masukkan Pin 6 Digit keselamatan yang baru</p>

    <form action="{{route('changepinnow')}}" method="post" class="title-center">
        @csrf
        <input class="pinBox" type="text" maxlength="1" name="pin1" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="pin1" onkeyup="moveOnMax(this,'pin2')" />
        <input class="pinBox" type="text" maxlength="1" name="pin2" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="pin2" onkeyup="moveOnMax(this,'pin3')" />
        <input class="pinBox" type="text" maxlength="1" name="pin3" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="pin3" onkeyup="moveOnMax(this,'pin4')" />
        <input class="pinBox" type="text" maxlength="1" name="pin4" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="pin4" onkeyup="moveOnMax(this,'pin5')" />
        <input class="pinBox" type="text" maxlength="1" name="pin5" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="pin5" onkeyup="moveOnMax(this,'pin6')" />
        <input class="pinBox" type="text" maxlength="1" name="pin6" required oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="pin6"/><br>
        <button class="subBtn" type="submit">Submit</button>
    </form>
    <div class="title-center"><a href="{{route('home')}}"><span>balik ke laman utama</span></a></div>
</div>

<script>
    moveOnMax =function (field, nextFieldID) {
    if (field.value.length == 1) {
        document.getElementById(nextFieldID).focus();
    }
}
</script>
<x-footer/>