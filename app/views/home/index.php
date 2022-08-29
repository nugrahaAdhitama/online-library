    <!-- search button -->
    <section id="home" class="pt-16 h-screen">
        <div class="home bg-[url('img/covid.jpg')] bg-cover bg-center max-w min-h-full flex items-center justify-center bg-slate-800">
            <div class="container flex flex-col">
                <h3 class="text-white text-xl lg:text-2xl mb-5 flex justify-center">Accelerating research discovery to shape a better future</h3>

                <h2 class="text-white mb-5 text-3xl lg:text-5xl font-bold flex justify-center">Today's research, tomorrow's innovation</h2>

                <form class="flex items-center justify-center ml-[-36px] lg:ml-0">
                    <input type="text" name="q" placeholder="Search Here.." class="text-dark p-3 rounded-md border-black border focus:outline-none focus:ring-white focus:ring-1 focus:border-white lg:w-3/5">
                    <button type="submit" class="border p-3 ml-2 rounded-md border-white hover:bg-white hover:text-black hover:border-black transition-all ease-in-out duration-300  text-white">Search</button>
                </form>

                <?= isset( $_GET['q'] ) ? '
                <h3 class="text-white text-xl lg:text-2xl pt-5 flex justify-center">Showing results of ' . $_GET['q'] . '</h3>
                ' : '';
                ?>

            </div>
        </div>
    </section>
