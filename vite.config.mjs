import { defineConfig } from "vite";
import { resolve } from "node:path";

import liveReload from "vite-plugin-live-reload";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  plugins: [
    liveReload(["resources/views/**/*", "resources/js/**/*"]),
    tailwindcss(),
  ],

  publicDir: false,

  build: {
    outDir: "public/dist",

    emptyOutDir: true,

    manifest: true,

    rollupOptions: {
      input: resolve(__dirname, "resources/js/app.js"),
    },
  },

  server: {
    host: true,
    hmr: {
      host: "localhost",
    },
  },
});
