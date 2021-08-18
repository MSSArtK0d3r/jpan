<br>
@if ($userPoints >= 80)
<span class="dimensiPointsInfo dimensiPointInfoTinggi" onclick="dimensiH5Tinggi()">Tinggi</span>
@elseif ($userPoints >= 50 && $userPoints < 80)
<span class="dimensiPointsInfo dimensiPointInfoSederhana" onclick="dimensiH5Sederhana()">Sederhana</span>
@else
<span class="dimensiPointsInfo dimensiPointInfoRendah" onclick="dimensiH5Rendah()">Rendah</span>
@endif