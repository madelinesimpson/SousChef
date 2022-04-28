module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        fontFamily: {
            'playfair-display': ["'Playfair Display'", 'serif'],
            'sora': ["'Sora'", 'sans-serif'],
        },
        backgroundImage: {
            'home-background': "url('/images/cucumber.jpg')",
        },
        colors: {

        },
    }
  },
  variants: {},
  plugins: [
  ]
}
