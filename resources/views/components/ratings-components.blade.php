<div class="radio">
    @for($i = $initialQuestion; $i <= 10; $i++)

    <input {{$userData != NULL ? 'class=sectionDone' : ''}} {{$userData == $i ? 'checked' : ''}} type="radio" label="{{$i}}" id="{{$sectionQuestion.$questionNumber.$i}}" name="{{$sectionQuestion.$questionNumber}}" value="{{$i}}">
    
    @endfor
</div>