<form action="{{route('getParamData')}}" method="post">
    @csrf
    <input type="text" name="email" id="">
    <button type="submit">Submit</button>
</form>