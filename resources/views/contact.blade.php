@extends('layout')

@section('title', 'Contact')
@section('content')


  <form  method="POST" action="{{route('contact')}}">
    @csrf
    
    <label for="Label">CONTACT</label>
    <div class="form-group">
    <input name="fullname" class="form-control-sm" placeholder="Nombre Completo..." value="{{old('fullname')}}" ><br><br>
    {!!$errors->first('fullname', '<small>:message</small><br>')!!}
    <input type="text" name="email" class="form-control-sm" placeholder="Email ..." value="{{old('email')}}"><br><br>
    {!!$errors->first('email', '<small>:message</small><br>')!!}
    <input type="number"  class="form-control-sm" name="number" placeholder="Número" value="{{old('number')}}"><br><br>
    {!!$errors->first('number', '<small>:message</small><br>')!!}
    <textarea name="content" class="form-control-sm" placeholder="Mensaje ..." rows="">{{old('content')}}</textarea><br><br>
    {!!$errors->first('content', '<small>:message</small><br>')!!}
</div>
   </div>
    <button class="btn btn-primary">Enviar</button>


  </form>

 
@endsection