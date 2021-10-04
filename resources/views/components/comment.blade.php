@props(['canDelete' => false, 'comment'])
<div class="my-4 d-flex">
  @if ($comment->author->image)
  <img class="avatar avatar-md rounded-circle float-start me-3" src="{{ Storage::url($comment->author->image) }}" alt="avatar">
  @endif
    <div>
      <div class="mb-2">
          <h5 class="m-0">{{ $comment->author->username }}</h5>
          <span class="me-3 small">{{ $comment->created_at->format('F d Y,  h:i a') }}</span>
          @if($canDelete)
          <form method="post" action="{{ route('comment.destroy',$comment) }}">
            @csrf
            @method('DELETE')
              <button type="submit" class="text-body fw-normal btn btn-danger-soft">Delete</button>
            </form>
          @endif
      </div>
      <p>{{ $comment->content }}</p>
    </div>
  </div>