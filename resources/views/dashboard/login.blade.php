@extends('dashboard.layout')

@section('content')
    <div class="min-h-[70vh] flex flex-col items-center justify-center">
        <div class="w-full max-w-sm">
            <div class="mb-10 text-center">
                <h2 class="text-2xl font-light tracking-wide text-white">Enter Password</h2>
            </div>
            <form class="space-y-8" action="{{ route('dashboard.authenticate') }}" method="POST">
                @csrf
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" required
                        class="block w-full bg-neutral-900 border border-neutral-800 text-center text-white placeholder-neutral-700 focus:border-white focus:ring-0 transition-colors py-4 text-xl tracking-widest rounded-2xl"
                        placeholder="••••••••">
                </div>

                <div>
                    <button type="submit"
                        class="w-full group relative flex justify-center py-4 bg-white text-black text-sm font-semibold tracking-wide hover:bg-neutral-200 transition-colors rounded-2xl shadow-lg shadow-white/5">
                        Unlock
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
