<div class="container">
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>{{Session::get('success')}}</strong>
</div>
@endif 
{{-- <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> Indicates a successful or positive action.
  </div> --}}
    
@if (Session::has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{Session::get('error')}}</strong>
</div>
@endif
     
@if (Session::has('warning'))
<div class="alert alert-warning alert-dismissible ">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>{{Session::get('warning')}}</strong>
</div>
@endif
     
@if (Session::has('info'))
<div class="alert alert-info alert-dismissible" >
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>{{Session::get('info')}}</strong>
</div>
@endif

</div>
