<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="row">
                        <div class=" my-container active-cont mx-5">
                            <!-- Top Nav -->

                            <!--End Top Nav -->

                            <br>
                            <br>
                            <div class="col-md-12">

                                <div class="main-content bg-dark">


                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <div class=" w-100 ">
                                                    <div class=" px-2">
                                                        <label for="caregory" class="mb-4 h1 text-light">Product LIst</label>
                                                        <table class="table table-responsive table-hover table-responsive round">
                                                            <thead>
                                                                <tr class="text-light">
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name Of All Product</th>
                                                                    <th scope="col">Total Sells </th>
                                                                    <th scope="col">Benifit Of Product</th>
                                                                    <th scope="col">Total Cost</th>
                                                                    <th scope="col">Income</th>
                                                                    <th colspan="3" scope="col">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>296</td>
                                                                    <td>Lorem, ipsum dolor.</td>
                                                                    <td>3350</td>
                                                                    <td>3500</td>
                                                                    <td><a href="{{route('admin.productshow')}}" class="text-light"><button type="submit" class="btn btn-info w-100">View</button></a></td>
                                                                    <td><a href="{{route('admin.productedit')}}" class="text-light"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                                    <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>560</td>
                                                                    <td>Lorem, ipsum dolor.</td>
                                                                    <td>3350</td>
                                                                    <td>3500</td>
                                                                    <td><a href="{{route('admin.productshow')}}" class="text-light"><button type="submit" class="btn btn-info w-100">View</button></a></td>
                                                                    <td><a href="{{route('admin.productedit')}}" class="text-light"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                                    <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry the Bird</td>
                                                                    <td>384</td>
                                                                    <td>Lorem, ipsum dolor.</td>
                                                                    <td>3350</td>
                                                                    <td>3500</td>
                                                                    <td><a href="{{route('admin.productshow')}}" class="text-light"><button type="submit" class="btn btn-info w-100">View</button></a></td>
                                                                    <td><a href="{{route('admin.productedit')}}" class="text-light"><button type="submit" class="btn btn-primary w-100">UPDATE</button></a></td>
                                                                    <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>

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