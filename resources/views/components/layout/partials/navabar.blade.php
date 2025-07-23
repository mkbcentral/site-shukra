 <!-- Top Contact Bar -->
 <div class="bg-medical-teal text-white py-2 px-4 animate-slide-in-left">
     <div
         class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center text-sm text-center sm:text-left">
         <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-6 w-full sm:w-auto">
             <div class="flex items-center justify-center sm:justify-start space-x-2">
                 <i class="fas fa-phone w-4 h-4"></i>
                 <span>+243 853 951 763</span>
             </div>
             <div class="flex items-center justify-center sm:justify-start space-x-2">
                 <i class="fas fa-envelope w-4 h-4"></i>
                 <span>polyshukrani@gmail.com</span>
             </div>
             <div class="flex items-center justify-center sm:justify-start space-x-2">
                 <i class="fas fa-map-marker-alt w-4 h-4"></i>
                 <span>N° 12, Av/ Christian KUNDA, Q/ Golf Tshamalale</span>
             </div>
         </div>
         <div class="flex items-center justify-center sm:justify-end space-x-2 mt-2 sm:mt-0">
             <i class="fas fa-clock w-4 h-4"></i>
             <span>Ouvert 24h/24 - 7j/7</span>
         </div>
     </div>
 </div>
 <!-- Navigation -->
 <nav class="bg-white/95 glass-effect shadow-lg sticky top-0 z-40 transition-all duration-300">
     <div class="max-w-7xl mx-auto px-4">
         <div class="flex justify-between items-center py-4">
             <div class="flex items-center space-x-3">
                 <img src="{{ asset('logo.png') }}" alt="Polyclinique Shukrani Logo" class="h-12 w-auto">
                 <div>
                     <h1 class="text-xl font-bold text-gray-900">POLYCLINIQUE SHUKRANI</h1>
                     <p class="text-sm text-medical-teal">La Santé pour tous</p>
                 </div>
             </div>

             <!-- Mobile menu button -->
             <button id="mobile-menu-button" class="md:hidden p-2">
                 <i class="fas fa-bars text-xl"></i>
             </button>

             <!-- Desktop menu -->
             <div class="hidden md:flex space-x-8">
                 <a href="#accueil" class="nav-link text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="accueil">Accueil</a>
                 <a href="#services" class="nav-link text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="services">Services</a>
                 <a href="#galerie" class="nav-link text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="galerie">Galerie</a>
                 <a href="#about" class="nav-link text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="about">À Propos</a>
                 <a href="#realisations" class="nav-link text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="realisations">Réalisations</a>
                 <a href="#contact" class="nav-link text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="contact">Contact</a>
             </div>
         </div>

         <!-- Mobile menu -->
         <div id="mobile-menu" class="md:hidden hidden pb-4 border-t border-gray-200">
             <div class="flex flex-col space-y-4 pt-4">
                 <a href="#accueil" class="nav-link-mobile text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="accueil">Accueil</a>
                 <a href="#services" class="nav-link-mobile text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="services">Services</a>
                 <a href="#galerie" class="nav-link-mobile text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="galerie">Galerie</a>
                 <a href="#about" class="nav-link-mobile text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="about">À Propos</a>
                 <a href="#contact" class="nav-link-mobile text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="contact">Contact</a>
                 <a href="#realisations" class="nav-link-mobile text-gray-900 hover:text-medical-teal transition-colors"
                     data-section="realisations">Réalisations</a>
             </div>
         </div>
     </div>
 </nav>
