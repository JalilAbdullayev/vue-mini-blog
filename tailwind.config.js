import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './vendor/awcodes/filament-curator/resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    100: "#cfe2ff",
                    200: "#9ec5fe",
                    300: "#6ea8fe",
                    400: "#3d8bfd",
                    500: "#0d6efd",
                    600: "#0a58ca",
                    700: "#084298",
                    800: "#052c65",
                    900: "#031633"
                },
            }
        },
    },
    darkMode: 'class',
    plugins: [forms, typography, daisyui],
};
