<x-header/>
<div class="contents twevle columns">
@if (session()->has('identity'))
    <div style="display: flex;flex-wrap: wrap;justify-content: center;" class="row">
        <div class="twelve columns">
            <h4 style="text-align: center">Pengesahan tidak SAH</h4>
        </div>
        <img style="margin:auto; width:150px;" src="{{url('images/invalid.svg')}}" alt="">
    </div>  
@endif
<script>window.location.href = "{{route('home')}}";</script>
</div>
<x-footer/>