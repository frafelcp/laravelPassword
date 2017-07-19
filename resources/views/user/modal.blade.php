<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" role="dialog" id="modal-{{$usuario->id}}">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        @if (Session::has('message'))
            <div class="text-danger">
                {{Session::get('message')}}
            </div>
        @endif

        <hr />

        <form method="post" action="{{url('user/updatepassword')}}">
            {{csrf_field()}}

             <div class="form-group">
              <label for="mypassword">Introduce tu actual password:</label>
              <input type="password" name="mypassword" class="form-control">
              <div class="text-danger">{{$errors->first('mypassword')}}</div>
             </div>

             <div class="form-group">
              <label for="password">Introduce tu nuevo password:</label>
              <input type="password" name="password" class="form-control">
              <div class="text-danger">{{$errors->first('password')}}</div>
             </div>

             <div class="form-group">
              <label for="mypassword">Confirma tu nuevo password:</label>
              <input type="password" name="password_confirmation" class="form-control">
             </div>            
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Cambiar mi password</button>     
        </form>
      </div>      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->