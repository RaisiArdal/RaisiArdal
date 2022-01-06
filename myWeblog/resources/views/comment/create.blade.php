<form class="m-3" method="post" action="{{ route('cmt.store') }}">

    @csrf

    <div class="form-group row">

        <input type="text" name="description" class="form-control col-10" />

        <input type="hidden" name="newspost_id" value="{{ $comment->newspost_id }}" />

        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
        <input type="submit" class="btn btn-warning col-2" value="ارسال پاسخ" />

    </div>
</form>
