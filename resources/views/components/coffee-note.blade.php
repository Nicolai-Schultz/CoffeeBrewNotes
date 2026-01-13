<!-- Place this inside for each loop and get information from the database and display -->
<tr class="border-t border-stone-100">
    <td class="px-6 py-5">{{$note->title}}</td>
    <td class="px-6 py-5">{{$note->type}}</td>
    <td class="px-6 py-5">{{$note->bean}}</td>
    <td class="px-6 py-5 font-medium text-stone-700">{{$note->grind_size}}</td>
    <td class="px-6 py-5">{{$note->amount}}</td>
    <td class="px-6 py-5">{{$note->preparation_steps}}</td>
    <td class="px-6 py-5 text-stone-600">{{$note->notes}}</td>
    <td class="px-6 py-5">
        <form method="POST" action="/delete-note/{{ $note->id }}" class="flex justify-end">
            @csrf
            @method('DELETE')
            <button
                type="submit"
                class="inline-flex h-9 w-9 items-center justify-center rounded-lg text-stone-500 hover:bg-stone-50 hover:text-stone-700"
                aria-label="Delete"
            >
                <!-- trash -->
                <svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 6h18"/>
                    <path d="M8 6V4h8v2"/>
                    <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/>
                    <path d="M10 11v6M14 11v6"/>
                </svg>
            </button>
        </form>
    </td>
</tr>
