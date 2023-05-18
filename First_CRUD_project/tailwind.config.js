/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
      'poppins': ['Poppins', 'sans-serif'],
      },

      colors: {
        'primary-green':'#22c55e',
        'light-gray':'#f6f7f8',
        'dark-blue':'#212935',
        'secondary-green':'#4fd1c5',
      },

      screens:{
        'xs':'480px'
      }
    },
  },
  plugins: [],
}

