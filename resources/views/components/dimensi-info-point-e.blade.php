<br>
@if ($userPoints >= 80)
<span class="dimensiPointsInfo dimensiPointInfoTinggi" onclick="dimensiETinggi()">Tinggi</span>
@elseif ($userPoints >= 50 && $userPoints < 80)
<span class="dimensiPointsInfo dimensiPointInfoSederhana" onclick="dimensiESederhana()">Sederhana</span>
@else
<span class="dimensiPointsInfo dimensiPointInfoRendah" onclick="dimensiERendah()">Rendah</span>
@endif