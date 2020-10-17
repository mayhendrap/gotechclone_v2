<!-- Contact Section -->
<section class="px-8 bg-teal-100 mt-16 md:px-20">
    <div class="py-16">
        <h1 class="text-xl text-center lg:text-2xl">Facing Problem?</h1>
        <h1 class="text-xl text-center font-bold mt-1 lg:text-2xl">
            Lets Get In Touch Now
        </h1>
        <hr class="w-1/4 mt-3 mx-auto bg-black" />

        <div class="mt-6">
            <form
            class="relative w-full py-10 px-8 pb-10 bg-white rounded-lg mx-auto lg:w-3/5"
            >
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
            <div class="py-5 px-4">
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
            <div class="py-5 px-4 flex flex-col">
                <label
                for="lastname"
                class="text-gray-800 tracking-wide text-sm md:text-lg"
                >Which Related Problem You Are Facing?</label
                >
                <select name="problem" id="problem" class="mt-3 text-base text-gray-600
                ">
                    <option value="problem" disabled selected>Select One</option>
                    <option value="problem">Select One</option>
                    <option value="problem">Select two</option>
                    <option value="problem">Select three</option>
                </select>
            </div>
            <div class="py-5 px-4 mb-3 flex flex-col">
                <label for="message" class="text-gray-700 text-sm md:text-lg"
                >Write Something About You</label
                >
                <textarea
                name="message"
                class="text-sm mt-4 px-3 py-2 border-b rounded border-gray-300 px-1 focus:outline-none md:text-base"
                cols="20"
                rows="5"
                placeholder="message here . . ."
                ></textarea>
            </div>
            <div class="px-4">
                <button class="btn-primary">
                Submit
                </button>
            </div>
            </form>
        </div>
    </div>
</section>
    <!-- End Contact Section -->