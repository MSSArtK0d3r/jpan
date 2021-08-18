<br>
@if ($userPoints >= 80)
<span class="dimensiPointsInfo dimensiPointInfoTinggi" onclick="dimensiCTinggi()">Tinggi</span>
@elseif ($userPoints >= 50 && $userPoints < 80)
<span class="dimensiPointsInfo dimensiPointInfoSederhana" onclick="dimensiCSederhana()">Sederhana</span>
@else
<span class="dimensiPointsInfo dimensiPointInfoRendah" onclick="dimensiCRendah()">Rendah</span>
@endif