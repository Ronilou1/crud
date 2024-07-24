@extends('layout')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <h1 class="mt-4">Create Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Fill Details</li>
            </ol>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Create Product</h5>
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control form-control-lg" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control form-control-lg" id="description" name="description"
                                rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control form-control-lg" id="price" name="price">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">&copy; Your Website {{ date('Y') }}</div>
                <div>
                    <a href="#">Privacy Policy</a> &middot; <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
