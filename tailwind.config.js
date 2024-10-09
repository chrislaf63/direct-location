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
                'minHeaderAndFooter': 'calc(100vh - 246px)',
            },
            maxHeight: {
                'headerDesktop' : '118px',
                '3/5': '60%',
                '4/5': '80%',
                '60vh': '60vh',
            },
            height: {
                'headerDesktop': '118px',
                "headerMobile": '90px',
                'footerDesktop': '246px',
                'footerMobile': '376px',
                'preview': '250px',
                'messages': 'calc(100vh - 182px)',
                'withHeader': 'calc(100vh - 118px)',
                'withFooter': 'calc(100vh - 234px)',
            },
            screens: {
                '3xl': '1537px',
                '4xl': '1921px', // Définit le breakpoint XXL pour les écrans ≥ 1920px
            },
            width: {
                'dash': 'calc(100vw - 392px)',
                'dashsidebar': '392px',
                'conversations': '1066px',
            },
            fontSize: {
                'xs': '.75rem',
            },
            padding: {
                'headerDesktop': '118px',
                "headerMobile": '90px',
                'footerDesktop': '246px',
                'footerMobile': '376px',
            }
        },
    },

    plugins: [forms],
};
