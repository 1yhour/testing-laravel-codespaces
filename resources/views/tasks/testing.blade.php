<x-layout>
    <div class="w-full max-w-md bg-white border border-black p-6">
        <div class="mb-8">
            <h2 class="text-xl font-bold uppercase tracking-wider mb-6 text-center border-b border-black pb-4">Tasks</h2>
        </div>
        
        <form action="{{ route('task.storeTask') }}" method="POST" class="flex flex-col gap-4 mb-8">
            @csrf
            <div>
                <input type="text" name="title" class="w-full border border-black p-3 text-sm focus:outline-none" placeholder="Enter Task" required autocomplete="off">
            </div>
            <label class="flex items-center gap-3 text-sm cursor-pointer select-none">
                <input type="checkbox" name="is_completed" class="w-4 h-4 border border-black appearance-none checked:bg-black rounded-none"> 
                <span>Completed</span>
            </label>
            <button type="submit" class="w-full bg-black text-white p-3 text-sm font-bold uppercase tracking-widest mt-2 border border-black">Add</button>
        </form>

        @if($tasks->count() > 0)
            <ul class="flex flex-col gap-4">
                @foreach($tasks as $task)
                    <li class="flex items-start justify-between border border-black p-4">
                        <div class="flex flex-col">
                            <a href="{{ route('task.showTask', $task->id) }}" class="text-base font-bold underline hover:text-gray-700 {{ $task->is_completed ? 'line-through text-gray-500' : 'text-black' }}">
                                {{ $task->title }}
                            </a>
                            <span class="text-xs uppercase mt-1 text-gray-500">
                                {{ $task->is_completed ? 'Done' : 'Pending' }}
                            </span>
                        </div>

                        <form action="{{ route('task.deleteTask', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-xs font-bold uppercase tracking-wider underline text-black">Del</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="text-center text-sm border border-black p-4 text-black">
                No tasks yet.
            </div>
        @endif
    </div>
</x-layout>