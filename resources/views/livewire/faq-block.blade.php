<div class="col-12 mb-4">
    <div class="card shadow border-0" style="border-radius: 15px">
        <div class="card-body p-4">
            <a style="cursor: pointer" class="d-flex text-black text-decoration-none" wire:click="toggle_question">
                <i class="fas fa-chevron-circle-down fa-2x transition @if($is_visible) rotate-180 @endif"></i>
                <p class="my-auto ms-3">
                    {{$question->question}}
                </p>
            </a>
            <div class="overflow-hidden m-0 px-4 @if($is_visible) py-4 @endif" style="@if(!$is_visible)height: 0; @endif transition: .3s" >
                {!! $question->answer !!}

                @if(auth()->user()->is_admin)
                    <a href="{{route('admin.faq.delete', $question->id)}}"><i class="far fa-trash-alt"></i></a>
                @endif
            </div>
        </div>
    </div>
</div>
