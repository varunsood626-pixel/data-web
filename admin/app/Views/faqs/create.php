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
        width: 100px;
        padding: 6px;
        background: #3b9ce6;
        color: white;
        border: 1px solid #3b9ce6;
    }

    .btn:hover {
        background-color: #318bcc;
        border-color: #318bcc;
    }
</style>

<div class="container">
    <div class="row mt-4">
        <div class="col-sm-6 col-12">
            <div class="card">
                <form method="post" action="<?= base_url('faqs/create') ?>">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="category" class="form-control" required>
                            <option value="">Select Category</option>
                            <option value="1">EasyCheck360®</option>
                            <option value="2">Trublood®</option>
                            <option value="3">Exacta®</option>
                            <option value="4">Pinaka™</option>
                            <option value="5">CellDx™</option>
                            <option value="6">Chemo-Scale™</option>
                            <option value="7">Cancertrack™</option>
                            <option value="8">Target-MRD™</option>
                            
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Active</label>
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
