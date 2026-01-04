<section id="contact" class="container">
    <x-section-title
        title="Contact Us"
        subtitle="We would love to hear from you"
    />

    <form method="POST" action="#">
        @csrf

        <input type="text" name="name" class="form-control" placeholder="Your Name">
        <br>
        <input type="email" name="email" class="form-control" placeholder="Email">
        <br>
        <textarea class="form-control" name="message" rows="5"></textarea>
        <br>

        <button class="btn btn-success">Send Message</button>
    </form>
</section>
