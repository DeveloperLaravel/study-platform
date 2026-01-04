@props(['posts'])

<section id="blog" class="container">
    <x-section-title
        title="Blog"
        subtitle="Awesome news and articles from us"
    />

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-4 blog">
                <h2 class="blog-head">{{ $post['title'] }}</h2>

                <h4>
                    Posted by {{ $post['author'] }}
                </h4>

                <img
                    src="{{ asset($post['image']) }}"
                    class="img-responsive"
                    style="height:250px;width:100%;object-fit:cover"
                >

                <p>{{ $post['excerpt'] }}</p>

                <a href="#" class="btn btn-info">Read More</a>
            </div>
        @endforeach
    </div>
</section>
