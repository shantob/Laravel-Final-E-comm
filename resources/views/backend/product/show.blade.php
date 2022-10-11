<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT SHOW
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Product Show</h4>
                    <a href="{{ route('product.index') }}"><button class="btn btn-warning">
                            << Go Back</button></a>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">


                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">

                                        <div class="main-content">

                                            <br>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body  text-center">
                                                        <div class=" w-100 ">
                                                            <div class=" px-2">
                                                                <label for="caregory" class="mb-4 h1 text-dark"> Product
                                                                    Info</label>




                                                                <p>Product Id: {{ $product->id }}</p>
                                                                <p>Name: {{ $product->name }}</p>
                                                                <p> Picture :<img
                                                                        src="{{ asset('storage/products/' . $product->image) }}"
                                                                        height="400px" alt=""> </p>
                                                                <p>Price: {{ $product->price }}$</p>
                                                                <p>{{ $product->description }}</p>
                                                                <p>Tags: {{ $product->tags }}</p>
                                                                <p>Create: {{ $product->created_at }}</p>

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
            </div>

            <x-admin.partials.footer />

        </div>
        </x-admin>
