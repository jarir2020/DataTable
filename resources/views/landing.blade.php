
@include('components.header')



<main>
    <section id="hero" class="smf">
        <h1>Welcome to Business Automation Limited</h1>
        <p>Your success is our priority. We offer cutting-edge solutions to elevate your business.</p>
    </section>


    <section id="highlights">
        <div class="slider">
            <div class="slide active">
                <img src="{{ asset('Photos/homepagesliders.jpg')}}" alt="Highlight 1 Image">
                <div class="caption">
                    <h3>Innovative IT Solutions</h3>
                    <p>Transform your business with our advanced IT solutions tailored to your needs.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ asset('Photos/homepagesliders2.jpg')}}" alt="Highlight 2 Image">
                <div class="caption">
                    <h3>Secure Cloud Services</h3>
                    <p>Ensure the safety of your data with our top-notch cloud computing solutions.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ asset('Photos/homepagesliders3.jpg')}}" alt="Highlight 3 Image">
                <div class="caption">
                    <h3>Expert IT Consulting</h3>
                    <p>Leverage our expertise to streamline your IT infrastructure and boost productivity.</p>
                </div>
            </div>
        </div>
        <div class="slider-nav">
            <button class="prev">&#10094;</button>
            <button class="next">&#10095;</button>
        </div>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a leading IT solutions provider with a passion for technology and a commitment to customer satisfaction. Our team of experts brings years of experience and a deep understanding of the latest trends in the tech industry. We partner with our clients to deliver customized solutions that help them achieve their business goals.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <div class="service-container">
            <div class="service-item">
                <img src="{{ asset('Photos/software.jpg')}}" alt="Service 1 Image">
                <h3>Custom Software Development</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/cloud computing.jpg')}}" alt="Service 2 Image">
                <h3>Cloud Computing</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/it consulting.jpeg')}}" alt="Service 3 Image">
                <h3>IT Consulting</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/remote-support.jpeg')}}" alt="Service 3 Image">
                <h3>Remort Support</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/cybersecurity.jpg')}}" alt="Service 4 Image">
                <h3>Cybersecurity</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/data analytics.jpg')}}" alt="Service 5 Image">
                <h3>Data Analytics</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/web design.jpg')}}" alt="Service 5 Image">
                <h3>Web Design</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/web development.jpg')}}" alt="Service 5 Image">
                <h3>Web Development</h3>
            </div>
            <div class="service-item">
                <img src="{{ asset('Photos/digital marketing.jpg')}}" alt="Service 5 Image">
                <h3>Digital Marketing</h3>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or would like to learn more about our services, please do not hesitate to contact us. We look forward to hearing from you!</p>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

</main>

@include('components.footer')
