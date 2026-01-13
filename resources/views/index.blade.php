<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Coffee Brews and Notes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#F5EFEA] text-stone-800">
@include('components.navbar')
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
        <h1 class="text-2xl font-semibold tracking-tight">Coffee Brews</h1>
    </header>

    <!-- Stat pills -->
    <section class="mt-6 flex flex-wrap gap-4">
        <div class="flex items-center gap-3 rounded-full bg-white px-6 py-3 shadow-sm ring-1 ring-stone-200">
            <span class="text-sm text-stone-500">Total Brews</span>
                <span class="text-sm font-semibold">
                    {{$notes->count()}}
                </span>
            </div>

        <div class="flex items-center gap-3 rounded-full bg-white px-6 py-3 shadow-sm ring-1 ring-stone-200">
            <span class="text-sm text-stone-500">Avg Grind Size</span>
            <span class="text-sm font-semibold">
                {{$avgGrindSize}} clicks
            </span>
        </div>

        <div class="flex items-center gap-3 rounded-full bg-white px-6 py-3 shadow-sm ring-1 ring-stone-200">
            <span class="text-sm text-stone-500">Avg Amount</span>
            <span class="text-sm font-semibold">
                {{$avgAmount}} g
        </div>
    </section>

    <!-- Table card -->
    <section class="mt-8 rounded-2xl bg-white shadow-sm ring-1 ring-stone-200">
        <div class="overflow-x-auto">
            <table class="min-w-full border-separate border-spacing-0">
                <thead>
                <tr class="text-left text-sm text-stone-500">
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Title</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Type of Coffee</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Bean</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Grind Size</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Amount (g)</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Preparation Steps</th>
                    <th class="whitespace-nowrap px-6 py-5 font-medium">Notes</th>
                    <th class="w-12 px-6 py-5"></th>
                </tr>
                </thead>

                <tbody class="text-sm">
                @foreach ($notes as $note)
                    @include('components.coffee-note', ['note' => $note])
                @endforeach
                <tr class="border-t border-stone-100">
                    <td colspan="7" class="px-6 py-5">
                        <a
                            href="/add-note"
                            class="inline-flex items-center gap-3 rounded-xl px-3 py-2 text-stone-600 hover:bg-stone-50"
                        >
                    <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-stone-50 ring-1 ring-stone-200">
                      <svg viewBox="0 0 24 24" class="h-5 w-5 text-stone-600" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 5v14M5 12h14" />
                      </svg>
                    </span>
                            <span class="font-medium">Add Coffee Note</span>
                        </a>
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

            <a href="/journal-entry/add" type="button" class="inline-flex items-center gap-2 rounded-xl px-3 py-2 text-sm font-medium text-stone-600 hover:bg-stone-50">
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 5v14M5 12h14" />
                </svg>
                Add Journal Entry
            </a>
        </div>

        <div class="mt-6 space-y-4">
            @foreach($journalEntries as $journalEntry)
                @include('components.journal-entry', ['note' => $note])
            @endforeach
        </div>
    </section>
</div>
</body>
</html>
