@extends('dashboard.layout')

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-2xl font-light text-white">
                {{ isset($project) ? 'Edit Project' : 'New Project' }}
            </h2>
            <a href="{{ route('dashboard.index') }}"
                class="text-sm text-neutral-500 hover:text-white transition-colors bg-neutral-900/50 px-4 py-2 rounded-full hover:bg-neutral-800">
                Cancel
            </a>
        </div>

        <form action="{{ isset($project) ? route('dashboard.update', $project->id) : route('dashboard.store') }}"
            method="POST" enctype="multipart/form-data" class="space-y-12">
            @csrf
            @if (isset($project))
                @method('PUT')
            @endif

            <!-- section -->
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Title</label>
                        <input type="text" name="title" value="{{ old('title', $project->title ?? '') }}"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl placeholder-neutral-700"
                            placeholder="Project Name" required>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Category</label>
                        <input type="text" name="category" value="{{ old('category', $project->category ?? '') }}"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl placeholder-neutral-700"
                            placeholder="Design, Web, etc." required>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Year</label>
                        <input type="number" name="year" value="{{ old('year', $project->year ?? date('Y')) }}"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl placeholder-neutral-700"
                            required>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Role</label>
                        <input type="text" name="as" value="{{ old('as', $project->as ?? '') }}"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl placeholder-neutral-700">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">External
                            Link</label>
                        <input type="url" name="link" value="{{ old('link', $project->link ?? '') }}"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl placeholder-neutral-700">
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Video Link</label>
                        <input type="text" name="video" value="{{ old('video', $project->video ?? '') }}"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl placeholder-neutral-700">
                    </div>
                </div>
            </div>

            <!-- section -->
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-2">
                        <label
                            class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Description</label>
                        <textarea name="description" rows="5"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white p-4 text-white focus:outline-none transition-colors rounded-xl resize-none text-sm">{{ old('description', $project->description ?? '') }}</textarea>
                    </div>
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Challenge</label>
                        <textarea name="challenge" rows="5"
                            class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white p-4 text-white focus:outline-none transition-colors rounded-xl resize-none text-sm">{{ old('challenge', $project->challenge ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- section -->
            <div class="border-t border-neutral-900 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="space-y-2">
                        <label class="block text-xs uppercase tracking-widest text-neutral-500 ml-1 mb-1">Theme</label>
                        <div class="relative">
                            <select name="theme"
                                class="w-full bg-neutral-900/30 border border-neutral-800 focus:border-white py-3 px-4 text-white focus:outline-none transition-colors rounded-xl appearance-none">
                                <option value="light-content" class="bg-black"
                                    {{ old('theme', $project->theme ?? '') == 'light-content' ? 'selected' : '' }}>Light
                                    Content</option>
                                <option value="dark-content" class="bg-black"
                                    {{ old('theme', $project->theme ?? '') == 'dark-content' ? 'selected' : '' }}>Dark
                                    Content</option>
                            </select>
                            <i
                                class="fas fa-chevron-down absolute right-4 top-4 text-neutral-500 text-xs pointer-events-none"></i>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3 pt-6 pl-2">
                        <input type="checkbox" name="show_in_home" id="show_in_home" value="1"
                            {{ old('show_in_home', $project->show_in_home ?? false) ? 'checked' : '' }}
                            class="w-5 h-5 bg-neutral-900 border-neutral-700 rounded-md text-white focus:ring-0 cursor-pointer">
                        <label for="show_in_home" class="text-sm text-neutral-400 cursor-pointer hover:text-white">Show in
                            Home</label>
                    </div>
                    <div class="flex items-center space-x-3 pt-6 pl-2">
                        <input type="checkbox" name="show_in_projects" id="show_in_projects" value="1"
                            {{ old('show_in_projects', $project->show_in_projects ?? false) ? 'checked' : '' }}
                            class="w-5 h-5 bg-neutral-900 border-neutral-700 rounded-md text-white focus:ring-0 cursor-pointer">
                        <label for="show_in_projects" class="text-sm text-neutral-400 cursor-pointer hover:text-white">Show
                            in Projects</label>
                    </div>
                </div>
            </div>

            <!-- section -->
            <div class="border-t border-neutral-900 pt-8">
                <h3 class="text-sm font-medium text-white mb-6">Media</h3>

                @php
                    $fileFields = [
                        'image' => 'Main Image',
                        'second_image' => 'Second Image',
                        'first_preview' => 'Preview 1',
                        'second_preview' => 'Preview 2',
                        'third_preview' => 'Preview 3',
                        'fourth_preview' => 'Preview 4',
                        'fifth_preview' => 'Preview 5',
                    ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-8">
                    @foreach ($fileFields as $field => $label)
                        <div class="space-y-2 group">
                            <label
                                class="block text-xs uppercase tracking-widest text-neutral-500 group-hover:text-white transition-colors ml-1">{{ $label }}</label>
                            <div
                                class="relative flex items-center justify-center border border-dashed border-neutral-800 hover:border-white transition-colors h-32 bg-neutral-900/20 rounded-2xl overflow-hidden">
                                @if (isset($project) && $project->$field)
                                    <img src="{{ Storage::url($project->$field) }}"
                                        class="absolute inset-0 w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <span
                                            class="text-xs text-white bg-black/50 px-3 py-1.5 rounded-full backdrop-blur-sm">Change
                                            File</span>
                                    </div>
                                @else
                                    <div class="text-center">
                                        <i
                                            class="fas fa-cloud-upload-alt text-neutral-600 group-hover:text-neutral-400 text-xl mb-2"></i>
                                        <span
                                            class="block text-xs text-neutral-600 group-hover:text-neutral-400">Upload</span>
                                    </div>
                                @endif
                                <input type="file" name="{{ $field }}"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="pt-12">
                <button type="submit"
                    class="w-full bg-white text-black font-semibold tracking-wide py-4 hover:bg-neutral-200 transition-colors rounded-2xl shadow-lg shadow-white/5">
                    {{ isset($project) ? 'Save Changes' : 'Create Project' }}
                </button>
            </div>
        </form>
    </div>
@endsection
