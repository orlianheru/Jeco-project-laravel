/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'custom-black': '#0a0a0a',  // Warna hitam yang lebih pekat
        'custom-gray': '#737373',   // Warna abu-abu kustom
        'custom-white': '#f5f5f5',  // Warna putih dengan sedikit abu
        'custom-blue': '#1e40af',   // Biru tua
        'custom-red': '#ef4444',    // Merah terang
      },
    },
  },
  plugins: [],
}
