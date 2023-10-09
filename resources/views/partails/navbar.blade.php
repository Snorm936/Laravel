

<div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : '' }}">Home</a>
                    <a href="/about" class="nav-item nav-link  {{ (request()->is('about')) ? 'active' : '' }}">About</a>
                    <a href="/services" class="nav-item nav-link {{ (request()->is('services')) ? 'active' : '' }}">Services</a>
                    <a href="/package" class="nav-item nav-link {{ (request()->is('package')) ? 'active' : '' }}">Packages</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/destination" class="dropdown-item  {{ (request()->is('destination')) ? 'active' : '' }}">Destination</a>
                            <a href="/booking" class="dropdown-item  {{ (request()->is('booking')) ? 'active' : '' }}">Booking</a>
                            <a href="/travel" class="dropdown-item  {{ (request()->is('travel')) ? 'active' : '' }}">Travel Guides</a>
                            <a href="/testimonial" class="dropdown-item {{ (request()->is('testimonial')) ? 'active' : '' }}">Testimonial</a>
                            <a href="/error" class="dropdown-item  {{ (request()->is('error')) ? 'active' : '' }}">Not Found</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link {{ (request()->is('contact')) ? 'active' : '' }}">Contact</a>
                </div>
                <a href="" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
            </div>