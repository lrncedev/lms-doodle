<?php
include "../includes/top.php";
?>
<div class="signin flex min-h-screen items-center justify-center">
  <div class="form-sign-in w-1/3 p-8 mx-auto rounded-md border-2 border-gray-600">
    <form action="" autocomplete="off" class="flex flex-col">
      <div class="">
        <h1 class="text-3xl font-bold mb-3"><span class="text-blue-600">D</span><span class="text-red-600">o</span><span class="text-yellow-300">o</span><span class="text-blue-600">d</span><span class="text-green-700">l</span><span class="text-red-600">e</span>
        </h1>
        <h2 class="text-2xl font-normal mb-3">Create your Doodle Account</h2>
        <div class="grid gap-y-1.5">
          <div class="grid grid-cols-2 gap-2">
            <div class="relative items-center w-full">
              <input type="text" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-300 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_filled" class="absolute text-sm text-black dark:text-black-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">First Name</label>
            </div>
            <div class="relative w-full">
              <input type="text" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-300 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
              <label for="floating_filled" class="absolute text-sm text-black dark:text-black-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Last Name</label>
            </div>
          </div>
          <div class="relative w-full">
            <input type="text" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-300 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_filled" class="absolute text-sm text-black dark:text-black-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Username</label>
          </div>
          <div class="relative w-full">
            <input type="password" id="floating_filled" class="block rounded-t-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-300 border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            <label for="floating_filled" class="absolute text-sm text-black dark:text-black-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Password</label>
          </div>
        </div>

      </div>
      <div class="form-sign-in-controls self-end mt-3">
        <!-- <button type="" class="p-3 font-bold  ">Cancel</button> -->
        <a href="../index.php" class="p-3 font-bold">Cancel</a>
        <button type="submit" class="p-3 font-bold bg-blue-600 text-white rounded-lg">Sign Up</button>
      </div>
    </form>
  </div>
</div>

<?php
include "../includes/top.php";
?>