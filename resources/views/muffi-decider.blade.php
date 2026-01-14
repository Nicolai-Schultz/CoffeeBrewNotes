<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Choice Roller</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-[#F5F1E8] text-stone-900">
@include('components.navbar')
<!-- Page -->
<main class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-10">
    <!-- Header -->
    <div class="flex flex-col gap-2">
        <div class="inline-flex items-center gap-2 text-xs font-medium text-stone-600">
            <span class="rounded-full border border-[#E7DEC9] bg-white/60 px-2 py-1">Utility</span>
            <span class="text-stone-400">/</span>
            <span class="rounded-full border border-[#E7DEC9] bg-white/60 px-2 py-1">Choice Roller</span>
        </div>
        <div class="flex items-end justify-between gap-6">
            <div>
                <h1 class="text-2xl sm:text-3xl font-semibold tracking-tight">Choice Roller</h1>
                <p class="mt-2 text-sm text-stone-600 max-w-2xl">
                    Type two options, then “roll” to display a result. (UI only — no logic implemented.)
                </p>
            </div>

            <div class="hidden sm:flex items-center gap-2">
                <button type="reset" form="muffiRollForm" class="inline-flex items-center justify-center rounded-xl border border-[#E7DEC9] bg-white/70 px-3 py-2 text-sm font-medium text-stone-800 shadow-sm hover:bg-white/90 active:scale-[0.99] transition">
                    Reset
                </button>
                <button type="submit" form="muffiRollForm" class="inline-flex items-center justify-center rounded-xl bg-stone-900 px-3 py-2 text-sm font-medium text-[#F5F1E8] shadow-sm hover:bg-stone-800 active:scale-[0.99] transition">
                    Roll
                </button>
            </div>
        </div>
    </div>

    <!-- Content grid -->
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-5 gap-6">
        <!-- Left: inputs -->
        <section class="lg:col-span-3">
            <div class="rounded-2xl border border-[#E7DEC9] bg-white/60 shadow-sm">
                <div class="p-5 sm:p-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-semibold text-stone-900">Inputs</h2>
                        <span class="text-xs text-stone-500">Two choices</span>
                    </div>

                    <form id="muffiRollForm" method="POST" action="/muffi-decider/roll">
                        @csrf
                    <div class="mt-5 space-y-4">
                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-2">Choice A</label>
                            <div class="flex items-center gap-2">
                                <input
                                    type="text"
                                    name="choice_a"
                                    value="{{ old('choice_a') }}"
                                    placeholder="e.g. Espresso"
                                    class="w-full rounded-xl border border-[#E7DEC9] bg-[#F5F1E8] px-4 py-3 text-sm text-stone-900 placeholder:text-stone-400
                           shadow-sm focus:outline-none focus:ring-2 focus:ring-stone-900/10 focus:border-stone-400 transition"
                                />
                                <span class="hidden sm:inline-flex items-center rounded-xl border border-[#E7DEC9] bg-white/70 px-3 py-2 text-xs font-medium text-stone-700">
                    A
                  </span>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-stone-700 mb-2">Choice B</label>
                            <div class="flex items-center gap-2">
                                <input
                                    type="text"
                                    name="choice_b"
                                    value="{{ old('choice_b') }}"
                                    placeholder="e.g. Filter"
                                    class="w-full rounded-xl border border-[#E7DEC9] bg-[#F5F1E8] px-4 py-3 text-sm text-stone-900 placeholder:text-stone-400
                           shadow-sm focus:outline-none focus:ring-2 focus:ring-stone-900/10 focus:border-stone-400 transition"
                                />
                                <span class="hidden sm:inline-flex items-center rounded-xl border border-[#E7DEC9] bg-white/70 px-3 py-2 text-xs font-medium text-stone-700">
                    B
                  </span>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile actions -->
                    <div class="mt-6 flex sm:hidden items-center gap-2">
                        <button type="reset" form="muffiRollForm" class="w-1/2 inline-flex items-center justify-center rounded-xl border border-[#E7DEC9] bg-white/70 px-3 py-3 text-sm font-medium text-stone-800 shadow-sm hover:bg-white/90 active:scale-[0.99] transition">
                            Reset
                        </button>
                        <button type="button" form="muffiRollForm" class="w-1/2 inline-flex items-center justify-center rounded-xl bg-stone-900 px-3 py-3 text-sm font-medium text-[#F5F1E8] shadow-sm hover:bg-stone-800 active:scale-[0.99] transition">
                            Roll
                        </button>
                    </div>
                    </form>

                </div>

                <div class="border-t border-[#E7DEC9] px-5 sm:px-6 py-4">
                    <div class="flex items-start gap-3">
                        <div class="mt-0.5 h-9 w-9 rounded-xl border border-[#E7DEC9] bg-white/70 shadow-sm flex items-center justify-center">
                            <span class="text-sm text-stone-700">🎲</span>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-stone-900">How it will work</p>
                            <p class="mt-1 text-sm text-stone-600">
                                Press “Roll” to choose between A and B. This page is intentionally static — no logic yet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Right: result -->
        <aside class="lg:col-span-2">
            <div class="rounded-2xl border border-[#E7DEC9] bg-white/60 shadow-sm overflow-hidden">
                <div class="p-5 sm:p-6">
                    <div class="flex items-center justify-between">
                        <h2 class="text-sm font-semibold text-stone-900">Outcome</h2>
                        <span class="text-xs text-stone-500">Display only</span>
                    </div>

                    <!-- “Result card” -->
                    <div class="mt-5 rounded-2xl border border-[#E7DEC9] bg-[#F5F1E8] shadow-sm">
                        <div class="p-5">
                            <div class="flex items-center justify-between">
                                <span class="text-xs font-medium text-stone-600">Selected</span>
                                <span class="text-xs text-stone-500">—</span>
                            </div>

                            <div class="mt-4">
                                <div class="text-3xl font-semibold tracking-tight text-stone-900">
                                    {{$result}}
                                </div>
                            </div>

                            <div class="mt-5 flex flex-wrap gap-2">
                  <span class="inline-flex items-center rounded-full border border-[#E7DEC9] bg-white/70 px-3 py-1 text-xs font-medium text-stone-700">
                    Choice A
                  </span>
                                <span class="inline-flex items-center rounded-full border border-[#E7DEC9] bg-white/70 px-3 py-1 text-xs font-medium text-stone-700">
                    50 / 50
                  </span>
                            </div>
                        </div>
                    </div>

                    <!-- Subtle “history” placeholder -->
                    <div class="mt-6">
                        <div class="flex items-center justify-between">
                            <p class="text-xs font-medium text-stone-600">Recent rolls</p>
                            <p class="text-xs text-stone-500">static</p>
                        </div>

                        <div class="mt-3 space-y-2">
                            <div class="flex items-center justify-between rounded-xl border border-[#E7DEC9] bg-white/60 px-4 py-3">
                                <div class="text-sm text-stone-800">Filter</div>
                                <div class="text-xs text-stone-500">Today</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-[#E7DEC9] px-5 sm:px-6 py-4">
                    <p class="text-xs text-stone-500">
                        Tip: Keep the outcome panel visible so the UI feels “app-like” even before logic is wired.
                    </p>
                </div>
            </div>
        </aside>
    </div>
    <div class="mt-6">
        <a href="/coffee-notes"
           class="inline-flex h-9 items-center gap-2 rounded-xl bg-white px-3 shadow-sm ring-1 ring-stone-200 text-sm font-medium text-stone-700 hover:bg-stone-50">
            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" />
            </svg>
            Back
        </a>
    </div>

    <!-- Footer (subtle) -->
    <footer class="mt-10 text-xs text-stone-500">
        <div class="flex items-center justify-between border-t border-[#E7DEC9] pt-6">
            <span>coffeeBrewNotes</span>
            <span class="opacity-80">Beige UI · Tailwind</span>
        </div>
    </footer>
</main>
</body>
</html>
