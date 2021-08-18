<br>
@if ($userPoints >= 80)
<span class="dimensiPointsInfo dimensiPointInfoTinggi" onclick="dimensiOTinggi()">Tinggi</span>
@elseif ($userPoints >= 50 && $userPoints < 80)
<span class="dimensiPointsInfo dimensiPointInfoSederhana" onclick="dimensiOSederhana()">Sederhana</span>
@else
<span class="dimensiPointsInfo dimensiPointInfoRendah" onclick="dimensiORendah()">Rendah</span>
@endif