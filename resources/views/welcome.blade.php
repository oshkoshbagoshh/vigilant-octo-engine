@extends('layouts.app')
@section('content')


    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">Business Name or Tagline</h1>
                <h2 class="subtitle">
                    This is a template that is great for small businesses. It doesn't have too much fancy flare to it,
                    but it makes a great use of the standard Bootstrap core components. Feel free to use this template
                    for any project you want!
                </h2>
                <div class="buttons is-centered">
                    <a class="button is-large">Call to Action!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="section">
        <div class="container">
            <div class="columns is-multiline">
                <!-- Card One -->
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Card One</p>
                                    <p class="subtitle is-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima
                                        accusamus.</p>
                                </div>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">More Info</a>
                        </footer>
                    </div>
                </div>
                <!-- Card Two -->
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Card Two</p>
                                    <p class="subtitle is-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam
                                        eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                                </div>
                            </div>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item">More Info</a>
                        </footer>
                    </div>
                </div>
                <!-- Card Three -->
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Card Three</p>
                                    <p class="subtitle is-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima
                                        accusamus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
