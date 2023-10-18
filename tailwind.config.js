/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'mainGreen': '#CCD5AE',
      'lightGreen': '#E9EDC9',
      'white': '#FEFAEO',
      'mainDark': '#D4A373',
      'mainText': '#444444',
    },
    extend: {},
  },
  plugins: [],
}

