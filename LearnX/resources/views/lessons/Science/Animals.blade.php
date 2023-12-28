<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        Science:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.earth') }}" class="hover:text-purple-300">Earth</a><br>
                        <br>
                        <a href="{{ route('page.space') }}" class="hover:text-purple-300">Space</a><br>
                        <br>
                        <a href="{{ route('page.biology') }}" class="hover:text-purple-300">Biology</a><br>
                        <br>
                        <a href="{{ route('page.animals') }}" class="hover:text-purple-300">Animals</a><br>
                        <br>
                        <a href="{{ route('page.oceans') }}" class="hover:text-purple-300">Oceans</a><br>
                        <br>
                        <a href="{{ route('page.chemistry') }}" class="hover:text-purple-300">Chemistry</a><br>
                        <br>
                        <a href="{{ route('page.physics') }}" class="hover:text-purple-300">Physics</a><br>
                        <br>
                        <a href="{{ route('page.psycho') }}" class="hover:text-purple-300">Psycology</a><br>
                        <br>
                        <a href="{{ route('page.rocks') }}" class="hover:text-purple-300">Geology</a><br>
                        <br>
                        <a href="{{ route('page.genes') }}" class="hover:text-purple-300">Genetics</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Science:</span><br>
                        <span class="font-bold">Animals:</span><br>
                        <span class="underline">Anatomy and Physiology:</span> This branch delves into the structure and function of animals' bodies, studying organs, tissues, and systems. Understanding how different body parts function allows scientists to comprehend how animals adapt to their environments.<br>
                        <br>
                        <span class="underline">Behavioral Ecology:</span> Investigates how animals interact with each other and their environment, examining behaviors such as mating rituals, communication, migration, and foraging strategies. This field also explores the adaptive significance of behavior.<br>
                        <br>
                        <span class="underline">Evolutionary Biology:</span> Explores the origins and changes in animal species over time. Evolutionary biologists study how species evolve, diversify, and adapt to their changing environments.<br>
                        <br>
                        <span class="underline">Taxonomy and Systematics:</span> Focuses on classifying and categorizing organisms based on their evolutionary relationships. Taxonomists classify animals into groups to understand their diversity and evolutionary history.<br>
                        <br>
                        <span class="underline">Ecology:</span> Studies the interactions between animals and their environment, including their relationships with other organisms, their habitats, and the impact of environmental changes on their survival.<br>
                        <br>
                        <span class="underline">Conservation Biology:</span> Aims to understand and protect endangered species and ecosystems. Conservation biologists work to preserve biodiversity and prevent species extinction.<br>
                        <br>
                        <span class="underline">Ethology:</span> Investigates animal behavior in a natural environment, focusing on instincts, learning, and communication. Ethologists study animal behavior without manipulating their surroundings.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>