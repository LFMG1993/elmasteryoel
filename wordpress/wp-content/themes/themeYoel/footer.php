</main>
<footer class="bg-principal text-fondo-claro/70 pt-12 pb-8 font-cuerpo" id="contacto">
    <div class="container mx-auto px-4 text-center">

        <!-- Contenedor de 3 columnas para el Footer -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12 text-center md:text-left">
            <!-- Columna 1: Redes Sociales -->
            <div>
                <h3 class="font-titulo font-bold text-lg mb-4 text-fondo-claro">Síguenos</h3>
                <div class="flex flex-col items-center md:items-start gap-y-3">
                    <a href="https://www.facebook.com/ElMasterYoel" target="_blank"
                       class="flex items-center gap-x-2 text-sm hover:text-acento-dorado transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                        <span>Facebook</span>
                    </a>
                    <a href="https://t.me/ElMasterYoelLMC" target="_blank"
                       class="flex items-center gap-x-2 text-sm hover:text-acento-dorado transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m22 2-7 20-4-9-9-4Z"/>
                            <path d="M22 2 11 13"/>
                        </svg>
                        <span>Telegram</span>
                    </a>
                    <a href="https://www.tiktok.com/@elmasteryoel?_t=ZS-90UamYmwKJu&_r=1" target="_blank" class="flex items-center gap-x-2 text-sm hover:text-acento-dorado transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                        </svg>
                        <span>TikTok</span>
                    </a>
                </div>
            </div>
            <!-- Columna 2: Contacto -->
            <div>
                <h3 class="font-titulo font-bold text-lg mb-4 text-fondo-claro">Contacto</h3>
                <div class="flex flex-col items-center md:items-start gap-y-2">
                    <a href="tel:+12393103165"
                       class="flex items-center gap-x-2 text-sm hover:text-acento-dorado transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        <span>+1 (239) 310-3165</span>
                    </a>
                    <a href="mailto:preguntas@elmasteryoel.com"
                       class="flex items-center gap-x-2 text-sm hover:text-acento-dorado transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                        <span>preguntas@elmasteryoel.com</span>
                    </a>
                </div>
            </div>

            <!-- Columna 3: Navegación -->
            <div>
                <h3 class="font-titulo font-bold text-lg mb-4 text-fondo-claro">Navegación</h3>
                <div class="flex flex-col items-center md:items-start gap-y-2 text-sm">
                    <a href="#inicio" class="hover:text-acento-dorado transition-colors">Inicio</a>
                    <a href="#servicios" class="hover:text-acento-dorado transition-colors">Servicios</a>
                    <a href="#contacto" class="hover:text-acento-dorado transition-colors">Contacto</a>
                    <a href="#" class="hover:text-acento-dorado transition-colors">Política de Datos</a>
                </div>
            </div>
        </div>

        <!-- Separador y créditos de autoría -->
        <div class="border-t border-fondo-claro/20 pt-8">
            <p class="text-sm mb-2">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos los derechos
                reservados.</p>
            <p class="text-xs">
                Diseñado y Desarrollado por
                <a href="https://molink.com.co/" target="_blank" rel="noopener noreferrer"
                   class="font-bold text-fondo-claro/90 hover:text-acento-dorado transition-colors duration-300">
                    Molink Tecnologia
                </a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
