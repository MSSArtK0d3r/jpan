<br>
@if ($userPoints >= 80)
<span class="dimensiPointsInfo dimensiPointInfoTinggi" onclick="dimensiKTinggi()">Tinggi</span>
@elseif ($userPoints >= 50 && $userPoints < 80)
<span class="dimensiPointsInfo dimensiPointInfoSederhana" onclick="dimensiKSederhana()">Sederhana</span>
@else
<span class="dimensiPointsInfo dimensiPointInfoRendah" onclick="dimensiKRendah()">Rendah</span>
@endif