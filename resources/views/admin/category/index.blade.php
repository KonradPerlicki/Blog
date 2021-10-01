<x-admin.layout>
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
    </div>

    <div class="">
        <form class="mt-4 mb-4" method="POST" action="{{ route('admin.category.store') }}">
            @csrf
            <div class="mb-3">
                <x-auth.input name="name" type="text">Category's name</x-auth.input>
            </div>

            <!-- Button -->
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </div>
        </form>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Used in</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Used in</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>x</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <form action="{{ route('admin.category.destroy',$category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button> 
                                </form>
                            </td>
                        </tr>
                        @empty
                            No categories found
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