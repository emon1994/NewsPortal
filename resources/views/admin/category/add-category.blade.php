@extends('admin.main')

@section('content')
    <div class="row flex justify-center items-center">
        <!-- left column -->
        <div class="col-md-6 mt-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">

                    <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('category-data') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input type="text" name="name" class="form-control rounded-md" id="exampleInputName"
                                placeholder="Enter category name">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
