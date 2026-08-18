import { defineConfig } from 'vite';

export default defineConfig({
  base: './',
  publicDir: false,
  experimental: {
    renderBuiltUrl(filename) {
      return './' + filename.replace(/^\//, '');
    },
  },
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    rollupOptions: {
      input: 'src/js/app.js',
      output: {
        entryFileNames: 'app-v9.js',
        assetFileNames: 'app-v9[extname]',
      },
    },
  },
});
