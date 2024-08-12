@extends('admin.main')

@section('content')
    <div class="row flex justify-center items-center">
        <!-- left column -->
        <div class="col-md-6 mt-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title py-2">Category List</h3>
                </div>
                <!-- /.card-header -->
                <div class="table-responsive">
                    <table class="table table-striped 
                                table-bordered table-hover">
                        <thead class=" text-center">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $d->name }}</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-primary ">
                                            <span class="text-center">edit</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mx-5 my-2">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- SweetAlert -->
    @if (session('msg'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('msg') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
@endsection
