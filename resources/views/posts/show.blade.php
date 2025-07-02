<x-app-layout>
    <div class="container my-5">
       
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->description }}</p>
            </div>
        </div>

        <h5 class="mb-3">Comments ({{ $post->comments->count() }})</h5>

        @foreach($post->comments as $item)
            <div class="card mb-2 shadow-sm">
                <div class="card-body">
                    <p class="mb-1">{{ $item->comment }}</p>
                    <small class="text-muted">{{ $item->created_at }}</small>
                </div>
            </div>
        @endforeach

        <div class="card shadow-sm mt-4">
            <div class="card-body">
                <form method="POST" action="{{ route('comments.store') }}">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                    <div class="mb-3">
                        <textarea name="comment" class="form-control" placeholder="Enter comment" rows="3"></textarea>
                        @error('comment')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
