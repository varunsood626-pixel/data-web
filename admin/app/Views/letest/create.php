<style>
    .card {
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.125), 0 3px 15px rgba(0, 0, 0, 0.2);
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
    }

    .form-label {
        font-size: 18px;
        color: #0a5cab;
        font-weight: 500;
    }

    .form-control {
        border: 1px solid #0a5cab;
    }

    .btn {
        width: 80px;
        padding: 5px;
        background: #0a5cab;
        border: 1px #0a5cab solid;
        color: white;
        text-decoration: none;
        display: inline-block;
        text-align: center;
        border-radius: 4px;
        font-weight: 500;
    }
    .btn:hover {
        background: #0a5cab;
        border: 1px #0a5cab solid;
        color: white;
    }
    .btn-check:checked + .btn, :not(.btn-check) + .btn:active{
        color:#fff;
    }
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-6 col-12">
            <div class="card">
                <form method="post" action="<?php echo base_url('letest/create'); ?>" >
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Line 2</label>
                        <input type="text" name="line_2" class="form-control" placeholder="Line 2" required>
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

                    <button type="submit" class="btn">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
