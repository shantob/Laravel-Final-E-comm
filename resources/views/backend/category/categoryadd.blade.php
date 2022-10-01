<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY ADD
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category Add</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">
                                <!-- Main Wrapper -->
                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">

                                        <div class="main-content">


                                            <div class="col-md-12 text-center d-flex">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card bg-warning">
                                                        <div class="card-body ">
                                                            <form action="{{ route('admin.category.store') }}" method="post">
                                                                @csrf
                                                                <label for="caregory" class="my-4">
                                                                    <h2 class="text-center text-light">Type Category</h2>
                                                                </label>
                                                                <input type="text" name="name" class="form-control" id="category">
                                                                <div class="d-flex justify-content-center mt-4 py-4">
                                                                    <button type="submit" class="btn btn-light mx-2">Create Category</button>
                                                                    <button type="reset" class="btn btn-dark mx-2">Cancle</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>

            <x-admin.partials.footer />

        </div>
        </x-admin>