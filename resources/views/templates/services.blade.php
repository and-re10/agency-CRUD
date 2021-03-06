<!-- Services -->
<section class="page-section" id="services">
    <div class="container">             
    <div class="row">
        <div class="col-lg-12 text-center">
            @if (count($sections) !== 0)
                <h2 class="section-heading text-uppercase">{{$sections[0]->section1}}</h2>
            @else
                <h2 class="section-heading text-uppercase">Services</h2>
            @endif

        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
    </div>
    <div class="row text-center">
        @if (count($services) !== 0)
            @foreach ($services as $service)
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>          
                        <i class="{{$service->icon}}"></i>
                    </span>
                    <h4 class="service-heading">{{$service->titre}}</h4>
                    <p class="text-muted">{{$service->description}}</p>
                </div>
            @endforeach
            
        @else
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">E-Commerce</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Responsive Design</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
                <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Web Security</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
            </div>
        @endif

    </div>
    </div>
</section>