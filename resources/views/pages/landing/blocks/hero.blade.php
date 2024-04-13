<div class="hero py-5" style="font-family: Arial, sans-serif;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex">
                <div class="intro-excerpt m-auto pb-5">
                    <h2 style="color: white;">CPA сеть для стратегического роста и повышения прибыли !</h2>
                    <p class="mb-4 fs-6" style="color: #F0FFFF;">
                        Поделитесь персональной ссылкой в соцсетях, на сайте или в блоге и получайте высокие выплаты с каждой продажи.
                    </p>
                    <p>
                        <a href="{{route('login')}}" class="btn btn-secondary me-2"> {{__('Войти')}} </a>
                        <a href="{{route('register')}}" class="btn btn-white-outline"> {{_('Регистрация')}} </a>
                    </p>
                </div>
            </div>

            <style>
                @keyframes colorChange {
                    0% { filter: brightness(100%) saturate(100%); }
                    50% { filter: brightness(120%) saturate(120%); }
                    100% { filter: brightness(100%) saturate(100%); }
                }

                .animated-image {
                    animation-name: colorChange;
                    animation-duration: 3s;
                    animation-iteration-count: infinite;
                    animation-timing-function: ease-in-out;
                }
            </style>

            <div class="col-lg-7 d-flex justify-content-end"> <!-- Изменение тут -->
                <img src="{{asset('img/glob.png')}}" class="svg-shadow animated-image" style="max-width: 70%; height: auto;">
            </div>
        </div>
    </div>
</div>
