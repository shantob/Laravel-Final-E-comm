<!-- Main Wrapper -->
<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY SHOW
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category Show</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">


                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">
                                    <a href="{{route('category.index')}}"><button class="btn btn-success">
                                        << GO BACK</button></a>
                                        <div class="main-content">

                                            <br>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body  text-center">
                                                        <div class=" w-100 ">
                                                            <div class=" px-2">
                                                                <label for="caregory" class="mb-4 h1 text-dark"> Category Info</label>




                                                                <p>Category Id: {{$category->id}}</p>
                                                                <p>Name: {{$category->name}}</p>
                                                                <p>Is Active?: {{ $category->is_active ? 'Yes' : 'No' }} </p>
                                                                <img src="{{ asset('storage/categories/'.$category->image) }}" height="250" />
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