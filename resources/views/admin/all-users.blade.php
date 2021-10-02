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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Profile Image</th>
                            <th>Can Post</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Profile Image</th>
                            <th>Can Post</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            @if($user->image)
                                <td><img src="{{ $user->image_link}}"></td>
                            @else
                                <td>Image not found</td>
                            @endif
                            <td>{{ $user->can_post ? 'Yes' : 'No' }}
                                <form method="post" action="{{ route('admin.user.update', $user->id) }}">
                                @csrf
                                @method('PUT')
                                    <button class="btn btn-primary" type="submit">Change</button>
                                </form>
                            </td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('user.show', $user->username) }}" class="btn btn-primary">View</a>
                                <form action="{{ route('user.destroy',$user->username) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button> 
                                </form>
                            </td>
                        </tr>
                        @empty
                            No users found
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