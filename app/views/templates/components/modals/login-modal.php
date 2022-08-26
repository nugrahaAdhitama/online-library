
                                    <h3 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white"><?= APP_NAME ?></h3>
                                    <hr>
                                    <form class="space-y-6" method="post">
                                        <div>
                                            <h3 class="mt-4 mb-4 text-2xl font-medium text-gray-500">Log in to online library</h3>
                                        </div>
                                        <div>
                                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter your email or customer ID</label>
                                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter your email" required autofocus>
                                        </div>
                                        <div>
                                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                                        </div>
                                        <div class="flex justify-between">
                                            <a href="<?= BASEURL ?>/auth/forgot-password" class="text-sm w-1/2 text-blue-700 hover:underline dark:text-blue-500">Forgot Password?</a>
                                            <button type="submit" name="login-button" class="w-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log In</button>
                                        </div>
                                        <hr>
                                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                            Not registered? <a href="<?= BASEURL ?>/auth/register" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                        </div>
                                    </form>
