/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php',
        './assets/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                'principal': '#040404',      // Oscuro/Noche
                'secundario': '#415A77',     // Gris Carbón
                'fondo-claro': '#E0E1DD',   // Blanco Roto
                'acento': {
                    'dorado': '#D4AF37',     // Dorado/Ocre
                    'verde': '#2ECC71',      // Verde Crecimiento
                },
            },
            fontFamily: {
                'titulo': ['Montserrat', 'sans-serif'],
                'cuerpo': ['Roboto', 'sans-serif'],
            },
            keyframes: {
                'pulsing-glow': {
                    '0%, 100%': {boxShadow: 'none'},
                    '50%': {boxShadow: 'inset 0 0 30px 10px rgba(212, 175, 55, 0.5)'},
                }
            },
            animation: {
                'pulsing-glow': 'pulsing-glow 2.5s ease-in-out infinite',
            }
        },
    },
    plugins: [],
}