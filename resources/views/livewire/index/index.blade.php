<div>
    {{-- get start and recipes --}}
    <div class="container text-center">
        <div class="row">
            <div class="col fw-bold display-3" style="font-family: 'Times New Roman', Times, serif; margin-top: 150px">
                Let's Start<br/> Cooking With <br/>Popular Recipes<br/>
                <p class="mt-2 fs-5 text-body-secondary fst-italic fw-light">Want to learn cook but confused how to start? <br/>No need to worry again!</p>
                <a href="/sign-up"><button class="btn btn-dark">Get Started</button></a>
                <a href="/search/0"><button class="btn btn-outline-success">Explore Menu</button></a>
            </div>
            <div class="col">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_4L6JjAIiVL.json"  background="transparent"  speed="1"  style="width: 600px; height: 600px;"  loop  autoplay></lottie-player>
            </div>
        </div>
    </div>

    {{-- popular cards --}}
    <div style="margin: 100px 0;">
        <div class="row justify-content-center col-12 col-lg-10 m-auto">
            <div class="col-12 text-center">
                <h2 class="text-center mt-5 fs-1 fw-bold" style="font-family: 'Times New Roman', Times, serif">Popular Foods</h2>
                <p class="text-center fs-5 fw-light fst-italic mb-3">we provide a variety of food and beverage recipes<br/> with high taste from famous chefs</p>
            </div>
            <div class="mb-5 row justify-content-center align-items-center">
                @foreach ($bestRecipes as $best)
                    @livewire('index.article-cards', ['bestRecipe' => $best])
                @endforeach
            </div>
        </div>
    </div>

    {{-- FAQ --}}
    <h2 id="FAQs" class="text-center fs-1 fw-bold my-5"><a id="FAQs" href="#FAQs">FAQs</a></h2>
    <div class="container accordion accordion-flush mb-5" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Accordion Item 1
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id facere accusamus dolorem, obcaecati facilis repudiandae, ex, itaque eos placeat suscipit enim perferendis ducimus iusto sunt quo aspernatur in necessitatibus!</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Accordion Item 2
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id facere accusamus dolorem, obcaecati facilis repudiandae, ex, itaque eos placeat suscipit enim perferendis ducimus iusto sunt quo aspernatur in necessitatibus!</div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Accordion Item 3
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore id facere accusamus dolorem, obcaecati facilis repudiandae, ex, itaque eos placeat suscipit enim perferendis ducimus iusto sunt quo aspernatur in necessitatibus!</div>
            </div>
        </div>
    </div>
</div>
