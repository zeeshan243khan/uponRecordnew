@extends('layouts.master')

@section('content')

<div class="card">
	<div class="card-header">Edit user</div>
	<div class="card-body">
		<form method="post" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">user Name</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $user->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">user Email</label>
				<div class="col-sm-10">
					<input type="text" name="email" class="form-control" value="{{ $user->email }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">user Gender</label>
				<div class="col-sm-10">
					<select name="gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">user Image</label>
				<div class="col-sm-10">
					<input type="file" name="profile_image" />
					<br />
					<img src="{{ asset('profile/' . $user->profile_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_profile_image" value="{{ $user->profile_image }}" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" value="{{$user->password}}" name="password" />
				</div>
			</div>
            <div class="row mb-4">
				<label class="col-sm-2 col-label-form">Confirm password</label>
				<div class="col-sm-10">
					<input type="password" class="form-control" name="password_confirmation" value="{{$user->password}}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $user->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
            
		</form>
	</div>
</div>
<script>
document.getElementsByName('gender')[0].value = "{{ $user->gender }}";
</script>

@endsection('content')
