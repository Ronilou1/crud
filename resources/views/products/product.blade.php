@extends('layout')
@section('content')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                        <h1 class="mt-4">Edit Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Fill Detials</li>
                        </ol>

                        <div class="card">
                        <h1>Edit Product</h1>
                       <form action="{{ route('products.store') }}" method="post">
                       @csrf
                       <div>
                      <label>Name:</label>
                     <input type="text" name="name">
                    </div>
                <div>
            <label>Description:</label>
        <textarea name="description"></textarea>
      </div>
    <div>
    <label>Price:</label>
   <input type="text" name="price">
</div>
<button type="submit">Create</button>
</form>


 <table>
                     </table>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </body>
</html>

@endsection

