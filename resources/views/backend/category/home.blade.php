<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        CATEGORY LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Category List <h6 class="text-right"><a href="{{route('admin.category.create')}}"><button class="btn btn-danger">+ Add New</button></a></h6></h4>
                    <div class="row">
                        <div class="col-md-10">
   
                            <div class="main-content bg-dark">


                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body  text-center">
                                            <div class=" w-100 ">
                                                <div class=" px-2">
                                                    <label for="caregory" class="mb-4 h1 text-dark">List Category <span class="text-danger">({{$categories->count()}})</span></label>
                                                    <table class="table table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">List Category</th>
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categories as $category)
                                                            <tr>
                                                                <th scope="row">{{$loop->iteration}}</th>
                                                                <td>{{$category->name}}</td>
                                                                <td><a href="{{route('admin.category.show', $category->id)}}"><button type="submit" class=" btn-sm btn-outline-info w-100">Wiew</button></a></td>
                                                                <td><a href="{{route('admin.category.edit',$category->id)}}"><button type="submit" class="btn-sm btn-outline-warning w-100">UPDATE</button></a></td>
                                                                <td><a href="{{route('admin.category.destroy', $category->id)}}"><button type="submit" class="btn-sm btn-outline-danger w-100">DELETE</button></a></td>
                                                            </tr>
                                                            @endforeach
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

            <x-admin.partials.footer />

        </div>
        </x-admin>
        <!-- Main Wrapper -->