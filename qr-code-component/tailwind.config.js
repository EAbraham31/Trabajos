/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
  theme: {
    extend: {
      colors: {
        white: 'hsl(0, 0%, 100%)',
        slate: {
          300: 'hsl(212, 45%, 89%)',
          500: 'hsl(216, 15%, 48%)', 
          900: 'hsl(218, 44%, 22%)'
        }
      },
      fontFamily: {
        'outfit': ['Outfit', 'sans-serif']
      },
      borderRadius: {
        '20': '20px',
        '10': '10px'
      }
    },
  },
  plugins: [],
}