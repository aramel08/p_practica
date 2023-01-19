@extends('layout')

@section('title', 'Contact')
@section('content')
<section class="inicio bg-blue">
  
    
    <div class="container">
      <div class="row justify-content-center pt-5 mr-1">
      <div class="col-md-5 formulario">
        <form  method="POST" action="{{route('contact')}}">
        @csrf
    
        <div class="form-group text-center">
          <h1 class="text-Light">Contact</h1>
        </div>
          
        <div class="form-group mx-sm-4 pb-3">
                <input name="fullname" class="form-control" placeholder="Nombre Completo..." value="{{old('fullname')}}" >
                {!!$errors->first('fullname', '<small>:message</small><br>')!!}
        </div>
   
     <div class="form-group mx-sm-4 pb-3">
         <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
           {!!$errors->first('email', '<small>:message</small><br>')!!}
      </div>
                       
      <div class="form-group mx-sm-4 pb-3">
        <input type="number"  class="form-control" name="number" placeholder="Número" value="{{old('number')}}">
         {!!$errors->first('number', '<small>:message</small><br>')!!}
       </div>
      <div class="form-group mx-sm-4 pb-3">
         <textarea name="content" class="form-control" placeholder="Mensaje ..." rows="">{{old('content')}}</textarea>
          {!!$errors->first('content', '<small>:message</small><br>')!!}
         </div> 
    <div class="form-group mx-sm-5 pb-5">
           <button class="btn btn-block enviar">Enviar</button>
    </div>

    </form>
  </div>
    </div>
    
    </div>

 

</section>
@endsection