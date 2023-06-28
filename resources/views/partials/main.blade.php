<main>
    <div 
        class="jumbotron"
    >
    </div> 
    <div class="products">
        <button class="upperBtn">
            CURRENT SERIES
        </button>

        @foreach($comics as $comic)
        <div class="card">
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            <h6>
                {{$comic['title']}}
            </h6>
        </div>
        @endforeach
        <button class="lowerBtn">
            LOAD MORE
        </button>
    </div>
</main>