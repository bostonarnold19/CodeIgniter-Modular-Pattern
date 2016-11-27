<!-- @if(Session::has('flash_message'))
<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
	@foreach ($errors->all() as $error)
	<div>{{ $error }}</div>
	@endforeach
</div>
@endif -->