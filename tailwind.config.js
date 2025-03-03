const { purple } = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: "16px",
        },
        extend: {
            colors: {
                primary: "#4338CA",
                secondary: "#6366F1",
                backgroundLight: "#FEFCFB",
                backgroundPrimary: "#FFFFFF",
                purpleMain: "#493D9E",
                purpleSecondarry: "#8174A0",
            },
            screens: {
                "2xl": "1320px",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
