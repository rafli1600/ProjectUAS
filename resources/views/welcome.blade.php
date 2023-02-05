<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#33B8C8] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Mangcoding</title>
</head>

<body>
  <header class="">
    <nav class="container relative flex items-center justify-between py-5">
      <a href="">
        <img src="./img/logo.svg" alt="">
      </a>

      <div class="flex-1 hidden ml-12 space-x-4 md:block" >
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">Services</a>
        <a href="">Download</a>
      </div>

      <div class="flex items-center hidden space-x-5 md:flex">
        <a href="">
          <img src="./assets/cart.svg" alt="">
        </a>
        <a href="">
          <img src="./assets/search.svg" alt="">
        </a>
        @if (Route::has('login'))
        @auth
      <a href="{{ url('/dashboard') }}" class="rounded btn">Dashboard</a>
      @else
      <a href="{{ url('/login') }}" class="rounded btn">Login</a>
      @if (Route::has('register'))
      <a href="{{ url('/register') }}" class="rounded btn">Register</a>
      @endif
      @endauth
      @endif
      </div>

      <a href="#" class="hamburger md:hidden">
        <img src="./assets/hamburger.svg" alt="">
      </a>

      <div
        class="absolute inset-x-0 z-40 hidden p-4 bg-white border border-gray-300 rounded-lg shadow-lg popup top-10 right-12 md:hidden">
        <div class="flex space-x-5">
          <div class="flex items-center w-full h-full px-3 mb-4 space-x-1 border border-gray-400 rounded-full">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
              <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                fill="#070D13" />
            </svg>
            <input type="text" class="w-full border-none" placeholder="Search ..." />
          </div>
          <a href="">
            <img src="./assets/cart.svg" alt="">
          </a>
        </div>

        <div class="flex flex-col space-y-4">
          <a href="">Home</a>
          <a href="">About</a>
          <a href="">Services</a>
          <a href="">Download</a>
        </div>

        <div class="flex flex-col mt-4">
          <a href="{{ url('/register') }}" class="rounded btn">Get Started</a>
        </div>
      </div>
    </nav>
  </header>


  <section class="container flex flex-col items-center pt-8 pb-28 lg:flex-row">
    <div class="space-y-8 flex-1 max-w-[810px] ">
      <span class="text-orange-500">Dashboard Admin Manager</span>
      <h1 class="text-[64px] font-bold leading-none relative">
        <span class="text-blue-300"> Managing Finances </span> Well will make you Live rich
      </h1>
      <p class="text-xl text-gray-500">
        Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.
      </p>

      <div class="flex space-x-5">
          <a href="" class="rounded btn"> Get Started </a>
          <a href="" class="rounded btn">Download</a>

      </div>
    </div>

    <div class="absolute right-0">

      <img src="./img/hero.png" alt="">

    </div>
  </section>

  <section class="bg-[#FFC741;]">

    <div class="relative">
    
      <div class="absolute right-0 -top-56">
      
          <img class="" src="img/Frame 433.png" alt="">

      </div>


  </div>

    <section class="container mx-auto mt-32">
    
      <section class="py-10 text-white ">
        <div class="flex gap-24 text-3xl">
          <p>500 +</p>
          <p>100K +</p>
          <P>3,23m +</P>
    
      </div>

      <div class="flex gap-32 mt-2 ml-4 ">
        <p>Partner</p>
        <p>User </p>
        <P>Download</P>
  
    </div>

    <div class="flex gap-24">
      <p>Word Wide</p>
      <p>Word Wide</p>
      <P class="ml-5">Total</P>

  </div>

      </section>
    
  
    </section>

  </section>

  <section class="container mx-auto mb-64">

    <div>
      <p>
        partner :
      </p>
    </div>

    <div class="flex gap-10">
      @include('layouts.patner')
    </div>

    <div class="flex gap-10 mt-10">
      <img src="img/Payoneer logo.png" alt="">
      <img src="img/PayPal_logo logo.png" alt="">
    </div>

  </section>

  <section class="container mx-auto mt-40">

    <div class="flex float-right ">
      <img src="img/Mask group (1).png" alt="">
    </div>

    <div>
      <p class="text-sm text-[#FFC741] mb-4">Dashboard Admin Manager </p>
      <h1 class="text-5xl">Very professional protection</h1>
      <p class="text-sm mt-5 max-w-[540px]">
        Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.
      </p>
      <p class="mt-5 text-sm font-bold">For Protect  your date:</p>
    </div>

    <div class="flex gap-2 mt-5">
      <img src="img/Group 187.png" alt="">
      <img class="ml-5 " src="img/wordpress-lockup logo.png" alt="">

  </div>

  </section>

  <section class="bg-[#F5FBFC]">

    <section class="container mx-auto mb-64">


      <div class="flex gap-32 mt-32">

                
        <div class="relative  w-[500px]">


            <div class="absolute">
            
                <img class="" src="img/Group 196.png" alt="">

            </div>

        </div>

        <div class="mt-24">

          <p class="text-sm text-[#FFC741] mb-4">Money Saved</p>

            <h1 class="text-5xl max-w-[500px] flex items-center font-bold ">
              Want to know how much You can  on $eduiten ?
            </h1>
            
            <img src="img/Group 192.png" alt="">
           
        </div>

    </div>
    

      </div>

    </section>

  </section>

  <section class="container mx-auto ">

    <div>


      <div class="grid float-right grid-cols-1 grid-rows-1">
        <div class="flex flex-col gap-6 lg:flex-row">
          @include('layouts.blog')
        </div>

        <div class="flex flex-col gap-6 mt-10 lg:flex-row">
          <div class="bg-[#F9F9F9] pb-5 pr-5">
            <div> 
              <img src="img/Frame 54 (1).png" alt="">
            </div>
            <div>
              <h1 class="mt-8 ml-5 text-2xl font-bold"> Fast transfer </h1>
              <p class="text-sm mt-2 ml-5 max-w-[200px]"> Easy to send money to other E-Wallet bank </p>
              <p class="text-sm text-[#33B8C8] mt-2 ml-5"> 
              <a href="#">Read More</a> 
              </p>
            </div>
          </div>

          <div class="bg-[#F9F9F9] pb-5 pr-5">
            <div> 
              <img src="img/Frame 55 (1).png" alt="">
            </div>
            <div>
              <h1 class="mt-8 ml-5 text-2xl font-bold"> Fast transfer </h1>
              <p class="text-sm mt-2 ml-5 max-w-[200px]"> Monthly maintenance for our users </p>
              <p class="text-sm text-[#33B8C8] mt-2 ml-5"> 
                <a href="#">Read More</a> 
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="pt-28 ">
        <p class="text-sm text-[#FFC741] mb-4">Available Features </p>
        <h1 class="text-5xl max-w-[540px]">We come with some Amazing features</h1>
        <p class="text-sm mt-5 max-w-[540px]">
          Seduten will help you to manage your finances, starting from your monthly expenses and income, ensuring that your account and money are safe with our professional system.
        </p>

        <div class="pt-10">
          <a href="" class="rounded btn">Browse Features</a>
        </div>

      </div>

    

    </div>

  </section>

  <section class="bg-[#F5FBFC] mt-60 pt-10 pb-10">

    <section class="container mx-auto">

      <div class="flex justify-center">

        <div class="">
          <p class="text-sm text-[#FFC741] mb-4 pl-64">Available Features </p>
          <h1 class="text-6xl text-[#33B8C8] ">Dashboard Profesional for </h1>
          <h1 class="text-6xl pl-36 text-[#33B8C8] ">Your E-Wallet</h1>
        </div>

       
  
      </div>

      <div class="relative">

        <div class="flex justify-center ">
          <img src="img/Group 197.png" alt="">
        </div>
  
        <div class="absolute top-32">
          <img src="img/Frame 191.png" alt="">
        </div>

        <div class="absolute right-0 top-32">
          <img src="img/Frame 192.png" alt="">
        </div>

      </div>

      <div class="flex justify-center">
        <p>
          Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling. 
        </p>
      </div>

      <div class="flex justify-center gap-10 mt-10">
        <a href="" class="rounded btn">Get Started</a>
        <a href="" class="rounded btn">download</a>
      </div>

      

    </section>

   

  </section>

  <section class="container mx-auto">

      <div class="pt-28 ">
        <p class="text-sm text-[#FFC741] mb-4">Testimonial </p>
        <h1 class="text-5xl ">Our clients say</h1>
        <p class="text-sm mt-5 max-w-[540px]">
          Lörem ipsum sagt dilig av anasa hemigon, blåbrun. Vanat lobel och bertad. Traktigt suprabon ett jeling. 
        </p>


      </div>

      <div class="grid grid-cols-1 grid-rows-1 mt-10">

        <div class="flex flex-col gap-6 lg:flex-row">

          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div class="pl-10 "> 
              <img src="img/Frame 48.png" alt="">
            </div>

            <div>

              <p class="text-sm mt-2 ml-5 max-w-[500px]"> Great experience with Seduten, with easy-to-understand features and guaranteed safety </p>


            </div>

            <div class="mt-10 ml-5">
              <img src="img/Group 204.png" alt="">
            </div>
  
          </div>
  
          <div class="bg-[#F9F9F9] pb-5 pr-5">

            <div class="pl-10 "> 
              <img src="img/Tesla logo2.png" alt="">
            </div>

            <div>

              <p class="text-sm mt-2 ml-5 max-w-[500px]"> Great money storage with very large limits for saving money, safe and very reliable </p>


            </div>

            <div class="mt-10 ml-5">
              <img src="img/Group 204 (1).png" alt="">
            </div>
  
          </div>
          

       

        </div>

      </div>

  </section>

  <section class="bg-[#002125;] text-white py-14 mt-32">
    <div
      class="container flex flex-col items-center space-x-12 space-y-5 md:flex-row md:space-y-0 md:items-start md:justify-center">
      <div class="flex flex-col">
        <div class="flex items-center gap-5 mb-5">
          <img src="./assets/logo.svg" alt="" width="40">
          <p class="font-bold">$eduiten</p>
        </div>

        <p class="max-w-[380px]">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien
          faucibus lectus, vel tempor dolor augue et lectus.
        </p>
        <ul class="flex gap-5 mt-5">
          <li>
            <img src="img/facebook.svg" alt="">
          </li>
          <li>
            <img src="img/twiter.png" alt="">
          </li>
          <li>
            <img src="img/in.svg" alt="">
          </li>
          <li>
            <img src="img/instagram.svg" alt="">
          </li>
        </ul>
      </div>

      <div class="grid grid-cols-2 gap-3 md:grid-cols-4 gap-y-8">
        <div>
          <p class="py-2 font-bold">Navigation</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Home</li>
            <li>About Us</li>
            <li>Shop</li>
            <li>Our Client</li>
            <li>Login</li>
            <li>Register</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Featured</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Dashboard</li>
            <li>Message</li>
            <li>Invesment</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Form Member</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>Privacy Policy</li>
            <li>Support</li>
          </ul>
        </div>

        <div>
          <p class="py-2 font-bold">Contact</p>
          <ul class="flex flex-col gap-2 mt-3 space-y-1">
            <li>hallo@seduitenID.com</li>
            <li>(702) 555-0122</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-[#212121] py-5">
    <p class="mr-20 text-right text-white">© 2022 Mangcoding. All rights reserved.</p>
  </footer>


  <script src="./app.js"></script>
</body>

</html>