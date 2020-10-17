<?php require_once("./components/header.php"); ?>

    <!-- Position -->
    <section
      class="container relative px-8 mt-8 md:px-16 lg:px-8 flex flex-col items-center"
    >
      <div class="lg:flex lg:justify-between lg:items-start">
        <div class="lg:w-3/5">
          <h1 class="text-2xl">Position</h1>
          <h3 class="text-green-500 py-4">PHP Developer</h3>
          <div>
            <h3 class="pb-2">Job Description & Responsibilitys:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo
              soluta earum ex rerum quam quisquam ullam libero delectus quasi
              labore, minima sapiente odio? Dolorem ipsa tempore facilis odio
              expedita provident.
            </p>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem
              alias voluptatibus accusamus deserunt a iusto provident eum
              nostrum nam, optio distinctio ipsa officia quibusdam, ratione
              dicta id iste necessitatibus voluptas.
            </p>
          </div>

          <h1 class="text-2xl mt-8">Requirement</h1>
          <div>
            <h3 class="pb-2 mt-6">Educational Requirements:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Bachelor in Criminology/ International Relation Lorem ipsum dolor
              sit amet consectetur adipisicing elit. Doloremque, sed molestias
              Omnis
            </p>
            <h3 class="pb-2 mt-6">Experience Requirements:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Minimum 3 years experience in Security Management.
            </p>
            <h3 class="pb-2 mt-6">Additional Requirements:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Applicants having professional degree in Security Management,Risk
              management, Research Methodology & Data Analysis will be given
              preference.
            </p>
          </div>

          <h1 class="text-2xl mt-8">Salary & Benefits</h1>
          <div>
            <h3 class="pb-2 mt-6">Salary:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Negotiable
            </p>
            <h3 class="pb-2 mt-6">Other Benefits:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              Festivel, Contributory Compulsory Provident Fund, Gratuity,
              Performance Bonus, Health & Life
            </p>
            <h3 class="pb-2 mt-6">Job Location:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              London, United Kingdom
            </p>
            <h3 class="pb-2 mt-6">Last Apply Date:</h3>
            <p class="text-xs text-gray-700 leading-loose text-justify">
              21/Jan/2020
            </p>
          </div>
        </div>
        <div class="px-6 py-10 shadow-md rounded mt-8 md:w-3/5 lg:px-8 lg:w-2/6">
          <h3 class="text-green-400">Share The Job</h3>
          <p class="text-sm text-gray-600 pt-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </p>
          <ul class="flex py-8">
            <li class="mr-5">
              <a href="#">
                <img
                  src="./img/logo/facebook.png"
                  alt="facebook-logo"
                  class="w-12"
                />
              </a>
            </li>
            <li class="mr-5">
              <a href="#">
                <img
                  src="./img/logo/skype.png"
                  alt="facebook-logo"
                  class="w-12"
                />
              </a>
            </li>
            <li class="mr-5">
              <a href="#">
                <img
                  src="./img/logo/lingkedin.png"
                  alt="facebook-logo"
                  class="w-12"
                />
              </a>
            </li>
            <li class="mr-5">
              <a href="#">
                <img
                  src="./img/logo/instagram.png"
                  alt="facebook-logo"
                  class="w-12"
                />
              </a>
            </li>
          </ul>
          <a
            @click="{ modal = !modal}"
            class="font-normal btn-primary cursor-pointer"
            >Apply Now</a
          >
        </div>
      </div>
      <div
        :class="{ 'hidden' : modal === false }"
        class="absolute top-0 mt-240 px-8 md:mt-168 md:px-16 lg:-mt-8"
      >
        <form
          class="relative w-full py-6 px-4 pb-10 bg-white rounded-lg mx-auto"
        >
          <svg
            @click="{ modal = !modal}"
            class="w-3 h-3 absolute top-0 right-0 m-5 cursor-pointer"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M6 18L18 6M6 6l12 12"
            ></path>
          </svg>
          <div class="w-full flex mt-4">
            <div class="py-2 px-4">
              <label
                for="firstname"
                class="text-gray-800 tracking-wide text-sm md:text-lg"
                >First Name</label
              >
              <input
                type="text"
                name="firstname"
                placeholder="Robert Lee"
                class="w-full py-2 focus:outline-none text-xs md:text-base border-b border-gray-200"
                autocomplete="off"
              />
            </div>
            <div class="py-2 px-4">
              <label
                for="lastname"
                class="text-gray-800 tracking-wide text-sm md:text-lg"
                >Last Name</label
              >
              <input
                type="text"
                name="lastname"
                placeholder="Anderson"
                class="w-full py-2 focus:outline-none text-xs md:text-base border-b border-gray-200"
                autocomplete="off"
              />
            </div>
          </div>
          <div class="py-2 px-4">
            <label
              for="lastname"
              class="text-gray-800 tracking-wide text-sm md:text-lg"
              >Your Email Address</label
            >
            <input
              type="text"
              name="lastname"
              placeholder="kevin.jones@gmail.com"
              class="w-full py-2 focus:outline-none text-xs md:text-base border-b border-gray-200"
              autocomplete="off"
            />
          </div>
          <div class="py-2 px-4 flex flex-col">
            <label
              for="lastname"
              class="text-gray-800 tracking-wide text-sm md:text-lg"
              >Github/Stackoverflow link</label
            >
            <input
              type="text"
              name="lastname"
              placeholder="kevin.jones@gmail.com"
              class="w-full py-2 focus:outline-none text-xs md:text-base border-b border-gray-200"
              autocomplete="off"
            />
          </div>
          <div class="py-2 px-4 mb-3 flex flex-col">
            <label for="message" class="text-gray-700 text-sm md:text-lg"
              >Write Something About You</label
            >
            <textarea
              name="message"
              class="text-xs mt-4 py-2 border-b border-gray-200 px-1 focus:outline-none md:text-base"
              cols="20"
              rows="5"
              placeholder="Lorem ipsum is simply dummy text of the printing and . . ."
            ></textarea>
          </div>
          <div class="px-4">
            <button class="btn-primary md:px-6 md:py-3">
              Submit
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- End Position -->

    <?php require_once("./components/formContact.php"); ?>

<?php require_once("./components/footer.php"); ?>