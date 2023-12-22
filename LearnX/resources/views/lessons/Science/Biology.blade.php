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
                        <span class="font-bold">Biology:</span><br>
                        Cell Biology: Cell biology focuses on the structure, function, and behavior of cells—the basic units of life. It explores organelles, cellular processes, and how cells interact to form tissues and organisms.<br>

                        Genetics: Genetics studies heredity and variation in living organisms. It examines genes, DNA, inheritance patterns, genetic mutations, and how traits are passed from one generation to the next.<br>

                        Evolutionary Biology: Evolutionary biology explores the processes of evolution, including natural selection, adaptation, speciation, and the history of life on Earth. It investigates the diversity of species and how they change over time.<br>

                        Ecology: Ecology studies the interactions between organisms and their environments. It examines ecosystems, populations, communities, and the flow of energy and nutrients within ecological systems.<br>

                        Physiology: Physiology focuses on the functions and mechanisms of living organisms. It explores how organisms function at the molecular, cellular, tissue, and organ levels, including processes like metabolism, respiration, and reproduction.<br>

                        Botany: Botany is the study of plants, including their structure, growth, reproduction, physiology, and ecological relationships. It covers everything from algae and mosses to flowering plants.<br>

                        Zoology: Zoology is the study of animals, encompassing their behavior, anatomy, physiology, evolution, classification, and interactions with ecosystems. It covers a vast range of species, from invertebrates to mammals.<br>

                        Microbiology: Microbiology focuses on microscopic organisms such as bacteria, viruses, fungi, and protists. It explores their structure, function, behavior, and their roles in disease, industry, and the environment.<br>

                        Molecular Biology: Molecular biology examines biological processes at the molecular level, including DNA, RNA, protein synthesis, gene regulation, and the molecular basis of diseases.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>