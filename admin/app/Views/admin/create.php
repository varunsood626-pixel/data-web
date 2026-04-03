
<style>
    .card {
        box-shadow: 0 3px 15px rgba(var(--bs-body-color-rgb), 0.125), 0 3px 15px rgba(var(--bs-body-color-rgb), 0.2);
        padding: 15px;
    }
    .form-label {
        font-size: 20px;
    }
    .form-control {
        border: 1px #0a5cab solid;
    }
    .btn {
        width: 80px;
        padding: 5px;
        background: #3b9ce6;
        border: 1px #3b9ce6 solid;
    }
</style>


<div class="container">
    <div class="row mt-4">
       
        <div class="col-sm-6 col-12 ">
          <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Title</label>
                        <input type="text" name="shorttitle" class="form-control" placeholder="Short Title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input type="text" name="date" class="form-control" placeholder="YYYY-MM-DD" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" placeholder="Link" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Active Status</label>
                        <select name="active" class="form-control" required>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-custom">Save</button>
                </form>
        </div>
       
        
        
    </div>
</div>