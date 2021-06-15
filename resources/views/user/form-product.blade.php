<!-- Add Categories -->
<div class="container-fluid" id="form-product">
    <div class="mt--10">
        <div class="card">
            <div class="card-body">
                <form action="/product/store" method='post'>
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="nrp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoTlp">Price</label>
                        <input name="no_telp" class="form-control" id="exampleInputNoTlp" placeholder="085xxx-xxx-xxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNoReg">Description</label>
                        <input name="no_reg" class="form-control" id="exampleInputNoReg" placeholder="112-31-XX-XXXXX">
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="float-right">
                        <button type="button" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
