

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px">

                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x
                    </button>
                    {{session()->get('message')}}
                </div>

                @endif

                <form action="{{url('edit_doctor', $doctor->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding: 15px">
                        <label>Doctor Name</label>
                        <input type="text" style="color:black" name="name" value="{{$doctor->name}}" style="color:black" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Phone Number</label>
                        <input type="number" style="color:black" name="phone" value="{{$doctor->phone}}" style="color:black" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Specialty</label>
                        <input type="text" name="specialty" value="{{$doctor->specialty}}" style="color: black; width: 200px" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Room Number</label>
                        <input type="text" style="color:black" name="room" value="{{$doctor->room}}" style="color:black" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Location</label>
                        <input type="text" style="color:black" name="location" value="{{$doctor->location}}" style="color:black" required>
                    </div>

                    <div style="padding: 15px">
                        <label>Old Image</label>
                        <img height="100px" width="100pc" src="doctorimage/{{$doctor->image}}">
                    </div>

                    <div style="padding: 15px">

                        <input type="file" name="file" class="btn btn-success">

                    </div>
                    <div style="padding: 15px">

                        <input type="submit" class="btn btn-success">

                    </div>
                </form>
               </div>
        </div>
        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
