import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.js',

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            minHeight: {
                '3/5': '60%',
                '4/5': '80%',
                '60vh': '60vh',
            },
            screens: {
                '3xl': '1537px',
                '4xl': '1921px', // Définit le breakpoint XXL pour les écrans ≥ 1920px
            },
        },
    },

    plugins: [forms],
};
