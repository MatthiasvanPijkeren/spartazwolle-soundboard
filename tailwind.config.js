/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.antlers.html",
        "./resources/**/*.antlers.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.vue",
        "./content/**/*.md",
    ],

    theme: {
        extend: {
            colors: {
                "hks-dark": "#0055A4",
            },
        },
    },

    plugins: [require("@tailwindcss/typography")],
};
