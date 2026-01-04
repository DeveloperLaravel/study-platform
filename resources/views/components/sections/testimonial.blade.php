@props(['testimonials'])

<section id="testimonial" class="testimonial-area">
    <x-section-title
        title="Testimonial"
        subtitle="What they say about us"
        dark
    />

    <div id="testimonial-container" class="owl-carousel">
        @foreach ($testimonials as $t)
            <div class="testimonila-block text-center">
                <img
                    src="{{ asset($t['image']) }}"
                    class="selfshot"
                >

                <p>{{ $t['content'] }}</p>

                <strong>{{ $t['name'] }}</strong><br>
                <small>{{ $t['role'] }}</small>
            </div>
        @endforeach
    </div>
</section>
