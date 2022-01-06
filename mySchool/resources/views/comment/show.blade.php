<?php
use App\Libraries\svgSite;
$svg= new svgSite();
?>
@foreach($comments as $comment)

    @if(isset($comment->description) and $comment->show )
            <div class="display-comment mt-4" @if(isset($comment->parent_id)) style="margin-left:20px;" @endif>
                <div class="border m-2">
                    <div class="text-right">{{ $comment->user->name }}</div>

                    <div class="m-2 bg-white">
                        <div class="iconSvg" style="margin: auto;">
                            {!! ($svg->comment())!!}
                        </div>

                        {{ $comment->description }}
                    </div>

                    @if(isset($comment->replies)  )
                        @foreach($comment->replies as $repl)

                        @if($repl->show)
                                <div class="text-right mr-5">
                                    <span>{{ $repl->user->name }}</span>

                                    <span>: {{ $repl->description }}</span>


                                </div>

                            @endif

                        @endforeach
                    @endif

                    <form class="m-3" method="post" action="{{ route('cmt.store') }}">

                        @csrf

                        <div class="form-group row">

                            <input type="text" name="description" class="form-control col-10" />

                            <input type="hidden" name="newspost_id" value="{{ $comment->newspost_id }}" />

                            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                            <input type="submit" class="btn btn-warning col-2" value="ارسال پاسخ" />

                        </div>
                    </form>

                </div>

            </div>

            @if(isset($comment->parent_id))
                @include('$comment.show', ['comments' => $comment->replies()])
            @endif

    @endif
@endforeach
