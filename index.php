<?php
include "./includes/top.php";
?>
<header class="flex py-5 px-8 justify-between items-center shadow-md shadow-gray-300">
  <h1 class="font-bold text-4xl">Dmail</h1>
  <div class="links">
    <a href="./pages/signin.php" class="px-5 py-2 mr-3 rounded-md">Sign In</a>
    <a href="./pages/signup.php" class="px-5 py-2 bg-blue-700  text-white text-bold rounded-md font-bold">Create Account</a>
  </div>
</header>
<div class="grid grid-cols-2 mt-32 place-content-center">
  <div class="home-text grid place-content-center">
    <h2 class="text-6xl font-bold">
      Insecure, semi smart, <br>
      and mej easy <br>
      to use email
    </h2>
    <p class="text-3xl mt-3">Keep missing deadlines with Dmail.</p>
    <div class="link mt-7">
      <a href="./pages/signup.php" class="p-4 bg-blue-700 text-white text-bold rounded-sm font-bold">Create Account</a>
    </div>
  </div>
  <div class="home-img">
    <img src="./assets/home.png" alt="" class="min-w-full">
  </div>
</div>
<?php
include "./includes/bottom.php";
?>