<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Coffee Note</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#F5EFEA] text-stone-800">
<div class="mx-auto max-w-3xl px-6 py-10">

    <!-- Header -->
    <header class="flex items-center gap-3 mb-8">
        <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-white shadow-sm ring-1 ring-stone-200">
            <svg viewBox="0 0 24 24" class="h-5 w-5 text-stone-700" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M7 8h10v7a4 4 0 0 1-4 4H9a4 4 0 0 1-4-4V8z" />
                <path d="M17 10h2a2 2 0 0 1 0 4h-2" />
                <path d="M7 21h10" />
            </svg>
        </span>
        <h1 class="text-2xl font-semibold tracking-tight">Create Coffee Note</h1>
    </header>

    <!-- Form card -->
    <section class="rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 p-8">
        <form method="POST" action="/add-note" class="space-y-6">
            @csrf

            <!-- Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <!-- Title -->
                <div>
                    <label class="block text-sm font-medium text-stone-600 mb-1">
                        Title
                    </label>
                    <input
                        name="title"
                        type="text"
                        placeholder="Espresso, Ethiopian Beans..."
                        class="w-full rounded-xl border border-stone-200 px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                    />
                </div>
                <!-- Type of Coffee -->
                <div>
                    <label class="block text-sm font-medium text-stone-600 mb-1">
                        Type of Coffee
                    </label>
                    <input
                        name="type"
                        type="text"
                        placeholder="Espresso..."
                        class="w-full rounded-xl border border-stone-200 px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                    />
                </div>

                <!-- Bean -->
                <div>
                    <label class="block text-sm font-medium text-stone-600 mb-1">
                        Bean
                    </label>
                    <input
                        name="bean"
                        type="text"
                        placeholder="Ethiopian Light Roast"
                        class="w-full rounded-xl border border-stone-200 px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                    />
                </div>

                <!-- Grind Size -->
                <div>
                    <label class="block text-sm font-medium text-stone-600 mb-1">
                        Grind Size
                    </label>
                    <input
                        name="grind_size"
                        type="number"
                        placeholder="44"
                        class="w-full rounded-xl border border-stone-200 px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                    />
                </div>

                <!-- Amount -->
                <div>
                    <label class="block text-sm font-medium text-stone-600 mb-1">
                        Amount (g)
                    </label>
                    <input
                        name="amount"
                        type="number"
                        placeholder="18"
                        class="w-full rounded-xl border border-stone-200 px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                    />
                </div>
            </div>

            <!-- Preparation Steps -->
            <div>
                <label class="block text-sm font-medium text-stone-600 mb-1">
                    Preparation Steps
                </label>
                <textarea
                    name="preparation_steps"
                    rows="1"
                    placeholder="Used whiskers, flattened with leveler and stamped..."
                    class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                ></textarea>
            </div>

            <!-- Notes -->
            <div>
                <label class="block text-sm font-medium text-stone-600 mb-1">
                    Extraction Ratio and Yield Time.
                </label>
                <textarea
                    name="extraction_notes"
                    rows="4"
                    placeholder="1:2 ratio, yield time 30 seconds; perfect cup..."
                    class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                ></textarea>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-end gap-4 pt-4">
                <button
                    type="button"
                    class="rounded-xl px-4 py-2.5 text-sm font-medium text-stone-600 hover:bg-stone-100"
                >
                    Cancel
                </button>

                <button
                    type="submit"
                    class="inline-flex items-center gap-2 rounded-xl bg-stone-800 px-5 py-2.5 text-sm font-medium text-white hover:bg-stone-700"
                >
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Create Coffee Note
                </button>
            </div>

        </form>
    </section>
    <div class="mt-6">
        <a href="/coffee-notes"
           class="inline-flex h-9 items-center gap-2 rounded-xl bg-white px-3 shadow-sm ring-1 ring-stone-200 text-sm font-medium text-stone-700 hover:bg-stone-50">
            <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M15 18l-6-6 6-6" />
            </svg>
            Back
        </a>
    </div>
</div>
</body>
</html>
