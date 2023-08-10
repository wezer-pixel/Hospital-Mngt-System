

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


        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">


            <div style="padding-top: 70px; width:100%" align="center">
                <table class="text-sm text-center text-white dark:text-gray-400">
                    <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Doctor Name</th>
                        <th scope="col" class="px-6 py-3">Phone</th>
                        <th scope="col" class="px-6 py-3">Specialty</th>
                        <th scope="col" class="px-6 py-3">Location</th>
                        <th scope="col" class="px-6 py-3">Hospital</th>
                        <th scope="col" class="px-6 py-3">Room</th>
                        <th scope="col" class="px-6 py-3">Image</th>
                        <th scope="col" class="px-6 py-3">Update</th>
                        <th scope="col" class="px-6 py-3">delete</th>

                    </tr>
                    </thead>
                    <tbody>

                            @foreach ($data as $doctor)
                            <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$doctor->name}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$doctor->phone}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$doctor->specialty}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$doctor->location}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$doctor->hospital}}</td>
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$doctor->room}}</td>
                                <td>
                                    <img height="100px" width="100px" src="doctorimage/{{$doctor->image}}">
                                </td>

                                <td>
                                    <a class="btn btn-primary rounded-lg text-sm" href="{{url('update_doctor', $doctor->id)}}">update</a>
                                </td>

                                <td>
                                     <a onclick="return confirm('Are you sure?')" class="btn btn-danger rounded-lg text-sm" href="{{url('delete_doctor', $doctor->id)}}">delete</a>
                                 </td>



                            </tr>

                            @endforeach

                </table>
            </div>

        </div>



        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
