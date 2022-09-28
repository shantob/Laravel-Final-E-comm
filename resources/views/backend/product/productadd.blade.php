<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        ADD PEODUCT
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Add New Product</h4>
                    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="title">Product Name</label>
                                                    <input type="text" class="form-control" name="name" id="title" placeholder="Enter Product name" value="">

                                                </div>
                                                <div class="form-group">
                                                    <label for="ProcuctDetels">Product Detels</label>
                                                    <textarea name="description" id="ProcuctDetels" class="w-100 "></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="price">Thumbnail Image</label>
                                                    <input type="text" name="price" id="price" class="form-control">

                                                </div>

                                            </div>
                                            <div class="card-action">
                                                <button class="btn btn-success">Submit</button>
                                                <button class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="category_id">Category</label>
                                                    <select name="category" id="category_id" class="form-control">
                                                        <option value="" disabled selected>(Select Category)</option>
                                                        @foreach($categories as $category)
                                                        <option>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Thumbnail Image</label>
                                                    <input type="file" name="image" id="image">

                                                </div>
                                                <div class="form-group">
                                                    <label for="Image_alt">Image Alt.</label>
                                                    <input type="text" name="img_alt" id="img_alt" class="form-control" value="#">

                                                </div>
                                                <div class="form-group">
                                                    <label for="tags">Tags/Keywords</label>
                                                    <input type="text" name="tags" id="tags" class="form-control" value="#">

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






        <x-admin.partials.footer />

        </div>
        </x-admin>