const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./resources/views/**/*.blade.php",
        "./resources/sass/**/*.scss",
        "./resources/js/components/**/*.scss",
    ],
    theme: {
        fontFamily: {
            sans: ["Inter", ...defaultTheme.fontFamily.sans],
            display: ["Inter", "sans-serif"],
            body: ["Inter", "sans-serif"],
        },
        extend: {
            spacing: {
                '9': '2.25rem',
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
            maxWidth: {},
        },
    },
    variants: {
        backgroundColor: ["responsive", "hover", "focus", "active"],
    },
    plugins: [require("@tailwindcss/ui")({
        layout: 'sidebar',
    })],
};
