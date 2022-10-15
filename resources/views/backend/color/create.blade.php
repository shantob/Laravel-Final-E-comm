<x-admin.master>
    <!-- partial -->
    <x-slot:title>

        COLOR ADD
        </x-slot>

        <!-- Main Wrapper -->

        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Color Add</h4>
                    <div class="row">
                        <div class="col-md-10">

                            <div class="main-content bg-light">
                                <!-- Main Wrapper -->
                                <div class=" my-container active-cont">
                                    <!-- Top Nav -->

                                    <!--End Top Nav -->

                                    <br>
                                    <br>
                                    <div class="col-md-10">

                                        <div class="main-content">


                                            <div class="col-md-12 text-center d-flex">
                                                <div class="col-md-4">

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card">
                                                        <div class="card-body ">
                                                            <form action="{{ route('color.store') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <x-admin.forms.input type="text" name="name"
                                                                    label="Name" :value="old('name')"
                                                                    placeholder="Enter name" />

                                                                <label for="Color">Select Color</label>
                                                                <input type="color" name="color_code" id="color"
                                                                    label="Name" class="w-100 my-3"
                                                                    value="{{ old('color_code')}}"
                                                                    placeholder="Enter Color Code" />

                                                                <x-admin.forms.textarea name="description"
                                                                    label="Descriptiion " :value="old('description')"
                                                                    placeholder="Enter Color Description" />

                                                                <div class="mb-3 form-check">
                                                                    <input name="is_active" type="checkbox"
                                                                        class="form-check-input" id="isActiveInput">
                                                                    <label class="form-check-label"
                                                                        for="isActiveInput">Is
                                                                        Active ?</label>
                                                                </div>


                                                                <div class="d-flex justify-content-center mt-4 py-4">
                                                                    <button type="submit"
                                                                        class="btn btn-success mx-2">Create
                                                                        Color</button>
                                                                    <button type="reset"
                                                                        class="btn btn-danger mx-2">Cancle</button>
                                                                </div>
                                                            </form>
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
</x-admin.master>
