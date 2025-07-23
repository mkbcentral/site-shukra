    <!-- Video Advertisement Section -->
    <section id="video-publicitaire"
        class="py-20 bg-gradient-to-br from-gray-900 via-gray-800 to-medical-teal/20 relative overflow-hidden">
        <!-- Background decorative elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-10 right-10 w-40 h-40 bg-medical-teal rounded-full animate-float"></div>
            <div class="absolute bottom-10 left-10 w-32 h-32 bg-medical-red rounded-full animate-bounce-slow"></div>
            <div class="absolute top-1/2 left-1/3 w-20 h-20 bg-yellow-400 rounded-full animate-pulse"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 relative">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in">
                <div
                    class="inline-flex items-center px-4 py-2 bg-white/10 rounded-full text-white font-medium text-sm mb-4">
                    <i class="fas fa-play-circle mr-2 text-medical-red"></i>
                    Découvrez Notre Polyclinique
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    Notre <span class="text-medical-red">Spot Publicitaire</span>
                </h2>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Découvrez en vidéo nos installations modernes, notre équipe dévouée et notre engagement envers votre
                    santé
                </p>
            </div>

            <!-- Video Player Container -->
            <div class="relative max-w-5xl mx-auto">
                <!-- Video Player -->
                <div class="video-player-container relative rounded-3xl overflow-hidden shadow-2xl"
                    style="/* @tweakable video player container aspect ratio and styling */ aspect-ratio: 16/9; background: linear-gradient(135deg, #1f2937, #374151);">
                    <video id="promo-video" class="w-full h-full object-cover rounded-3xl"
                        poster="/cabinet_consultation.png" preload="metadata"
                        style="/* @tweakable video element styling and border radius */ border-radius: 24px; background: #1f2937;">
                        <source src="/medical_video.mp4" type="video/mp4">
                        <p class="text-white text-center p-8">Votre navigateur ne supporte pas la lecture vidéo.</p>
                    </video>

                    <!-- Video Overlay Controls -->
                    <div id="video-overlay"
                        class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30 flex items-center justify-center transition-opacity duration-300">
                        <!-- Play Button -->
                        <button id="play-btn" class="video-play-btn group relative">
                            <div class="play-btn-bg absolute inset-0 rounded-full"
                                style="/* @tweakable play button background styling */ background: linear-gradient(135deg, rgba(239, 68, 68, 0.9), rgba(220, 38, 38, 0.9)); backdrop-filter: blur(10px);">
                            </div>
                            <div class="play-btn-ring absolute inset-0 rounded-full border-2 border-white/30 animate-pulse"
                                style="/* @tweakable play button ring animation */ animation-duration: 2s;"></div>
                            <span class="relative z-10 flex items-center justify-center">
                                <i id="play-icon" class="fas fa-play text-white text-2xl ml-1"
                                    style="/* @tweakable play icon positioning */ transform: translateX(2px);"></i>
                                <i id="pause-icon" class="fas fa-pause text-white text-2xl hidden"></i>
                            </span>
                        </button>

                        <!-- Video Title Overlay -->
                        <div class="absolute bottom-20 left-8 text-white">
                            <h3 class="text-2xl font-bold mb-2"
                                style="/* @tweakable video title text shadow */ text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);">
                                Polyclinique Shukrani</h3>
                            <p class="text-gray-200 text-lg"
                                style="/* @tweakable video subtitle text shadow */ text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);">
                                La Santé pour tous - Votre partenaire santé de confiance</p>
                        </div>
                    </div>

                    <!-- Video Controls Bar -->
                    <div class="video-controls absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6"
                        style="/* @tweakable video controls background opacity */ background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);">
                        <!-- Progress Bar -->
                        <div class="video-progress-container relative mb-4 cursor-pointer"
                            style="/* @tweakable progress bar container height */ height: 6px;">
                            <div class="video-progress-bg absolute inset-0 bg-white/20 rounded-full"></div>
                            <div id="progress-bar"
                                class="video-progress-fill absolute top-0 left-0 h-full bg-medical-red rounded-full transition-all duration-200"
                                style="/* @tweakable progress bar width and color */ width: 0%; background: linear-gradient(90deg, #EF4444, #DC2626);">
                            </div>
                        </div>

                        <!-- Control Buttons -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <!-- Volume Control -->
                                <button id="volume-btn"
                                    class="text-white hover:text-medical-red transition-colors duration-200"
                                    style="/* @tweakable volume button size */ font-size: 18px;">
                                    <i id="volume-on" class="fas fa-volume-up"></i>
                                    <i id="volume-off" class="fas fa-volume-mute hidden"></i>
                                </button>

                                <!-- Time Display -->
                                <div class="text-white text-sm"
                                    style="/* @tweakable time display font styling */ font-family: 'Courier New', monospace; letter-spacing: 0.5px;">
                                    <span id="current-time">0:00</span> / <span id="duration">0:00</span>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <!-- Video Quality Indicator -->
                                <div class="text-white text-xs bg-white/20 px-2 py-1 rounded"
                                    style="/* @tweakable quality indicator styling */ backdrop-filter: blur(5px);">
                                    <i class="fas fa-hd-video mr-1"></i>
                                    HD
                                </div>

                                <!-- Fullscreen Button -->
                                <button class="text-white hover:text-medical-red transition-colors duration-200"
                                    style="/* @tweakable fullscreen button size */ font-size: 18px;">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Information Card -->
                <div class="mt-12 bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <!-- Video Description -->
                        <div class="text-white">
                            <h3 class="text-2xl font-bold mb-4 flex items-center">
                                <i class="fas fa-info-circle mr-3 text-medical-red"></i>
                                À Propos de Cette Vidéo
                            </h3>
                            <p class="text-gray-300 leading-relaxed mb-4"
                                style="/* @tweakable video description text line height */ line-height: 1.7;">
                                Cette vidéo présente notre établissement de santé moderne, nos équipements de pointe et
                                notre équipe médicale dévouée.
                                Découvrez comment nous nous engageons chaque jour à offrir des soins de qualité
                                supérieure à tous nos patients.
                            </p>
                            <div class="flex items-center space-x-4 text-sm text-gray-400">
                                <div class="flex items-center">
                                    <i class="fas fa-clock mr-2"></i>
                                    <span>Durée: <span id="video-duration">2:30</span></span>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-eye mr-2"></i>
                                    <span style="/* @tweakable video views counter */ ">1,245 vues</span>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action -->
                        <div class="text-center">
                            <h4 class="text-xl font-bold text-white mb-4">Prêt à Nous Rencontrer ?</h4>
                            <p class="text-gray-300 mb-6">Prenez rendez-vous dès aujourd'hui et découvrez nos services
                                de qualité</p>

                            <div class="space-y-4">
                                <button
                                    class="video-cta-btn w-full bg-medical-red hover:bg-red-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                                    style="/* @tweakable video CTA button styling */ background: linear-gradient(135deg, #EF4444, #DC2626); box-shadow: 0 10px 25px rgba(239, 68, 68, 0.3);">
                                    <span class="flex items-center justify-center">
                                        <i class="fas fa-calendar-alt mr-3"></i>
                                        Prendre Rendez-vous
                                        <i class="fas fa-arrow-right ml-3"></i>
                                    </span>
                                </button>

                                <button
                                    class="video-cta-btn w-full bg-transparent border-2 border-white/30 text-white px-8 py-4 rounded-xl font-semibold hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                                    <span class="flex items-center justify-center">
                                        <i class="fas fa-phone mr-3"></i>
                                        Nous Contacter
                                        <i class="fas fa-arrow-right ml-3"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
