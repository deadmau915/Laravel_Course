@extends('template')

@section('content')
<div class="bg-gray-900 px-20 py-16 rounded-lg-mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programming</span>
    <h1 class="text-3xl text-white mt-4">Blog</h1>
    <p class="text-sm text-gray-400 mt-2">Web development project to professionals</p>
    <img src="{{ asset('images/dev.png') }}" class="absolute -right-20 -bottom-20 opacity-20">
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-gray-900">Technical content</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @forelse($posts as $post)
        <a href="{{ route('post', $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
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