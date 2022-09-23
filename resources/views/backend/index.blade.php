@extends('backend')
@section('content')

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-12">

            <div class="main-content">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark">Dashboard</label>
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
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
                                                <td><button type="submit" class="btn btn-info w-100"><a href="categoryshow.html">View</a></button></td>
                                                <td><button type="submit" class="btn btn-primary w-100"><a href="productedit.html">UPDATE</a></button></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>560</td>
                                                <td>Lorem, ipsum dolor.</td>
                                                <td>3350</td>
                                                <td>3500</td>
                                                <td><button type="submit" class="btn btn-info w-100"><a href="categoryshow.html">View</a></button></td>
                                                <td><button type="submit" class="btn btn-primary w-100"><a href="productedit.html">UPDATE</a></button></td>
                                                <td><button type="submit" class="btn btn-danger w-100">delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>384</td>
                                                <td>Lorem, ipsum dolor.</td>
                                                <td>3350</td>
                                                <td>3500</td>
                                                <td><button type="submit" class="btn btn-info w-100"><a href="categoryshow.html">View</a></button></td>
                                                <td><button type="submit" class="btn btn-primary w-100"><a href="productedit.html">UPDATE</a></button></td>
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
    @endsection