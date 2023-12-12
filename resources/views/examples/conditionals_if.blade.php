@if ($comment === 1)
    <p>There is a comment</p>
@elseif($comment > 1)
    <p>There are {{ $comment }} comments</p>
@else
    <p>There is no comment</p>
@endif