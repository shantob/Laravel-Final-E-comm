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
                    <form action="#" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="title">Product Name</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Product name" value="Fruits">

                                                </div>
                                                <div class="form-group">
                                                    <label for="ProcuctDetels">Product Detels</label>
                                                    <textarea name="ProcuctDetels" id="ProcuctDetels" class="w-100 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias blanditiis quae explicabo veritatis eligendi mollitia nesciunt recusandae eius quia? Possimus praesentium quidem illo quo pariatur illum, ut corrupti. Autem, officiis?</textarea>

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
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        <option value="" selected>Snikers</option>
                                                        <option value="">T-Shirt</option>
                                                        <option value="">Shirt</option>
                                                        <option value="">Snikers</option>
                                                        <option value="">Others</option>

                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="image">Thumbnail Image</label>
                                                    <input type="file" name="image" id="image">

                                                </div>
                                                <div class="form-group">
                                                    <label for="Image_alt">Image Alt.</label>
                                                    <input type="text" name="img_alt" id="img_alt" class="form-control" value="woeirfjweio.jpg">

                                                </div>
                                                <div class="form-group">
                                                    <label for="tags">Tags/Keywords</label>
                                                    <input type="text" name="tags" id="tags" class="form-control" value="wur,wli3tur,li3u2rh">

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