@extends('backend')
@section('content')

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-10">

            <div class="main-content">


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body  text-center">
                            <div class=" w-100 ">
                                <div class=" px-2">
                                    <label for="caregory" class="mb-4 h1 text-dark">List User</label>
                                    <table class="table table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">User</th>
                                                <th scope="col">Device</th>
                                                <th scope="col">Qulification</th>
                                                <th colspan="2" scope="col">Action</th>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Mark</td>
                                                <td>Mark</td>
                                                <td><a href="profile.html"></a><button type="submit" class="btn btn-info w-100">Show</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Jacob</td>
                                                <td>Jacob</td>
                                                <td><a href="profile.html"></a><button type="submit" class="btn btn-info w-100">Show</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry the Bird</td>
                                                <td>Larry the Bird</td>
                                                <td>Larry the Bird</td>
                                                <td><a href="profile.html"></a><button type="submit" class="btn btn-info w-100">Show</button></a></td>
                                                <td><button type="submit" class="btn btn-danger w-100">Delete</button></td>
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