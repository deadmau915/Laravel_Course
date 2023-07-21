@extends('template')

@section('content')
<div>
    <!-- Destacado -->
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Technical content</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @forelse($posts as $post)
        <a href="" class="bg-gray-100 rounded-lg px-6 py-4">
            <p class="text-xs flex items-center gap-2">
                <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                <span class="text-lg text-gray-900 mt-2">{{ $post->created_at->format('d/m/Y') }}</span>
            </p>
            <h2>{{ $post->title }}</h2>
        </a>
        @empty
        <p class="text-xs flex items-center gap-2">
            <span class="text-gray-700 bg-gray-200 rounded-full px-2 py-1">Upps! There isn't available publications</span>
        </p>
        @endforelse
    </div>
    {{ $posts->links() }}
</div>
@endsection