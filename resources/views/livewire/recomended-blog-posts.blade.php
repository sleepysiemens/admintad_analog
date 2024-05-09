<div>
    <div class="row mt-5">
        <h2>{{__('Последние новости')}}</h2>

        <div class="row mt-4">
            @if(auth()->user()->is_admin)
                <div class="col-3">
                    <a href="{{route('admin.blog.create')}}" class="card border-0 shadow h-100 text-decoration-none" style="border-radius: 15px">
                        <div class="card-body h-100 d-flex">
                            <i class="fas fa-plus m-auto fa-3x"></i>
                        </div>
                    </a>
                </div>
            @endif
            @foreach($posts as $post)
                <div class="col-4">
                    <div class="card border-0 shadow" style="border-radius: 15px">
                        <a href="@if(auth()->user()->is_admin) {{route('admin.blog.show', $post->id)}} @else @endif" class="card-body p-4 text-decoration-none">
                            <div>
                                <img class="w-100" style="height: 200px; object-fit: cover; border-radius: 10px" src="{{$post->img}}">
                            </div>
                            <h3 class="fw-bold mt-3 news-text">{{$post->title}}</h3>
                            <div class="row opacity-50 mt-3">
                                <p class="col-4 m-0">{{date("Y.m.d", strtotime($post->created_at))}}</p>
                            </div>
                        </a>
                        @if(auth()->user()->is_admin)
                            <div class="card-footer">
                                <div class="row">
                                    <div class="d-flex justify-content-end col-auto">
                                        <a href="{{{route('admin.blog.edit',$post->id)}}}" class="btn btn-primary bg-primary my-4 fs-4 "><i class="far fa-edit"></i></a>
                                    </div>
                                    <div class="d-flex justify-content-end col-auto">
                                        <a href="{{{route('admin.blog.delete',$post->id)}}}" class="btn btn-primary bg-warning my-4 fs-4"><i class="far fa-trash-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
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
