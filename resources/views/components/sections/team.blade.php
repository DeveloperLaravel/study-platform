@props(['team'])

<section id="team" class="container">
    <x-section-title
        title="Our Team"
        subtitle="Meet the greatest team"
    />

    <div class="row">
        @foreach ($team as $member)
            <div class="col-md-3 text-center">
                <img
                    src="{{ asset($member['image']) }}"
                    class="img-responsive"
                    style="height:280px;width:100%;object-fit:cover"
                >

                <h4>{{ $member['name'] }}</h4>
                <p>{{ $member['role'] }}</p>
            </div>
        @endforeach
    </div>
</section>
