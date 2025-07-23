
@foreach($childrenComments as $comment)



    <div class="single-comment justify-content-between d-flex mt-50" @style("margin-left:". App\Helpers\ConvertDepth::render($depth))>
        <div class="user justify-content-between d-flex">
            <div class="thumb">
                <img src="assets/imgs/authors/author.jpg" alt="">
            </div>
            <div class="desc">
                <p class="comment">
                    {{ $comment->content }}

                    <div>
                        @if($comment->link != null)
                            <a href="{{ $comment->link }}" target="_blank">{{ $comment->link}} </a>
                        @endif
                    </div>
                </p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <h5>
                            <a href="#">Steven</a>
                        </h5>
                        <p class="date">December 4, 2020 at 3:12 pm </p>
                    </div>
                    <div class="reply-btn">
                        <a href="#commentForm" data-id="{{ $comment->id }}" class="btn-reply">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
