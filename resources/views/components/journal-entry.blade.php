@php use App\Models\CoffeeNote; @endphp
<article class="rounded-2xl border border-stone-200 bg-white p-5 shadow-[0_1px_0_rgba(0,0,0,0.02)]">
    <div class="flex items-center justify-between gap-4">
        <div class="min-w-0">
            <h3 class="text-base font-semibold">{{$journalEntry->title}}</h3>

            <div class="mt-3 flex flex-wrap items-center gap-x-4 gap-y-2 text-sm text-stone-500">
                <span>{{$journalEntry->description}}</span>

                <span class="inline-flex items-center gap-2">
                    <svg viewBox="0 0 24 24" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M8 3v2M16 3v2"/>
                      <path d="M4 7h16v14H4z"/>
                      <path d="M4 11h16"/>
                    </svg>
                    @php
                        $id = $journalEntry->coffee_note_id;
                        // use coffeenote id to display coffeenote title
                        $coffeeNoteTitle = CoffeeNote::find($id)->title ?? 'No title found';
                    @endphp
                    Refers to Coffee Note:  {{$coffeeNoteTitle}}
                </span>
            </div>
        </div>

        <div class="flex shrink-0 items-center">
    <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl text-stone-400 hover:bg-stone-50">
      <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
        <path d="M9 18l6-6-6-6"/>
      </svg>
    </span>
        </div>
    </div>
</article>
