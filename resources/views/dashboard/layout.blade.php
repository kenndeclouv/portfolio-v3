<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | {{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                    colors: {
                        black: '#000000',
                        white: '#ffffff',
                        gray: {
                            50: '#f9fafb',
                            100: '#f3f4f6',
                            200: '#e5e7eb',
                            300: '#d1d5db',
                            400: '#9ca3af',
                            500: '#6b7280',
                            600: '#4b5563',
                            700: '#374151',
                            800: '#1f2937',
                            900: '#111827',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #000;
            color: #fff;
        }

        /* Ultra minimal scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #000;
        }

        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        ::selection {
            background: #fff;
            color: #000;
        }
    </style>
</head>

<body class="bg-black text-white min-h-screen flex flex-col font-light">

    @if (session('dashboard_authenticated'))
        <nav class="border-b border-neutral-800 bg-black/50 backdrop-blur-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center space-x-8">
                        <a href="{{ route('dashboard.index') }}"
                            class="text-lg font-semibold tracking-tight text-white">
                            Dashboard
                        </a>
                        <div class="hidden md:flex items-baseline space-x-1">
                            <a href="{{ route('dashboard.index') }}"
                                class="px-3 py-2 text-sm transition-colors rounded-full {{ request()->routeIs('dashboard.index') ? 'text-white bg-white/10' : 'text-neutral-500 hover:text-white hover:bg-neutral-900' }}">Projects</a>
                            <a href="{{ route('dashboard.create') }}"
                                class="px-3 py-2 text-sm transition-colors rounded-full {{ request()->routeIs('dashboard.create') ? 'text-white bg-white/10' : 'text-neutral-500 hover:text-white hover:bg-neutral-900' }}">New
                                Project</a>
                        </div>
                    </div>
                    <div>
                        <form action="{{ route('dashboard.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="text-sm text-neutral-500 hover:text-white transition-colors">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endif

    <main class="flex-grow container mx-auto px-4 py-12 max-w-6xl">
        @if (session('success'))
            <div
                class="mb-8 p-4 border border-neutral-800 bg-neutral-900/30 text-sm text-neutral-300 flex items-center justify-between rounded-xl">
                <span>{{ session('success') }}</span>
                <i class="fas fa-check text-neutral-500"></i>
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-8 p-4 border border-red-900/30 bg-red-900/10 text-sm text-red-400 rounded-xl">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="border-t border-neutral-900 mt-auto py-8">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p class="text-xs text-neutral-600 uppercase tracking-widest">
                Protected Area
            </p>
        </div>
    </footer>

</body>

</html>
