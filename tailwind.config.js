/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      'background': '#16161a',
      'headline': '#fffffe',
      'paragraph-w':'#94a1b2',
      'highlight': '#FFC400',
      'paragraph-b': '#2d334a',
      'button':'#2cb67d',
      'button-text':'#fffffe',
    },
    fontFamily: {
      'header': ['Outfit', 'sans-serif'],
      'body': ['"League Spartan"', 'sans-serif'],
    }
  },
  plugins: [],
}
