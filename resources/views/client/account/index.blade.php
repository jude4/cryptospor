@section('title', 'User account')
<x-master-layout>
    <div class="container px-6 mx-auto grid ">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Account details
        </h2>


        <div class="md:flex md:space-x-2">
            <div class="w-30 md:flex-shrink-0 mb-6 mt-4">
                <div class="mb-4 shadow-lg rounded-2xl w-90 bg-white dark:bg-gray-800 mt-12">
                    <div class="flex flex-col items-center justify-center p-4 -mt-16">
                        <a href="#" class="block relative">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="rounded-full h-20 w-20 object-cover">
                        </a>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mt-2">
                            Name: {{ Auth::user()->name }}
                        </p>
                        <p class="text-gray-800 dark:text-white text-xl font-medium mt-2">
                            E-mail: {{ ucfirst(Auth::user()->email) }}
                        </p>

                        <p class="text-gray-400 text-xs mb-4">
                            {{ Auth::user()->username }}
                        </p>
                        <p class="text-xs p-2 bg-pink-500 text-white px-4 rounded-full">
                            Basic investor
                        </p>
                        <div class="rounded-lg p-2 w-full mt-4">
                            <div class="flex items-center justify-between text-sm text-gray-600 dark:text-gray-200">
                                <p class="flex flex-col">
                                    Status
                                    <span class="text-black dark:text-white font-bold">
                                        active
                                    </span>
                                </p>
                                <p class="flex flex-col">
                                    Total referrals
                                    <span class="text-black dark:text-white font-bold">
                                        455
                                    </span>
                                </p>
                                <p class="flex flex-col">
                                    Joined
                                    <span class="text-black dark:text-white font-bold">
                                        {{ Auth::user()->created_at }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="mt-flex flex-wrap sm:flex-no-wrap justify-between bg-white rounded overflow-hidden dark:bg-gray-800 p-2 space-x-0 sm:space-x-2 w-80">
                     <div class="flex flex-1 sm:flex-initial justify-center items-baseline py-4 sm:py-0">
                         <span class="bg-green-300 bg-opacity-50 rounded-full p-1">
                             <svg class="h-10 sm:h-6 w-auto text-green-400 dark:text-gray-200" fill="currentColor" viewBox="0 0 20 20">
                                 <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                             </svg>
                         </span>
                     </div>
                     <div class="flex flex-col flex-grow text-center sm:text-left">
                         <h1 class="font-medium leading-relaxed sm:leading-normal dark:text-gray-200">
                             Your account has been
                             <strong class="text-green-400">verified</strong>
                         </h1>
                         <p class="leading-tight text-xs md:text-sm dark:text-gray-200">
                             Lorem ipsum dolor sit amet, consectetur adipisicing
                             elit. Aliquid assumenda et expedita hic laboriosam
                             maiores mollitia nam optio, reiciendis reprehenderit
                             sint voluptates voluptatum? Ab adipisci deserunt
                             excepturi facere odio quam!
                         </p>
                     </div>
                 </div>

            </div>
            <div class="w-auto md:flex-1">
                @livewire('account-details.update-account-details')
            </div>


        </div>








    </div>

</x-master-layout>
