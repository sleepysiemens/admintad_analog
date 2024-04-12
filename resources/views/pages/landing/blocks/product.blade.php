<div class="product-section">
    <div class="container">
        <div class="row">

            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                <h2 class="mb-4 section-title">{{__('Горячие оффреры')}}</h2>
                <p class="mb-4">
                    {{__('Максимальные ставки, множество вертикалей: CPA - ваш путь к финансовой свободе!')}}
                </p>
                <p><a href="shop.html" class="btn">{{__('Подробнее')}}</a></p>
            </div>
            <!-- End Column 1 -->

            <!-- Start Column 2 -->
            @foreach([['title'=>'offer1', 'price'=>'10'],['title'=>'offer2', 'price'=>'100'],['title'=>'offer3', 'price'=>'500']] as $key)
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{route('landing.index')}}">
                        <img src="images/product-1.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title text-uppercase">{{$key['title']}}</h3>
                        <strong class="product-price">{{$key['price']}} ₽</strong>

                        <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div>
            @endforeach

            <!-- End Column 2 -->


        </div>
    </div>
</div>
