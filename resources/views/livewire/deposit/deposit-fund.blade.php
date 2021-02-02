<section class="mb-4  bg-gray-100 bg-opacity-50 dark:bg-gray-800">
    <form class="container max-w-2xl mx-auto shadow-md  ">

        <div class="space-y-6 bg-white dark:bg-gray-800">
            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3 dark:text-gray-200">
                    Amount
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" id="user-info-email" class=" rounded-lg dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="" />
                    </div>
                </div>
            </div>
            <hr />
            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Company wallet address
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <input type="text" id="user-info-email" class="dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="" />
                    </div>
                </div>
            </div>
            <hr>
            <div class="items-center w-full p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3">
                    Company info
                </h2>
                <div class="max-w-sm mx-auto space-y-5 md:w-2/3">
                    <div>
                        <div class=" relative ">
                            <input type="text" id="user-info-phone" class="dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Company wallet address" />
                        </div>
                    </div>
                    <div>
                        <div class=" relative ">
                            <input type="text" id="user-info-phone" class="dark:border-gray-600 dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Phone number" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="items-center w-full p-8 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-4/12">
                    Upload payment proof
                </h2>
                <div class="w-full max-w-sm pl-2 mx-auto space-y-5 md:w-5/12 md:pl-9 md:inline-flex">
                    <div class=" relative ">
                        <input type="file" id="user-info-password" class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="" />
                    </div>
                </div>


                <div class="text-center md:w-3/12 md:pl-6">
                    <button type="button" class="py-2 px-4  bg-pink-600 hover:bg-pink-700 focus:ring-pink-500 focus:ring-offset-pink-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                        Save
                    </button>
                </div>

            </div>

            <hr />
            <div class="items-center w-full  p-4 space-y-4 text-gray-500 md:inline-flex md:space-y-0">
                <h2 class="max-w-sm mx-auto md:w-1/3 dark:text-gray-200">
                    Payment proof
                </h2>
                <div class="max-w-sm mx-auto md:w-2/3">
                    <div class=" relative ">
                        <img class="object-center max-h-80" src="{{ asset('frontend/img/feature/intro-mobile.png') }}" alt="payment proof" />
                    </div>
                </div>
            </div>

            <hr />
            <div class="w-full px-4 pb-4 ml-auto text-gray-500 md:w-1/3">
                <button type="submit" class="py-2 px-4  bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 focus:ring-offset-blue-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                    Save
                </button>
            </div>
        </div>
    </form>
</section>
