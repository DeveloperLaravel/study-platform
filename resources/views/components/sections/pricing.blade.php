@props(['plans'])

<section id="prices" class="container">
    <x-section-title
        title="Pricing"
        subtitle="Details of our reasonable pricing"
    />

    <div class="row">
        @foreach ($plans as $plan)
            <div class="col-md-4">
                <div class="pricing-table text-center">
                    <h3>{{ $plan['name'] }}</h3>
                    <h4>${{ $plan['price'] }}<span>/Day</span></h4>

                    <ul>
                        <li>{{ $plan['seats'] }} Seats</li>
                        <li>{{ $plan['hotel'] }}</li>
                        <li>Gifts</li>
                    </ul>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
