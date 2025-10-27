<?php get_header(); ?>

    <!-- 1. SECCIÓN HÉROE -->
    <section class="relative bg-cover bg-top md:bg-center text-fondo-claro pt-36 md:pt-40 pb-20 md:pb-32" id="inicio"
             style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/tradingYoel.avif');">
        <div class="absolute inset-0 bg-principal/50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="font-titulo text-4xl md:text-6xl font-bold mb-16 text-center">De 0 a Rentable en 90 días</h1>
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="md:w-3/5 text-left bg-black/60 p-6 rounded-xl shadow-lg">
                    <p class="font-cuerpo text-lg md:text-xl opacity-90 mb-6 text-justify text-white">
                        Bienvenido a la comunidad de Yoel Montes, conocido como elmasteryoel, un mentor y trader
                        profesional con más de 11 años de experiencia en los mercados financieros que enseña cómo
                        dominarlos con enfoque, análisis técnico, gestión emocional, disciplina estrategia, y
                        psicología, ayudando a cientos de alumnos en Latinoamérica a entender y dominar los índices
                        sintéticos como GainX, PainX y FlipX, etc. y Forex.
                    </p>
                    <p class="font-cuerpo text-lg md:text-xl opacity-90 font-semibold">
                        Empieza hoy tu formación con Yoel Montes — Transforma tu conocimiento en ingresos reales con
                        estrategias probadas.
                    </p>
                </div>

                <div class="md:w-2/5 flex justify-center md:justify-center">
                    <video class="rounded-lg shadow-xl w-full max-w-xs" playsinline autoplay loop controls>
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video1.mp4"
                                type="video/mp4">
                        Tu navegador no soporta el tag de video.
                    </video>
                </div>
            </div>
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
                       class="mt-6 inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-6 rounded-lg text-base hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">Conoce
                        más</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 'QUÉ ES TRADING' -->
    <section class="py-16 md:py-24 bg-principal text-white" id="que-es-trading">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-center mb-6">¿Qué Es Trading?</h2>
            <p class="font-cuerpo text-lg md:text-xl text-center max-w-3xl mx-auto mb-12 opacity-90 text-white">
                👉 Trading significa comprar y vender activos financieros con el objetivo de obtener ganancias. En
                palabras simples, es como un “negocio digital” donde ganas si compras barato y vendes caro… o vendes
                caro y luego compras barato.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Card 1: Tipos de Trading -->
                <div class="bg-gray-700 rounded-lg shadow-lg p-8">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4">Tipos Principales de
                        Trading</h3>
                    <ul class="font-cuerpo space-y-2 list-disc list-inside">
                        <li><span class="font-bold">Scalping:</span> operaciones muy rápidas (segundos o minutos).</li>
                        <li><span class="font-bold">Day trading:</span> se abre y se cierra todo el mismo día.</li>
                        <li><span class="font-bold">Swing trading:</span> dura días o semanas.</li>
                        <li><span class="font-bold">Position trading:</span> son inversiones más largas (meses o años).
                        </li>
                    </ul>
                </div>

                <!-- Card 2: Activos Negociables -->
                <div class="bg-gray-700 rounded-lg shadow-lg p-8">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Activos que se Pueden
                        Negociar</h3>
                    <ul class="font-cuerpo space-y-2 list-disc list-inside">
                        <li>Índices sintéticos (GainX, PainX, FlipX, etc.)</li>
                        <li>Forex (EUR/USD, USD/JPY, etc.)</li>
                        <li>Criptomonedas (Bitcoin, Ethereum, etc.)</li>
                        <li>Acciones (Apple, Tesla, Amazon…)</li>
                        <li>Materias primas (oro, plata, petróleo)</li>
                    </ul>
                </div>

                <!-- Card 3: Requisitos -->
                <div class="bg-gray-700 rounded-lg shadow-lg p-8">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Qué se Necesita para Hacer
                        Trading</h3>
                    <ul class="font-cuerpo space-y-2 list-disc list-inside">
                        <li>Una plataforma o bróker (como <a
                                    href="https://es.gowt.net/ib65350" target="_blank" rel="noopener noreferrer"
                                    class="text-acento-dorado font-bold hover:underline">Weltrade</a>).
                        </li>
                        <li>Un capital inicial (aunque se puede empezar con poco).</li>
                        <li>Conocimiento técnico para leer gráficos y entender el mercado.</li>
                        <li>Disciplina emocional para controlar la codicia y el miedo.</li>
                    </ul>
                </div>

                <!-- Card 4: Riesgos y Realidades -->
                <div class="bg-gray-700 rounded-lg shadow-lg p-8">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Riesgos y Realidades</h3>
                    <ul class="font-cuerpo space-y-2 list-disc list-inside">
                        <li>No es dinero fácil: requiere práctica y educación.</li>
                        <li>Puedes ganar o perder dinero rápidamente.</li>
                        <li>Los traders profesionales siguen estrategias y gestionan el riesgo para proteger su capital.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 'ÍNDICES SINTÉTICOS' -->
    <section class="py-16 md:py-24 bg-principal text-fondo-claro" id="indices-sinteticos">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-center mb-6">¿Qué son los Índices
                Sintéticos?</h2>
            <p class="font-cuerpo text-lg md:text-xl text-center max-w-3xl mx-auto mb-12 opacity-90">
                👉 Son activos virtuales que simulan el comportamiento de los mercados reales, pero sin depender de
                noticias o eventos externos. Son mercados artificiales que imitan la volatilidad real.
            </p>

            <div class="flex flex-col lg:flex-row gap-12 mb-12">
                <!-- Columna Izquierda: Características -->
                <div class="lg:w-2/3">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Características
                        Principales</h3>
                    <ul class="font-cuerpo space-y-3 list-disc list-inside">
                        <li>Simulan movimientos reales del mercado, con tendencias, soportes y resistencias.</li>
                        <li>Están activos 24/7, incluso fines de semana y festivos.</li>
                        <li>Los precios se generan mediante algoritmos aleatorios verificados, con niveles fijos de
                            volatilidad.
                        </li>
                        <li>Permiten hacer trading igual que en Forex o criptomonedas (comprar o vender).</li>
                        <li>Disponibles en brókers como <a href="https://es.gowt.net/ib65350" target="_blank"
                                                           rel="noopener noreferrer"
                                                           class="text-acento-dorado font-bold hover:underline">Weltrade</a>
                            con nombres como GainX, PainX, FlipX, etc.
                        </li>
                    </ul>
                </div>

                <!-- Columna Derecha: Ventajas y Desventajas -->
                <div class="lg:w-1/3 space-y-6">
                    <div>
                        <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4">Ventajas</h3>
                        <ul class="font-cuerpo space-y-2">
                            <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Operan las 24
                                horas.
                            </li>
                            <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> No dependen de
                                noticias o manipulación.
                            </li>
                            <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Permiten
                                practicar estrategias en condiciones constantes.
                            </li>
                            <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Requieren poco
                                capital para comenzar.
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4">Desventajas</h3>
                        <p class="font-cuerpo flex items-start"><span class="text-yellow-400 mr-2">⚠️</span> El riesgo
                            es alto (usa buena gestión).</p>
                    </div>
                </div>
            </div>

            <!-- Bloque de Consejos -->
            <div class="bg-gray-700 rounded-lg shadow-lg p-8 mb-12">
                <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4 text-center">🧠 Consejos Clave de
                    Disciplina</h3>
                <ul class="font-cuerpo space-y-2 list-disc list-inside md:columns-2">
                    <li>No operes por emoción o revancha.</li>
                    <li>Establece un límite de pérdidas diario (ej: 2%).</li>
                    <li>Evita operar sin una estrategia clara.</li>
                    <li>Mantén un diario de trading para aprender.</li>
                    <li>Practica primero en cuenta demo.</li>
                </ul>
            </div>

            <!-- Citas Finales -->
            <div class="text-center font-cuerpo italic text-lg opacity-80 space-y-2 text-white">
                <p>"En los índices sintéticos, la estrategia te da dirección, pero la gestión del riesgo te mantiene
                    vivo en el juego."</p>
                <p>"Un buen trader no busca ganar todas las veces, sino perder poco y ganar más cuando acierta."</p>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 'QUÉ ES UN BRÓKER' -->
    <section class="py-16 md:py-24 bg-black text-fondo-claro" id="que-es-broker">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-center mb-6">¿Qué es un Bróker?</h2>
            <p class="font-cuerpo text-lg md:text-xl text-center max-w-3xl mx-auto mb-12 opacity-90">
                👉 Es una empresa o plataforma que actúa como intermediario, permitiéndote acceder al mercado
                financiero para comprar y vender activos.
            </p>

            <!-- Bloque de Ejemplo -->
            <div class="bg-gray-700 rounded-lg shadow-lg p-8 mb-12 max-w-4xl mx-auto">
                <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Ejemplo Sencillo</h3>
                <p class="font-cuerpo mb-4">Tú no puedes ir directamente al mercado del dólar o del oro a negociar.
                    Necesitas un bróker, que te da:</p>
                <ul class="font-cuerpo space-y-3">
                    <li class="flex items-start"><span class="mr-3 text-acento-dorado">📱</span> Una plataforma de
                        trading (como MetaTrader 4 o 5).
                    </li>
                    <li class="flex items-start"><span class="mr-3 text-acento-dorado">📈</span> Precios en tiempo real
                        de los activos.
                    </li>
                    <li class="flex items-start"><span class="mr-3 text-acento-dorado">⚙️</span> Herramientas para
                        abrir, cerrar y controlar tus operaciones.
                    </li>
                </ul>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Columna 1: Cómo Ganan Dinero -->
                <div class="bg-principal p-8 rounded-lg">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4">Cómo Gana Dinero un Bróker</h3>
                    <ul class="font-cuerpo space-y-2 list-disc list-inside">
                        <li><span class="font-bold">Spread:</span> diferencia entre el precio de compra y venta.</li>
                        <li><span class="font-bold">Comisiones:</span> un pequeño cobro por cada operación.</li>
                        <li><span class="font-bold">Swap:</span> intereses por mantener una operación abierta durante la
                            noche.
                        </li>
                    </ul>
                </div>

                <!-- Columna 2: Qué Debe Tener -->
                <div class="bg-principal p-8 rounded-lg">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4">Qué Debe Tener un Buen
                        Bróker</h3>
                    <ul class="font-cuerpo space-y-2">
                        <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Reputación confiable.
                        </li>
                        <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Depósitos y retiros
                            rápidos.
                        </li>
                        <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Buena atención al
                            cliente.
                        </li>
                        <li class="flex items-start"><span class="text-acento-verde mr-2">✅</span> Plataforma estable y
                            transparente.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 'QUÉ ES WELTRADE' -->
    <section class="py-16 md:py-24 bg-principal text-fondo-claro" id="que-es-weltrade">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Columna Izquierda: Imagen -->
                <div class="lg:w-1/3 flex justify-center">
                    <a href="https://es.gowt.net/ib65350" target="_blank" rel="noopener noreferrer"
                       class="block rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105"
                       aria-label="Registrarse en Weltrade">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/weltrader.png"
                             alt="Logo de Weltrade" class="w-full h-auto">
                    </a>
                </div>

                <!-- Columna Derecha: Contenido -->
                <div class="lg:w-2/3">
                    <h2 class="font-titulo text-3xl md:text-4xl font-bold mb-4">💼 ¿Qué es Weltrade?</h2>
                    <p class="font-cuerpo mb-4">
                        👉🏻 Weltrade es una plataforma internacional de trading en línea, fundada alrededor del año 2006,
                        que ofrece servicios para operar en los mercados financieros globales, principalmente:
                    </p>
                    <ul class="font-cuerpo space-y-1 list-disc list-inside mb-6">
                        <li>Índices sintéticos como GainX, PainX y FlipX.</li>
                        <li>Forex (divisas) y Metales (oro, plata).</li>
                        <li>Energías (petróleo, gas) y Criptomonedas.</li>
                        <li>Índices y CFDs (contratos por diferencia).</li>
                    </ul>

                    <!-- Subsecciones -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <!-- Información general -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="font-titulo text-xl font-bold text-acento-dorado mb-3">Información General</h3>
                            <ul class="font-cuerpo text-sm space-y-2">
                                <li><strong>Nombre:</strong> Systemgates Ltd</li>
                                <li><strong>Sede:</strong> San Vicente y las Granadinas</li>
                                <li><strong>Fundador:</strong> Alexey Angureev</li>
                                <li class="pt-2">
                                    <a href="https://es.gowt.net/ib65350" target="_blank" rel="noopener noreferrer"
                                       class="inline-block w-full text-center bg-principal text-acento-dorado font-mono text-xs p-2 rounded hover:bg-gray-800 transition-colors">
                                        https://www.weltrade.com
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Qué ofrece -->
                        <div class="bg-gray-700 p-6 rounded-lg">
                            <h3 class="font-titulo text-xl font-bold text-acento-dorado mb-3">Qué Ofrece</h3>
                            <ul class="font-cuerpo text-sm space-y-2 list-disc list-inside">
                                <li>Cuentas en MT4 y MT5.</li>
                                <li>Índices sintéticos propios (GainX, etc.).</li>
                                <li>Bonos, afiliados y Copy Trading.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Opiniones -->
                    <div class="bg-gray-700 p-4 rounded-lg mb-6">
                        <p class="font-cuerpo flex items-center"><span class="text-acento-verde mr-2">✅</span>
                            Buena reputación en LATAM por su soporte y retiros rápidos.</p>
                    </div>

                    <p class="font-cuerpo mb-6">
                        Su enfoque está en brindar servicios rápidos, soporte personalizado y herramientas
                        tecnológicas para traders de todos los niveles.
                    </p>

                    <div class="text-center">
                        <a href="https://es.gowt.net/ib65350" target="_blank" rel="noopener noreferrer"
                           class="inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-8 rounded-lg text-lg hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">
                            Regístrate aquí en Weltrade
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 'CÓMO RECARGAR LA CUENTA' -->
    <section class="py-16 md:py-24 bg-black text-fondo-claro" id="como-recargar">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-center mb-4">Cómo Recargar la Cuenta de
                Weltrade</h2>
            <p class="font-cuerpo text-lg md:text-xl text-center max-w-3xl mx-auto mb-12 opacity-90">
                👉🏻 Opción Recomendada: Recarga con <span class="text-acento-dorado font-bold">Binance</span> (rápido y
                seguro). Para comenzar, necesitas fondos reales. Binance es la mejor opción por rapidez, seguridad y
                bajas comisiones.
            </p>

            <!-- Guía Principal con Binance -->
            <div class="flex flex-col lg:flex-row items-center gap-12 mb-16">
                <!-- Columna Izquierda: Imagen -->
                <div class="lg:w-2/5 flex justify-center">
                    <a href="https://www.binance.com/activity/referral-entry/CPA?ref=CPA_00UODSHENF" target="_blank"
                       rel="noopener noreferrer"
                       class="block rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105"
                       aria-label="Crear cuenta en Binance">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recargaBinance.png"
                             alt="Recargar Weltrade con Binance" class="w-full h-auto">
                    </a>
                </div>

                <!-- Columna Derecha: Pasos -->
                <div class="lg:w-3/5">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-6">Recarga tu Cuenta con Binance —
                        Guía Rápida</h3>
                    <ol class="font-cuerpo space-y-4 mb-8">
                        <li class="flex items-start">
                            <span class="bg-acento-dorado text-principal font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">1</span>
                            <div><strong>Crea tu cuenta:</strong> Ve a <a
                                        href="https://www.binance.com/activity/referral-entry/CPA?ref=CPA_00UODSHENF"
                                        target="_blank" rel="noopener noreferrer"
                                        class="text-acento-dorado font-bold hover:underline">binance.com</a> y verifica
                                tu identidad (KYC).
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-acento-dorado text-principal font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">2</span>
                            <div><strong>Compra USDT:</strong> En Binance, ve a “Comprar Cripto” y elige USDT (moneda
                                estable 1:1 con el dólar).
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-acento-dorado text-principal font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">3</span>
                            <div><strong>Obtén tu dirección en Weltrade:</strong> Entra a tu cuenta, ve a “Depósito” →
                                Criptomonedas (USDT) y copia la dirección (ej. red TRC20).
                            </div>
                        </li>
                        <li class="flex items-start">
                            <span class="bg-acento-dorado text-principal font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">4</span>
                            <div><strong>Envía desde Binance:</strong> En tu billetera Binance, ve a Retirar → USDT →
                                Pega la dirección de Weltrade → Elige la red correcta (TRC20) → Confirmar.
                            </div>
                        </li>
                    </ol>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <h4 class="font-titulo text-lg font-bold text-acento-dorado mb-2">🌟 Por qué usar Binance</h4>
                        <ul class="font-cuerpo text-sm grid grid-cols-2 gap-x-4 gap-y-1">
                            <li class="flex items-center"><span class="text-acento-verde mr-2">✅</span> Transacciones
                                rápidas
                            </li>
                            <li class="flex items-center"><span class="text-acento-verde mr-2">✅</span> Comisiones
                                mínimas
                            </li>
                            <li class="flex items-center"><span class="text-acento-verde mr-2">✅</span> Seguridad
                                total
                            </li>
                            <li class="flex items-center"><span class="text-acento-verde mr-2">✅</span> Disponible
                                24/7
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Otras Opciones y Nota Importante -->
            <div class="bg-principal p-8 rounded-lg border border-fondo-claro/10">
                <h3 class="font-titulo text-2xl font-bold text-center text-acento-dorado mb-6">🔧 Otras Opciones de
                    Depósito</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8 font-cuerpo text-sm">
                    <ul class="space-y-2 list-disc list-inside">
                        <li><strong>Tarjetas bancarias:</strong> Visa / MasterCard</li>
                        <li><strong>E-wallets:</strong> Skrill, Neteller, Perfect Money, etc.</li>
                        <li><strong>P2P:</strong> Según disponibilidad en tu región.</li>
                    </ul>
                    <ul class="space-y-2 list-disc list-inside">
                        <li><strong>Transferencia Bancaria Local:</strong> Depende del país.</li>
                        <li><strong>Apps de pago locales:</strong> Pasarelas y códigos QR.</li>
                        <li><strong>Bank Wire:</strong> Transferencia internacional.</li>
                    </ul>
                </div>
                <div class="bg-gray-700 p-4 rounded-lg text-sm">
                    <p class="font-bold flex items-center"><span class="mr-2">⚠️</span> Nota Importante</p>
                    <p class="opacity-90 mt-1">No todos los métodos están disponibles en todos los países. Weltrade
                        muestra las opciones según tu región. Las comisiones y tiempos de procesamiento varían.</p>
                </div>
            </div>

            <!-- Cita Final / CTA -->
            <div class="text-center mt-12">
                <a href="https://www.binance.com/activity/referral-entry/CPA?ref=CPA_00UODSHENF" target="_blank"
                   rel="noopener noreferrer"
                   class="font-cuerpo italic text-lg text-acento-dorado hover:text-yellow-300 transition-colors">
                    “Recarga en minutos y empieza a operar sin complicaciones.”
                </a>
            </div>
        </div>
    </section>

    <!-- SECCIÓN 'ESTRATEGIAS Y GESTIÓN DEL RIESGO' -->
    <section class="py-16 md:py-24 bg-principal text-fondo-claro" id="estrategias">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-center mb-6">⚙️ Estrategias y Gestión del
                Riesgo</h2>
            <p class="font-cuerpo text-lg md:text-xl text-center max-w-3xl mx-auto mb-12 opacity-90">
                El éxito en los índices sintéticos no depende solo de acertar la dirección del mercado, sino de
                gestionar el riesgo y mantener la disciplina.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- Reglas Básicas -->
                <div class="bg-gray-700 p-8 rounded-lg shadow-lg">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Reglas Básicas</h3>
                    <ul class="font-cuerpo space-y-3 list-disc list-inside">
                        <li>No arriesgar más del 2% del capital por operación.</li>
                        <li>Mantener una relación riesgo/beneficio mínima de 1:2.</li>
                        <li>Definir un límite de pérdidas diario.</li>
                    </ul>
                </div>

                <!-- Estrategias Efectivas -->
                <div class="bg-gray-700 p-8 rounded-lg shadow-lg">
                    <h3 class="font-titulo text-2xl font-bold text-acento-dorado mb-4"> Estrategias Efectivas</h3>
                    <ol class="font-cuerpo space-y-3 list-decimal list-inside">
                        <li>Alineación de Medias Móviles (EMAs) para detectar tendencias.</li>
                        <li>Breakout o ruptura de zonas de soporte y resistencia.</li>
                        <li>Scalping rápido analizando desde temporalidades mayores.</li>
                    </ol>
                </div>
            </div>

            <p class="font-cuerpo text-center max-w-3xl mx-auto mb-12">
                Estas técnicas, combinadas con control emocional y disciplina, pueden convertir el trading en una
                práctica rentable y estable.
            </p>

            <div class="text-center">
                <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4" target="_blank"
                   class="inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-8 rounded-lg text-lg hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">
                    Domina estas estrategias en la comunidad de Yoel Montes
                </a>
            </div>
        </div>
    </section>

    <!-- 3. SECCIÓN DE SERVICIOS -->
    <section class="py-16 md:py-24 bg-black" id="servicios">
        <div class="container mx-auto px-4">
            <h2 class="font-titulo text-3xl md:text-4xl font-bold text-white text-center mb-12">Servicios Diseñados
                para tu Éxito</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
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
            </div>
            <div class="text-center mt-16">
                <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4" target="_blank"
                   class="inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-8 rounded-lg text-lg hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">Asesoria
                    Personalizada</a>
            </div>
        </div>
    </section>

    <!-- 1. SECCIÓN APRENDE CON YOEL  -->
    <section class="py-16 md:py-24 bg-black" id="aprende-con-yoel">
        <div class="absolute inset-0 bg-principal/50"></div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row gap-10 items-center">
                <div class="md:w-2/5 flex justify-center md:justify-center">
                    <video class="rounded-lg shadow-xl w-full max-w-xs" playsinline autoplay loop controls>
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/video2.mp4"
                                type="video/mp4">
                        Tu navegador no soporta el tag de video.
                    </video>
                </div>
                <div class="md:w-3/5 text-left bg-black/60 p-6 rounded-xl shadow-lg">
                    <p class="font-cuerpo text-lg md:text-xl opacity-90 mb-6 text-justify text-white">
                        Únete a la comunidad donde cada día cientos de traders en formación comparten análisis,
                        resultados y aprendizaje guiados por Yoel Montes.
                    </p>
                    <p class="font-cuerpo text-lg md:text-xl opacity-90 font-semibold">
                        Da tu primer paso hacia el trading profesional
                    </p>
                    <div class="text-center mt-16">
                        <a href="https://soporte.ganaporencuestas.com/go/002892a1-402c-4952-81ff-063b30c0bff4"
                           target="_blank"
                           class="inline-block bg-acento-dorado text-principal font-bold font-titulo py-3 px-8 rounded-lg text-lg hover:bg-yellow-500 transition-transform transform hover:-translate-y-1">Empieza
                            Ahora con Yoel Montes</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>