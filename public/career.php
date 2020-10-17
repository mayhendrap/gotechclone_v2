<?php require_once("./components/header.php"); ?>

<?php 
  $titleCard = [
    "PHP Developer",
    "Laravel Developer",
    "UI/UX Designer",
    "Project Manager",
    "HR Manager", "UX Designer",
    "QA Officer", "Javascript Developer",
    "UI Designer"
  ];
?>

    <section class="container px-6 mt-8 text-center">
      <h1 class="text-2xl font-semibold md:text-3xl">
        Career
      </h1>
      <p class="text-sm text-gray-700 mt-5">Home / Career</p>
    </section>

    <!-- Youtube player -->
    <section class="container px-6 mt-16 lg:mt-24">
      <div class="flex flex-col items-center">
        <h1 class="text-xl lg:text-2xl">
          Why <span class="font-bold">Gotech??</span>
        </h1>
        <div class="text-center w-64 leading-loose md:w-84 lg:w-2/5">
          <p class="my-4 text-xs lg:text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum
            fugiat accusantium aperiam similique vitae consequuntur, veniam ex
            dignissimos alias. Vitae fuga eveniet ex maxime eaque explicabo hic
            vero quaerat quasi?
          </p>
        </div>
      </div>
      <div>
        <iframe
          class="w-full md:w-3/5 md:mx-auto"
          width="560"
          height="315"
          src="https://www.youtube.com/embed/Sv6dMFF_yts"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
      </div>
    </section>
    <!-- Youtube player -->

    <!-- Gallery Section -->
    <section class="container px-6 mt-16 md:px-20">
      <h1 class="text-xl text-center lg:text-2xl">
        <span class="font-bold">Life at</span>
        GOtech
      </h1>
      <div class="mt-4 md:px-20 lg:px-48 lg:flex">
        <div>
          <div>
            <img src="./img/pic9.png" class="rounded hover:opacity-75 transition duration-500 ease-in-out" />
          </div>
          <div class="flex pt-3">
            <div class="flex flex-col w-1/2">
              <img src="./img/pic10.png" class="rounded hover:opacity-75 transition duration-500 ease-in-out" />
              <img
                src="./img/pic11.png"
                class="rounded hover:opacity-75 transition duration-500 ease-in-out pt-3 md:h-44 lg:h-auto"
              />
            </div>
            <div class="w-1/2">
              <img src="./img/pic12.png" class="rounded hover:opacity-75 transition duration-500 ease-in-out pl-3" />
            </div>
          </div>
        </div>
        <div>
          <div class="flex pt-3 lg:pt-0 lg:pl-3">
            <div class="flex flex-col w-1/2">
              <img src="./img/pic10.png" class="rounded hover:opacity-75 transition duration-500 ease-in-out" />
              <img
                src="./img/pic13.png"
                class="rounded hover:opacity-75 transition duration-500 ease-in-out pt-3 md:h-44 lg:h-auto"
              />
            </div>

            <div class="w-1/2">
              <img src="./img/pic12.png" class="rounded hover:opacity-75 transition duration-500 ease-in-out pl-3" />
            </div>
          </div>
          <div class="pt-3 lg:pt-2 lg:pl-3">
            <img src="./img/pic14.png" class="rounded hover:opacity-75 transition duration-500 ease-in-out lg:h-64" />
          </div>
        </div>
      </div>
    </section>
    <!-- Gallery Section -->

    <!-- Find seat -->
    <section class="container px-6 mt-16 lg:mt-24">
      <div class="md:flex md:flex-col md:items-center">
        <h1 class="text-xl text-center font-bold lg:text-2xl">
          Find your seat
          <span class="font-normal">at our table</span>
        </h1>
        <div class="flex flex-wrap mt-3">
          <button class="btn-primary m-3">All Together</button>
          <button class="btn-primary m-3">Designer</button>
          <button class="btn-primary m-3">Developer</button>
          <button class="btn-primary m-3">Management</button>
        </div>
      </div>
      <div
        class="md:flex md:flex-col md:items-center lg:flex-row lg:flex-wrap lg:justify-center lg:mt-6"
      >
      <?php foreach ($titleCard as $key => $title) : ?>
        <!-- PHP Developer card -->
        <div
          class="border rounded shadow-xl px-8 pt-8 pb-12 mt-8 md:w-3/5 lg:w-30% lg:m-3"
        >
          <h1 class="mb-3 font-semibold text-xl"><?= $title ?></h1>
          <p class="text-xs tracking-wide leading-loose mb-4 text-gray-700">
            Osaka, Japan
          </p>
          <hr />
          <p
            class="text-xs tracking-wide leading-loose text-gray-700 text-left block py-4"
          >
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Reprehenderit nesciunt facilis in harum fugiat totam.
          </p>
          <small class="text-gray-600 flex items-center">
            <svg
              class="w-6 h-6 text-green-500 mr-1"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
              ></path>
            </svg>
            <span>
              11 hours ago
            </span>
          </small>
          <div class="block mt-10">
            <a href="/viewdetails.php" class="btn-primary">View Details</a>
          </div>
        </div>
      <?php endforeach; ?>
      </div>
    </section>
    <!-- End Find seat -->

    <?php require_once("./components/formContact.php"); ?>

<?php require_once("./components/footer.php"); ?>