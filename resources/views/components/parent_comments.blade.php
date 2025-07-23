@foreach($parentComments as $comment)
    <div class="comment-list wow fadeIn animated" style="visibility: hidden; animation-name: none;" id="comment_{{ $comment->id }}">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="assets/imgs/authors/author-3.jpg" alt="">
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
                                <a href="#">Danielle Steel</a>
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

        @php 
            App\Helpers\Comments::childrenComments($comment->id);
            echo App\Helpers\Comments::$viewComment;

            App\Helpers\Comments::$viewComment = "";
        @endphp

    </div>
@endforeach