<?php get_header(); ?>

    <!-- 1. SECCIÓN HÉROE -->
    <section class="relative bg-cover bg-top md:bg-center text-fondo-claro py-60 md:py-72 text-center" id="inicio"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/tradingYoel.avif');">
        <div class="absolute inset-0 bg-principal/50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="font-titulo text-4xl md:text-6xl font-bold mb-4">De 0 a Rentable en 90 días</h1>
            <p class="font-cuerpo text-lg md:text-xl max-w-3xl mx-auto opacity-90 mb-8">Tu camino hacia la rentabilidad
                en solo 3 meses.</p>
            <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4" target="_blank"
               class="inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-8 rounded-lg text-lg hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">Empieza
                Ahora</a>
        </div>
    </section>

    <!-- 2. SECCIÓN 'QUIENES SOMOS'  -->
    <section class="py-16 md:py-24 bg-black" id="quien-soy">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/3 text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yoel.webp"
                         alt="Foto profesional de Yoel, experto en trading"
                         class="rounded-full w-64 h-64 object-cover mx-auto border-8 border-white shadow-lg transition-all duration-300 hover:border-acento-dorado hover:shadow-acento-dorado/40">
                </div>
                <div class="md:w-2/3">
                    <h2 class="font-titulo text-3xl md:text-4xl font-bold text-white mb-4">Yoel Montes</h2>
                    <p class="font-cuerpo text-white leading-relaxed text-justify">Creemos en la educación como
                        herramienta para asegurar la libertad financiera y el crecimiento personal de cada trader.
                        Descubre cómo puedes convertirte en un trader
                        exitoso siguiendo mis instrucciones prácticas y efectivas. Únete a la comunidad de traders que
                        está cambiando su vida.</p>
                    <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4"
                       target="_blank"
                       class="mt-6 inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-6 rounded-lg text-base hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">Empieza
                        Ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SECCIÓN DE SERVICIOS -->
    <section class="py-16 md:py-24 bg-black" id="servicios">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-white text-center mb-12">Servicios Diseñados
                para tu Éxito</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group bg-gray-50 rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tradingSchool.avif"
                         alt="Imagen sobre cuentas de fondeo" class="w-full h-48 object-cover">
                    <div class="p-8 text-center">
                        <h3 class="font-titulo text-2xl font-bold text-principal mb-3">Formación en Trading</h3>
                        <p class="font-cuerpo text-gray-600 text-justify">Aprende a dominar el mundo del trading con
                            cursos diseñados
                            para todos los niveles, desde principiantes hasta avanzados. Te enseñaremos cómo operar en
                            los índices sintéticos y aplicar el scalping con confianza.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="group bg-gray-50 rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Scalping.avif"
                         alt="Imagen sobre Trading de Alta Frecuencia" class="w-full h-48 object-cover">
                    <div class="p-8 text-center">
                        <h3 class="font-titulo text-2xl font-bold text-principal mb-3">Estrategias de Scalping</h3>
                        <p class="font-cuerpo text-gray-600 text-justify">Descubre estrategias de alta precisión que te
                            ayudarán a
                            maximizar tus ganancias en cada operación. Nuestro enfoque se basa en técnicas efectivas y
                            rápidas de scalping.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="group bg-gray-50 rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lionYoel.jpg"
                         alt="Imagen sobre Asesoría 1 a 1" class="w-full h-48 object-cover">
                    <div class="p-8 text-center hover:border-yellow-500">
                        <h3 class="font-titulo text-2xl font-bold text-principal mb-3">Asesoría 1 a 1</h3>
                        <p class="font-cuerpo text-gray-600 text-justify">Recibe guía continua de un trader profesional,
                            Yoel Montes,
                            quien ha ayudado a miles de estudiantes a alcanzar su objetivo financiero. Juntos,
                            trazaremos tu camino al éxito.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-16">
                <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4" target="_blank"
                   class="inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-8 rounded-lg text-lg hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">Empieza
                    Ahora</a>
            </div>
        </div>
    </section>

<?php get_footer();  ?>