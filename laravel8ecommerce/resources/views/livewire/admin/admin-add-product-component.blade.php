<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Product
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All
                                    Products</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message')}}
                            </div>
                        @endif
                        <form enctype="multipart/form-data" action="" class="form-horizontal"
                              wire:submit.prevent="store">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Name" class="form-control input-md"
                                           wire:model="name" wire:keyup="generateSlug">
                                    @error('name') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Slug</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Product Slug" class="form-control input-md"
                                           wire:model="slug">
                                    @error('slug') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Short Description</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea name="" id="short_description" cols="30" rows="10"
                                              class="form-control"
                                              placeholder="short description" wire:model="short_description"></textarea>
                                    @error('short_description') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Description</label>
                                <div class="col-md-4" wire:ignore>
                                    <textarea name="" id="description" cols="30" rows="10"
                                              class="form-control"
                                              placeholder="description" wire:model="description"></textarea>
                                    @error('description') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Regular Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Regular price" class="form-control input-md"
                                           wire:model="regular_price">
                                    @error('regular_price') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Sale Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Sale Price" class="form-control input-md"
                                           wire:model="sale_price">
                                    @error('sale_price') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SKU" class="form-control input-md" wire:model="sku">
                                    @error('sku') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Stock</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control " wire:model="stock_status">
                                        <option value="inStock">in Stock</option>
                                        <option value="outOfStock">Out Of Stock</option>
                                    </select>
                                    @error('stock_status') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Featured</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control " wire:model="featured">
                                        <option value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="quantity" class="form-control input-md"
                                           wire:model="quantity">
                                    @error('quantity') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Category</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control " wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Product Image</label>
                                <div class="col-md-4">
                                    <input type="file" placeholder="Product Image" class="input-file"
                                           wire:model="image">
                                    @if($image)
                                        <img src="{{$image->temporaryUrl()}}" width="120">
                                    @endif
                                    @error('image') <p class="text-danger">{{$message}}</p>@enderror

                                </div>
                            </div>


                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function () {
            tinymce.init({
                selector: '#short_description',
                setup: function (editor) {
                    editor.on('change', function (e) {
                        tinyMCE.triggerSave();
                        var sd_data = $('#short_description').val();
                    @this.set('short_description', sd_data);
                    });
                }
            });

            tinymce.init({
                selector: '#description',
                setup: function (editor) {
                    editor.on('change', function (e) {
                        tinyMCE.triggerSave();
                        var d_data = $('#description').val();
                    @this.set('description', d_data);
                    });
                }
            });


        });
    </script>
@endpush
