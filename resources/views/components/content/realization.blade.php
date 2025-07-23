<!-- Realizations Section -->
<section id="realisations" class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div
                class="inline-flex items-center px-4 py-2 bg-medical-teal/10 rounded-full text-medical-teal font-medium text-sm mb-4">
                <i class="fas fa-clipboard-list mr-2"></i>
                Nos Réalisations
            </div>
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Interventions <span class="gradient-text">Chirurgicales</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Découvrez nos succès chirurgicaux et nos interventions spécialisées réalisées avec expertise
            </p>
        </div>

        <!-- Surgical Interventions Carousel -->
        <div class="relative mb-12">
            <div id="surgical-carousel" class="relative overflow-hidden rounded-2xl medical-shadow"
                style="height: 400px;">
                <!-- Slide 1 -->
                <div class="carousel-slide active relative">
                    <img src="/intervention_chirurgicale.png" alt="Intervention Chirurgicale"
                        class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        <div class="absolute bottom-8 left-8 text-white">
                            <h3 class="text-2xl font-bold mb-2">Chirurgie Générale</h3>
                            <p class="text-gray-200 max-w-md">Interventions chirurgicales avec équipements modernes
                                et équipe expérimentée</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-slide relative">
                    <img src="/intervention_2.png" alt="Chirurgie Laparoscopique" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        <div class="absolute bottom-8 left-8 text-white">
                            <h3 class="text-2xl font-bold mb-2">Chirurgie Laparoscopique</h3>
                            <p class="text-gray-200 max-w-md">Techniques minimalement invasives pour une
                                récupération rapide</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-slide relative">
                    <img src="/intervention_3.png" alt="Chirurgie d'Urgence" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        <div class="absolute bottom-8 left-8 text-white">
                            <h3 class="text-2xl font-bold mb-2">Chirurgie d'Urgence</h3>
                            <p class="text-gray-200 max-w-md">Interventions d'urgence avec réactivité et
                                professionnalisme</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="carousel-slide relative">
                    <img src="/intervention_4.png" alt="Chirurgie Cardiaque" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        <div class="absolute bottom-8 left-8 text-white">
                            <h3 class="text-2xl font-bold mb-2">Chirurgie Cardiaque</h3>
                            <p class="text-gray-200 max-w-md">Spécialisés en chirurgie cardiovasculaire avec
                                précision</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button id="prev-slide"
                class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-110">
                <i class="fas fa-chevron-left"></i>
            </button>

            <button id="next-slide"
                class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition-all duration-300 hover:scale-110">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Carousel Dots -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button
                    class="carousel-dot active w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 transition-opacity"></button>
                <button
                    class="carousel-dot w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 transition-opacity"></button>
                <button
                    class="carousel-dot w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 transition-opacity"></button>
                <button
                    class="carousel-dot w-3 h-3 bg-white rounded-full opacity-50 hover:opacity-100 transition-opacity"></button>
            </div>
        </div>
    </div>
</section>
