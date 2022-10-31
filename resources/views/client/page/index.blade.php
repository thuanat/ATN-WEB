@extends('client.layout.master')
@section('content')

<div class="banner" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/breakingbad.png');">
    <div class="content">
        <h1>Breaking Bad</h1>
        <h4>
            <span>2009</span>
            <span><i>18+</i></span>
            <span>5 Seasons</span>
            <span>Crimes TV Shows, TV Dramas</span>
        </h4>
        <p>Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
        <div class="buttons">
            <a href=""><i class="fa-solid fa-cart-shopping"></i> Buy</a>
        </div>
    </div>
</div>
<div class="container">
    <div class="content-container">
        <div class="movie-list-container">
            @if ($message=Session::get('login'))
            <div class="alert alert-success">
                <h3>{{ $message }}</h3>
                <br>
            </div>
            @endif
            <h1 class="movie-list-title">New Releases</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    @foreach ($homepage as $key => $value)
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="{{ url('public/image/'.$value->movie_img)}}">
                        <span class="movie-list-item-title">{{$value->movie_name}}</span>
                        <p class="movie-list-item-decs">{{$value->movie_description}}</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    @endforeach
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Action</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/breakingbad.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/thor.png" alt="">
                        <span class="movie-list-item-title">Thor</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/green.png" alt="">
                        <span class="movie-list-item-title">Green Lantern</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/brave.png" alt="">
                        <span class="movie-list-item-title">Brave</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/taylor.png" alt="">
                        <span class="movie-list-item-title"></span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
        <div class="movie-list-container">
            <h1 class="movie-list-title">Adventure</h1>
            <div class="movie-list-wrapper">
                <div class="movie-list">
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/pale.png" alt="">
                        <span class="movie-list-item-title">Pale Rider</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/300.png" alt="">
                        <span class="movie-list-item-title">300: Rise Of An Empire</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/starwar.png" alt="">
                        <span class="movie-list-item-title">Star War</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/london.png" alt="">
                        <span class="movie-list-item-title">London Has Fallen</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/taylor.png" alt="">
                        <span class="movie-list-item-title">Breaking Bad</span>
                        <p class="movie-list-item-decs">Diagnosed with terminal lung cancer, a high school chemistry teacher resorts to cooking and selling methamphetamine to provide for his family.</p>
                        <button class="movie-list-item-button"><i class="fa-solid fa-cart-shopping"></i> Buy</button>
                    </div>
                </div>
                <i class="fa-solid fa-chevron-right arrow"></i>
            </div>
        </div>
    </div>
</div>
@endsection