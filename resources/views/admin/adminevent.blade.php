@include('partials.AdminHomeHeader')
		<h1>Create Event</h1>
		<div style="margin-top: -40px">
			<h3 class="Formh3"><a class="Form" href="">Report</a></h3>
			<h3 class="Formh3"><a class="Form" href="/admineventshow">View Events</a></h3>
			<h3 class="Formh3"><a class="Form" href="">Mass</a></h3>
		</div>

		{{-- @if ($errors->any())
		@foreach ($errors->all() as $error)
		 <div class="text-white bg-primary">{{$error}}</div>
			
		@endforeach
			
		@endif --}}
		@if(session('message'))
		<div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
			  <strong>{{ session('message') }}</strong>
				  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif


    	<div class="EventForm" style="margin-top: 100px;">
    		<div class="bg-white" style="height: 600px;">
				<form action="{{route('adminevent.store')}}" method="POST" enctype="multipart/form-data" style="padding-top: 50px;">
				@csrf
				<div class="ms-4  row g-2 align-items-center">
					<div class="col-auto">
						<label for="inputEventName" class="fs-3 fw-bold col-form-label" style="width: 300px;">Event Name</label>
					</div>
					<div class="col-9">
						<input type="text" id="inputEventName" name="inputEventName"    class="form-control @error('inputEventName') is-invalid @enderror"
						value="{{old('inputEventName')}}">
						@error('inputEventName')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>
				</div>

				<div class="ms-3 row g-4 align-items-center">
					<div class="col-auto">
						<label for="inputDateFrom" class="fs-3 fw-bold col-form-label" style="width: 300px;">Event Date From</label>
					</div>
					<div class="col-3">
						<input type="date" id="inputDateFrom" name="inputDateFrom" class="form-control  @error('inputDateFrom') is-invalid @enderror" 
						value="{{old('inputDateFrom')}}" >
						@error('inputDateFrom')
						<div class="invalid-feedback">{{$message}}</div>
							@enderror
					</div>
					<div class="col-auto">
					<label for="inputDateTo" class="fs-3 fw-bold col-form-label ms-5">Event Date To</label>
					</div>
					<div class="col-3">
						<input type="date" id="inputDateTo" name="inputDateTo" class="form-control  @error('inputDateTo') is-invalid @enderror" value="{{old('inputDateTo')}}">
						@error('inputDateTo')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>
				</div>

				<div class="ms-4 row g-2 align-items-start">
					<div class="col-auto ">
						<label for="inputDetails" class="fs-3 fw-bold col-form-label" style="width: 300px;">Details</label>
					</div>
					<div class="col-9">
						<textarea id="inputDetails" class="form-control  @error('inputDetails') is-invalid @enderror" name="inputDetails" style="height: 200px" value="{{old('inputDetails')}}" ></textarea>
						@error('inputDetails')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>
				</div>

				<div class="ms-4 row g-2 align-items-center">
					<div class="col-auto">
						<label for="inputPictures" class="fs-3 fw-bold col-form-label" style="width: 300px;">Attach Picture</label>
					</div>
					<div class="col-9">
						<input type="file" id="inputPictures" name="inputPictures" accept="image/*" class="form-control @error('inputDetails') is-invalid @enderror" value="{{old('inputPictures')}}">
						@error('inputPictures')
						<div class="invalid-feedback">{{$message}}</div>
						@enderror
					</div>
				</div>

				<div class="ms-3 row g-4 align-items-center">
					<div class="col-auto">
						<label for="inputAttendance" class="fs-3 fw-bold col-form-label" style="width: 300px;">Allow Attendance</label>
					</div>
					<div class="col-4">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="inputAttendance"  id="inputAttendance">
					</div>
					</div>

					<div class="col-auto">
					<label for="inputPost" class="fs-3 fw-bold col-form-label">Post on Site</label>
					</div>
					<div class="col-auto">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" name="inputPost" id="inputPost">
					</div>
					</div>

				</div>
				<input type="submit" value="create"  name="submitbutton" class="position-absolute bottom-0 end-0 mb-5 btn-success btn-lg text-dark" style="background-color: #00ff5b; width: 150px; margin-right: 73px">
				</form>

			</div>


    	</div>

@include('partials.AdminHomeHeader')