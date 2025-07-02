<x-app-layout>
    <div class="container my-5">
        @if(count($posts) == 0)
        <p>You have not created any post, Please create your first post</p>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
        @endif
        @foreach($posts as $post)
            <div class="card shadow-sm mb-3 mx-auto" style="max-width: 600px;">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="card-title mb-0">{{ $post->title }}</h5>
                        <small class="text-muted">{{ $post->created_at->format('h:i A, d M Y') }}</small>
                    </div>

                    <p class="card-text">{{ $post->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">{{ $post->comments->count() }} Comments</small>

                        <div class="d-flex gap-2">
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
