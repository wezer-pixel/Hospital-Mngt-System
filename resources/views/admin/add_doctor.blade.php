

<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }

    </style>
    @include('admin.css')

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
            <button type="button" class="close" data-dismiss="alert">
                X
            </button>
            {{session()->get('message')}}
        </div>

        @endif

        <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding-top: 15px">
                <label>Doctor Name</label>
                <input type="text" style="color: black;" name="name" placeholder="Enter Doctor Name" required>
            </div>

            <div style="padding-top: 15px">
              <label>Specialty</label>
              <select name="specialty" style="color: black; width: 200px" required>
                <option>--select option-</option>
                <option value="Pediatric">Pediatric</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Dermatology">Dermatology</option>
                <option value="Neurology">Neurology</option>
                <option value="Psychiatry">Psychiatry</option>
                <option value="Rheumatology">Rheumatology</option>
                <option value="Oncology">Oncology</option>

              </select>
            </div>

            <div style="padding-top: 15px">
              <label>Location</label>
              <input type="text" style="color: black;" name="location" placeholder="Enter Doctor Location" required>
            </div>

            <div style="padding-top: 15px">
              <label>Hospital</label>
              <input type="text" style="color: black;" name="hospital" placeholder="Enter Doctor's Hospital Name" required>
            </div>

            <div style="padding-top: 15px">
              <label>Room No</label>
              <input type="text" style="color: black;" name="room" placeholder="Enter Doctor Room Number" required>
            </div>

            <div style="padding-top: 15px">
              <label>Phone Number</label>
              <input type="text" style="color: black;" name="phone" placeholder="Enter Doctor Phone Number" required>
            </div>

            <div style="padding-top: 15px">
              <label>Doctor Image</label>
              <input type="file" name="file" required>
            </div>

            <div style="padding-top: 15px">

              <input type="submit" class="btn btn-success">
            </div>
        </form>


       </div>

        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
