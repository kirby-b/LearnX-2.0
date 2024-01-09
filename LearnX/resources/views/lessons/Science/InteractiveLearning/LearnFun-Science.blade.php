<x-partials.QuizLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Science:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.writeout.science') }}" class="hover:text-purple-300">Write it Out</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.science') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.flashcards.science') }}" class="hover:text-purple-300">Flashcards</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">Science:</span><br>
                            <span class="font-extrabold">Learning Fun:</span>
                        </div>
                        {{-- <form>
                            <span class="font-bold">Animal Science:</span>
                            <br>
                            <p>What is the primary function of the respiratory system in animals? </p>
                            <input type="radio" id="anresp1" name="question1" value="FALSE">
                            <label for="anresp1">A. Transportation of nutrients</label><br>
                            <input type="radio" id="anresp2" name="question1" value="FALSE">
                            <label for="anresp2">B. Regulation of body temperature</label><br>
                            <input type="radio" id="anresp3" name="question1" value="TRUE">
                            <label for="anresp3">C. Exchange of gases</label><!--Correct-->
                            <input type="radio" id="anresp4" name="question1" value="FALSE">
                            <label for="anresp4">D. Maintenance of water balance</label>
                            <br>
                            <p>In animal breeding, which term describes the process of mating individuals that possess different but complementary genetic traits to produce offspring with the best qualities of both parents?</p>
                            <input type="radio" id="breed1" name="question2" value="FALSE">
                            <label for="breed1">A. Inbreeding</label><br>
                            <input type="radio" id="breed2" name="question2" value="FALSE">
                            <label for="breed2">B. Outbreeding</label><br>
                            <input type="radio" id="breed3" name="question2" value="TRUE">
                            <label for="breed3">C. Hybridization</label><!--Correct-->
                            <input type="radio" id="breed4" name="question2" value="FALSE">
                            <label for="breed4">D. Selective breeding</label>
                            <br>
                            <p>What term describes the behavior exhibited by animals that involves establishing and defending a territory, often for mating, feeding, or rearing offspring?</p>
                            <input type="radio" id="behave1" name="question3" value="FALSE">
                            <label for="behave1">A. Hibernation</label><br>
                            <input type="radio" id="behave2" name="question3" value="FALSE">
                            <label for="behave2">B. Migration</label><br>
                            <input type="radio" id="behave3" name="question3" value="FALSE">
                            <label for="behave3">C. Agonistic behavior</label>
                            <input type="radio" id="behave4" name="question3" value="TRUE">
                            <label for="behave4">D. Territoriality</label><!--Correct-->
                            <br>
                            <p>Which nutrient is primarily responsible for providing a readily available source of energy for animals?</p>
                            <input type="radio" id="feed1" name="question4" value="FALSE">
                            <label for="feed1">A. Protein</label><br>
                            <input type="radio" id="feed2" name="question4" value="TRUE">
                            <label for="feed2">B. Carbohydrates</label><br><!--Correct-->
                            <input type="radio" id="feed3" name="question4" value="FALSE">
                            <label for="feed3">C. Vitamins</label>
                            <input type="radio" id="feed4" name="question4" value="FALSE">
                            <label for="feed4">D. Minerals</label>
                            <br>
                            <p>Which of the following is a common parasite that causes itching and irritation in animals, often resulting in skin inflammation and hair loss?</p>
                            <input type="radio" id="vet1" name="question5" value="FALSE">
                            <label for="vet1">A. Roundworm</label><br>
                            <input type="radio" id="vet2" name="question5" value="TRUE">
                            <label for="vet2">B. Flea</label><br><!--Correct-->
                            <input type="radio" id="vet3" name="question5" value="FALSE">
                            <label for="vet3">C. Tapeworm</label>
                            <input type="radio" id="vet4" name="question5" value="FALSE">
                            <label for="vet4">D. Tick</label>
                            <br>
                            <p>Which branch of zoology focuses on the study of insects?</p>
                            <input type="radio" id="zoo1" name="question6" value="FALSE">
                            <label for="zoo1">A. Herpetology</label><br>
                            <input type="radio" id="zoo2" name="question6" value="TRUE">
                            <label for="zoo2">B. Entomology</label><br><!--Correct-->
                            <input type="radio" id="zoo3" name="question6" value="FALSE">
                            <label for="zoo3">C. Ornithology</label>
                            <input type="radio" id="zoo4" name="question6" value="FALSE">
                            <label for="zoo4">D. Ichthyology</label>
                            <br>
                            <p>Which principle advocates for providing animals with environments that allow them to express their natural behaviors, promoting their mental and physical well-being?</p>
                            <input type="radio" id="ethic1" name="question7" value="FALSE">
                            <label for="ethic1">A. Utilitarianism</label><br>
                            <input type="radio" id="ethic2" name="question7" value="FALSE">
                            <label for="ethic2">B. Anthropocentrism</label><br>
                            <input type="radio" id="ethic3" name="question7" value="FALSE">
                            <label for="ethic3">C. Speciesism</label>
                            <input type="radio" id="ethic4" name="question7" value="TRUE">
                            <label for="ethic4">D. Five Freedoms</label><!--Correct-->
                            <p>Which hormone is primarily responsible for triggering ovulation in female mammals?</p>
                            <input type="radio" id="reproduct1" name="question8" value="FALSE">
                            <label for="reproduct1">A. Estrogen</label><br>
                            <input type="radio" id="reproduct2" name="question8" value="FALSE">
                            <label for="reproduct2">B. Progesterone</label><br>
                            <input type="radio" id="reproduct3" name="question8" value="FALSE">
                            <label for="reproduct3">C. Follicle-stimulating hormone (FSH)</label>
                            <input type="radio" id="reproduct4" name="question8" value="TRUE">
                            <label for="reproduct4">D. Luteinizing hormone (LH)</label><!--Correct-->
                            <br>
                            <p>Which conservation approach involves restoring or creating habitats to support endangered species outside their natural range?</p>
                            <input type="radio" id="conserve1" name="question9" value="FALSE">
                            <label for="conserve1">A. In-situ conservation</label><br>
                            <input type="radio" id="conserve2" name="question9" value="FALSE">
                            <label for="conserve2">B. Ex-situ conservation</label><br>
                            <input type="radio" id="conserve3" name="question9" value="TRUE">
                            <label for="conserve3">C. Rewilding</label><!--Correct-->
                            <input type="radio" id="conserve4" name="question9" value="FALSE">
                            <label for="conserve4">D. Habitat fragmentation</label>
                            <br>
                            <p>Which factor plays a crucial role in determining the carrying capacity of grazing land for livestock?</p>
                            <input type="radio" id="livestock1" name="question10" value="TRUE">
                            <label for="livestock1">A. Average annual rainfall</label><br><!--Correct-->
                            <input type="radio" id="livestock2" name="question10" value="FALSE">
                            <label for="livestock2">B. Soil pH levels</label><br>
                            <input type="radio" id="livestock3" name="question10" value="FALSE">
                            <label for="livestock3">C. Altitude of the grazing land</label>
                            <input type="radio" id="livestock4" name="question10" value="FALSE">
                            <label for="livestock4">D. Types of grass species</label>
                            <br>
                            <span class="font-bold">Biology:</span>
                            <br>
                            <p>Which organelle is responsible for the production of ATP (adenosine triphosphate) in eukaryotic cells?</p>
                            <input type="radio" id="cellbio1" name="question11" value="FALSE">
                            <label for="cellbio1">A. Golgi apparatus</label><br>
                            <input type="radio" id="cellbio2" name="question11" value="FALSE">
                            <label for="cellbio2">B. Endoplasmic reticulum</label><br>
                            <input type="radio" id="cellbio3" name="question11" value="TRUE">
                            <label for="cellbio3">C. Mitochondria</label><!--Correct-->
                            <input type="radio" id="cellbio4" name="question11" value="FALSE">
                            <label for="cellbio4">D. Lysosomes</label>
                            <br>
                            <p>What genetic disorder is caused by the presence of an extra chromosome 21, leading to characteristic physical features and intellectual disabilities?</p>
                            <input type="radio" id="genes1" name="question12" value="FALSE">
                            <label for="genes1">A. Turner syndrome</label><br>
                            <input type="radio" id="genes2" name="question12" value="FALSE">
                            <label for="genes2">B. Klinefelter syndrome</label><br>
                            <input type="radio" id="genes3" name="question12" value="TRUE">
                            <label for="genes3">C. Down syndrome</label><!--Correct-->
                            <input type="radio" id="genes4" name="question12" value="FALSE">
                            <label for="genes4">D. Edwards syndrome</label>
                            <br>
                            <p>Evolutionary Biology</p>
                            <input type="radio" id="evolution1" name="question13" value="evolution1">
                            <label for="evolution1">A. ans1</label><br>
                            <input type="radio" id="evolution2" name="question13" value="evolution2">
                            <label for="evolution2">B. ans2</label><br>
                            <input type="radio" id="evolution3" name="question13" value="evolution3">
                            <label for="evolution3">C. ans3</label>
                            <input type="radio" id="evolution4" name="question13" value="evolution4">
                            <label for="evolution4">D. ans4</label>
                            <br>
                            <p>Ecology</p>
                            <input type="radio" id="ecology1" name="question14" value="ecology1">
                            <label for="ecology1">A. ans1</label><br>
                            <input type="radio" id="ecology2" name="question14" value="ecology2">
                            <label for="ecology2">B. ans2</label><br>
                            <input type="radio" id="ecology3" name="question14" value="ecology3">
                            <label for="ecology3">C. ans3</label>
                            <input type="radio" id="ecology4" name="question14" value="ecology4">
                            <label for="ecology4">D. ans4</label>
                            <br>
                            <p>Physiology</p>
                            <input type="radio" id="physio1" name="question15" value="physio1">
                            <label for="physio1">A. ans1</label><br>
                            <input type="radio" id="physio2" name="question15" value="physio2">
                            <label for="physio2">B. ans2</label><br>
                            <input type="radio" id="physio3" name="question15" value="physio3">
                            <label for="physio3">C. ans3</label>
                            <input type="radio" id="physio4" name="question15" value="physio4">
                            <label for="physio4">D. ans4</label>
                            <br>
                            <p>Botany</p>
                            <input type="radio" id="botany1" name="question16" value="botany1">
                            <label for="botany1">A. ans1</label><br>
                            <input type="radio" id="botany2" name="question16" value="botany2">
                            <label for="botany2">B. ans2</label><br>
                            <input type="radio" id="botany3" name="question16" value="botany3">
                            <label for="botany3">C. ans3</label>
                            <input type="radio" id="botany4" name="question16" value="botany4">
                            <label for="botany4">D. ans4</label>
                            <br>
                            <p>Biotechnology</p>
                            <input type="radio" id="biotech1" name="question17" value="biotech1">
                            <label for="biotech1">A. ans1</label><br>
                            <input type="radio" id="biotech2" name="question17" value="biotech2">
                            <label for="biotech2">B. ans2</label><br>
                            <input type="radio" id="biotech3" name="question17" value="biotech3">
                            <label for="biotech3">C. ans3</label>
                            <input type="radio" id="biotech4" name="question17" value="biotech4">
                            <label for="biotech4">D. ans4</label>
                            <br>
                            <p>Microbiology</p>
                            <input type="radio" id="microbio1" name="question18" value="microbio1">
                            <label for="microbio1">A. ans1</label><br>
                            <input type="radio" id="microbio2" name="question18" value="microbio2">
                            <label for="microbio2">B. ans2</label><br>
                            <input type="radio" id="microbio3" name="question18" value="microbio3">
                            <label for="microbio3">C. ans3</label>
                            <input type="radio" id="microbio4" name="question18" value="microbio4">
                            <label for="microbio4">D. ans4</label>
                            <br>
                            <p>Molecular Biology</p>
                            <input type="radio" id="moleculebio1" name="question19" value="moleculebio1">
                            <label for="moleculebio1">A. ans1</label><br>
                            <input type="radio" id="moleculebio2" name="question19" value="moleculebio2">
                            <label for="moleculebio2">B. ans2</label><br>
                            <input type="radio" id="moleculebio3" name="question19" value="moleculebio3">
                            <label for="moleculebio3">C. ans3</label>
                            <input type="radio" id="moleculebio4" name="question19" value="moleculebio4">
                            <label for="moleculebio4">D. ans4</label>
                            <br>
                            <p>Neurobiology</p>
                            <input type="radio" id="neurobio1" name="question20" value="neurobio1">
                            <label for="neurobio1">A. ans1</label><br>
                            <input type="radio" id="neurobio2" name="question20" value="neurobio2">
                            <label for="neurobio2">B. ans2</label><br>
                            <input type="radio" id="neurobio3" name="question20" value="neurobio3">
                            <label for="neurobio3">C. ans3</label>
                            <input type="radio" id="neurobio4" name="question20" value="neurobio4">
                            <label for="neurobio4">D. ans4</label>
                            <br>
                            <span class="font-bold">Chemistry:</span>
                            <br>
                            <p>Matter</p>
                            <input type="radio" id="matter1" name="question21" value="matter1">
                            <label for="matter1">A. ans1</label><br>
                            <input type="radio" id="matter2" name="question21" value="matter2">
                            <label for="matter2">B. ans2</label><br>
                            <input type="radio" id="matter3" name="question21" value="matter3">
                            <label for="matter3">C. ans3</label>
                            <input type="radio" id="matter4" name="question21" value="matter4">
                            <label for="matter4">D. ans4</label>
                            <br>
                            <p>Elements and Compounds</p>
                            <input type="radio" id="elements1" name="question22" value="elements1">
                            <label for="elements1">A. ans1</label><br>
                            <input type="radio" id="elements2" name="question22" value="elements2">
                            <label for="elements2">B. ans2</label><br>
                            <input type="radio" id="elements3" name="question22" value="elements3">
                            <label for="elements3">C. ans3</label>
                            <input type="radio" id="elements4" name="question22" value="elements4">
                            <label for="elements4">D. ans4</label>
                            <br>
                            <p>Atoms and Molecules</p>
                            <input type="radio" id="atoms1" name="question23" value="atoms1">
                            <label for="atoms1">A. ans1</label><br>
                            <input type="radio" id="atoms2" name="question23" value="atoms2">
                            <label for="atoms2">B. ans2</label><br>
                            <input type="radio" id="atoms3" name="question23" value="atoms3">
                            <label for="atoms3">C. ans3</label>
                            <input type="radio" id="atoms4" name="question23" value="atoms4">
                            <label for="atoms4">D. ans4</label>
                            <br>
                            <p>Chemical Reactions</p>
                            <input type="radio" id="chemreact1" name="question24" value="chemreact1">
                            <label for="chemreact1">A. ans1</label><br>
                            <input type="radio" id="chemreact2" name="question24" value="chemreact2">
                            <label for="chemreact2">B. ans2</label><br>
                            <input type="radio" id="chemreact3" name="question24" value="chemreact3">
                            <label for="chemreact3">C. ans3</label>
                            <input type="radio" id="chemreact4" name="question24" value="chemreact4">
                            <label for="chemreact4">D. ans4</label>
                            <br>
                            <p>States Of Matter</p>
                            <input type="radio" id="matterstate1" name="question25" value="matterstate1">
                            <label for="matterstate1">A. ans1</label><br>
                            <input type="radio" id="matterstate2" name="question25" value="matterstate2">
                            <label for="matterstate2">B. ans2</label><br>
                            <input type="radio" id="matterstate3" name="question25" value="matterstate3">
                            <label for="matterstate3">C. ans3</label>
                            <input type="radio" id="matterstate4" name="question25" value="matterstate4">
                            <label for="matterstate4">D. ans4</label>
                            <br>
                            <p>Acids and Bases</p>
                            <input type="radio" id="acids1" name="question26" value="acids1">
                            <label for="acids1">A. ans1</label><br>
                            <input type="radio" id="acids2" name="question26" value="acids2">
                            <label for="acids2">B. ans2</label><br>
                            <input type="radio" id="acids3" name="question26" value="acids3">
                            <label for="acids3">C. ans3</label>
                            <input type="radio" id="acids4" name="question26" value="acids4">
                            <label for="acids4">D. ans4</label>
                            <br>
                            <p>Thermodynamics</p>
                            <input type="radio" id="themodynam1" name="question27" value="themodynam1">
                            <label for="themodynam1">A. ans1</label><br>
                            <input type="radio" id="themodynam2" name="question27" value="themodynam2">
                            <label for="themodynam2">B. ans2</label><br>
                            <input type="radio" id="themodynam3" name="question27" value="themodynam3">
                            <label for="themodynam3">C. ans3</label>
                            <input type="radio" id="themodynam4" name="question27" value="themodynam4">
                            <label for="themodynam4">D. ans4</label>
                            <br>
                            <p>Analytical Chemistry</p>
                            <input type="radio" id="chemanalyt1" name="question28" value="chemanalyt1">
                            <label for="chemanalyt1">A. ans1</label><br>
                            <input type="radio" id="chemanalyt2" name="question28" value="chemanalyt2">
                            <label for="chemanalyt2">B. ans2</label><br>
                            <input type="radio" id="chemanalyt3" name="question28" value="chemanalyt3">
                            <label for="chemanalyt3">C. ans3</label>
                            <input type="radio" id="chemanalyt4" name="question28" value="chemanalyt4">
                            <label for="chemanalyt4">D. ans4</label>
                            <br>
                            <p>Organic Chemistry</p>
                            <input type="radio" id="organic1" name="question29" value="organic1">
                            <label for="organic1">A. ans1</label><br>
                            <input type="radio" id="organic2" name="question29" value="organic2">
                            <label for="organic2">B. ans2</label><br>
                            <input type="radio" id="organic3" name="question29" value="organic3">
                            <label for="organic3">C. ans3</label>
                            <input type="radio" id="organic4" name="question29" value="organic4">
                            <label for="organic4">D. ans4</label>
                            <br>
                            <p>Inorganic Chemistry</p>
                            <input type="radio" id="inorganic1" name="question30" value="inorganic1">
                            <label for="inorganic1">A. ans1</label><br>
                            <input type="radio" id="inorganic2" name="question30" value="inorganic2">
                            <label for="inorganic2">B. ans2</label><br>
                            <input type="radio" id="inorganic3" name="question30" value="inorganic3">
                            <label for="inorganic3">C. ans3</label>
                            <input type="radio" id="inorganic4" name="question30" value="inorganic4">
                            <label for="inorganic4">D. ans4</label>
                            <br>
                            <span class="font-bold">Earth:</span>
                            <br>
                            <p>Geology</p>
                            <input type="radio" id="geology1" name="question31" value="geology1">
                            <label for="geology1">A. ans1</label><br>
                            <input type="radio" id="geology2" name="question31" value="geology2">
                            <label for="geology2">B. ans2</label><br>
                            <input type="radio" id="geology3" name="question31" value="geology3">
                            <label for="geology3">C. ans3</label>
                            <input type="radio" id="geology4" name="question31" value="geology4">
                            <label for="geology4">D. ans4</label>
                            <br>
                            <p>Meteorology</p>
                            <input type="radio" id="meteor1" name="question32" value="meteor1">
                            <label for="meteor1">A. ans1</label><br>
                            <input type="radio" id="meteor2" name="question32" value="meteor2">
                            <label for="meteor2">B. ans2</label><br>
                            <input type="radio" id="meteor3" name="question32" value="meteor3">
                            <label for="meteor3">C. ans3</label>
                            <input type="radio" id="meteor4" name="question32" value="meteor4">
                            <label for="meteor4">D. ans4</label>
                            <br>
                            <p>Oceanography</p>
                            <input type="radio" id="oceanograph1" name="question33" value="oceanograph1">
                            <label for="oceanograph1">A. ans1</label><br>
                            <input type="radio" id="oceanograph2" name="question33" value="oceanograph2">
                            <label for="oceanograph2">B. ans2</label><br>
                            <input type="radio" id="oceanograph3" name="question33" value="oceanograph3">
                            <label for="oceanograph3">C. ans3</label>
                            <input type="radio" id="oceanograph4" name="question33" value="oceanograph4">
                            <label for="oceanograph4">D. ans4</label>
                            <br>
                            <p>Environmental Science</p>
                            <input type="radio" id="envscience1" name="question34" value="envscience1">
                            <label for="envscience1">A. ans1</label><br>
                            <input type="radio" id="envscience2" name="question34" value="envscience2">
                            <label for="envscience2">B. ans2</label><br>
                            <input type="radio" id="envscience3" name="question34" value="envscience3">
                            <label for="envscience3">C. ans3</label>
                            <input type="radio" id="envscience4" name="question34" value="envscience4">
                            <label for="envscience4">D. ans4</label>
                            <br>
                            <p>Geophysics</p>
                            <input type="radio" id="geophysics1" name="question35" value="geophysics1">
                            <label for="geophysics1">A. ans1</label><br>
                            <input type="radio" id="geophysics2" name="question35" value="geophysics2">
                            <label for="geophysics2">B. ans2</label><br>
                            <input type="radio" id="geophysics3" name="question35" value="geophysics3">
                            <label for="geophysics3">C. ans3</label>
                            <input type="radio" id="geophysics4" name="question35" value="geophysics4">
                            <label for="geophysics4">D. ans4</label>
                            <br>
                            <p>Hydrology</p>
                            <input type="radio" id="hydrology1" name="question36" value="hydrology1">
                            <label for="hydrology1">A. ans1</label><br>
                            <input type="radio" id="hydrology2" name="question36" value="hydrology2">
                            <label for="hydrology2">B. ans2</label><br>
                            <input type="radio" id="hydrology3" name="question36" value="hydrology3">
                            <label for="hydrology3">C. ans3</label>
                            <input type="radio" id="hydrology4" name="question36" value="hydrology4">
                            <label for="hydrology4">D. ans4</label>
                            <br>
                            <p>Geomorphology</p>
                            <input type="radio" id="geomorph1" name="question37" value="geomorph1">
                            <label for="geomorph1">A. ans1</label><br>
                            <input type="radio" id="geomorph2" name="question37" value="geomorph2">
                            <label for="geomorph2">B. ans2</label><br>
                            <input type="radio" id="geomorph3" name="question37" value="geomorph3">
                            <label for="geomorph3">C. ans3</label>
                            <input type="radio" id="geomorph4" name="question37" value="geomorph4">
                            <label for="geomorph4">D. ans4</label>
                            <br>
                            <p>Climatology</p>
                            <input type="radio" id="climate1" name="question38" value="climate1">
                            <label for="climate1">A. ans1</label><br>
                            <input type="radio" id="climate2" name="question38" value="climate2">
                            <label for="climate2">B. ans2</label><br>
                            <input type="radio" id="climate3" name="question38" value="climate3">
                            <label for="climate3">C. ans3</label>
                            <input type="radio" id="climate4" name="question38" value="climate4">
                            <label for="climate4">D. ans4</label>
                            <br>
                            <p>Volcanology</p>
                            <input type="radio" id="volcanoe1" name="question39" value="volcanoe1">
                            <label for="volcanoe1">A. ans1</label><br>
                            <input type="radio" id="volcanoe2" name="question39" value="volcanoe2">
                            <label for="volcanoe2">B. ans2</label><br>
                            <input type="radio" id="volcanoe3" name="question39" value="volcanoe3">
                            <label for="volcanoe3">C. ans3</label>
                            <input type="radio" id="volcanoe4" name="question39" value="volcanoe4">
                            <label for="volcanoe4">D. ans4</label>
                            <br>
                            <p>Paleontology</p>
                            <input type="radio" id="paleon1" name="question40" value="paleon1">
                            <label for="paleon1">A. ans1</label><br>
                            <input type="radio" id="paleon2" name="question40" value="paleon2">
                            <label for="paleon2">B. ans2</label><br>
                            <input type="radio" id="paleon3" name="question40" value="paleon3">
                            <label for="paleon3">C. ans3</label>
                            <input type="radio" id="paleon4" name="question40" value="paleon4">
                            <label for="paleon4">D. ans4</label>
                            <br>
                            <span class="font-bold">Genetics:</span>
                            <br>
                            <p>Genes and DNA</p>
                            <input type="radio" id="genesndna1" name="question41" value="genesndna1">
                            <label for="genesndna1">A. ans1</label><br>
                            <input type="radio" id="genesndna2" name="question41" value="genesndna2">
                            <label for="genesndna2">B. ans2</label><br>
                            <input type="radio" id="genesndna3" name="question41" value="genesndna3">
                            <label for="genesndna3">C. ans3</label>
                            <input type="radio" id="genesndna4" name="question41" value="genesndna4">
                            <label for="genesndna4">D. ans4</label>
                            <br>
                            <p>Genomics</p>
                            <input type="radio" id="genomics1" name="question42" value="genomics1">
                            <label for="genomics1">A. ans1</label><br>
                            <input type="radio" id="genomics2" name="question42" value="genomics2">
                            <label for="genomics2">B. ans2</label><br>
                            <input type="radio" id="genomics3" name="question42" value="genomics3">
                            <label for="genomics3">C. ans3</label>
                            <input type="radio" id="genomics4" name="question42" value="genomics4">
                            <label for="genomics4">D. ans4</label>
                            <br>
                            <p>Molecular Genetics</p>
                            <input type="radio" id="moleculargenes1" name="question43" value="moleculargenes1">
                            <label for="moleculargenes1">A. ans1</label><br>
                            <input type="radio" id="moleculargenes2" name="question43" value="moleculargenes2">
                            <label for="moleculargenes2">B. ans2</label><br>
                            <input type="radio" id="moleculargenes3" name="question43" value="moleculargenes3">
                            <label for="moleculargenes3">C. ans3</label>
                            <input type="radio" id="moleculargenes4" name="question43" value="moleculargenes4">
                            <label for="moleculargenes4">D. ans4</label>
                            <br>
                            <p>Population Genetics</p>
                            <input type="radio" id="populationgenes1" name="question44" value="populationgenes1">
                            <label for="populationgenes1">A. ans1</label><br>
                            <input type="radio" id="populationgenes2" name="question44" value="populationgenes2">
                            <label for="populationgenes2">B. ans2</label><br>
                            <input type="radio" id="populationgenes3" name="question44" value="populationgenes3">
                            <label for="populationgenes3">C. ans3</label>
                            <input type="radio" id="populationgenes4" name="question44" value="populationgenes4">
                            <label for="populationgenes4">D. ans4</label>
                            <br>
                            <p>Epigenetics</p>
                            <input type="radio" id="epigene1" name="question45" value="epigene1">
                            <label for="epigene1">A. ans1</label><br>
                            <input type="radio" id="epigene2" name="question45" value="epigene2">
                            <label for="epigene2">B. ans2</label><br>
                            <input type="radio" id="epigene3" name="question45" value="epigene3">
                            <label for="epigene3">C. ans3</label>
                            <input type="radio" id="epigene4" name="question45" value="epigene4">
                            <label for="epigene4">D. ans4</label>
                            <br>
                            <p>Human Genetics</p>
                            <input type="radio" id="humangene1" name="question46" value="humangene1">
                            <label for="humangene1">A. ans1</label><br>
                            <input type="radio" id="humangene2" name="question46" value="humangene2">
                            <label for="humangene2">B. ans2</label><br>
                            <input type="radio" id="humangene3" name="question46" value="humangene3">
                            <label for="humangene3">C. ans3</label>
                            <input type="radio" id="humangene4" name="question46" value="humangene4">
                            <label for="humangene4">D. ans4</label>
                            <br>
                            <p>Genetic Engineering</p>
                            <input type="radio" id="engineergene1" name="question47" value="engineergene1">
                            <label for="engineergene1">A. ans1</label><br>
                            <input type="radio" id="engineergene2" name="question47" value="engineergene2">
                            <label for="engineergene2">B. ans2</label><br>
                            <input type="radio" id="engineergene3" name="question47" value="engineergene3">
                            <label for="engineergene3">C. ans3</label>
                            <input type="radio" id="engineergene4" name="question47" value="engineergene4">
                            <label for="engineergene4">D. ans4</label>
                            <br>
                            <p>Comparative Genomics</p>
                            <input type="radio" id="comparegeno1" name="question48" value="comparegeno1">
                            <label for="comparegeno1">A. ans1</label><br>
                            <input type="radio" id="comparegeno2" name="question48" value="comparegeno2">
                            <label for="comparegeno2">B. ans2</label><br>
                            <input type="radio" id="comparegeno3" name="question48" value="comparegeno3">
                            <label for="comparegeno3">C. ans3</label>
                            <input type="radio" id="comparegeno4" name="question48" value="comparegeno4">
                            <label for="comparegeno4">D. ans4</label>
                            <br>
                            <p>Cytogenetics</p>
                            <input type="radio" id="cytogenetics1" name="question49" value="cytogenetics1">
                            <label for="cytogenetics1">A. ans1</label><br>
                            <input type="radio" id="cytogenetics2" name="question49" value="cytogenetics2">
                            <label for="cytogenetics2">B. ans2</label><br>
                            <input type="radio" id="cytogenetics3" name="question49" value="cytogenetics3">
                            <label for="cytogenetics3">C. ans3</label>
                            <input type="radio" id="cytogenetics4" name="question49" value="cytogenetics4">
                            <label for="cytogenetics4">D. ans4</label>
                            <br>
                            <p>Functional Genomics</p>
                            <input type="radio" id="funcgenomics1" name="question50" value="funcgenomics1">
                            <label for="funcgenomics1">A. ans1</label><br>
                            <input type="radio" id="funcgenomics2" name="question50" value="funcgenomics2">
                            <label for="funcgenomics2">B. ans2</label><br>
                            <input type="radio" id="funcgenomics3" name="question50" value="funcgenomics3">
                            <label for="funcgenomics3">C. ans3</label>
                            <input type="radio" id="funcgenomics4" name="question50" value="funcgenomics4">
                            <label for="funcgenomics4">D. ans4</label>
                            <br>
                            <span class="font-bold">Oceans:</span>
                            <br>
                            <p>Q1</p>
                            <input type="radio" id="ans1" name="question51" value="ans1">
                            <label for="ans1">A. ans1</label><br>
                            <input type="radio" id="ans2" name="question51" value="ans2">
                            <label for="ans2">B. ans2</label><br>
                            <input type="radio" id="ans3" name="question51" value="ans3">
                            <label for="ans3">C. ans3</label>
                            <input type="radio" id="ans4" name="question51" value="ans4">
                            <label for="ans4">D. ans4</label>
                            <br>
                            <span class="font-bold">Physics:</span>
                            <br>
                            <p>Q1</p>
                            <input type="radio" id="ans1" name="question61" value="ans1">
                            <label for="ans1">A. ans1</label><br>
                            <input type="radio" id="ans2" name="question61" value="ans2">
                            <label for="ans2">B. ans2</label><br>
                            <input type="radio" id="ans3" name="question61" value="ans3">
                            <label for="ans3">C. ans3</label>
                            <input type="radio" id="ans4" name="question61" value="ans4">
                            <label for="ans4">D. ans4</label>
                            <br>
                            <span class="font-bold">Psychology:</span>
                            <br>
                            <p>Q1</p>
                            <input type="radio" id="ans1" name="question7" value="ans1">
                            <label for="ans1">A. ans1</label><br>
                            <input type="radio" id="ans2" name="question71" value="ans2">
                            <label for="ans2">B. ans2</label><br>
                            <input type="radio" id="ans3" name="question71" value="ans3">
                            <label for="ans3">C. ans3</label>
                            <input type="radio" id="ans4" name="question71" value="ans4">
                            <label for="ans4">D. ans4</label>
                            <br>
                            <span class="font-bold">Space:</span>
                            <br>
                            <p>Q1</p>
                            <input type="radio" id="ans1" name="question81" value="ans1">
                            <label for="ans1">A. ans1</label><br>
                            <input type="radio" id="ans2" name="question81" value="ans2">
                            <label for="ans2">B. ans2</label><br>
                            <input type="radio" id="ans3" name="question81" value="ans3">
                            <label for="ans3">C. ans3</label>
                            <input type="radio" id="ans4" name="question81" value="ans4">
                            <label for="ans4">D. ans4</label>
                        </form> --}}
                        <div>
                            <div class="min-h-screen flex items-center justify-center bg-black bg-no-repeat bg-cover bg-center">
                                <!-- Modal for quiz completion -->
                                <div class="modal-container hidden fixed inset-0 z-10 bg-black bg-opacity-40 flex items-center justify-center" id="score-modal">
                                    <div class="modal-content-container bg-gray-800 rounded-lg p-6">
                                        <h1 class="text-gray-300 text-lg mb-4">Congratulations, Quiz Completed.</h1>
                                        <div class="grade-details text-white text-center">
                                            <p>Attempts : 10</p>
                                            <p>Wrong Answers : <span id="wrong-answers"></span></p>
                                            <p>Right Answers : <span id="right-answers"></span></p>
                                            <p>Grade : <span id="grade-percentage"></span>%</p>
                                            <p><span id="remarks"></span></p>
                                        </div>
                                        <div class="modal-button-container flex justify-center mt-4">
                                            <button onclick="closeScoreModal()" class="bg-gray-800 border border-white text-white px-4 py-1 rounded-lg hover:bg-gray-700">Continue</button>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="game-quiz-container w-full sm:w-3/4 md:w-2/3 lg:w-1/2 xl:w-2/5 bg-gray-300 flex flex-col items-center justify-around rounded-lg">
                                    <div class="game-details-container w-4/5 flex justify-around items-center">
                                        <h1>Score : <span id="player-score"></span> / 10</h1>
                                        <h1>Question : <span id="question-number"></span> / 10</h1>
                                    </div>
                                    <div class="game-question-container w-4/5 h-32 flex items-center justify-center border-2 border-gray-700 rounded-lg">
                                        <h1 id="display-question" class="text-base text-center"></h1>
                                    </div>
                                    <div class="game-options-container w-4/5 h-48 flex flex-wrap items-center justify-around">
                                        <div class="modal-container hidden fixed inset-0 z-10 bg-black bg-opacity-40 flex items-center justify-center" id="option-modal">
                                            <div class="modal-content-container bg-gray-800 rounded-lg p-6">
                                                <h1 class="text-gray-300 text-lg mb-4">Please Pick An Option</h1>
                                                <div class="modal-button-container flex justify-center">
                                                    <button onclick="closeOptionModal()" class="bg-gray-800 border border-white text-white px-4 py-1 rounded-lg hover:bg-gray-700">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-one" name="option" class="radio hidden" value="optionA" />
                                            <label for="option-one" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-one-label"></label>
                                        </span>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-two" name="option" class="radio hidden" value="optionB" />
                                            <label for="option-two" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-two-label"></label>
                                        </span>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-three" name="option" class="radio hidden" value="optionC" />
                                            <label for="option-three" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-three-label"></label>
                                        </span>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-four" name="option" class="radio hidden" value="optionD" />
                                            <label for="option-four" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-four-label"></label>
                                        </span>
                                    </div>
                                    <div class="next-button-container w-1/2 flex justify-center">
                                        <button onclick="handleNextQuestion()" class="w-28 h-8 rounded-lg border border-gray-700 bg-transparent text-gray-900 font-semibold cursor-pointer hover:bg-red-500 hover:text-white transition-all duration-300 focus:outline-none text-sm">Next Question</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
  
  
  
  
    <script type="text/javascript">
      function codeAddress() {
          alert('ok');
      }
  
      const questions = [
          {
              question: "How many days makes a week ?",
              optionA: "10 days",
              optionB: "14 days",
              optionC: "5 days",
              optionD: "7 days",
              correctOption: "optionD"
          },
  
          {
              question: "How many players are allowed on a soccer pitch ?",
              optionA: "10 players",
              optionB: "11 players",
              optionC: "9 players",
              optionD: "12 players",
              correctOption: "optionB"
          },
  
          {
              question: "Who was the first President of USA ?",
              optionA: "Donald Trump",
              optionB: "Barack Obama",
              optionC: "Abraham Lincoln",
              optionD: "George Washington",
              correctOption: "optionD"
          },
  
          {
              question: "30 days has ______ ?",
              optionA: "January",
              optionB: "December",
              optionC: "June",
              optionD: "August",
              correctOption: "optionC"
          },
  
          {
              question: "How manay hours can be found in a day ?",
              optionA: "30 hours",
              optionB: "38 hours",
              optionC: "48 hours",
              optionD: "24 hours",
              correctOption: "optionD"
          },
  
          {
              question: "Which is the longest river in the world ?",
              optionA: "River Nile",
              optionB: "Long River",
              optionC: "River Niger",
              optionD: "Lake Chad",
              correctOption: "optionA"
          },
  
          {
              question: "_____ is the hottest Continent on Earth ?",
              optionA: "Oceania",
              optionB: "Antarctica",
              optionC: "Africa",
              optionD: "North America",
              correctOption: "optionC"
          },
  
          {
              question: "Which country is the largest in the world ?",
              optionA: "Russia",
              optionB: "Canada",
              optionC: "Africa",
              optionD: "Egypt",
              correctOption: "optionA"
          },
  
          {
              question: "Which of these numbers is an odd number ?",
              optionA: "Ten",
              optionB: "Twelve",
              optionC: "Eight",
              optionD: "Eleven",
              correctOption: "optionD"
          },
  
          {
              question: `"You Can't see me" is a popular saying by`,
              optionA: "Eminem",
              optionB: "Bill Gates",
              optionC: "Chris Brown",
              optionD: "John Cena",
              correctOption: "optionD"
          },
  
          {
              question: "Where is the world tallest building located ?",
              optionA: "Africa",
              optionB: "California",
              optionC: "Dubai",
              optionD: "Italy",
              correctOption: "optionC"
          },
  
          {
              question: "The longest river in the United Kingdom is ?",
              optionA: "River Severn",
              optionB: "River Mersey",
              optionC: "River Trent",
              optionD: "River Tweed",
              correctOption: "optionA"
          },
  
  
          {
              question: "How many permanent teeth does a dog have ?",
              optionA: "38",
              optionB: "42",
              optionC: "40",
              optionD: "36",
              correctOption: "optionB"
          },
  
          {
              question: "Which national team won the football World cup in 2018 ?",
              optionA: "England",
              optionB: "Brazil",
              optionC: "Germany",
              optionD: "France",
              correctOption: "optionD"
          },
  
          {
              question: "Which US state was Donald Trump Born ?",
              optionA: "New York",
              optionB: "California",
              optionC: "New Jersey",
              optionD: "Los Angeles",
              correctOption: "optionA"
          },
  
          {
              question: "How man states does Nigeria have ?",
              optionA: "24",
              optionB: "30",
              optionC: "36",
              optionD: "37",
              correctOption: "optionC"
          },
  
          {
              question: "____ is the capital of Nigeria ?",
              optionA: "Abuja",
              optionB: "Lagos",
              optionC: "Calabar",
              optionD: "Kano",
              correctOption: "optionA"
          },
  
          {
              question: "Los Angeles is also known as ?",
              optionA: "Angels City",
              optionB: "Shining city",
              optionC: "City of Angels",
              optionD: "Lost Angels",
              correctOption: "optionC"
          },
  
          {
              question: "What is the capital of Germany ?",
              optionA: "Georgia",
              optionB: "Missouri",
              optionC: "Oklahoma",
              optionD: "Berlin",
              correctOption: "optionD"
          },
  
          {
              question: "How many sides does an hexagon have ?",
              optionA: "Six",
              optionB: "Sevene",
              optionC: "Four",
              optionD: "Five",
              correctOption: "optionA"
          },
  
          {
              question: "How many planets are currently in the solar system ?",
              optionA: "Eleven",
              optionB: "Seven",
              optionC: "Nine",
              optionD: "Eight",
              correctOption: "optionD"
          },
  
          {
              question: "Which Planet is the hottest ?",
              optionA: "Jupitar",
              optionB: "Mercury",
              optionC: "Earth",
              optionD: "Venus",
              correctOption: "optionB"
          },
  
          {
              question: "where is the smallest bone in human body located?",
              optionA: "Toes",
              optionB: "Ears",
              optionC: "Fingers",
              optionD: "Nose",
              correctOption: "optionB"
          },
  
          {
              question: "How many hearts does an Octopus have ?",
              optionA: "One",
              optionB: "Two",
              optionC: "Three",
              optionD: "Four",
              correctOption: "optionC"
          },
  
          {
              question: "How many teeth does an adult human have ?",
              optionA: "28",
              optionB: "30",
              optionC: "32",
              optionD: "36",
              correctOption: "optionC"
          }
  
      ]
  
  
      let shuffledQuestions = [] //empty array to hold shuffled selected questions
  
      function handleQuestions() { 
          //function to shuffle and push 10 questions to shuffledQuestions array
          while (shuffledQuestions.length <= 9) {
              const random = questions[Math.floor(Math.random() * questions.length)]
              if (!shuffledQuestions.includes(random)) {
                  shuffledQuestions.push(random)
              }
          }
      }
  
  
      let questionNumber = 1
      let playerScore = 0  
      let wrongAttempt = 0 
      let indexNumber = 0
  
      // function for displaying next question in the array to dom
      function NextQuestion(index) {
          console.log("TWERKS")
          handleQuestions()
          const currentQuestion = shuffledQuestions[index]
          document.getElementById("question-number").innerHTML = questionNumber
          document.getElementById("player-score").innerHTML = playerScore
          document.getElementById("display-question").innerHTML = currentQuestion.question;
          document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
          document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
          document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
          document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;
  
      }
  
  
      function checkForAnswer() {
          const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
          const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
          const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
          let correctOption = null
  
          options.forEach((option) => {
              if (option.value === currentQuestionAnswer) {
                  //get's correct's radio input with correct answer
                  correctOption = option.labels[0].id
              }
          })
      
          //checking to make sure a radio input has been checked or an option being chosen
          if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
              document.getElementById('option-modal').style.display = "flex"
          }
  
          //checking if checked radio button is same as answer
          options.forEach((option) => {
              if (option.checked === true && option.value === currentQuestionAnswer) {
                  document.getElementById(correctOption).style.backgroundColor = "green"
                  playerScore++
                  indexNumber++
                  //set to delay question number till when next question loads
                  setTimeout(() => {
                      questionNumber++
                  }, 1000)
              }
  
              else if (option.checked && option.value !== currentQuestionAnswer) {
                  const wrongLabelId = option.labels[0].id
                  document.getElementById(wrongLabelId).style.backgroundColor = "red"
                  document.getElementById(correctOption).style.backgroundColor = "green"
                  wrongAttempt++
                  indexNumber++
                  //set to delay question number till when next question loads
                  setTimeout(() => {
                      questionNumber++
                  }, 1000)
              }
          })
      }
  
  
  
      //called when the next button is called
      function handleNextQuestion() {
          checkForAnswer()
          unCheckRadioButtons()
          //delays next question displaying for a second
          setTimeout(() => {
              if (indexNumber <= 9) {
                  NextQuestion(indexNumber)
              }
              else {
                  handleEndGame()
              }
              resetOptionBackground()
          }, 1000);
      }
  
      //sets options background back to null after display the right/wrong colors
      function resetOptionBackground() {
          const options = document.getElementsByName("option");
          options.forEach((option) => {
              document.getElementById(option.labels[0].id).style.backgroundColor = ""
          })
      }
  
      // unchecking all radio buttons for next question(can be done with map or foreach loop also)
      function unCheckRadioButtons() {
          const options = document.getElementsByName("option");
          for (let i = 0; i < options.length; i++) {
              options[i].checked = false;
          }
      }
  
      // function for when all questions being answered
      function handleEndGame() {
          let remark = null
          let remarkColor = null
  
          // condition check for player remark and remark color
          if (playerScore <= 3) {
              remark = "Bad Grades, Keep Practicing."
              remarkColor = "red"
          }
          else if (playerScore >= 4 && playerScore < 7) {
              remark = "Average Grades, You can do better."
              remarkColor = "orange"
          }
          else if (playerScore >= 7) {
              remark = "Excellent, Keep the good work going."
              remarkColor = "green"
          }
          const playerGrade = (playerScore / 10) * 100
  
          //data to display to score board
          document.getElementById('remarks').innerHTML = remark
          document.getElementById('remarks').style.color = remarkColor
          document.getElementById('grade-percentage').innerHTML = playerGrade
          document.getElementById('wrong-answers').innerHTML = wrongAttempt
          document.getElementById('right-answers').innerHTML = playerScore
          document.getElementById('score-modal').style.display = "flex"
  
      }
  
      //closes score modal and resets game
      function closeScoreModal() {
          questionNumber = 1
          playerScore = 0
          wrongAttempt = 0
          indexNumber = 0
          shuffledQuestions = []
          NextQuestion(indexNumber)
          document.getElementById('score-modal').style.display = "none"
      }
  
      //function to close warning modal
      function closeOptionModal() {
          document.getElementById('option-modal').style.display = "none"
      }
  
      // window.onload = codeAddress;
    </script>
    {{-- Put questions here in mutiple choice format --}}
    {{-- https://codepen.io/Sulaimon-Olaniran/pen/zYKJLjK --}} 
    {{-- I regret not looking up the above earlier --}}
</x-partials.QuizLayout>