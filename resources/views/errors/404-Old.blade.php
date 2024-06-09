<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   <style>
      .hover-text-black:hover {
         color: black !important;
      }
   </style>
   <title>MrBeans CoffeeBeans Shop</title>
</head>

<body class="bg-gray-100">

   <!-- Header -->
   @include('header')

   <!-- ====== Error 404 Section Start -->
   <section class="relative z-10 py-[120px]" style="height: 1024px; width: 100%; overflow: hidden; position: fixed; padding-top: 50px;">
      <div class="container mx-auto">
         <div class="-mx-4 flex">
            <div class="w-full px-4">
               <div class="mx-auto max-w-[400px] text-center">
                  <center>
                     <img src="{{ asset('/assets/404/clown.png') }}" alt="Clown Guidance" />
                  </center>
                  <br />
                  <h2 class="mb-2 text-[50px] font-bold leading-none text-black sm:text-[80px] md:text-[100px]">
                     404
                  </h2>
                  <h4 class="mb-3 text-[22px] font-semibold leading-tight text-black">
                     Oops! That page cannot be found
                  </h4>
                  <p class="mb-8 text-lg text-black">
                     The page you are looking for it maybe deleted
                  </p>
                  <a href="{{ route('home') }}" class="inline-block rounded-lg border bg-blue-300 border-blue-600 px-8 py-3 text-center text-base font-bold text-black transition hover:bg-blue-600 relative z-20">
                     Go To Home
                  </a>

               </div>
            </div>
         </div>
      </div>
      <div class="absolute top-0 left-0 -z-10 flex h-full w-full items-center justify-between space-x-5 md:space-x-8 lg:space-x-14">
         <div class="h-full w-1/3 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
         <div class="flex h-full w-1/3">
            <div class="h-full w-1/2 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
            <div class="h-full w-1/2 bg-gradient-to-t from-[#FFFFFF14] to-[#C4C4C400]"></div>
         </div>
         <div class="h-full w-1/3 bg-gradient-to-b from-[#FFFFFF14] to-[#C4C4C400]"></div>
      </div>
   </section>
   <!-- ====== Error 404 Section End -->

</body>

</html>