module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Arial", "Helvetica", "sans-serif"],
            },
            fontSize: {
                lg: "1.333rem",
                xl: "1.777rem",
                "2xl": "2.369rem",
                "3xl": "3.157rem",
                "4xl": "4.209rem",
                "5xl": "5.610rem",
            },
            colors: {
                brown: {
                    dark: "#6c4d40",
                },
                green: {
                    DEFAULT: "#4d9b4d",
                },
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};