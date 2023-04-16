<button type="button" data-bs-toggle="modal" data-bs-target="#Post" class="btn rounded-2 bg_green fw-bold text-white">Add Post <a><i class="fa-solid fa-plus"></i></a></button>

<div class="modal fade" id="Post" tabindex="-1" role="dialog" aria-labelledby="PostLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header  bg_green">
                <h5 class="modal-title text-white" id="PostLabel">Add New Post</h5>
                <button type="button" class=" btn text-white fw-bold close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color:#E1EFE8">
                <form action="{{url('post_create')}}" class="panel-activity__status" method="post" enctype="multipart/form-data" id="post-form">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="description">Post Description</label>
                        <textarea placeholder="add you oun description" id="description" class="form-control" name="description"></textarea>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap" id="tags-container"></div>
                    <div class="mb-3">
                        <label class="form-label" for="tags">Tags</label>
                        <div class="input-group mb-3">
                            <input type="text" placeholder="add tags  to your post" id="tags-input" class="form-control rounder-2" name="tags" aria-describedby="add" />
                            <button type="button" class="btn text-end" id="add-tag-btn" id="add">Add</button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Category">Category</label>
                        <select name="category_id" id="category" class="form-select rounder-2" require>
                            <option value="">---category---</option>
                            @foreach($categorys as $category)
                            <option value="{{$category->id}}">{{$category->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <div id="show_item">
                            <div class="d-flex flex-column">
                                <div id="remove">
                                    <label class="form-label" for="customFile">Add images to your Post</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control rounder-2 me-1" id="customFile" name="image[]" />
                                        <button type="button" class="btn rounded-circle add_item_btn bg_green"><a><i class="fa-solid fa-plus"></i></a></button>
                                    </div>
                                    </br>
                                    <!-- <div class="d-flex justify-content-end"> -->
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="type" value="1">
                        <button type="submit" class="btn rounded-2 bg_green text-white">
                            Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
</section>