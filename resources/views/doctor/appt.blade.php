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
        @include('doctor.navbar')

            <div class="flex justify-center w-full mt-24 mb-auto mx-4 bg-emerald-300">

                <div>
                    <table class="table-auto m-1 text-lg text-center text-white dark:text-gray-400">
                        <thead class="text-sm text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th scope="col" class="p-2">Patient</th>
                                <th scope="col" class="p-2">Email</th>
                                <th scope="col" class="p-2">Phone</th>
                                <th scope="col" class="p-2">Appointment Date</th>
                                <th scope="col" class="p-2">Status</th>
                                <th scope="col" class="p-2">View</th>

                             </tr>
                        </thead>

                        <tbody>
                            @foreach ($appointments as $appoint)

                                <tr class="border-b bg-slate-200 dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$appoint->name}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$appoint->email}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$appoint->phone}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$appoint->date}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$appoint->status}}</td>
                                    <td scope="row" class="pr-2">
                                        <a class="btn bg-indigo-700 rounded-lg" href="#">View</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>

        </div>

        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
