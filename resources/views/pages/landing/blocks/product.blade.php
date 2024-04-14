<style>
    .product-section {
        border-radius: 20px;
        background: linear-gradient(to bottom, #66a8ff, #00eeff);
          padding: calc(4rem - 30px) 0 0rem 0;
          position: relative; /* Добавляем позиционирование, чтобы :after мог работать */
        margin-bottom: 20px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    .product-section h3, .product-section p {
        margin-bottom: 0;
    }


</style>

<div class="product-section">
    <div class="container pb-4">
        <div class="row">
            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0 d-flex">
                <div class="m-auto">
                    <h2 class="mb-4 section-title text-light">{{__('Горячие офферы')}}</h2>
                    <p class="mb-4 text-light">
                        {{__('Максимальные ставки, множество вертикалей: CPA - ваш путь к финансовой свободе!')}}
                    </p>
                    <p><a href="shop.html" class="btn">{{__('Подробнее')}}</a></p>
                </div>
            </div>
            <!-- End Column 1 -->
            <!-- Start Column 2 -->
            @foreach([['title'=>'offer1', 'price'=>'10'],['title'=>'offer2', 'price'=>'100'],['title'=>'offer3', 'price'=>'500']] as $key)
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{route('landing.index')}}">
                        <img src="images/product-1.png" class="img-fluid product-thumbnail">
                        <div class="position-absolute mb-4" style="left:0; right: 0; bottom: 0">
                            <h3 class="product-title text-uppercase" style="z-index: 3">{{$key['title']}}</h3>
                            <strong class="product-price">{{$key['price']}} ₽</strong>
                        </div>
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
