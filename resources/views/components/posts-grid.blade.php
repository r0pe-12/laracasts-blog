@props([
    /** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] */
    'posts'
])

<x-post-feature :post="$posts->first()"/>

<div class="lg:grid lg:grid-cols-6">
    @foreach($posts->skip(1) as $post)
        <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>
    @endforeach
</div>
