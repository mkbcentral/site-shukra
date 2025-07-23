<!-- Welcome Section -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-medical-teal/5 relative overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-5">
        <div class="absolute top-10 right-10 w-32 h-32 bg-medical-teal rounded-full animate-pulse"></div>
        <div class="absolute bottom-10 left-10 w-24 h-24 bg-medical-red rounded-full animate-float"></div>
        <div class="absolute top-1/2 right-1/3 w-16 h-16 bg-blue-500 rounded-full animate-bounce-slow"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Doctor/Nurse Photo -->
            <div class="welcome-image-container relative">
                <!-- Main Image Card -->
                <div class="welcome-main-card group relative transform transition-all duration-700">
                    <!-- Card Background with elegant styling -->
                    <div class="welcome-card-bg p-6 relative overflow-hidden">
                        <!-- Animated Border -->
                        <div class="welcome-card-border absolute inset-0 opacity-0 transition-opacity duration-500"
                            style="/* @tweakable welcome card border gradient */ background: linear-gradient(45deg, var(--medical-teal), #06B6D4, var(--medical-teal)); background-size: 300% 300%; animation: gradientShift 3s ease infinite; padding: 2px;">
                        </div>

                        <!-- Doctor/Nurse Image -->
                        <div class="relative z-10 overflow-hidden"
                            style="/* @tweakable welcome image container height */ height: 400px;">
                            <img src="{{ asset('director_photo-removebg-preview.png') }}"
                                alt="Notre équipe médicale vous accueille" class="w-full h-full object-cover"
                                style="/* @tweakable welcome image brightness and contrast */ filter: brightness(1.05) contrast(1.1);">

                            <!-- Image Overlay with subtle gradient -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-medical-teal/20 via-transparent to-transparent opacity-0 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Decorative Elements -->
                        <div class="welcome-decoration welcome-dot-1 absolute w-4 h-4"
                            style="/* @tweakable first decoration dot position and color */ top: -8px; left: -8px; background: linear-gradient(45deg, #EF4444, #DC2626); animation: bounce 3s infinite;">
                        </div>
                        <div class="welcome-decoration welcome-dot-2 absolute w-3 h-3"
                            style="/* @tweakable second decoration dot position and color */ bottom: -6px; right: -6px; background: linear-gradient(45deg, #10B981, #06B6D4); animation: pulse 2s infinite;">
                        </div>
                        <div class="welcome-decoration welcome-dot-3 absolute w-5 h-5"
                            style="/* @tweakable third decoration dot position and color */ top: 50%; right: -10px; background: linear-gradient(45deg, #8B5CF6, #EC4899); animation: float 4s infinite;">
                        </div>
                    </div>
                </div>

                <!-- Floating Medical Icons -->
                <div class="welcome-floating-icons absolute inset-0 pointer-events-none">
                    <div class="welcome-icon welcome-icon-1 absolute transform transition-all duration-700"
                        style="/* @tweakable first floating icon position */ top: 20%; left: -10%;">
                        <div class="welcome-icon-bg rounded-xl p-3 backdrop-blur-sm"
                            style="/* @tweakable floating icon background */ background: rgba(13, 148, 136, 0.1); border: 1px solid rgba(13, 148, 136, 0.2);">
                            <i class="fas fa-stethoscope text-medical-teal text-lg"></i>
                        </div>
                    </div>

                    <div class="welcome-icon welcome-icon-2 absolute transform transition-all duration-700"
                        style="/* @tweakable second floating icon position */ bottom: 30%; right: -15%;">
                        <div class="welcome-icon-bg rounded-xl p-3 backdrop-blur-sm"
                            style="/* @tweakable floating icon background */ background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.2);">
                            <i class="fas fa-heartbeat text-medical-red text-lg"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Welcome Message -->
            <div class="welcome-content space-y-8">
                <!-- Welcome Badge -->
                <div class="welcome-badge inline-flex items-center px-6 py-3 rounded-full font-medium text-sm transition-all duration-500 hover:scale-105"
                    style="/* @tweakable welcome badge background and text colors */ background: rgba(13, 148, 136, 0.1); color: var(--medical-teal); border: 1px solid rgba(13, 148, 136, 0.2);">
                    <div class="welcome-badge-icon w-2 h-2 rounded-full mr-3"
                        style="/* @tweakable welcome badge icon color */ background: var(--medical-teal);"></div>
                    <i class="fas fa-heart mr-2 text-medical-teal"></i>
                    Bienvenue à la Polyclinique Shukrani
                    <div class="welcome-badge-shine absolute inset-0 rounded-full"
                        style="/* @tweakable welcome badge shine effect */ background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent); transform: translateX(-100%); transition: transform 0.5s ease;">
                    </div>
                </div>

                <!-- Main Welcome Title -->
                <div class="welcome-title-container space-y-6">
                    <h2 class="welcome-main-title text-4xl md:text-5xl lg:text-6xl font-bold leading-tight"
                        style="/* @tweakable welcome main title color */ color: #1F2937;">
                        <span class="welcome-title-line"
                            style="/* @tweakable welcome title primary line color */ color: #1F2937;">Votre
                            bien-être,</span><br>
                        <span class="welcome-title-line welcome-title-accent relative"
                            style="/* @tweakable welcome title accent color - medical teal gradient */ background: linear-gradient(135deg, var(--medical-teal) 0%, #06B6D4 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                            notre engagement
                            <div class="welcome-title-underline absolute -bottom-2 left-0 h-1 rounded-full"
                                style="/* @tweakable welcome title underline color and width */ background: var(--medical-teal); width: 100%;">
                            </div>
                        </span>
                    </h2>

                    <!-- Welcome Message -->
                    <div class="welcome-message space-y-6">
                        <p class="welcome-main-text text-xl md:text-2xl leading-relaxed"
                            style="/* @tweakable welcome main message text color */ color: #4B5563; line-height: 1.6;">
                            À la <span class="welcome-highlight font-semibold"
                                style="/* @tweakable welcome highlight color */ color: var(--medical-teal);">Polyclinique
                                Shukrani</span>,
                            nous vous accueillons avec <span class="welcome-highlight font-semibold"
                                style="color: #EF4444;">compassion</span>
                            et <span class="welcome-highlight font-semibold"
                                style="color: var(--medical-teal);">professionnalisme</span>.
                            Notre équipe dévouée est là pour vous accompagner à chaque étape de votre parcours de santé.
                        </p>

                        <p class="welcome-sub-text text-lg"
                            style="/* @tweakable welcome sub-text color */ color: #6B7280; line-height: 1.7;">
                            Que ce soit pour une consultation de routine, une urgence médicale ou un suivi spécialisé,
                            nous mettons notre expertise et notre technologie de pointe à votre service,
                            dans un environnement chaleureux et rassurant.
                        </p>
                    </div>
                </div>

                <!-- Welcome Features -->
                <div class="welcome-features grid md:grid-cols-2 gap-6">
                    <div class="welcome-feature-item flex items-start space-x-4 p-4 rounded-xl transition-all duration-300 hover:scale-105"
                        style="/* @tweakable welcome feature item background */ background: rgba(13, 148, 136, 0.05); border: 1px solid rgba(13, 148, 136, 0.1);">
                        <div class="welcome-feature-icon w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0"
                            style="/* @tweakable welcome feature icon background */ background: var(--medical-teal);">
                            <i class="fas fa-user-md text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="welcome-feature-title font-semibold text-lg mb-1"
                                style="/* @tweakable welcome feature title color */ color: #1F2937;">Équipe Expérimentée
                            </h3>
                            <p class="welcome-feature-desc text-sm"
                                style="/* @tweakable welcome feature description color */ color: #6B7280;">
                                Professionnels qualifiés avec plus de 15 ans d'expérience</p>
                        </div>
                    </div>

                    <div class="welcome-feature-item flex items-start space-x-4 p-4 rounded-xl transition-all duration-300 hover:scale-105"
                        style="/* @tweakable welcome feature item background */ background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.1);">
                        <div class="welcome-feature-icon w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0"
                            style="/* @tweakable welcome feature icon background */ background: #EF4444;">
                            <i class="fas fa-clock text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="welcome-feature-title font-semibold text-lg mb-1"
                                style="/* @tweakable welcome feature title color */ color: #1F2937;">Disponibilité 24/7
                            </h3>
                            <p class="welcome-feature-desc text-sm"
                                style="/* @tweakable welcome feature description color */ color: #6B7280;">Service
                                d'urgence disponible jour et nuit</p>
                        </div>
                    </div>

                    <div class="welcome-feature-item flex items-start space-x-4 p-4 rounded-xl transition-all duration-300 hover:scale-105"
                        style="/* @tweakable welcome feature item background */ background: rgba(59, 130, 246, 0.05); border: 1px solid rgba(59, 130, 246, 0.1);">
                        <div class="welcome-feature-icon w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0"
                            style="/* @tweakable welcome feature icon background */ background: #3B82F6;">
                            <i class="fas fa-microscope text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="welcome-feature-title font-semibold text-lg mb-1"
                                style="/* @tweakable welcome feature title color */ color: #1F2937;">Technologie Moderne
                            </h3>
                            <p class="welcome-feature-desc text-sm"
                                style="/* @tweakable welcome feature description color */ color: #6B7280;">Équipements
                                de pointe pour des diagnostics précis</p>
                        </div>
                    </div>

                    <div class="welcome-feature-item flex items-start space-x-4 p-4 rounded-xl transition-all duration-300 hover:scale-105"
                        style="/* @tweakable welcome feature item background */ background: rgba(16, 185, 129, 0.05); border: 1px solid rgba(16, 185, 129, 0.1);">
                        <div class="welcome-feature-icon w-12 h-12 rounded-lg flex items-center justify-center flex-shrink-0"
                            style="/* @tweakable welcome feature icon background */ background: #10B981;">
                            <i class="fas fa-hand-holding-heart text-white text-lg"></i>
                        </div>
                        <div>
                            <h3 class="welcome-feature-title font-semibold text-lg mb-1"
                                style="/* @tweakable welcome feature title color */ color: #1F2937;">Approche Humaine
                            </h3>
                            <p class="welcome-feature-desc text-sm"
                                style="/* @tweakable welcome feature description color */ color: #6B7280;">Soins
                                personnalisés avec empathie et bienveillance</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
