<!-- Footer -->
<footer class="bg-gray-900 text-white py-16 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-medical-teal/20 to-transparent"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative grid grid-cols-1 md:grid-cols-4 gap-10">
        <!-- Company Info -->
        <div class="space-y-4 col-span-1">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="h-12 w-auto rounded shadow-md bg-white p-1">
                <div>
                    <h3 class="text-xl font-bold tracking-wide">{{ config('app.name') }}</h3>
                    <p class="text-medical-teal text-sm">La Santé pour tous</p>
                </div>
            </div>
            <p class="text-gray-300 text-sm leading-relaxed">
                Votre partenaire de confiance pour des soins de santé de qualité supérieure.<br>
                Nous nous engageons à améliorer votre bien-être avec compassion et professionnalisme.
            </p>
            <div class="flex space-x-3 mt-4">
                <a href="#" aria-label="Facebook"
                    class="w-8 h-8 bg-medical-teal/20 rounded-full flex items-center justify-center hover:bg-medical-teal transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.522-4.477-10-10-10S2 6.478 2 12c0 4.991 3.657 9.128 8.438 9.877v-6.987h-2.54v-2.89h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.242 0-1.632.771-1.632 1.562v1.875h2.773l-.443 2.89h-2.33v6.987C18.343 21.128 22 16.991 22 12" />
                    </svg>
                </a>
                <a href="#" aria-label="Twitter"
                    class="w-8 h-8 bg-medical-teal/20 rounded-full flex items-center justify-center hover:bg-medical-teal transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.564-2.005.974-3.127 1.195a4.92 4.92 0 00-8.384 4.482C7.691 8.095 4.066 6.13 1.64 3.161c-.542.929-.856 2.01-.856 3.17 0 2.188 1.115 4.117 2.823 5.247a4.904 4.904 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 01-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 010 21.543a13.94 13.94 0 007.548 2.212c9.058 0 14.009-7.496 14.009-13.986 0-.213-.005-.425-.014-.636A9.936 9.936 0 0024 4.557z" />
                    </svg>
                </a>
                <a href="#" aria-label="LinkedIn"
                    class="w-8 h-8 bg-medical-teal/20 rounded-full flex items-center justify-center hover:bg-medical-teal transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm13.5 11.268h-3v-5.604c0-1.337-.025-3.063-1.867-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.379-1.563 2.841-1.563 3.039 0 3.6 2.001 3.6 4.601v5.595z" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Liens Rapides</h4>
            <ul class="space-y-2">
                <li><a href="#accueil"
                        class="text-gray-300 hover:text-medical-teal transition-colors text-sm">Accueil</a></li>
                <li><a href="#services"
                        class="text-gray-300 hover:text-medical-teal transition-colors text-sm">Services</a></li>
                <li><a href="#equipe" class="text-gray-300 hover:text-medical-teal transition-colors text-sm">Notre
                        Équipe</a></li>
                <li><a href="#about" class="text-gray-300 hover:text-medical-teal transition-colors text-sm">À
                        Propos</a></li>
                <li><a href="#contact"
                        class="text-gray-300 hover:text-medical-teal transition-colors text-sm">Contact</a></li>
                <li><a href="#realisations"
                        class="text-gray-300 hover:text-medical-teal transition-colors text-sm">Réalisations</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Nos Services</h4>
            <ul class="space-y-2">
                <li class="text-gray-300 text-sm">Consultation Générale</li>
                <li class="text-gray-300 text-sm">Échographie</li>
                <li class="text-gray-300 text-sm">Laboratoire</li>
                <li class="text-gray-300 text-sm">Chirurgie</li>
                <li class="text-gray-300 text-sm">Service d'Urgence</li>
                <li class="text-gray-300 text-sm">Maternité</li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div>
            <h4 class="text-lg font-semibold mb-4">Contact</h4>
            <div class="space-y-3">
                <div class="flex items-start space-x-3">
                    <svg class="w-4 h-4 text-medical-teal flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" />
                    </svg>
                    <div class="text-gray-300 text-sm">
                        N° 12, Av/ Christian KUNDA, Q/ Golf Tshamalale<br>
                        Lubumbashi, RDC
                    </div>
                </div>
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-medical-teal flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                    </svg>
                    <span class="text-gray-300 text-sm">+243 853 951 763</span>
                </div>
                <div class="flex items-center space-x-3">
                    <svg class="w-4 h-4 text-medical-teal flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M2 3a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1V4z" />
                        <path d="M3 8h6v2H3V8z" />
                        <path d="M8 12h2v2H8v-2z" />
                    </svg>
                    <span class="text-gray-300 text-sm">polyshukrani@gmail.com</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-800 pt-8 mt-10">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm mb-4 md:mb-0">
                &copy; 2024 Polyclinique Shukrani. Tous droits réservés.
            </p>
            <div class="flex space-x-6 text-sm">
                <a href="#" class="text-gray-400 hover:text-medical-teal transition-colors">Politique de
                    Confidentialité</a>
                <a href="#" class="text-gray-400 hover:text-medical-teal transition-colors">Conditions
                    d'Utilisation</a>
                <a href="#" class="text-gray-400 hover:text-medical-teal transition-colors">Plan du Site</a>
            </div>
        </div>
    </div>
</footer>
