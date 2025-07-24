<!-- Hero Section -->
<section id="accueil" class="hero-section relative min-h-screen flex items-center overflow-hidden">
    <!-- Enhanced Background Image Slideshow -->
    <div class="absolute inset-0 hero-bg-opacity">
        <div id="hero-bg-carousel" class="relative w-full h-full">
            <div class="hero-bg-slide active absolute inset-0 opacity-100 transition-opacity duration-2000">
                <img src="{{ asset('imges/img-17.jpg') }}" alt="" class="w-full h-full object-cover hero-bg-scale"
                    style="/* @tweakable hero background image styling - removes border and ensures transparent background */ filter: brightness(1.1) contrast(1.05); border: none; outline: none; background: transparent;">
            </div>
            <div class="hero-bg-slide absolute inset-0 opacity-0 transition-opacity duration-2000">
                <img src="{{ asset('imges/img-13.jpg') }}" alt=""
                    class="w-full h-full object-cover hero-bg-scale"
                    style="/* @tweakable hero background image styling - removes border and ensures transparent background */ filter: brightness(1.1) contrast(1.05); border: none; outline: none; background: transparent;">
            </div>
            <div class="hero-bg-slide absolute inset-0 opacity-0 transition-opacity duration-2000">
                <video class="w-full h-full object-cover hero-bg-scale" muted loop
                    style="/* @tweakable hero video styling - removes border and ensures transparent background */ filter: brightness(1.2) contrast(1.1); border: none; outline: none; background: transparent;">
                    <source src="/medical_video.mp4" type="video/mp4">
                    <!-- Fallback image if video doesn't load -->
                    <img src="/laboratoire.png" alt="" class="w-full h-full object-cover"
                        style="border: none; outline: none; background: transparent;">
                </video>
            </div>
            <div class="hero-bg-slide absolute inset-0 opacity-0 transition-opacity duration-2000">
                <img src="{{ asset('intervention_4.png') }}" alt=""
                    class="w-full h-full object-cover hero-bg-scale"
                    style="/* @tweakable hero background image styling - removes border and ensures transparent background */ filter: brightness(1.1) contrast(1.05); border: none; outline: none; background: transparent;">
            </div>
            <div class="hero-bg-slide absolute inset-0 opacity-0 transition-opacity duration-2000">
                <img src="{{ asset('salle_urgence.png') }}" alt=""
                    class="w-full h-full object-cover hero-bg-scale"
                    style="/* @tweakable hero background image styling - removes border and ensures transparent background */ filter: brightness(1.1) contrast(1.05); border: none; outline: none; background: transparent;">
            </div>
        </div>
        <!-- Enhanced Overlay -->
        <div class="hero-overlay absolute inset-0"></div>
    </div>

    <!-- Enhanced Floating Elements with More Sophisticated Animation -->
    <div class="hero-floating-elements absolute inset-0 pointer-events-none">
        <div class="hero-floating-shape hero-shape-1 absolute"></div>
        <div class="hero-floating-shape hero-shape-2 absolute"></div>
        <div class="hero-floating-shape hero-shape-3 absolute"></div>
        <div class="hero-floating-shape hero-shape-4 absolute"></div>
        <div class="hero-floating-shape hero-shape-5 absolute"></div>
        <div class="hero-floating-shape hero-shape-6 absolute"></div>

        <!-- Medical Symbol Decorations -->
        <div class="hero-medical-symbol hero-symbol-1 absolute">
            <i class="fas fa-plus hero-symbol-icon"></i>
        </div>
        <div class="hero-medical-symbol hero-symbol-2 absolute">
            <i class="fas fa-heartbeat hero-symbol-icon"></i>
        </div>
        <div class="hero-medical-symbol hero-symbol-3 absolute">
            <i class="fas fa-stethoscope hero-symbol-icon"></i>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-20 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Enhanced Content -->
            <div class="hero-content space-y-8 text-center lg:text-left">
                <!-- Premium Badge -->
                <div
                    class="hero-badge inline-flex items-center px-6 py-3 rounded-full font-medium text-sm transition-all duration-500 hover:scale-105">
                    <div class="hero-badge-icon w-2 h-2 rounded-full mr-3"></div>
                    <i class="fas fa-award mr-2 hero-badge-icon-fa"></i>
                    Excellence Médicale pour tous
                    <div class="hero-badge-shine absolute inset-0 rounded-full"></div>
                </div>

                <!-- Enhanced Main Title -->
                <div class="hero-title-container space-y-6">
                    <h2 class="hero-main-title text-4xl md:text-6xl lg:text-7xl font-bold leading-tight">
                        <span class="hero-title-line hero-title-primary" style="color: #1D4ED8;">
                            Votre santé,
                        </span><br>
                        <span class="hero-title-line hero-title-gradient relative" style="color: #1D4ED8;">
                            notre priorité
                            <div class="hero-title-underline absolute -bottom-2 left-0 h-1 rounded-full"></div>
                        </span>
                    </h2>

                    <!-- Subtitle with Better Typography -->
                    <p class="hero-subtitle text-lg md:text-xl lg:text-2xl max-w-2xl leading-relaxed"
                        style="/* @tweakable hero subtitle text color - dark grey instead of black */ color: rgba(28, 33, 41, 0.95); text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);">
                        À la <span class="hero-highlight">Polyclinique Shukrani</span>, nous offrons les soins médicaux
                        de
                        <span class="hero-highlight">qualité supérieure</span> avec compassion et dévouement.
                        Cette équipe est composé des professionnels expérimentés, est là pour vous accompagner vers une
                        meilleure
                        santé.
                    </p>
                </div>

                <!-- Enhanced CTA Buttons -->
                <div class="hero-cta-container flex flex-col sm:flex-row gap-6 pt-8">
                    <a href="#contact"
                        class="hero-cta-primary group relative overflow-hidden px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-500 transform hover:scale-105">
                        <div class="hero-cta-primary-bg absolute inset-0 rounded-xl"></div>
                        <div
                            class="hero-cta-primary-shine absolute inset-0 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                        <span class="relative z-10 flex items-center justify-center">
                            <i
                                class="fas fa-calendar-alt mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                            Prendre Rendez-vous
                            <i
                                class="fas fa-arrow-right ml-3 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </span>
                    </a>

                    <a href="#services"
                        class="hero-cta-secondary group relative overflow-hidden px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-500 hover:scale-105">
                        <div class="hero-cta-secondary-bg absolute inset-0 rounded-xl"></div>
                        <div class="hero-cta-secondary-border absolute inset-0 rounded-xl"></div>
                        <span class="relative z-10 flex items-center justify-center">
                            <i
                                class="fas fa-stethoscope mr-3 group-hover:scale-110 transition-transform duration-300"></i>
                            Nos Services
                            <i
                                class="fas fa-arrow-right ml-3 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </span>
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="hero-trust-indicators grid grid-cols-2 md:grid-cols-4 gap-6 pt-12">
                    <div class="hero-trust-item text-center group">
                        <div class="hero-trust-number text-2xl md:text-3xl font-bold mb-2">9000+</div>
                        <div class="hero-trust-label text-sm"
                            style="/* @tweakable trust label text color - dark grey instead of pure white */ color: rgba(75, 85, 99, 0.9); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                            Patients soignés</div>
                    </div>
                    <div class="hero-trust-item text-center group">
                        <div class="hero-trust-number text-2xl md:text-3xl font-bold mb-2">24/7</div>
                        <div class="hero-trust-label text-sm"
                            style="/* @tweakable trust label text color - dark grey instead of pure white */ color: rgba(75, 85, 99, 0.9); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                            Service d'urgence</div>
                    </div>
                    <div class="hero-trust-item text-center group">
                        <div class="hero-trust-number text-2xl md:text-3xl font-bold mb-2">5+</div>
                        <div class="hero-trust-label text-sm"
                            style="/* @tweakable trust label text color - dark grey instead of pure white */ color: rgba(75, 85, 99, 0.9); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                            Années d'expérience</div>
                    </div>
                    <div class="hero-trust-item text-center group">
                        <div class="hero-trust-number text-2xl md:text-3xl font-bold mb-2">98%</div>
                        <div class="hero-trust-label text-sm"
                            style="/* @tweakable trust label text color - dark grey instead of pure white */ color: rgba(75, 85, 99, 0.9); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                            Satisfaction</div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Visual Card -->
            <div class="hero-visual-container relative flex items-center justify-center lg:justify-end">
                <!-- Main Card -->
                <div class="hero-main-card group relative transform transition-all duration-700 hover:scale-105">
                    <!-- Card Background -->
                    <div class="hero-card-bg rounded-3xl p-10 relative overflow-hidden">
                        <!-- Animated Border -->
                        <div
                            class="hero-card-border absolute inset-0 rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        </div>

                        <!-- Decorative Elements -->
                        <div class="hero-card-decoration hero-card-dot-1 absolute w-4 h-4 rounded-full"></div>
                        <div class="hero-card-decoration hero-card-dot-2 absolute w-3 h-3 rounded-full"></div>
                        <div class="hero-card-decoration hero-card-dot-3 absolute w-5 h-5 rounded-full"></div>

                        <!-- Card Content -->
                        <div class="text-center space-y-6 relative z-10">
                            <!-- Icon Container -->
                            <div
                                class="hero-card-icon-container relative mx-auto w-24 h-24 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <div class="hero-card-icon-bg absolute inset-0 rounded-2xl"></div>
                                <div
                                    class="hero-card-icon-shine absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                </div>
                                <i
                                    class="fas fa-stethoscope text-white text-3xl relative z-10 group-hover:rotate-12 transition-transform duration-500"></i>
                            </div>

                            <!-- Card Title -->
                            <h3 class="hero-card-title text-2xl font-bold mb-4"
                                style="/* @tweakable hero card title color - dark grey instead of pure black */ color: #374151;">
                                Consultations disponibles</h3>

                            <!-- Card Description -->
                            <p class="hero-card-description text-lg leading-relaxed"
                                style="/* @tweakable hero card description color - medium grey instead of lighter grey */ color: #4B5563;">
                                Médecine générale, spécialisée et services d'urgence avec des professionnels
                                expérimentés
                            </p>

                            <!-- Status Indicator -->
                            <div class="hero-card-status flex items-center justify-center space-x-3">
                                <div class="hero-status-dot w-3 h-3 rounded-full"></div>
                                <span class="hero-status-text font-semibold">Tout le jours</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Stats Cards -->
                <div class="hero-floating-stats absolute inset-0 pointer-events-none">
                    <div class="hero-stat-card hero-stat-1 absolute transform transition-all duration-700">
                        <div class="hero-stat-bg rounded-xl p-4 backdrop-blur-sm">
                            <div class="hero-stat-icon w-8 h-8 rounded-lg flex items-center justify-center mb-2">
                                <i class="fas fa-heartbeat text-sm"></i>
                            </div>
                            <div class="hero-stat-number text-lg font-bold">98%</div>
                            <div class="hero-stat-label text-xs opacity-80">Taux de réussite</div>
                        </div>
                    </div>

                    <div class="hero-stat-card hero-stat-2 absolute transform transition-all duration-700">
                        <div class="hero-stat-bg rounded-xl p-4 backdrop-blur-sm">
                            <div class="hero-stat-icon w-8 h-8 rounded-lg flex items-center justify-center mb-2">
                                <i class="fas fa-users text-sm"></i>
                            </div>
                            <div class="hero-stat-number text-lg font-bold">20+</div>
                            <div class="hero-stat-label text-xs opacity-80">Professionnels</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Scroll Down Indicator -->
    <div class="hero-scroll-indicator absolute left-1/2 transform -translate-x-1/2">
        <div class="hero-scroll-container relative">
            <div class="hero-scroll-mouse w-8 h-12 border-2 rounded-full flex justify-center relative overflow-hidden">
                <div class="hero-scroll-wheel w-1 h-3 rounded-full mt-2"></div>
                <div class="hero-scroll-shine absolute inset-0 rounded-full opacity-0"></div>
            </div>
            <div class="hero-scroll-text text-sm font-medium mt-2"
                style="/* @tweakable scroll text color - dark grey instead of white */ color: rgba(55, 65, 81, 0.8); text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                Faire défiler</div>
        </div>
    </div>
</section>
