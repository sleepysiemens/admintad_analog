<div>
    <div class="row mt-5">
        <h2>{{__('Последние новости')}}</h2>

        <div class="row mt-4">
            @foreach($posts as $post)
                <a href="#" class="col-4 text-decoration-none">
                    <div class="card border-0 shadow" style="border-radius: 15px">
                        <div class="card-body p-4">
                            <div>
                                <img class="w-100" style="height: 200px; object-fit: cover; border-radius: 10px" src="{{$post->img}}">
                            </div>
                            <h3 class="fw-bold mt-3 news-text">{{$post->title}}</h3>
                            <div class="row opacity-50 mt-3">
                                <p class="col-4 m-0">{{date("Y.m.d", strtotime($post->created_at))}}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="row justify-content-center mt-5 fs-3">
            <a href="@if(auth()->user()->is_admin) {{route('admin.blog.index')}} @else {{route('blog.index')}} @endif" class="col-auto m-auto d-flex text-center text-decoration-none">
                <p class="my-auto">{{__('Смотреть все')}}</p>
                <i class="fa-solid fa-arrow-right ms-2 my-auto"></i>
            </a>
        </div>
    </div>
</div>
