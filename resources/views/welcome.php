<main
  class="min-h-screen bg-gray-100 flex flex-col items-center justify-center px-4 py-12"
>
  <div class="max-w-4xl w-full text-center">
    <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-800 mb-2">
      Bem-vindo ao <span class="text-black">Minimal</span>
    </h1>
    <p class="text-gray-600 text-lg sm:text-xl mb-10">
      Um framework PHP simples para construir aplicações de página única
      elegantes com
      <strong>Tailwind</strong> e <strong>Alpine.js</strong>.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
      <div
        class="bg-white p-6 rounded-lg transition ring-1 ring-gray-200 shadow-xs"
      >
        <div
          class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full"
        >
          <span class="text-3xl">⚙️</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">
          Configuração mínima
        </h3>
        <p class="text-sm text-gray-600">
          Comece a codar em minutos. Zero configuração, sem excessos — apenas
          PHP, Tailwind e Alpine.
        </p>
      </div>
      <div
        class="bg-white p-6 rounded-lg transition ring-1 ring-gray-200 shadow-xs"
      >
        <div
          class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full"
        >
          <span class="text-3xl">🚀</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">
          Feito para performance
        </h3>
        <p class="text-sm text-gray-600">
          Leve por natureza. Perfeito para SPAs, dashboards e ferramentas
          enxutas.
        </p>
      </div>
      <div
        class="bg-white p-6 rounded-lg transition ring-1 ring-gray-200 shadow-xs"
      >
        <div
          class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full"
        >
          <span class="text-3xl">🧠</span>
        </div>
        <h3 class="text-lg font-semibold text-gray-800 mb-2">
          Estrutura intuitiva
        </h3>
        <p class="text-sm text-gray-600">
          Projetado com clareza e propósito. Foque apenas na lógica que
          realmente importa.
        </p>
      </div>
    </div>
    <a
      href="https://github.com/viniciuscoutinh0/minimal-starter"
      target="_blank"
      rel="noopener noreferrer"
      class="mt-10 flex items-center gap-x-2 cursor-pointer px-6 py-3 text-sm font-medium bg-black text-white max-w-64 justify-center mx-auto duration-75 rounded-full shadow hover:bg-gray-800 transition [&>svg]:size-5 [&>svg]:shrink-0 [&>svg]:stroke-current"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="24"
        height="24"
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
      >
        <path
          d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"
        />
        <path d="M9 18c-4.51 2-5-2-7-2" />
      </svg>
      Ver no GitHub
    </a>
    <section class="mt-20 w-full">
      <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">
        Alpine.js em Ação
      </h2>
      <div
        class="bg-white p-6 rounded-xl shadow text-center max-w-xl mx-auto"
        x-data="{ open: false }"
      >
        <p class="text-gray-700 mb-4">
          Clique no botão para alternar um componente simples usando Alpine.js
        </p>
        <button
          @click="open = !open"
          class="px-4 py-2 bg-black cursor-pointer text-white rounded-full hover:bg-gray-800 transition"
        >
          Alternar Mensagem
        </button>
        <div x-show="open" x-transition class="mt-4 text-green-600 font-medium">
          🎉 Alpine.js está funcionando perfeitamente!
        </div>
      </div>
    </section>
  </div>
</main>
