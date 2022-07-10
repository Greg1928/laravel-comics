<header>
    <div class="header-top">
        <div class="container">
            <span>cd power visa@</span>
            <span>additional dc sites</span>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
            <nav class="main-nav">
                <ul>
                    @foreach ($links as $id => $link)
                        <li><a href="{{ $link['url'] }}">{{ $link['text'] }}</a></li>
                    @endforeach
                </ul>
            </nav>
            <input type="text" placeholder="Search">
        </div>
    </div>
    <div class="jumbotron">

    </div>
</header>