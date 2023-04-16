<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script> -->
<script>
    // var postId = document.querySelector('.update').getAttribute('post_id');
    const postButtons = document.querySelectorAll('[id^="update"]');
    postButtons.forEach(button => {
        button.addEventListener('click', event => {
            const postId = button.getAttribute('post_id');
            console.log(`Button ${postId} clicked`);
            var updateForm = document.getElementById(`post-form-${postId}`);
            var tagsInputupdate = document.getElementById(`tags-input${postId}`);
            var addTagBtnupdate = document.getElementById(`add-tag-btn${postId}`);
            var tagsContainers = document.getElementById(`tags-container${postId}`);
            var tagsUpdate = [];
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/posts/' + postId + '/tags');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    response.forEach(function(tag) {
                        tagsUpdate.push(tag.name);
                        addTagsElement(tag.name);
                    });
                } else {
                    console.log(xhr.responseText); // Log the error message to the console
                }
            };
            xhr.send();
            addTagBtnupdate.addEventListener('click', function() {
                var tag = tagsInputupdate.value.trim();
                if (tag !== '') {
                    tagsUpdate.push(tag);
                    addTagsElement(tag);
                    tagsInputupdate.value = '';
                }
            });
            updateForm.addEventListener('submit', function(event) {
                // Add the tags as hidden input fields to the form
                updateForm.querySelectorAll('input[name="tags[]"]').forEach(input => input.remove());
                tagsUpdate.forEach(function(tag) {
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'tags[]';
                    input.value = tag;
                    updateForm.appendChild(input);
                });
            });

            function addTagsElement(tag) {
                var tagElement = document.createElement('div');
                tagElement.classList.add('tag');
                tagElement.classList.add('text-white');
                tagElement.classList.add('bg_green');
                tagElement.classList.add('rounded-3');
                tagElement.classList.add('px-1');
                tagElement.classList.add('mx-1');
                tagElement.textContent = tag;
                var removeBtn = document.createElement('button');
                removeBtn.classList.add('remove-btn');
                removeBtn.classList.add('btn');
                removeBtn.classList.add('text-white');
                removeBtn.textContent = 'x';
                removeBtn.addEventListener('click', function() {
                    removeTagsElement(tagElement, tag);
                });
                tagElement.appendChild(removeBtn);
                tagsContainers.appendChild(tagElement);
            }

            function removeTagsElement(tagElement, tag) {
                var index = tagsUpdate.indexOf(tag);
                if (index !== -1) {
                    tagsUpdate.splice(index, 1);
                }
                tagElement.remove();
            }
        });
    });
</script>
<script>
    var postForm = document.getElementById('post-form');
    var tagsInput = document.getElementById('tags-input');
    var addTagBtn = document.getElementById('add-tag-btn');
    var tagsContainer = document.getElementById('tags-container');

    // Keep track of the added tags
    var tags = [];

    // Add event listeners
    addTagBtn.addEventListener('click', function() {
        var tag = tagsInput.value.trim();
        if (tag !== '') {
            tags.push(tag);
            addTagElement(tag);
            tagsInput.value = '';
        }
    });

    postForm.addEventListener('submit', function(event) {
        // Add the tags as hidden input fields to the form
        tags.forEach(function(tag) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'tags[]';
            input.value = tag;
            postForm.appendChild(input);
        });
    });

    // Function to add a tag element to the DOM
    function addTagElement(tag) {
        var tagElement = document.createElement('div');
        tagElement.classList.add('tag');
        tagElement.classList.add('text-white');
        tagElement.classList.add('bg_green');
        tagElement.classList.add('rounded-3');
        tagElement.classList.add('px-1');
        tagElement.classList.add('mx-1');
        tagElement.textContent = tag;
        var removeBtn = document.createElement('button');
        removeBtn.classList.add('remove-btn');
        removeBtn.classList.add('btn');
        removeBtn.classList.add('text-white');
        removeBtn.textContent = 'x';
        removeBtn.addEventListener('click', function() {
            removeTagElement(tagElement, tag);
        });
        tagElement.appendChild(removeBtn);
        tagsContainer.appendChild(tagElement);
    }

    // Function to remove a tag element from the DOM and the tags array
    function removeTagElement(tagElement, tag) {
        var index = tags.indexOf(tag);
        if (index !== -1) {
            tags.splice(index, 1);
        }
        tagElement.remove();
    }
</script>
<script>
    function search(name) {

        var input_name = document.getElementById(name);
        if (input_name.classList.contains('d-none')) {
            console.log("hiii");
            input_name.classList.remove('d-none');
            console.log(input_name.style.display);
        } else {
            input_name.classList.add('d-none');
        }
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let addItemBtn = document.querySelector(".add_item_btn");
        addItemBtn.addEventListener("click", function(e) {
            e.preventDefault();
            let showItem = document.querySelector("#show_item");
            let newDiv = document.createElement("div");
            newDiv.classList.add("d-flex", "flex-column", "append_item");
            newDiv.innerHTML = `
                        <div id="remove">
                        <label class="form-label" for="customFile">select your image</label>
                        <div class="input-group mb-3">
                        <input type="file" class="form-control" id="customFile" name="image[]" aria-describedby="img" />
                        <button class="btn remove_item_btn" id="img">x</button>
                        </div>
                        </div>
                    `;
            showItem.insertBefore(newDiv, showItem.firstChild);
        });

        document.addEventListener("click", function(e) {
            if (e.target.classList.contains("remove_item_btn")) {
                e.preventDefault();
                let rowItem = e.target.parentNode.parentNode;
                rowItem.parentNode.removeChild(rowItem);
            }
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let likeBtns = document.querySelectorAll(".like-btn");
        likeBtns.forEach(function(btn) {
            btn.addEventListener("click", function(e) {
                e.preventDefault();
                let postId = this.dataset.postId;
                let xhr = new XMLHttpRequest();
                xhr.open("POST", "/like-post");
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
                        let likeCount = JSON.parse(this.responseText).like_count;
                        document.querySelector(`#post-${postId}-like-count`).textContent = likeCount;
                        let heartIcon = document.getElementById(`like-icon${postId}`);
                        // console.log(JSON.parse(this.responseText).fill);
                        if (JSON.parse(this.responseText).fill == 1) {
                            heartIcon.classList.remove('fa-regular');
                            heartIcon.classList.add('fa-solid');
                        } else {
                            heartIcon.classList.add('fa-regular');
                            heartIcon.classList.remove('fa-solid');
                        }
                    }
                };
                xhr.send(`post_id=${postId}&_token={{ csrf_token() }}`);
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the comment form element
        var Form = document.querySelectorAll('.comment-form');
        // Listen for the form's submit event
        Form.forEach(function(commentForm) {
            commentForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting normally

                // Serialize the form data
                var formData = new FormData(commentForm);

                // Send the AJAX request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', commentForm.action);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        console.log(xhr.responseText); // Log the response to the console
                        // Clear the input field
                        commentForm.querySelector('input[name="description"]').value = '';
                        // Parse the JSON data
                        var comment = JSON.parse(xhr.responseText);
                        //   // Create the HTML for the new comment
                        if (comment.state == 1) {
                            var html = `
                                         <div class="card-body p-4">
                                            <div class="d-flex flex-start">
                                                <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
                                                <div>
                                                    <h6 class="fw-bold mb-1 "><small>
                                                            ${comment.user.name}</small></h6>
                                                    <div class="d-flex justify-content-around align-items-center mb-3">
                                                        <p class="m-0 text-muted"><small>
                                                        ${comment.created_at}</small>
                                                        </p>
                                                        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal${comment.id}">
                                                            <i class="fas fa-pencil-alt ms-2"></i>
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade rounded-3" id="exampleModal${comment.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header bg_green text-white">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Update your Comment</h5>
                                                                        <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body" style="background-color:#E1EFE8">
                                                                        <form action="{{url('comment_update',` + comment.id + `)}}" method="post">
                                                                            @csrf
                                                                            <div class="mb-3">
                                                                                        <label class="form-label" for="description">Comment</label>
                                                                                        <input type="text" value="${comment.description}" placeholder="Write a comment" id="description" class="form-control" name="description"/>
                                                                            </div>         
                                                                            <input type="hidden" value='${comment.post.id}' name="post_id">
                                                                            <input type="hidden" value='${comment.auth}' name="user_id">
                                                                            <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-duotone fa-paper-plane-top"></i></a></button>
                                                                            <div class="mb-3">
                                                                                        <label class="form-label" for="description">Comment</label>
                                                                                        <div class="input-group">
                                                                                        <input type="text" value="${comment.description}" placeholder="Write a comment" id="description" class="form-control" name="description"/>                                                                                        <input type="hidden" value='${comment.post.id}' name="post_id">
                                                                                        <input type="hidden" value='${comment.auth}' name="user_id">
                                                                                        <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-solid fa-paper-plane-top"></i></a></button>
                                                                                        </div>
                                                                            </div>   
                                                                        </form><!-- Search -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button class="btn" onclick="search('reply${comment.id}')"><i class="fas fa-redo-alt ms-2"></i></button>
                                                        <!-- <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a> -->`;
                            if (comment.count > 0) {
                                html += `
                                                        
                                                        <button class="btn" onclick="search('showreply${comment.id}')" id="show${comment.id}"><i class="fas fa-comment fa-xs"></i><span class="small"> comment</span></a>`
                            } else {
                                html += ` <button class="btn d-none" onclick="search("showreply${comment.id}")" id="show${comment.id}"><i class="fas fa-comment fa-xs"></i><span class="small"> comment</span></a>`
                            }
                            html += `   
                                                    </div>
                                                    <p class="mb-0">
                                                    ${comment.description}
                                                    </p>
                                                </div>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="search d-none rounded-3" style="background-color:#F0F4F2" id="reply${comment.id}">
                                                <form action="{{url('comment_create')}}" method="post" class="comment-form">
                                                    @csrf
                                                    <input placeholder="Write a comment" type="text" class="rounded-3" style="background-color:#F0F4F2" name="description">
                                                    <input type="hidden" value='${comment.post.id}' name="post_id">
                                                    <input type="hidden" value='${comment.auth}' name="user_id">
                                                    <input type="hidden" value='${comment.id}' name="commenter_id">
                                                    <button type="submit"><i class="fa-duotone fa-paper-plane-top"></i></button>
                                                </form>
                                            </div>                                         
                                        </div>
                                        <hr class="my-0" />`;
                            var commentsSection = document.getElementById(`comment-section${comment.post.id}`);
                            commentsSection.insertAdjacentHTML('beforeend', html);
                        } else if (comment.state == 0) {
                            html += `<div class="card-body p-4 d-none" id="showreply${comment.parent}">
                                                <div class="d-flex flex-start">
                                                    <img class="rounded-circle shadow-1-strong me-3" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="40" height="40" />
                                                    <div>
                                                        <h6 class="fw-bold mb-1 "><small>
                                                                ${comment.user.name}</small></h6>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <p class="m-0 text-muted"><small>
                                                            ${comment.created_at}</small>
                                                            </p>
                                                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#reply${comment.id}">
                                                                <i class="fas fa-pencil-alt ms-2"></i>
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade rounded-3" id="reply${comment.id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg_green text-white">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Update your Reply</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body" style="background-color:#E1EFE8">
                                                                            <form action="{{url('comment_update',` + comment.id + `)}}" method="post">
                                                                                @csrf
                                                                                <div class="mb-3">
                                                                                        <label class="form-label" for="description">Comment</label>
                                                                                        <div class="input-group">
                                                                                        <input type="text" value="${comment.description}" placeholder="Write a comment" id="description" class="form-control" name="description"/>                                                                                        <input type="hidden" value='${comment.post.id}' name="post_id">
                                                                                        <input type="hidden" value='${comment.auth}' name="user_id">
                                                                                        <button type="submit" class="btn text-white rounded-2 bg_green"><a><i class="fa-solid fa-paper-plane-top"></i></a></button>
                                                                                        </div>
                                                                            </div>  
                                                                            </form><!-- Search -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">
                                                        ${comment.description}
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- Search -->
                                            </div>
                                     `;
                            var commentsSection = document.getElementById(`reply-section${comment.parent}`);
                            commentsSection.insertAdjacentHTML('beforeend', html);
                            var input = document.getElementById(`show${comment.parent}`);

                            input.classList.remove('d-none');
                            var reply = document.getElementById(`reply${comment.parent}`);
                            reply.classList.remove('d-none');
                            console.log(reply);
                        }
                        // Append the new comment to the comments section

                    } else {
                        console.log(xhr.responseText); // Log the error message to the console
                    }
                };
                xhr.send(formData);
            });
        });
    });
</script>
<script>
    // Set up CSRF token for AJAX requests
    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    let likeBtns = document.querySelectorAll(".like-btn");
    likeBtns.forEach(function(btn) {
        btn.setAttribute("data-csrf-token", csrfToken);
    });
</script>
</body>