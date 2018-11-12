@extends('layouts.app')

@section('content')
<input type="hidden" id="loggedinuser" value="{{Auth::user()->name}}">
<script type="text/javascript">
    var register = document.getElementById('loggedinuser').value;
//    alert(register);
    window.location = "https://"+ location.host +":3337?"+register;

</script>
@endsection