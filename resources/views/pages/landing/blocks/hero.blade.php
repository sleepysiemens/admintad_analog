
<div class="hero py-5" style="font-family: Arial, sans-serif;">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5 d-flex">
                <div class="intro-excerpt m-auto pb-5">
                    <!-- Измененный заголовок -->
                    <h2 style="color: white; font-weight: bold; margin-bottom: 0; text-align: left;">CPA сеть для стратегического роста и повышения прибыли</h2>
                    <p class="mb-4 fs-6" style="color: #F0FFFF; text-align: left; margin-top: 10px;"> <!-- Изменение тут -->
                        Поделитесь персональной ссылкой в соцсетях, на сайте или в блоге и получайте высокие выплаты с каждой продажи.
                    </p>

                    </p>
                    <p style="text-align: left;"> <!-- Изменение тут -->
                        <a href="{{route('login')}}" class="btn btn-secondary me-2"> {{__('Войти')}} </a>
                        <a href="{{route('register')}}" class="btn btn-white-outline"> {{_('Регистрация')}} </a>
                    </p>
                </div>
            </div>
            <div class="col-lg-7 d-flex justify-content-end"> <!-- Изменение тут -->
                <img src="{{asset('img/glob.png')}}" class="svg-shadow animated-image" style="max-width: 70%; height: auto;">
            </div>
        </div>
    </div>
</div>

<style>
    .btn {
        color: black; /* Черный цвет текста */
        transition: background-color 1.4s ease, color 1.4s ease; /* Плавный переход */
    }

    .btn:hover {
        background-color: #708090; /* Зеленый цвет при наведении */
        background-color: #000000;
        color: white; /* Белый цвет текста при наведении */
    }
</style>

<script>
    document.getElementById("registerBtn").addEventListener("mouseover", function() {
        this.style.color = "black";
    });

    document.getElementById("registerBtn").addEventListener("mouseout", function() {
        this.style.color = ""; // Возвращаемся к изначальному цвету
    });
</script>
