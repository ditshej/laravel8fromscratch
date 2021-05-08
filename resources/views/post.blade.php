<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <p>
            <a href="#">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/posts">Go Back</a>
</x-layout>
