import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    plugins: [require("daisyui")],

    daisyui: {
        themes: ["light",
        {
            ghosty: {
            "primary": "#0284c7",
            "secondary": "#0ea5e9",
            "accent": "#22d3ee",
            "neutral": "#1f2937",
            "base-100": "#111827",
            "info": "#3abff8",
            "success": "#36d399",
            "warning": "#fbbd23",
            "error": "#f87272",
            },
        },
    ], // true: all themes | false: only light + dark | array: specific themes like this ["light", "dark", "cupcake"]
        darkTheme: "ghosty", // name of one of the included themes for dark mode
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        rtl: false, // rotate style direction from left-to-right to right-to-left. You also need to add dir="rtl" to your html tag and install `tailwindcss-flip` plugin for Tailwind CSS.
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
    },
};
