    <!-- Gallery Section -->
    <section id="galerie" class="py-20 bg-gray-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center px-4 py-2 bg-medical-teal/10 rounded-full text-medical-teal font-medium text-sm mb-4">
                    <i class="fas fa-images mr-2"></i>
                    Notre Galerie
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Nos <span class="gradient-text">Installations</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Découvrez nos installations modernes et notre environnement médical de qualité
                </p>
            </div>

            <!-- Gallery Filters -->
            <div class="flex flex-wrap justify-center gap-4 mb-12">
                <button
                    class="gallery-filter active bg-medical-teal text-white px-6 py-2 rounded-full font-medium transition-all duration-300"
                    data-filter="all">
                    Tout voir
                </button>
                <button
                    class="gallery-filter bg-gray-200 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-300 transition-all duration-300"
                    data-filter="consultation">
                    Consultation
                </button>
                <button
                    class="gallery-filter bg-gray-200 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-300 transition-all duration-300"
                    data-filter="laboratoire">
                    Laboratoire
                </button>
                <button
                    class="gallery-filter bg-gray-200 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-300 transition-all duration-300"
                    data-filter="urgence">
                    Urgences
                </button>
                <button
                    class="gallery-filter bg-gray-200 text-gray-700 px-6 py-2 rounded-full font-medium hover:bg-gray-300 transition-all duration-300"
                    data-filter="chirurgie">
                    Chirurgie
                </button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="gallery-item consultation cursor-pointer group relative overflow-hidden rounded-2xl"
                    data-image="/cabinet_consultation.png" data-title="Cabinet de Consultation"
                    data-description="Espaces de consultation modernes et confortables pour nos patients">
                    <img src="/cabinet_consultation.png" alt="Cabinet de Consultation"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-semibold">Cabinet de Consultation</h3>
                            <p class="text-sm opacity-90">Espaces modernes et confortables</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="gallery-item laboratoire cursor-pointer group relative overflow-hidden rounded-2xl"
                    data-image="/laboratoire.png" data-title="Laboratoire Médical"
                    data-description="Laboratoire équipé de technologies de pointe pour analyses précises">
                    <img src="/laboratoire.png" alt="Laboratoire"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-semibold">Laboratoire Médical</h3>
                            <p class="text-sm opacity-90">Technologies de pointe</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="gallery-item urgence cursor-pointer group relative overflow-hidden rounded-2xl"
                    data-image="/salle_urgence.png" data-title="Salle d'Urgence"
                    data-description="Service d'urgence équipé pour interventions rapides et efficaces">
                    <img src="/salle_urgence.png" alt="Salle d'Urgence"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-semibold">Salle d'Urgence</h3>
                            <p class="text-sm opacity-90">Interventions rapides 24h/24</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div class="gallery-item consultation cursor-pointer group relative overflow-hidden rounded-2xl"
                    data-image="/salle_attente.png" data-title="Salle d'Attente"
                    data-description="Espaces d'attente confortables et accueillants pour nos patients">
                    <img src="/salle_attente.png" alt="Salle d'Attente"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-semibold">Salle d'Attente</h3>
                            <p class="text-sm opacity-90">Confort et accueil</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div class="gallery-item chirurgie cursor-pointer group relative overflow-hidden rounded-2xl"
                    data-image="/intervention_chirurgicale.png" data-title="Bloc Opératoire"
                    data-description="Blocs opératoires modernes avec équipements chirurgicaux de pointe">
                    <img src="/intervention_chirurgicale.png" alt="Bloc Opératoire"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-semibold">Bloc Opératoire</h3>
                            <p class="text-sm opacity-90">Chirurgie moderne</p>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div class="gallery-item chirurgie cursor-pointer group relative overflow-hidden rounded-2xl"
                    data-image="/intervention_2.png" data-title="Chirurgie Laparoscopique"
                    data-description="Chirurgie minimalement invasive avec techniques avancées">
                    <img src="/intervention_2.png" alt="Chirurgie Laparoscopique"
                        class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-4 left-4 text-white">
                            <h3 class="text-lg font-semibold">Chirurgie Laparoscopique</h3>
                            <p class="text-sm opacity-90">Techniques minimalement invasives</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Modal -->
        <div id="gallery-modal"
            class="fixed inset-0 bg-black/90 z-50 opacity-0 invisible transition-all duration-300 flex items-center justify-center">
            <div class="relative max-w-4xl mx-4 transform scale-95 transition-transform duration-300">
                <button id="close-modal" class="absolute top-4 right-4 text-white text-2xl hover:text-gray-300 z-10">
                    <i class="fas fa-times text-2xl"></i>
                </button>
                <img id="modal-image" src="" alt=""
                    class="w-full max-h-[80vh] object-contain rounded-lg">
                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent text-white p-6 rounded-b-lg">
                    <h3 id="modal-title" class="text-xl font-bold mb-2"></h3>
                    <p id="modal-description" class="text-gray-200"></p>
                </div>
                <button id="prev-modal"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white text-2xl hover:text-gray-300">
                    <i class="fas fa-chevron-left text-2xl"></i>
                </button>
                <button id="next-modal"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white text-2xl hover:text-gray-300">
                    <i class="fas fa-chevron-right text-2xl"></i>
                </button>
            </div>
        </div>
    </section>
