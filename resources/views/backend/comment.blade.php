<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        COMMENT LIST
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Comment List</h4>
                    <div class="row">
                 

                            <div class="main-content ">
                            @if(session('success'))
                            <p class="text-success text-center">
                                {{ session('success') }}
                            </p>
                            @endif
                                <div class="col-md-12">
                                    <div class="card p-5">
                                        <div class="card-body  text-center ">
                                            <div class=" w-100 ">
                                                <div class="">
                                                    <label for="caregory" class="h1 text-dark">List Comment</label><br>
                                                    <span class="text-danger text-center mb-4 ">( Total Comment: {{$comments->count()}} )</span>
                                                    <table class="table table table-hover p-5">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Blog Id</th>
                                                                <th scope="col">Blog Title</th>
                                                                <th scope="col">List Comment</th>
                                                                <th scope="col">User Name</th>
                                                                <th scope="col">User Email</th>
                                                                <th scope="col">Time</th>
                                                                <th scope="col">Is Read</th>
                                                                <th colspan="3" scope="col">Action</th>

                                                        </thead>
                                                        <tbody>
                                                            @foreach ($comments as $comment)
                                                            <tr>
                                                                <th scope="row">{{$loop->iteration}}</th>
                                                                <td>{{$comment->blog_id}}</td>
                                                                <td>{{$comment->blog_title}}</td>
                                                                <td>{{$comment->comment}}</td>
                                                                <td>{{$comment->email}}</td>
                                                                <td>{{$comment->name}}</td>
                                                                <td>{{$comment->created_at}}</td>
                                                                <td><button class="btn-outline">{{$comment->is_read ? 'Yes' : 'No'}}</button></td>
                                                                  <td><a href="{{route('admin.commenttdelete',$comment->id)}}"><button type="submit" class="btn-sm btn-outline-danger w-100">delete</button></a></td>
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