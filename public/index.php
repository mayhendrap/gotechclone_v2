<?php require_once("./components/header.php"); ?>

    <!-- Home Section -->
    <main class="container px-6 mt-16">
      <div class="flex flex-col items-center">
        <div class="text-center">
          <h1 class="text-xl font-semibold md:text-2xl lg:text-5xl">
            We Create Simple Solution
          </h1>
          <h1 class="text-xl md:text-2xl lg:text-5x33l">For Your Complex Task</h1>
          <p
            class="text-gray-700 mt-5 text-sm tracking-wide md:text-base md:px-16 md:mt-8 lg:px-84"
          >
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste vero
            nostrum amet deserunt ea a quos quia cupiditate.
          </p>
          <div class="mt-6 md:mt-10">
            <button class="btn-primary mr-3 md:px-6 md:py-3 lg:px-8 lg:py-3">
              Our Works
            </button>
            <button class="btn-primary md:px-6 md:py-3 lg:px-8 lg:py-3">
              Know More
            </button>
          </div>
        </div>
        <img
          src="./img/create_solution.png"
          alt="create simple solution"
          class="w-full mt-8  lg:w-1/2"
        />
      </div>
    </main>
    <!-- End Home Section -->

    <!-- About section -->
    <!-- for mobile view -->
    <section class="container px-6 mt-16">
      <div class="text-center text-xl font-medium md:text-2xl lg:hidden">
        <h1>The Process</h1>
        <h1 class="font-bold">About Our Work</h1>
        <hr class="w-1/4 mt-2 mx-auto" />
      </div>
      <div
        class="mt-4 flex flex-col items-center text-left tracking-wide leading-loose text-xs md:text-base lg:flex-row-reverse lg:items-start lg:px-10"
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
    <!-- for mobile view -->
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

    <!-- Product Section -->
    <section class="container px-6 mt-20">
      <h1 class="text-center text-xl lg:text-2xl">
        Our Owning <span class="font-bold">Products</span>
      </h1>
      <p class="my-4 text-center text-xs px-6">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusantium,
        architecto.
      </p>
      <div class="flex flex-col lg:py-16">
        <div class="flex flex-col items-center lg:flex-row lg:justify-around">
          <div
            class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-8 md:w-3/5 lg:w-30%"
          >
            <img
              src="./img/logo/earth-2.0.png"
              alt="quick response pic"
              class="w-26"
            />
            <p
              class="text-center pt-8 pb-6 text-xs tracking-wide leading-loose"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium, eligendi.
            </p>
            <a href="#" class="text-green-600 font-medium">Learn More</a>
          </div>

          <div
            class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12 md:mt-8 md:w-3/5 lg:w-30% lg:-mt-16"
          >
            <img
              src="./img/logo/hex-lab.png"
              alt="quick response pic"
              class="w-24"
            />
            <p
              class="text-center pt-8 pb-6 text-xs tracking-wide leading-loose"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium, eligendi.
            </p>
            <a href="#" class="text-green-600 font-medium">Learn More</a>
          </div>

          <div
            class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12 md:w-3/5 lg:w-30% lg:mt-8"
          >
            <img
              src="./img/logo/liva.png"
              alt="quick response pic"
              class="w-20 lg:w-16"
            />
            <p
              class="text-center pt-8 pb-6 text-xs tracking-wide leading-loose"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium, eligendi.
            </p>
            <a href="#" class="text-green-600 font-medium">Learn More</a>
          </div>
        </div>

        <div class="flex flex-col items-center lg:flex-row lg:justify-around">
          <div
            class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12 md:w-3/5 lg:w-30%"
          >
            <img
              src="./img/logo/lighting.png"
              alt="quick response pic"
              class="w-24"
            />
            <p
              class="text-center pt-8 pb-6 text-xs tracking-wide leading-loose"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium, eligendi.
            </p>
            <a href="#" class="text-green-600 font-medium">Learn More</a>
          </div>

          <div
            class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12 md:w-3/5 lg:w-30% lg:-mt-16"
          >
            <img
              src="./img/logo/aven.png"
              alt="quick response pic"
              class="w-24"
            />
            <p
              class="text-center pt-8 pb-6 text-xs tracking-wide leading-loose"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium, eligendi.
            </p>
            <a href="#" class="text-green-600 font-medium">Learn More</a>
          </div>

          <div
            class="flex flex-col items-center border rounded shadow-xl px-12 py-12 mt-12 md:w-3/5 lg:w-30%"
          >
            <img
              src="./img/logo/ideaa.png"
              alt="quick response pic"
              class="w-20"
            />
            <p
              class="text-center pt-8 pb-6 text-xs tracking-wide leading-loose"
            >
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Accusantium, eligendi.
            </p>
            <a href="#" class="text-green-600 font-medium">Learn More</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End Product Section -->

    <!-- Testimoni Section -->
    <section class="container px-6 mt-20 lg:px-56">
      <h1 class="text-xl text-center">
        What Our <span class="font-bold">Client Says?</span>
      </h1>
      <div class="carousel w-full" data-flickity='{ "wrapAround": true }'>
      <?php for ($i=0; $i < 3; $i++) : ?>  
        <figure
            class="w-full carousel-cell flex flex-col items-center mt-10 py-6"
          >
            <img src="./img/client.png" alt="client1" class="mb-10 w-48" />
            <div class="md:w-3/6 lg:w-2/5">
              <p class="font-normal text-center text-gray-800 px-4 tracking-wide">
                " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam
                nobis tenetur temporibus itaque laboriosam dignissimos. "
              </p>
              <figcaption
                class="font-xs tracking-wide font-medium text-center mt-4"
              >
                Bonito Andriano
              </figcaption>
              <figcaption class="font-xs tracking-wide text-center mt-1">
                CEO, Zuck Company
              </figcaption>
            </div>
        </figure>
      <?php endfor; ?>
      </div>
    </section>
    <!-- End Testimoni Section -->

    <?php require_once("./components/formContact.php"); ?>
    

<?php require_once("./components/footer.php"); ?>