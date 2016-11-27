@if(Session::has('flash_message'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           	{{ Session::get('flash_message') }}
        </div>
    </div>
</div>
@endif
@if ($errors->any())
<ul class="alert alert-danger">
	@foreach ($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif
