<!-- Header -->
<header class="masthead">
    <div class="container">
    <div class="intro-text">
        @if (count($headers) !== 0)
            <div class="intro-lead-in">{{$headers[0]->titre1}}</div>            
        @else
            <div class="intro-lead-in">Welcome To Our Studio!</div>
        @endif

        @if (count($headers) !== 0)
            <div class="intro-heading text-uppercase">{{$headers[0]->titre2}}</div>
        @else
            <div class="intro-heading text-uppercase">It's Nice To Meet You</div>                   
        @endif

        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>                       
    </div>
</header>           