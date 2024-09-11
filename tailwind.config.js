/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      textShadow: {
        'default': '2px 2px 4px rgba(0, 0, 0, 0.5)',
        'md': '3px 3px 6px rgba(0, 0, 0, 0.5)',
        'lg': '4px 4px 8px black',
      },
      boxShadow: {
        'inner-bottom': 'inset 80px 80px 80px rgba(0, 0, 0, 0.7), inset 80px 80px 80px rgba(0, 0, 0, 0.5)',
      },
      spacing: {
        '150px': '150px',
      },
      animation: {
        'rotate-circle': 'rotate-circle 20s linear infinite',
      },
      keyframes: {
        'rotate-circle': {
          '0%': { transform: 'rotate(0deg)' },
          '100%': { transform: 'rotate(360deg)' },
        },
      },
    },
  },
  plugins: [],
}
