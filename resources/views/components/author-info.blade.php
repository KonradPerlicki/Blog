<div class="d-flex p-2 p-md-4 my-3 bg-primary-soft rounded">
    @if ($user->image)
    <a href="{{ route('user.show',$user) }}">
        <div class="avatar avatar-xxl me-2 me-md-4">
            <img class="avatar-img rounded-circle" src="{{ Storage::url($user->image) }}" alt="avatar">
        </div>
    </a>
    @endif
    <!-- Info -->
    <div>
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h4 class="m-0"><a href="{{ route('user.show',$user) }}">{{ $user->username }}</a></h4>
            </div>
            <a href="{{ route('user.show',$user) }}" class="btn btn-xs btn-primary-soft">View Articles</a>
        </div>
        @if($user->description)
        <p class="my-2">{{$user->description}}</p>
        @else
        <p class="my-2 fst-italic fw-lighter">* This user doesn't have description *</p>
        @endif
    </div>
</div>