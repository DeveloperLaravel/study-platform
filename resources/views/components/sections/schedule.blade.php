@props(['events'])

<section id="schedule" class="container">
    <x-section-title
        title="Events Schedule"
        subtitle="Check out the event details"
    />

    <ul class="timeline">
        @foreach ($events as $event)
            <li class="{{ $loop->odd ? 'timeline-inverted' : '' }}">
                <div class="timeline-badge">
                    <i class="fa fa-circle"></i>
                </div>

                <div class="timeline-panel">
                    <h4>{{ $event['title'] }}</h4>

                    <div class="row">
                        <div class="col-md-6">
                            {{ $event['description'] }}
                        </div>

                        <div class="col-md-6">
                            <em>Venue: {{ $event['venue'] }}</em><br>
                            <em>Seats: {{ $event['seats'] }}</em><br>
                            <em>Ticket: ${{ $event['price'] }}</em><br>
                            <em>Date: {{ $event['date'] }}</em>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</section>
