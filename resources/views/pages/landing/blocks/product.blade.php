<style>
    .product-section {
        background: linear-gradient(to bottom, #3c3e8f, #0087ff);
          padding: calc(4rem - 30px) 0 0rem 0;
          position: relative; /* Добавляем позиционирование, чтобы :after мог работать */
    }

    .product-section:after {
        content: '';
          position: absolute;
          bottom: -50px; /* Высота волны */
          left: 0;
          width: 100%;
          height: 50px; /* Высота волны */
          background: linear-gradient(to top, #4d50ba, #0087ff); /* Градиент цветов для волны */
          border-bottom-right-radius: 20px; /* Закругляем правый нижний угол */
          border-bottom-left-radius: 20px; /* Закругляем левый нижний угол */
        z-index: -1;
    }
</style>

<div class="product product-section">
    <div class="container">
        <div class="row">
            <!-- Start Column 1 -->
            <div class="col-md-12 col-lg-3 mb-5 mb-lg-0 d-flex">
                <div class="m-auto">
                    <h2 class="fs-2" style="color: white;">{{__('Горячие офферы')}}</h2>
                    <h1 class="fs-6" style="color: white;">
                        {{__('CPA Сеть - путь к финансовой свободе.')}}
                    </h1>
                    <p><a href="shop.html" class="btn btn-white-outline">{{__('Подробнее')}}</a></p>
                </div>
            </div>
            <!-- End Column 1 -->
            <!-- Start Column 2 -->
            @foreach($offers as $offer)
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="{{route('landing.index')}}" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <img src="{{$offer->image}}" class="img-fluid product-thumbnail mb-5 mx-auto w-75" style="border-radius: 50px">
                        <div class="position-absolute mb-4" style="left:0; right: 0; bottom: 0">
                            <h3 class="product-title text-uppercase" style="z-index: 3">{{$offer->title}}</h3>
                            <strong class="product-price">{{$offer->cost}} ₽</strong>
                        </div>
                        <span class="icon-cross">
                            <img src="{{asset('images/cross.svg')}}" class="img-fluid">
                        </span>
                    </a>
                </div>
            @endforeach
            <!-- End Column 2 -->
        </div>
    </div>
</div>
