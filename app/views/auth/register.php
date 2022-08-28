
    <section class="pt-36">
        <div class="">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 border-b-2 border-black">
                    <h2 class="font-bold text-2xl lg:text-4xl mb-4 ">Register</h2>
                    <p class="font-base text-lg mb-4 mt-4">Set and manage content and citation alerts, affiliate with your institution to access your institution's licensed content, save searches and articles, and manage personal subscriptions.</p>
                </div>
                
                <div class="w-full px-4">
                    
                    <form action="<?= BASEURL ?>/auth/tambah" method="POST">
                        <h2 class="font-bold text-2xl lg:text-4xl mb-4 mt-4">Login information</h2>

                        <div class="grid gap-6 mb-6 md:grid-cols-2 border-b-2 border-black">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email or Customer ID*</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="ex.user@institution.com" required>
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Retype email*</label>
                                <input type="email" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="user@institution.com" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password*</label>
                                <input type="password" name="password" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your password" required>
                            </div>  
                            <div class="mb-8">
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Confirm password*</label>
                                <input type="password" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Re-type your password" required>
                            </div>
                        </div>

                        <h2 class="font-bold text-2xl lg:text-4xl mb-4 mt-4">Personal profile</h2>

                        <div class="grid gap-6 mb-6 md:grid-cols-2 border-b-2 border-black">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Full Name</label>
                                <input type="text" name="nama" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your full name" required>
                            </div>
                            <div>
                                <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone Number</label>
                                <input type="text" name="telepon" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your phone number" required>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                                <input type="text" name="alamat" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your address" required>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-end">
                            <a href="<?= BASEURL ?>"><button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-blue-900 focus:outline-none bg-white rounded-lg border border-slate-500 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button></a>
                            <button type="submit" name="register-button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
