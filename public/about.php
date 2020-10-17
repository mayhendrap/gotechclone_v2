<?php require_once("./components/header.php"); ?>
    <section class="container px-6 mt-6 text-center">
      <h1 class="text-xl font-normal md:text-3xl">
        <span class="font-semibold">About</span>
        Us
      </h1>
      <p class="text-sm text-gray-700">Home / About</p>
    </section>

    <!-- About section -->
    <section class="container px-6 mt-16 lg:px-26">
      <div class="text-center text-xl font-medium md:text-2xl lg:hidden">
        <h1 class="px-20">
          <span class="font-bold">Overview Of</span>
          <span>Our Company</span>
        </h1>
        <hr class="w-1/4 mt-2 mx-auto" />
      </div>
      <div
        class="mt-4 flex flex-col items-center text-left tracking-wide leading-loose text-xs md:text-base lg:flex-row-reverse lg:items-start"
      >
        <img
          src="./img/about_our_work.png"
          alt="about our work"
          class="w-full lg:w-1/2"
        />

        <!-- Desc for desktop -->
        <div class="hidden lg:block">
          <h1 class="lg:text-3xl">The Process</h1>
          <h1 class="font-semibold lg:text-3xl -mt-5">About Our Work</h1>
          <hr class="w-1/4 mt-2" />
          <div class="px-4 md:px-12 lg:px-0">
            <p class="py-4 pr-20 text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
              reprehenderit laudantium, a facilis dolores tenetur deserunt fuga
              facere obcaecati excepturi culpa placea tenetur.
            </p>
            <p class="pr-20 text-justify">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque
              similique enim, voluptate accusamus recusandae risk pre ad.
            </p>
          </div>
          <button class="btn-primary mt-6 px-6 py-2">
            Know More
          </button>
        </div>
        <!-- End Desc for desktop -->

        <div class="px-4 md:px-12 lg:hidden">
          <p class="py-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
            reprehenderit laudantium, a facilis dolores tenetur deserunt fuga
            facere obcaecati excepturi culpa placeat, ipsam, suscipit quaerat
            accusantium tempora illum ab mollitia.
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque
            similique enim, voluptate accusamus recusandae ut nemo repellat
            ullam nesciunt dignissimos.
          </p>
        </div>
        <button class="btn-primary mt-12 md:px-6 md:py-3 lg:hidden">
          Know More
        </button>
      </div>
    </section>
    <!-- End About section -->

    <!-- Help section -->
    <!-- Help section mobile view -->
    <section class="container px-6 mt-16">
      <div class="text-center text-xl font-medium md:text-2xl lg:hidden">
        <h1>We are here to</h1>
        <h1>
          <span class="font-bold">Always help</span>
          you
        </h1>
        <hr class="w-1/4 mt-2 mx-auto" />
      </div>
      <div
        class="flex flex-col items-center text-left tracking-wide leading-loose text-xs mt-6 md:text-base lg:flex-row lg:items-start"
      >
        <img
          src="./img/receptionist.png"
          alt="always help pic"
          class="lg:w-1/2"
        />

        <!-- Desc for desktop -->
        <div class="hidden mt-20 lg:block">
          <h1 class="lg:text-3xl">We are here to</h1>
          <h1 class="font-semibold lg:text-3xl -mt-5">
            Always help <span class="font-normal">you</span>
          </h1>
          <hr class="w-1/4 mt-2" />
          <div class="px-4 md:px-12 lg:px-0">
            <p class="py-4 pr-20 text-justify">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
              reprehenderit laudantium, a facilis dolores tenetur deserunt fuga
              facere obcaecati excepturi culpa placea tenetur.
            </p>
            <p class="pr-20 text-justify">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque
              similique enim, voluptate accusamus recusandae risk pre ad.
            </p>
          </div>
        </div>
        <!-- End Desc for desktop -->

        <div class="flex flex-col justify-center px-4 md:px-12 lg:hidden">
          <p class="py-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
            reprehenderit laudantium, a facilis dolores tenetur deserunt fuga
            facere obcaecati excepturi culpa placeat, ipsam, suscipit quaerat
            accusantium tempora illum ab mollitia.
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque
            similique enim, voluptate accusamus recusandae ut nemo repellat
            ullam nesciunt dignissimos.
          </p>
        </div>
      </div>
    </section>
    <!-- Help section mobile view -->
    <!-- End Help section -->

    <!-- Speciality section -->
    <section class="container px-6 mt-16">
      <div class="text-center font-medium text-xl md:text-2xl">
        <h1>What is the</h1>
        <h1 class="font-bold">Speciality Of Us?</h1>
        <hr class="w-1/4 mt-2 mx-auto" />
      </div>

      <div
        class="flex flex-wrap mt-10 px-4 text-center md:flex-col md:items-center lg:flex-row lg:justify-around"
      >
        <div
          class="flex flex-col items-center border rounded shadow-xl px-12 py-12 md:w-1/2 lg:w-30% lg:mt-0 lg:mr-8"
        >
          <img
            src="./img/quick_response.png"
            alt="quick response pic"
            class="w-48"
          />
          <h3 class="font-normal text-lg mt-2">
            Quick <span class="font-semibold">Response</span>
          </h3>
          <p class="py-4 text-xs tracking-wide leading-loose">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi
            quibusdam maxime voluptate placeat quo.
          </p>
        </div>

        <div
          class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12 md:w-1/2 lg:w-30% lg:mt-0 lg:mr-8"
        >
          <img
            src="./img/great_communication.png"
            alt="quick response pic"
            class="w-48"
          />
          <h3 class="font-normal text-lg mt-2">
            Great <span class="font-semibold">Communication</span>
          </h3>
          <p class="py-4 text-xs tracking-wide leading-loose">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi
            quibusdam maxime voluptate placeat quo.
          </p>
        </div>

        <div
          class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12  md:w-1/2 lg:w-30% lg:mt-0 lg:mr-8"
        >
          <img
            src="./img/satisfaction.png"
            alt="quick response pic"
            class="w-48"
          />
          <h3 class="font-normal text-lg mt-2">
            Customer <span class="font-semibold">Satisfaction</span>
          </h3>
          <p class="py-4 text-xs tracking-wide leading-loose">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi
            quibusdam maxime voluptate placeat quo.
          </p>
        </div>
      </div>
    </section>
    <!-- End Speciality section -->

    <!-- Gallery Section -->
    <section class="container px-6 mt-16 md:mt-32 md:px-20">
      <div class="text-center md:mb-8">
        <h1 class="text-xl md:text-2xl">
          Our Featured
          <span class="font-semibold">Gallery</span>
        </h1>
      </div>
      <div class="mt-4 lg:flex flex-wrap">
        <div class="lg:w-1/2">
          <div class="relative">
            <img src="./img/pic1.png" id="img-gallery" class="p-2 hover:opacity-75 transition duration-500 ease-in-out" />
            <div class="absolute bottom-0 text-white px-4 ml-3 mb-8">
              <h6 class="text-base">Dumini Soliman's</h6>
              <p class="text-xs font-light lg:mt-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium reprehenderit est vitae quibusdam cupiditate voluptatibus magni illum suscipit nam nobis!
              </p>
            </div>
          </div>
          <div class="flex flex-wrap">
            <img src="./img/pic2.png" id="img-gallery" class="p-2 w-1/2 hover:opacity-75 transition duration-500 ease-in-out" />
            <img src="./img/pic3.png" id="img-gallery" class="p-2 w-1/2 hover:opacity-75 transition duration-500 ease-in-out" />
          </div>
        </div>
        <div class="flex flex-wrap lg:w-1/2">
          <img src="./img/pic4.png" id="img-gallery" class="p-2 w-1/2 hover:opacity-75 transition duration-500 ease-in-out" />
          <img src="./img/pic5.png" id="img-gallery" class="p-2 w-1/2 hover:opacity-75 transition duration-500 ease-in-out" />
          <img src="./img/pic6.png" id="img-gallery" class="p-2 md:w-full hover:opacity-75 transition duration-500 ease-in-out" />
        </div>
      </div>
    </section>
    <!-- Gallery Section -->

    <?php require_once("./components/formContact.php"); ?>

<?php require_once("./components/footer.php"); ?>