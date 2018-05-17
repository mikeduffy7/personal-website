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
                        <label for="date">Date</label>
                        <input name="date" 
                            type="text" 
                            class="form-control">
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->