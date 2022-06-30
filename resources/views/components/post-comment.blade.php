@props(['comment'])

<article {{ $attributes->class(['flex bg-gray-100 p-6 rounded-xl border border-gray-300 space-x-4']) }}>
    <div class="flex-shrink-0">
        <img src="https://via.placeholder.com/100x100.png/280137?text=PHOTO" alt="user photo" class="rounded-xl"
             width="60">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->name }}</h3>
            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>
        <p>{!! $comment->body !!}</p>
    </div>
</article>
