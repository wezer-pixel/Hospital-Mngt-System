<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">

            <div class="flex justify-center">

                <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 max-h-60">
                  <!-- Card 1 content here -->
                  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-4">
                      <h5 class="text-2xl text-black font-bold mb-2">Doctors</h5>
                      <p class="text-gray-700 text-2xl">
                        {{$doc}}
                      </p>
                      <a href="{{url('show_doctor')}}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Available Doctors</a>
                    </div>
                  </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 max-h-60">
                    <!-- Card 2 content here -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                          <h5 class="text-2xl text-black font-bold mb-2">Appointments</h5>
                          <p class="text-gray-700 text-2xl">
                            {{$appointment}}
                          </p>
                          <a href="{{url('show_appointment')}}" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show all Appointments</a>
                        </div>
                      </div>
                </div>

                <div class="bg-white shadow-lg rounded-lg overflow-hidden m-4 max-h-60">
                    <!-- Card 3 content here -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                          <h5 class="text-2xl text-black font-bold mb-2">Registered Users</h5>
                          <p class="text-gray-700 text-2xl">
                            {{$users}}
                          </p>
                          <p class="mt-4 inline-block bg-white text-black font-bold py-2 px-4 rounded">These are Registered Users</p>
                        </div>
                      </div>
                </div>

              </div>
        </div>
        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
