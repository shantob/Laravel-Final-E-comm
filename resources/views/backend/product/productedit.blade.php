<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        EDIT PEODUCT
        </x-slot>

        <!-- Main Wrapper -->

        <!-- Main Wrapper -->
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Edit Product</h4>
                    <a href="{{ route('admin.productlist') }}"><button class="btn btn-warning">
                        << Go Back</button></a>
                            <form action="{{ route('admin.product.update', $products->name) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="title">Product Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="title" placeholder="Enter Product name"
                                                                value="{{ $products->name }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ProcuctDetels">Product Detels</label>
                                                            <textarea name="description" id="ProcuctDetels" class="w-100 ">{!! $products->description !!}</textarea>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="price">Price </label>
                                                            <input type="text" name="price" id="tags"
                                                                class="form-control" value="{{ $products->price }}">

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
                                                            <label for="category">Category</label>
                                                            <select name="category" id="category" class="form-control">
                                                                <option value="" disabled selected>(Select
                                                                    Category)
                                                                </option>
                                                                @foreach ($categories as $category)
                                                                    <option>{{ $category->name }}</option>
                                                                @endforeach

                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="image">Product Image</label>
                                                            <input type="file" name="image" id="image"
                                                                value="{{ url('upload/images', $products->image) }}"><img
                                                                src="{{ url('upload/images', $products->image) }}"
                                                                alt="">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="Image_alt">Image Alt.</label>
                                                            <input type="text" name="img_alt" id="img_alt"
                                                                class="form-control" value="{{ $products->img_alt }}">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tags">Tags/Keywords</label>
                                                            <input type="text" name="tags" id="tags"
                                                                class="form-control" value="{{ $products->tags }}">

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
