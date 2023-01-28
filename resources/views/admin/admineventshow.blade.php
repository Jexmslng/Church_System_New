@include('partials.AdminHomeHeader')
<h1>Events</h1>
		<div style="margin-top: -40px">
			<h3 class="Formh3"><a class="Form" href="">Report</a></h3>
			<h3 class="Formh3"><a class="Form" href="/adminevent">Create Event</a></h3>
			<h3 class="Formh3"><a class="Form" href="">Mass</a></h3>
		</div>

        <div class="d-flex justify-content-center" style="margin-top:100px;">
        <div class="col-auto " style="width:90%;">

        <table class="table table-bordered" >
            <thead class="text-center">
              <tr>
                <th scope="col" style="color: white; background-color: #40916C">#</th>
                <th scope="col" style="color: white; background-color: #40916C">EventName</th>
                <th scope="col" style="color: white; background-color: #40916C">Description</th>
                <th scope="col" style="color: white; background-color: #40916C">Date</th>
              </tr>
            </thead>

    @forelse($events as $key => $row)

            <tbody class="text-center">
                <tr>
                  <td class="bg-white" style="color:black">
                  <div class="d-flex justify-content-center ">
                    <form  method="POST" action="{{ route('admineventshow.delete', $row->id) }}" onsubmit="return confirm('are you sure')">
                        @csrf
                        @method('DELETE')

                        <button class="btn" type="submit" href=""><i class="fa-solid fa-trash"></i></button> 
                     </form>
                     <a class="btn" href="{{route('admin.admineventedit', $row->id)}}"><i class="fa-solid fa-pen-to-square"></i></a> 
                 </div>
                  <td class="bg-white" style="color:black">{{$row->EventName}}</td>
                  <td class="bg-white" style="color:black">{{ Str::limit($row->Details, 60) }}</td>
                  <td class="bg-white" style="color:black">{{  \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->EventDateFrom)
                    ->format('m/d/Y')}}</td>

                    

                </tr>
              </tbody>
     @empty
    <h2 class="text-center text-secondary p-4">No post found in the database!</h2>
    @endforelse

        </table>

        </div>
        </div>

@include('partials.AdminHomeFooter')