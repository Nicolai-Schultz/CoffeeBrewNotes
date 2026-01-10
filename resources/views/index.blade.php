<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Brew Journal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#F5EFEA] text-stone-800">
<div class="mx-auto max-w-6xl px-6 py-10">
    <!-- Header -->
    <header class="flex items-center gap-3">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white shadow-sm ring-1 ring-stone-200">
          <!-- cup icon (simple) -->
          <svg viewBox="0 0 24 24" class="h-5 w-5 text-stone-700" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M7 8h10v7a4 4 0 0 1-4 4H9a4 4 0 0 1-4-4V8z" />
            <path d="M17 10h2a2 2 0 0 1 0 4h-2" />
            <path d="M7 21h10" />
            <path d="M9 3v2M12 3v2M15 3v2" />
          </svg>
        </span>
        <h1 class="text-2xl font-semibold tracking-tight">Coffee Brew Journal</h1>
    </header>

    <!-- Stat pills -->
    <section class="mt-6 flex flex-wrap gap-4">
        <div class="flex items-center gap-3 rounded-full bg-white px-6 py-3 shadow-sm ring-1 ring-stone-200">
            <span class="text-sm text-stone-500">Total Brews</span>
            <span class="text-sm font-semibold">3</span>
        </div>

        <div class="flex items-center gap-3 rounded-full bg-white px-6 py-3 shadow-sm ring-1 ring-stone-200">
            <span class="text-sm text-stone-500">Avg Grind Size</span>
            <span class="text-sm font-semibold">44.0</span>
        </div>

        <div class="flex items-center gap-3 rounded-full bg-white px-6 py-3 shadow-sm ring-1 ring-stone-200">
            <span class="text-sm text-stone-500">Avg Amount</span>
            <span class="text-sm font-semibold">17.0g</span>
        </div>
    </section>

    <!-- Table card -->
    <section class="mt-8 rounded-2xl bg-white shadow-sm ring-1 ring-stone-200">
        <div class="overflow-x-auto">
            <table class="min-w-full border-separate border-spacing-0">
                <thead>
                <tr class="text-left text-sm text-stone-500">
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Grind Size</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Bean</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Amount (g)</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Water Temp (°C)</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Brew Time</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Notes</th>
                    <th class="w-12 px-6 py-5"></th>
                </tr>
                </thead>

                <tbody class="text-sm">
                <tr class="border-t border-stone-100">
                    <td class="px-6 py-5 font-medium text-stone-700">44</td>
                    <td class="px-6 py-5">Strong Roast Bean</td>
                    <td class="px-6 py-5">18</td>
                    <td class="px-6 py-5">93</td>
                    <td class="px-6 py-5">3:30</td>
                    <td class="px-6 py-5 text-stone-600">Balanced, slightly bitter</td>
                    <td class="px-6 py-5">
                        <button
                            type="button"
                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-stone-500 hover:bg-stone-50 hover:text-stone-700"
                            aria-label="Delete"
                        >
                            <!-- trash -->
                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 6h18" />
                                <path d="M8 6V4h8v2" />
                                <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
                                <path d="M10 11v6M14 11v6" />
                            </svg>
                        </button>
                    </td>
                </tr>

                <tr class="border-t border-stone-100">
                    <td class="px-6 py-5 font-medium text-stone-700">42</td>
                    <td class="px-6 py-5">Light Roast Ethiopian</td>
                    <td class="px-6 py-5">16</td>
                    <td class="px-6 py-5">91</td>
                    <td class="px-6 py-5">3:00</td>
                    <td class="px-6 py-5 text-stone-600">Fruity, floral notes</td>
                    <td class="px-6 py-5">
                        <button
                            type="button"
                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-stone-500 hover:bg-stone-50 hover:text-stone-700"
                            aria-label="Delete"
                        >
                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 6h18" />
                                <path d="M8 6V4h8v2" />
                                <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
                                <path d="M10 11v6M14 11v6" />
                            </svg>
                        </button>
                    </td>
                </tr>

                <tr class="border-t border-stone-100">
                    <td class="px-6 py-5 font-medium text-stone-700">46</td>
                    <td class="px-6 py-5">Medium Roast Colombian</td>
                    <td class="px-6 py-5">17</td>
                    <td class="px-6 py-5">92</td>
                    <td class="px-6 py-5">3:15</td>
                    <td class="px-6 py-5 text-stone-600">Smooth, chocolatey</td>
                    <td class="px-6 py-5">
                        <button
                            type="button"
                            class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-stone-500 hover:bg-stone-50 hover:text-stone-700"
                            aria-label="Delete"
                        >
                            <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 6h18" />
                                <path d="M8 6V4h8v2" />
                                <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6" />
                                <path d="M10 11v6M14 11v6" />
                            </svg>
                        </button>
                    </td>
                </tr>

                <!-- Add note row -->
                <tr class="border-t border-stone-100">
                    <td colspan="7" class="px-6 py-5">
                        <button
                            type="button"
                            class="inline-flex items-center gap-3 rounded-xl px-3 py-2 text-stone-600 hover:bg-stone-50"
                        >
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-stone-50 ring-1 ring-stone-200">
                      <svg viewBox="0 0 24 24" class="h-5 w-5 text-stone-600" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 5v14M5 12h14" />
                      </svg>
                    </span>
                            <span class="font-medium">Add Coffee Note</span>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="px-6 pb-6"></div>
    </section>

    <!-- Brew Journal cards -->
    <section class="mt-10 rounded-2xl bg-white p-6 shadow-sm ring-1 ring-stone-200">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold tracking-tight">Brew Journal</h2>

            <button type="button" class="inline-flex items-center gap-2 rounded-xl px-3 py-2 text-sm font-medium text-stone-600 hover:bg-stone-50">
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                Add Journal Entry
            </button>
        </div>

        <div class="mt-6 space-y-4">
            <!-- Entry 1 -->
            <article class="rounded-2xl border border-stone-200 bg-white p-5 shadow-[0_1px_0_rgba(0,0,0,0.02)]">
                <div class="flex items-center justify-between gap-4">
                    <div class="min-w-0">
                        <h3 class="text-base font-semibold">Perfect Morning Brew</h3>

                        <div class="mt-3 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-stone-500">
                            <span>Strong Roast Bean - 44 - 18g</span>

                            <span class="inline-flex items-center gap-2">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M8 3v2M16 3v2" />
                      <path d="M4 7h16v14H4z" />
                      <path d="M4 11h16" />
                    </svg>
                    Jan 9, 2026
                  </span>
                        </div>
                    </div>

                    <div class="flex shrink-0 items-center">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl text-stone-400 hover:bg-stone-50">
                  <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                  </svg>
                </span>
                    </div>
                </div>
            </article>

            <!-- Entry 2 -->
            <article class="rounded-2xl border border-stone-200 bg-white p-5 shadow-[0_1px_0_rgba(0,0,0,0.02)]">
                <div class="flex items-center justify-between gap-4">
                    <div class="min-w-0">
                        <h3 class="text-base font-semibold">Ethiopian Light Roast Experiment</h3>

                        <div class="mt-3 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-stone-500">
                            <span>Light Roast Ethiopian - 42 - 16g</span>

                            <span class="inline-flex items-center gap-2">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M8 3v2M16 3v2" />
                      <path d="M4 7h16v14H4z" />
                      <path d="M4 11h16" />
                    </svg>
                    Jan 8, 2026
                  </span>
                        </div>
                    </div>

                    <div class="flex shrink-0 items-center">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl text-stone-400 hover:bg-stone-50">
                  <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 18l6-6-6-6" />
                  </svg>
                </span>
                    </div>
                </div>
            </article>
        </div>
    </section>
</div>
</body>
</html>
