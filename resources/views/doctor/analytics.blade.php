<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('doctor.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper bg-white">

        <!-- partial:partials/_navbar.html -->
        @include('doctor.navbar')

            <div class="flex justify-center mt-24 mb-auto bg-emerald-300">
                <div class="bg-slate-200 shadow-lg rounded-lg overflow-hidden m-4 max-h-60">
                    <!-- Card 2 content here -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                          <h5 class="text-2xl text-black font-bold mb-2">Appointment</h5>
                          <p class="text-gray-700 text-2xl">
                            Card 2
                          </p>
                          <a href="#" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show all Appointments</a>
                        </div>
                      </div>
                </div>
            </div>

            <div class="flex justify-center mt-24 bg-slate-300 mb-auto ">
                <div class="bg-slate-200 shadow-lg rounded-lg overflow-hidden m-4 max-h-60">
                    <!-- Card 2 content here -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                          <h5 class="text-2xl text-black font-bold mb-2">Appointment</h5>
                          <p class="text-gray-700 text-2xl">
                            Card 2
                          </p>
                          <a href="#" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show all Appointments</a>
                        </div>
                      </div>
                </div>
            </div>

        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
