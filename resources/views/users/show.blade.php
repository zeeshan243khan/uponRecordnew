@extends('layouts.master')
@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>user Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('users.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>user Name</b></label>
			<div class="col-sm-10">
				{{ $user->name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>user Email</b></label>
			<div class="col-sm-10">
				{{ $user->email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>user Gender</b></label>
			<div class="col-sm-10">
				{{ $user->gender }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>user Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('profile/' .  $user->profile_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
