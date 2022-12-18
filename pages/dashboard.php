<?php
include "../includes/top.php";

session_start();

if (!isset($_SESSION['user'])) {
  header("location:../index.php");
}
?>
<header class="flex justify-between px-5 py-3 shadow-md shadow-gray-300">
  <button class="text-xl" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"><i class="fa-solid fa-bars"></i> Classes
  </button>
  <div class="controls flex justify-between items-center">
    <!-- <button class="mr-4 p-2  text-xl font-bold" >
      <i class="fa-solid fa-plus"></i> asd
    </button> -->

    <button class=" mr-4 p-2  text-xl font-bold dropdown-toggle inline-block  transition duration-150 ease-in-out flex items-center whitespace-nowrap dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
      <i class="fa-solid fa-plus"></i>

    </button>
    <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton">
      <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Action</a></li>
      <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Another action</a></li>
      <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Something else here</a></li>
    </ul>

    <!-- <div class="px-4 py-2 border-2 border-blue-600 rounded-full text-lg bg-blue-700">
    </div> -->
    <div>
      <h1 class=" font-md text-xl"> Welcome <?php echo $_SESSION['user']; ?>
      </h1>
    </div>

  </div>
</header>

<div class="offcanvas offcanvas-start fixed bottom-0 flex flex-col max-w-full bg-white invisible bg-clip-padding shadow-sm outline-none transition duration-300 ease-in-out text-gray-700 top-0 left-0 border-none w-96" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header flex items-center justify-between p-4 border-b-2">
    <h5 class="offcanvas-title mb-0 leading-normal font-semibold text-xl " id="offcanvasExampleLabel"><i class="fa-solid fa-house mr-2"></i> Classes</h5>
    <button type="button" class="btn-close box-content w-4 h-4 p-2 -my-5 -mr-2 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
  </div>
  <div class="offcanvas-body flex-grow overflow-y-auto px-2">
    <h3 class="uppercase font-normal text-md p-4">Teaching Classes</h3>
    <div class="p-4 hover:bg-gray-100">
      Subject 1
    </div>
    <div class="p-4 hover:bg-gray-100">
      Subject 2
    </div>
    <div class="p-4 hover:bg-gray-100">
      Subject 3
    </div>
    <!-- <div class="dropdown relative mt-4">
      <button class="dropdown-toggle inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
          <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
        </svg>
      </button>
      <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Action</a></li>
        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Another action</a></li>
        <li><a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="#">Something else here</a></li>
      </ul>
    </div> -->
  </div>
  <div class="mt-auto p-4 block">
    <a href="logout.php" class="text-xl font-semibold"><i class="fas fa-cog"></i> Logout</a>
  </div>
</div>
<!-- drawer component -->
<div class="content grid grid-cols-4 mt-8 gap-x-2 gap-y-3 grid-flow-row auto-rows-[300px] px-4">
  <div class="class-card flex flex-col rounded-lg bg-gray-100  shadow-md shadow-gray-500 transition ease-out delay-150 hover:scale-105">
    <div class="class-card-header border-b-2 bg-green-600 py-6 px-2">
      <h1 class="class-card-title uppercase font-bold text-2xl text-white">Integ Programming 2</h1>
      <h2 class="class-card-section text-lg font-normal text-white">Section 1-1A [S.Y. 202X - 202X]</h2>
    </div>
    <div class="bg-white row-start-2 grow"></div>
    <div class="bg-white row-start-2  mt-auto p-4 border-2 ">Controls here</div>
  </div>
  <div class="class-card flex flex-col rounded-lg bg-gray-100  shadow-md shadow-gray-500 transition ease-out delay-150 hover:scale-105">
    <div class="class-card-header border-b-2 bg-green-600 py-6 px-2">
      <h1 class="class-card-title uppercase font-bold text-2xl text-white">Integ Programming 2</h1>
      <h2 class="class-card-section text-lg font-normal text-white">Section 1-1A [S.Y. 202X - 202X]</h2>
    </div>
    <div class="bg-white row-start-2 grow"></div>
    <div class="bg-white row-start-2  mt-auto p-4 border-2 ">Controls here</div>
  </div>

  <!-- <div>2</div>
  <div>3</div>
  <div>4</div>
  <div>5</div> -->
</div>

<!-- <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script> -->

<?php
include "../includes/bottom.php";
?>