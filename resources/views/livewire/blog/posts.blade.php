<div>
    @if ($posts->count())
        <div class="container mx-auto md:flex grid gap-5 my-24" id="blog">
            @foreach ($posts as $post)
                <div class="card card-side bg-base-100 shadow-xl w-full">
                    <figure><img alt="Movie" class="h-52" src="https://th.bing.com/th/id/OIP.kAXZZ7cOT-HZGga00cUm-QHaE7?pid=ImgDet&rs=1" /></figure>
                    <div class="card-body">
                        <h2 class="card-title">{{ $post->title }}</h2>
                        <p>{!! $post->content !!}</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary">Ler mais</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $posts->links('components.simple-tailwind', data: ['scrollTo' => false]) }}
    @endif
</div>
