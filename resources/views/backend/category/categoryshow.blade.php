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

                                        <div class="main-content">

                                            <br>
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-body  text-center">
                                                        <div class=" w-100 ">
                                                            <div class=" px-2">
                                                                <label for="caregory" class="mb-4 h1 text-dark"> Category Info</label>




                                                                <p>Category Id: {{$categoryShow->id}}</p>
                                                                <p>Name: {{$categoryShow->name}}</p>
                                                                <p> Picture :<img src="{{$categoryShow->image}}" alt="Profile Picture"> </p>

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