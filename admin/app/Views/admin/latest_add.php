
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
        <div class="col-sm-4 col-12 ">
            <form action="<?php echo base_url('Dashboard/update_page/Excta'); ?>" method="post">
                <div class="mb-4 card">
                    <label for="exampleFormControlInput1" class="form-label"><?php echo ucfirst($value['section'].'-'.$value['number']); ?></label>
                     <input type="hidden" name="id" value="<?php echo $value['id']; ?>"  />
                     <textarea class="form-control" id="exampleFormControlInput1" placeholder="Content" name="content"><?php echo $value['content']; ?></textarea>
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </div>
            </form>
        </div>
 
        
    </div>
</div>