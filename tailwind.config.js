import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px'
        },
        extend: {
            colors: {
                'sand-light': '#f4ece6',
                'sand-dark': '#e6dace',
                'sand-darkest': '#ccad8e'
            },
            fontFamily: {
                'sans': ["Cardo", "Arial", ...defaultTheme.fontFamily.sans],
                'mono': ['Source Code Pro', 'monospace']
            },
            cursor: {
                help: 'help',
                crosshair: 'crosshair',
                'zoom-in': 'zoom-in',
            }
        },
    },

    variants: {
        extend: {
            borderWidth: ['hover', 'focus'],
        },
    },

    plugins: [forms],
};
