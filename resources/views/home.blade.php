<x-app-layout >

    <x-header.navbar />
    <x-header.hero />

    <x-sections.about />
    <x-sections.schedule :events="$events" />
    <x-sections.blog :posts="$posts" />
    <x-sections.pricing :plans="$plans" />
    <x-sections.team :team="$team" />
    <x-sections.testimonial :testimonials="$testimonials" />
    <x-sections.contact />

    <x-footer />

</x-app-layout>
