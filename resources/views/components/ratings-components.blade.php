<div class="radio">
    @for($i = $initialQuestion; $i <= 10; $i++)
    <input {{$getCompletedR() == 1 || $getCompletedR() == NULL && $getSaguHati() == 1 ? 'class=sectionDone' : ''}} {{$userData == $i ? 'checked' : ''}} type="radio" label="{{$i}}" id="{{$sectionQuestion.$questionNumber.$i}}" name="{{$sectionQuestion.$questionNumber}}" value="{{$i}}">
    @endfor
</div>

