<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Doctor's Plaza</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.header')

  <div style="padding-top:70px" class="relative overflow-x-auto">

    <section class="max-w-4xl mx-auto">

    <table class="w-full text-lg text-center text-white dark:text-gray-400">
        <thead class="text-sm text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">Doctor Name</th>
            <th scope="col" class="px-6 py-3">Date</th>
            <th scope="col" class="px-6 py-3">Message</th>
            <th scope="col" class="px-6 py-3">Status</th>
            <th scope="col" class="px-6 py-3">Cancel Appointment</th>

        </tr>
        </thead>

        <tbody>
        @foreach ($appoint as $appoints)

        <tr class="border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$appoints->doctor}}</th>
            <td class="px-6 py-4">{{$appoints->date}}</td>
            <td class="px-6 py-4">{{$appoints->message}}</td>
            <td class="px-6 py-4">{{$appoints->status}}</td>

            <td class="px-6 py-4">
                <a class="btn btn-danger text-lg" onclick="return confirm('Are you sure you want to cancel Appointment and Delete Data?')" href="{{url('cancel_appoint', $appoints->id)}}">cancel</a>
            </td>
        </tr>

        @endforeach

    </table>
    </section>

  </div>


  @include('user.scripts')
</body>
</html>
