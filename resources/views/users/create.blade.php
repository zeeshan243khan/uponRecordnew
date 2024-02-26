@extends('layouts.master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add User</div>
	<div class="card-body">
		<form method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">User Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">User Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">User Gender</label>
				<div class="col-sm-10">
					<select name="gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">User Image</label>
				<div class="col-sm-10">
					<input type="file" name="profile_image" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Confirm password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password_confirmation" />
				</div>
			</div>
            
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
