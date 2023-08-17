import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Fira sans', 'Helvetica', 'Arial', 'sans-serif'],
                display: ['Big Shoulders Display'],
            },
            colors: {
                'green': '#1b762c',
                'red': '#f00b2d',
            },
        },
    },

    plugins: [forms],
};
