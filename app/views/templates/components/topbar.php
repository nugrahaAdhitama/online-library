    <header class="bg-slate-800">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <!-- elemen sebelah kiri -->
                <div class="px-4">
                    <a href="<?= BASEURL ?>" class="font-bold text-blue-700 absolute top-3">
                        <img src="<?= BASEURL ?>/img/app-logo.png" width="48px" align="left">
                        &nbsp; <b style="font-size: 24px"><?= APP_NAME ?></b>
                    </a>
                </div>

                <!-- elemen sebelah kanan -->
                <div class="flex items-center px-4">
                    <!-- modal toggle -->
                    <div class="block absolute right-4 top-3 lg:hidden ">
                        <button type="button" data-modal-toggle="topbar-modal">
                            <img src="<?= BASEURL ?>/img/login-button.png" class="w-[30px]">
                        </button>
                    </div>

                    <div class="absolute hidden lg:block right-4 top-3">
                        <button class="font-bold text-sm  text-blue-700 px-4 rounded-md" data-modal-toggle="topbar-modal"> 
                            <?= isset( $_SESSION['is_login'] ) ? 
                                $_SESSION['email'] 
                            : '
                                LOGIN/REGISTER
                            '; ?>
                        </button>
                    </div>
                    <!-- akhir modal toggle -->

                    <!-- main modal -->
                    <div id="topbar-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="topbar-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="py-6 px-6 lg:px-8">
                                    <?php include 'modals/' . ( isset( $_SESSION['is_login'] ) ? 'user-modal.php' : 'login-modal.php' ) ?>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- akhir main modal -->

                </div>
            </div>
        </div>
    </header>