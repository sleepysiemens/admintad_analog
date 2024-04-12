<div class="why-choose-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h2 class="section-title">{{__('Почему мы?')}}</h2>

                <div class="row my-5">
                    @php
                    $why=
                        [
                            ['title'=>'Высокие ставки','description'=>'Мы даём вебмастерам максимально большие ставки.', 'icon'=>'fa-solid fa-chart-line'],
                            ['title'=>'Быстрые выплаты','description'=>'100% без задержек. Просто запроси выплату и забудь о волокитах с обороткой.', 'icon'=>'fa-solid fa-money-bill-wave'],
                            ['title'=>'Космический аппрув','description'=>'Процент подтверждения заказов на порядок выше чем у конкурентов.', 'icon'=>'fa-solid fa-percent'],
                            ['title'=>'Защита от накруток','description'=>'Наши технологии на базе ИИ позволяют выявить заведомо нежелательный трафик.', 'icon'=>'fa-solid fa-shield'],
                        ];
                    @endphp
                    @foreach($why as $key)
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <i class="{{$key['icon']}} fs-3"></i>
                                </div>
                                <h3 class="fs-4">{{$key['title']}}</h3>
                                <p class="fs-6">{{$key['description']}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-wrap">
                    <img src="{{asset('img/9793480_4235568.svg')}}" alt="Image" class="img-fluid svg-shadow">
                </div>
            </div>

        </div>
    </div>
</div>
