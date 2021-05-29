<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Slide
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">All
                                    Slides</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" action="" wire:submit.prevent="updateSlide">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="title" class="form-control input-md"
                                           wire:model="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">SubTitle</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="SubTitle" class="form-control input-md"
                                           wire:model="subTitle">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="price" class="form-control input-md"
                                           wire:model="price">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Link</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="link" class="form-control input-md"
                                           wire:model="link">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="">Image</label>
                                <div class="col-md-4">
                                    <input type="file" class="input-file" wire:model="newImage">
                                    @if($newImage)
                                        <img src="{{$newImage->temporaryUrl()}}" width="120"/>
                                    @else
                                        <img src="{{asset('assets/images/sliders')}}/{{$image}}" width="120"/>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status">
                                        <option value="0">InActive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for=""></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
