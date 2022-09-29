<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        PRODUCT LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Product List</h4>
                    <div class="row">
                        <div class=" my-container active-cont mx-2">
                            <!-- Top Nav -->

                            <!--End Top Nav -->
                            @if(session('success'))
                            <p class="text-success text-center">
                                {{ session('success') }}
                            </p>
                            @endif
                            <br>
                            <br>
                            <div class="col-md-12">

                                <div class="main-content bg-dark">


                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <div class=" w-100 ">
                                                    <div class=" px-2">
                                                        <label for="caregory" class="mb-4 h1 text-dark">Product LIst <span class="text-danger">({{$productlist->count()}})</span></label>
                                                        <input type="text" id="product_search" class="form-control" placeholder="Search Product" onclick="searchFun()">
                                                        <table class="table table-responsive table-hover table-responsive round" id="product_table">
                                                            <thead>
                                                                <tr class="text-light">
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Name Of All Product</th>
                                                                    <th scope="col">Category </th>
                                                                    <th scope="col">Price</th>
                                                                    <th scope="col">Image</th>
                                                                    <th scope="col">Tags</th>
                                                                    <th scope="col">Img_alt</th>
                                                                    <th colspan="3" scope="col">Action</th>

                                                            </thead>
                                                            <tbody>
                                                                @foreach($productlist as $product)
                                                                <tr>
                                                                    <th scope="row">{{$loop->iteration}}</th>
                                                                    <td>{{$product->name}}</td>
                                                                    <td>{{$product->caegory	}}</td>
                                                                    <td>{{$product->price}}</td>
                                                                    <td><img src="{{ url('upload/images', $product->image) }}" height="40px" alt=""></td>
                                                                    <td>{{$product->tags}}</td>
                                                                    <td>{{$product->img_alt}}</td>
                                                                    <td><a href="{{route('admin.productshow',$product->id)}}" class="text-light"><button type="submit" class="btn-sm btn-outline-info w-100">View</button></a></td>
                                                                    <td><a href="{{route('admin.productedit',$product->id)}}" class="text-light"><button type="submit" class="btn-sm btn-outline-primary w-100">UPDATE</button></a></td>
                                                                    <td><a href="{{route('admin.productdelete',$product->id)}}"><button type="submit" class="btn-sm btn-outline-danger w-100">delete</button></a></td>
                                                                </tr>
                                                                
                                                                @endforeach
                                                            
                                                            </tbody>
                                                            
                                                        </table>
                                                        <span>{{ $productlist->links() }}</span>
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
        <script>
          
            const searchFun = () => {
                let filter = document.getElementById('product_search').value.toUpperCase();
                let product = document.getElementById('product_table');
                let tr = product.getElementsByTagName('tr');
                for (var i = 0; i < tr.length; i++) {
                    let td = tr[i].getElementsByTagName('td')[1];

                    if (td) {
                        let textValue = td.textContent || td.innerHTML;

                        if (textValue.toUppercase().indexOf(filter) > -1) {
                            tr[1].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
        </x-admin>