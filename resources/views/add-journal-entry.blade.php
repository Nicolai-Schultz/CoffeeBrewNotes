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
        <h1 class="text-2xl font-semibold tracking-tight">Create Journal Entry</h1>
    </header>

    <!-- Form card -->
    <section class="rounded-2xl bg-white shadow-sm ring-1 ring-stone-200 p-8">
        <form method="POST" action="/journal-entry/add" class="space-y-6">
            @csrf
            <!-- Title of entry -->
            <div>
                <label class="block text-sm font-medium text-stone-600 mb-1">
                    Title
                </label>
                <input
                    name="title"
                    type="text"
                    placeholder="Day 17 - Espresso with Ethiopian Beans"
                    class="w-full rounded-xl border border-stone-200 px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                />
            </div>

            <div>
                <label class="block text-sm font-medium text-stone-600 mb-1">
                    Description
                </label>
                <textarea
                    name="Description"
                    rows="4"
                    placeholder="Balanced cup with light acidity and floral notes…"
                    class="w-full rounded-xl border border-stone-200 px-4 py-3 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                ></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-stone-600 mb-1">
                    Associated coffee note
                </label>
                <select
                    name="coffee_note_id"
                    class="w-full rounded-xl border border-stone-200 bg-white px-4 py-2.5 text-sm focus:border-stone-400 focus:outline-none focus:ring-2 focus:ring-stone-200"
                >
                    <option value="" selected disabled>Select a coffee note…</option>
                    @foreach ($notes as $note)
                        <option value="{{ $note->id }}">{{ $note->id }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
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
                    Create Journal Entry
                </button>
            </div>

        </form>
    </section>
</div>
</body>
</html>
