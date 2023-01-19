@extends('layout')

@section('title', 'Contact')
@section('content')


  <form  method="POST" action="{{route('contact')}}">
    @csrf
    
    <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
        <fieldset>
                        <legend class="text-center header">Contact</legend>
        <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
               <div class="col-md-8">
                <input name="fullname" class="form-control" placeholder="Nombre Completo..." value="{{old('fullname')}}" >
                {!!$errors->first('fullname', '<small>:message</small><br>')!!}
      </div>
     </div>
   
     <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                            <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}">
    {!!$errors->first('email', '<small>:message</small><br>')!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                            <input type="number"  class="form-control" name="number" placeholder="Número" value="{{old('number')}}">
    {!!$errors->first('number', '<small>:message</small><br>')!!}
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea name="content" class="form-control" placeholder="Mensaje ..." rows="">{{old('content')}}</textarea>
    {!!$errors->first('content', '<small>:message</small><br>')!!}
                            </div>
                        </div> 

   
    
    
    <div class="col-md-12 text-center">
    <button class="btn btn-primary btn-lg">Enviar</button>
    </div>

</fieldset>
</div>
   </div>
   </div>
   </div>

  </form>

 
@endsection