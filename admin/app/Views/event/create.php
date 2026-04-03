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

    .btn-custom, .btn-custom:hover, .btn-custom:focus{
        background-color: #0a5cab;
        border: 1px solid #0a5cab;
        padding: 6px 12px;
        border-radius: 4px;
        color: #fff;
            transition: 0.5s;
    }
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-6 col-12">
            <div class="card">
                <h4 class="mb-3">Add New Event</h4>
                <form method="post" action="<?= base_url('event/create') ?>">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Short Title</label>
                        <input type="text" name="shorttitle" class="form-control" placeholder="Short Title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Link</label>
                        <textarea name="link" class="form-control" placeholder="Link or URL" rows="4" required></textarea>
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
</div>
