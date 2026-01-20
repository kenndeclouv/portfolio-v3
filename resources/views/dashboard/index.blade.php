@extends('dashboard.layout')

@section('content')
    <div class="space-y-12">
        <div class="flex justify-between items-end border-b border-neutral-800 pb-6">
            <div>
                <h1 class="text-3xl font-light text-white tracking-tight">Projects</h1>
            </div>
            <a href="{{ route('dashboard.create') }}"
                class="text-sm border border-neutral-800 bg-neutral-900 text-white px-5 py-2.5 rounded-full hover:bg-white hover:text-black hover:border-white transition-all duration-300">
                + New Project
            </a>
        </div>

        @if ($projects->isEmpty())
            <div class="text-center py-32 bg-neutral-900/30 rounded-3xl border border-neutral-800/50">
                <p class="text-neutral-600 font-light">No projects yet.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                @foreach ($projects as $project)
                    <div class="group">
                        <div class="relative aspect-video bg-neutral-900 overflow-hidden mb-5 rounded-2xl">
                            @if ($project->first_preview)
                                <img src="{{ Storage::url($project->first_preview) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700">
                            @elseif($project->image)
                                <img src="{{ Storage::url($project->image) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-neutral-800">
                                    <span class="text-xs uppercase tracking-widest">No Image</span>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors"></div>

                            <a href="{{ route('dashboard.edit', $project->id) }}" class="absolute inset-0 z-10"></a>
                        </div>

                        <div class="flex justify-between items-start px-1">
                            <div class="space-y-1">
                                <h3 class="text-lg font-medium text-white group-hover:text-neutral-300 transition-colors">
                                    {{ $project->title }}</h3>
                                <p class="text-xs text-neutral-500 uppercase tracking-widest">{{ $project->category }} —
                                    {{ $project->year }}</p>
                            </div>
                            <div class="flex space-x-3 opacity-0 group-hover:opacity-100 transition-opacity z-20">
                                <form action="{{ route('dashboard.destroy', $project->id) }}" method="POST" class="inline"
                                    onsubmit="return confirm('Delete?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-8 h-8 flex items-center justify-center rounded-full bg-neutral-900 hover:bg-red-500/10 hover:text-red-500 text-neutral-400 transition-colors">
                                        <i class="fas fa-trash text-xs"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
