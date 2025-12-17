<div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl p-6 shadow-lg overflow-hidden">
    <h1 class="text-2xl font-bold mb-2">
        Welcome, {{ $user?->name ?? 'Guest' }} 👋
    </h1>

    <p class="text-sm mb-4">{{ $message }}</p>

    ...
    {{ $newStudentsToday }}
    {{ $todayFees }}
</div>
