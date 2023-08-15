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

            <div class="flex justify-center w-full mt-24 mb-auto mx-4 bg-emerald-300 rounded-lg">

                    <table class="text-lg text-center mb-2 text-white dark:text-gray-400">
                        <caption class="caption-top">
                            You have an appointment with:
                          </caption>
                        <thead class="bg-orange-500 text-sm text-white uppercase">
                            <tr>
                                <th scope="col" class="p-2 border-spacing-2">Patient Name</th>
                                <th scope="col" class="p-2 border-spacing-2">Email</th>
                                <th scope="col" class="p-2 border-spacing-2">Phone</th>
                                <th scope="col" class="p-2 border-spacing-2">Date</th>
                                <th scope="col" class="p-2 border-spacing-2">Status</th>
                                <th scope="col" class="p-2 border-spacing-2">View</th>

                             </tr>
                        </thead>

                        <tbody>
                            @foreach ($appointments as $appoint)

                                <tr class="border-b bg-slate-200 dark:bg-gray-800 dark:border-gray-700">
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white border-spacing-2 border-black">{{$appoint->name}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white border-spacing-2 border-black">{{$appoint->email}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white border-spacing-2 border-black">{{$appoint->phone}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white border-spacing-2 border-black">{{$appoint->date}}</td>
                                    <td scope="row" class="px-3 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white border-spacing-2 border-black">{{$appoint->status}}</td>
                                    <td scope="row" class="pr-2">
                                        <a class="btn bg-indigo-700 rounded-lg" href="{{url('appt_details')}}">View</a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>



            </div>

        </div>

        <!-- plugins:js -->
        @include('admin.scripts')
  </body>
</html>
