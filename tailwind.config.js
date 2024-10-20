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
                'headerDesktop': '125px',
                "headerMobile": '90px',
                'footerDesktop': '246px',
                'footerMobile': '376px',
                'previewHLarge': '250px',
                'imagePrevLg': '238px',
                'messages': 'calc(100vh - 182px)',
                'withHeader': 'calc(100vh - 118px)',
                'withFooter': 'calc(100vh - 234px)',
            },
            screens: {
                '3xl': '1537px',
                '4xl': '1921px',
            },
            width: {
                'headerWDesktop': '1200px',
                'conversations': '1066px',
                'profileDesktop': '720px',
                'previewLarge': '900px',
                'previewMedium': '450px',
                'previewSmall': '350px',
                'imagePrevLgw': '300px',
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
