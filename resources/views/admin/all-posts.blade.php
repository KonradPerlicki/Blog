<x-admin.layout>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th>#</th>
                            <th>Created by</th>
                            <th>Background Image</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Category</th>
                            <th>Read time</th>
                            <th>Has gallery</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Created by</th>
                            <th>Background Image</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Category</th>
                            <th>Read time</th>
                            <th>Has gallery</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->author->username }}</td>
                                <td><img src="{{ Storage::url($post->background_image) }}" class="img-fluid"></td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    @foreach (unserialize($post->tags) as $tag)
                                        <p class="p-2 badge {{ $post->randomTag() }}">#{{ $tag }}</p>
                                    @endforeach
                                </td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->read_time .' '. Str::plural('min', $post->read_time) }}</td>
                                <td>{{ $post->gallery ? 'Yes' : 'No' }}</td>
                                <td>{!! $post->deleted_at ? '<p class="bg-danger">Unactive</p>' : '<p class="bg-success">Active</p>' !!}</td>
                                <td>{{ $post->created_at }}</td>
                                <td>
                                    <a class="btn btn-secondary" href="{{ route('post.show', ['id' => $post->id, 'slug' => $post->slug]) }}">View</a>
                                    <form action="{{ route('admin.post.status',$post->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary">Change status</button> 
                                    </form>
                                    <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete permanently</button> 
                                    </form>
                                </td>
                            </tr>
                        @empty
                            No posts found
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script src="{{ asset('assets/admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    
        <!-- Page level custom scripts -->
        <script src="{{ asset('assets/admin/js/demo/datatables-demo.js') }}"></script>
    </x-slot>
</x-admin.layout>