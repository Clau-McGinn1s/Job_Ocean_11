import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                "archivo": ['Archivo'],
                sans: ['Figtree', 
                        ...defaultTheme.fontFamily.sans
                ],
            },
            colors:{
                "white" : "#FFFFFF",
                "black": "#00171F",
                "cerulean": "#007EA7",
                "space": "#003459",
                "sky": "#00A8E8"
            },

        },
    },
    plugins: [],
};
