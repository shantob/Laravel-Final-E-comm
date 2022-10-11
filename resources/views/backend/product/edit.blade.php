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

                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                            << Go Back</button></a>
                    <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                             
                                                <x-admin.forms.input type="text" label="Product Name" class="form-control" name="name" id="title" placeholder="Enter Product name" value="{{old('name')}}"/>

                                            
                                            <x-admin.forms.textarea name="description" label="Product Description" class="bg-light form-control" value="{{old('description')}}"  placeholder="Type Description" />

                                                <x-admin.forms.input type="number" name="price" id="price" label="Price Of Product" class="form-control" value="{{old('price')}}"/>


                                        </div>
                                        <div class="card-action">
                                            <button class="btn btn-success" type="submit">Update</button>
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
                                     
                                                <x-admin.forms.select name="category" label="Select category" :values="$category" />

                                            
                                      
                                                <x-admin.forms.input type="file" lable="Product Image" name="image" id="image"/>

                                           
                                 
                                                <x-admin.forms.input type="text" name="img_alt" label="Image Alt." id="img_alt" class="form-control" value="{{old('img_alt')}}"/>


                                       
                                                <x-admin.forms.input type="text" name="tags" label="Tags/Kewwords" id="tags" class="form-control" value="{{old('tags')}}"/>

                                            

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