<div class="blog-section pb-0">
    <div class="wave"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="mb-4 section-title text-dark" style="font-weight: bold; color: black !important; font-size: 40px;">Дашбоард максимального ROI</h2>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="{{asset('images/post-1.jpg')}}" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h2><a href="#" style="font-size: 24px;"><strong>Глубокий анализ статистики</strong></a></h2>
                        <div class="meta">
                            <span style="color: black;">Статистика в реальном времени позволяет вам следить за динамикой в режиме онлайн. Наша система обновляет данные мгновенно, предоставляя вам актуальную информацию о происходящем.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="{{asset('images/post-2.jpg')}}" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h2><a href="#" style="font-size: 24px;"><strong>Аналитика аудитории</strong></a></h2>
                        <div class="meta">
                            <span style="color: black;">Получайте первичные данные прямо из нашей CRM без использования сторонних ресурсов, обеспечивая максимальную конфиденциальность и безопасность и таргетируйте кампании максимально прицельно.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="{{asset('images/post-3.jpg')}}" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h2><a href="#" style="font-size: 24px;"><strong>Вывод средств</strong></a></h2>
                        <div class="meta">
                            <span style="color: black;">Мы выведем ваши деньги на любые платежные системы с максимальной скоростью и безопасностью, независимо от того, какую платежную систему вы предпочитаете использовать.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container pb-5">
    <img src="{{asset('img/racket.png')}}" class="racket-img" alt="Теннисная ракетка">
    <div class="text">
        <h2><a style="font-size: 20px; color: black;"><strong>Чтобы выбрать оффер и начать, нужно просто зарегистрироваться.</strong></a></h2>
        <h2><a style="font-size: 20px; color: black;"><strong>Мы не требуем проходить собеседований.</strong></a></h2>

        <button onclick="window.open('register', '_blank')">
            Быстрая регистрация
        </button>
    </div>
</div>


<style>
    button {
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
        font-weight: bold;
        color: white;
        background: linear-gradient(to left, #4548a6, #0087ff, #4548a6);
        border: none;
        padding: 15px 30px;
        cursor: pointer;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s, box-shadow 0.3s;
        position: relative; /* Добавляем позиционирование */
        z-index: 1; /* Устанавливаем z-index, чтобы кнопка была выше текста */
    }

    button:hover {
        background: linear-gradient(to left, #0087ff, #4548a6, #0087ff);
        transform: translateY(-5px); /* Смещаем кнопку вверх при наведении курсора */
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3); /* Увеличиваем тень при наведении */
    }

    .racket-img {
        max-width: 300px; /* Устанавливаем максимальную ширину изображения */
        height: auto; /* Позволяет изображению сохранять пропорции */
        display: block; /* Делаем изображение блочным элементом */
        margin: auto; /* Центрируем изображение */
        position: relative; /* Устанавливаем позиционирование */
        z-index: 2; /* Устанавливаем z-index, чтобы изображение было выше текста */
    }

    .container {
        position: relative;
        text-align: center;
        margin-top: 50px; /* Добавляем отступ сверху */
    }

    .text {
        position: relative;
        z-index: 1; /* Устанавливаем z-index, чтобы текст был ниже изображения */
    }
</style>
