<style>
    .why-choose-section .feature {
        border: 2px solid transparent; /* Прозрачные рамки */
        border-radius: 20px;
        background-color: #ffffff;
        padding: 20px;
        margin-bottom: 20px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .feature h3, .feature p {
        margin-bottom: 0;
    }
    .feature img {
        max-width: 20%;
        height: auto;
        margin-top: -10px;
    }
</style>


<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="feature">
                    <img src="{{asset('img/image1.png')}}" alt="Высокие ставки">
                    <h3 class="fs-4">Высокие ставки</h3>
                    <p class="fs-6">Мы даём вебмастерам максимально высокие ставки.</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="feature">
                    <img src="{{asset('img/image2.png')}}" alt="Быстрые выплаты">
                    <h3 class="fs-4">Быстрые выплаты</h3>
                    <p class="fs-6">100% без задержек. Просто запроси выплату и забудь о волокитах с обороткой.</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="feature">
                    <img src="{{asset('img/image3.png')}}" alt="Космический аппрув">
                    <h3 class="fs-4">Космический аппрув</h3>
                    <p class="fs-6">Процент подтверждения заказов на порядок выше чем у конкурентов.</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-stretch">
                <div class="feature">
                    <img src="{{asset('img/image4.png')}}" alt="Защита от накруток">
                    <h3 class="fs-4">Защита от накруток</h3>
                    <p class="fs-6">Наши технологии на базе ИИ позволяют выявить заведомо нежелательный трафик.</p>
                </div>
            </div>
        </div>
    </div>
</div>
