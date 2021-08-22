<div class="radio">
    @for($i = $initialQuestion; $i <= 10; $i++)
    <span>{{var_dump($data)}}</span>
    <input {{$userData == $i ? 'checked' : ''}} type="radio" label="{{$i}}" id="{{$sectionQuestion.$questionNumber.$i}}" name="{{$sectionQuestion.$questionNumber}}" value="{{$i}}">
    @endfor
</div>
{{-- {{$completedR == 1 ? 'class=sectionDone' : ''}} --}}
