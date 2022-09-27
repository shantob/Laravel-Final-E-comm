<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        BLOG LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Blogs</h4>
                    <div class="row">
                        <div class=" my-container active-cont">
                            <!-- Top Nav -->

                            <!--End Top Nav -->

                            <br>
                            <br>
                            <div class="col-md-10">

                                <div class="main-content">

                                    <a href="{{route('admin.addblog')}}"><button class="btn btn-success text-right">Add A New Blog</button></a>
                                    <div class="col-md-12 mx-5">
                                        <div class="card">
                                            <div class="card-body  text-center">
                                                <div class=" w-100 ">
                                                    <div class=" px-2">
                                                        <label for="caregory" class="mb-4 h1 text-dark">List Blog</label>
                                                        <table class="table table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Title</th>
                                                                    <th scope="col">Image</th>
                                                                    <th scope="col">Blog</th>
                                                                    <th scope="col">Like</th>
                                                                    <th scope="col">Comment</th>
                                                                    <th colspan="2" scope="col">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Mark</td>
                                                                    <td>Mark</td>
                                                                    <td>Mark</td>
                                                                    <td>Mark</td>
                                                                    <td><a href="{{route('admin.blogshow',['id' =>2])}}"><button type="submit" class="btn btn-info w-100">Show</button></a></td>
                                                                    <td><button type="submit" class="btn btn-danger w-100">Delete</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Jacob</td>
                                                                    <td>Jacob</td>
                                                                    <td>Jacob</td>
                                                                    <td>Jacob</td>
                                                                    <td><a href="{{route('admin.blogshow',['id' =>3])}}"><button type="submit" class="btn btn-info w-100">Show</button></a></td>
                                                                    <td><button type="submit" class="btn btn-danger w-100">Delete</button></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td>Larry the Bird</td>
                                                                    <td>Larry the Bird</td>
                                                                    <td>Larry the Bird</td>
                                                                    <td>Larry the Bird</td>
                                                                    <td>Larry the Bird</td>
                                                                    <td><a href="{{route('admin.blogshow',['id' =>4])}}"><button type="submit" class="btn btn-info w-100">Show</button></a></td>
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
                    </div>



                </div>
            </div>

            <x-admin.partials.footer />

        </div>
        </x-admin>
        <!-- Main Wrapper -->