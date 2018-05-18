<div id="blog-upload" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Upload Blog</h4>
            </div>
            <div class="modal-body">
                <form action="blog-post" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" 
                            type="text" 
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="blog">Blog</label>
                        <textarea name="body" 
                            type="text" 
                            class="form-control" 
                            cols="15" rows="10">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Type
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Article</a></li>
                            </ul>
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->