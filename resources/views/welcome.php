 <main class="min-h-screen flex flex-col items-center justify-center px-4 py-12">
    <div class="max-w-4xl w-full text-center">
      <h1 class="text-4xl sm:text-5xl font-extrabold text-gray-800 mb-2">
        Welcome to <span class="text-black">Minimal</span>
      </h1>
      <p class="text-gray-600 text-lg sm:text-xl mb-10">
        A simple PHP framework for building elegant single-page apps using
        <strong>Tailwind</strong> and <strong>Alpine.js</strong>.
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition ring-1 ring-gray-200">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full">
            <span class="text-3xl">⚙️</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Minimal Setup</h3>
          <p class="text-sm text-gray-600">
            Start coding in minutes. Zero config, no bloat — just PHP, Tailwind, and Alpine.
          </p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition ring-1 ring-gray-200">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full">
            <span class="text-3xl">🚀</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Built for Speed</h3>
          <p class="text-sm text-gray-600">
            Lightweight by design. Perfect for SPAs, dashboards, and micro-tools.
          </p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition ring-1 ring-gray-200">
          <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full">
            <span class="text-3xl">🧠</span>
          </div>
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Intuitive Structure</h3>
          <p class="text-sm text-gray-600">
            Designed with clarity and purpose. Stay focused on the logic that matters.
          </p>
        </div>
      </div>
      <a href="https://github.com/viniciuscoutinh0/minimal-core" target="_blank"
         class="mt-10 inline-block px-6 py-3 text-sm font-medium bg-black text-white rounded-full shadow hover:bg-gray-800 transition">
        View on GitHub
      </a>
      <section class="mt-20 w-full">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">🔧 Alpine.js in Action</h2>
        <div class="bg-white p-6 rounded-xl shadow text-center max-w-xl mx-auto" x-data="{ open: false }">
          <p class="text-gray-700 mb-4">Click the button to toggle a simple component using Alpine.js</p>
          <button
            @click="open = !open"
            class="px-4 py-2 bg-black text-white rounded-full hover:bg-gray-800 transition"
          >
            Toggle Message
          </button>
          <div x-show="open" x-transition class="mt-4 text-green-600 font-medium">
            🎉 Alpine.js is working beautifully!
          </div>
        </div>
      </section>
    </div>
</main>
