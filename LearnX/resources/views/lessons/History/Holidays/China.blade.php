<x-partials.UserLayout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        History:<br>
                        Holidays Around The World:<br>
                    </p>
                    <p class="text-2xl font-sans m-4">
                        <br>
                        <a href="{{ route('page.china') }}" class="hover:text-purple-300">China</a><br>
                        <br>
                        <a href="{{ route('page.india') }}" class="hover:text-purple-300">India</a><br>
                        <br>
                        <a href="{{ route('page.usa') }}" class="hover:text-purple-300">United States</a><br>
                        <br>
                        <a href="{{ route('page.brazil') }}" class="hover:text-purple-300">Brazil</a><br>
                        <br>
                        <a href="{{ route('page.russia') }}" class="hover:text-purple-300">Russia</a><br>
                        <br>
                        <a href="{{ route('page.indonesia') }}" class="hover:text-purple-300">Indonesia</a><br>
                        <br>
                        <a href="{{ route('page.pakistan') }}" class="hover:text-purple-300">Pakistan</a><br>
                        <br>
                        <a href="{{ route('page.nigeria') }}" class="hover:text-purple-300">Nigeria</a><br>
                        <br>
                        <a href="{{ route('page.japan') }}" class="hover:text-purple-300">Japan</a><br>
                        <br>
                        <a href="{{ route('page.mexico') }}" class="hover:text-purple-300">Mexico</a><br>
                    </p>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>HOLIDAYS</b>
                        </div>
                        <div class="font-Preahvihear items-center text-xl">
                            <b>China</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                Chinese New Year(Spring Festival):<br>The date varies each year, usually falling between January 21 and February 20. It is the most important traditional festival in China, marking the beginning of the lunar new year.<br>
                                <br>
                                Qingming Festival(Tomb Sweeping Day):<br>Usually observed in early April, it is a time for people to visit the graves of their ancestors to pay respects and clean the burial sites.<br>
                                <br>
                                May Day(Labor Day):<br>Celebrated on May 1st, it is a public holiday to honor workers and their contributions.<br>
                                <br>
                                Dragon Boat Festival:<br>Usually occurring in June, this festival commemorates the death of the ancient poet Qu Yuan. People eat traditional rice dumplings and participate in dragon boat races.<br>
                                <br>
                                Mid-Autumn Festival(Moon Festival):<br>Celebrated in September or early October, it is a time for family reunions. Mooncakes, a traditional Chinese pastry, are often shared.<br>
                                <br>
                            <div class="font-sans">
                                National Day(Golden Week):<br>Celebrated on October 1st, it marks the founding of the People's Republic of China. The holiday is part of the Golden Week, a 7-day holiday from October 1 to 7.<br>
                                <br>
                                Double Ninth Festival:<br>Falling on the ninth day of the ninth month of the lunar calendar, usually in October, it's a day for climbing mountains to avoid misfortune.<br>
                                <br>
                                Winter Solstice Festival:<br>Usually occurring around December 21st or 22nd, it is a time for family gatherings and enjoying special foods.<br>
                                <br>
                                Lantern Festival:<br>Celebrated on the 15th day of the first lunar month, usually in February, it marks the end of the Chinese New Year celebrations. Lanterns are displayed, and there are various cultural activities.<br>
                                <br>
                                Women's Day:<br>Celebrated on March 8th, it honors the contributions and achievements of women.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>