/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './*.php',
    './includes/**/*.php',
    './data/**/*.php',
  ],
  theme: {
    extend: {
      screens: {
        // Figma has desktop (1728) and iPhone (428) only.
        // Tablet uses the iPhone layout until this breakpoint.
        desktop: '1280px',
      },
      colors: {
        loy: {
          page: '#1d242d',
          ink: '#151a20',
          glass: 'rgba(21,26,32,0.37)',
          row: 'rgba(21,26,32,0.5)',
          line: '#3d4c5e',
          muted: '#909dad',
          text: '#f3f3f3',
          dim: '#b3b3b3',
          orange: '#ff5937',
          pick: 'rgba(0,48,156,0.4)',
        },
      },
      fontFamily: {
        manrope: ['Manrope', 'sans-serif'],
      },
      fontSize: {
        sm: ['14.667px', { lineHeight: '1.25rem' }],
      },
      backgroundImage: {
        maze: "url('../assets/images/bg-pattern-v2.png')",
      },
      backgroundSize: {
        maze: '558px 314px',
      },
      maxWidth: {
        loy: '1728px',
      },
    },
  },
  plugins: [],
};
