<main id="main" class="main">

    <div class="pagetitle">
      <h1><?=$title;?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url();?>main">Home</a></li>
          <li class="breadcrumb-item active"><a href="<?=base_url('manage_trainee');?>">Trainee Manager</a></li>
          <li class="breadcrumb-item active">Add Trainee</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php
        if($this->session->save_success){
    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
               <?=$this->session->save_success;?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        }
    ?>
    <?php
        if($this->session->save_failed){
    ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <?=$this->session->save_failed;?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        }
    ?>
    <section class="section dashboard">
      <div class="row">        
        <!-- Left side columns -->        
        <div class="col-lg-6 col-sm-12">
          <div class="row">
            <?=form_open('save_trainee');?>
            <div class="card">   
                <div class="card-body">
                    <h5 class="card-title">Trainee Details</h5>                           
            
                <!-- <div style="width:50vw;height:100vh; position:fixed;" id="loader">
                    <div class="wavy-text">
                        <span>L</span>
                        <span>o</span>
                        <span>a</span>
                        <span>d</span>
                        <span>i</span>
                        <span>n</span>
                        <span>g</span>
                        <span>.</span>
                        <span>.</span>
                    </div>
                </div> -->
           
                    <div class="form-group mb-3">
                        <label>Applicable Date</label>
                        <input type="date" name="datearray" value="<?=$datenow;?>" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Type</label>
                        <input type="text" name="type" value="<?=$type;?>" class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label>Name</label>
                        <input type="text" name="lastname" class="form-control" required>
                    </div>
                    <div class="form-group mb-1">
                    <label class="col-sm-2 control-label">Code</label>
                    <select name="code" class="form-select" id="trainee_code">
                        <option value="TDC">TDC</option>
                        <option value="1">1</option>
                        <option value="1&2">1 & 2</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="col-sm-2 control-label">Amount</label>
                    <input type="text" class="form-control" name="amount" id="trainee_amount" required>
                </div>
                <div class="form-group mb-3">                    
                    <label class="col-sm-3 control-label">Referred by</label>
                    <select name="commissioner" class="form-select" id="trainee_commissioner" required>
                        <option value="">Select Referral</option>
                        <?php
                            foreach($agent as $branch){
                                echo "<option value='$branch[id]'>$branch[firstname]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group mb-3">                    
                    <label class="col-sm-2 control-label">Branch</label>
                    <select name="branch" class="form-select" id="trainee_branch" required>
                        <option value="">Select Branch</option>
                        <?php
                            foreach($branches as $branch){
                                echo "<option value='$branch[id]'>$branch[description]</option>";
                            }
                        ?>
                    </select>
                </div>                              
                <div class="form-group mb-3">                    
                    <label class="col-sm-2 control-label">Status</label>
                    <select name="status" class="form-select" id="trainee_status">
                        <option value="PAID">PAID</option>
                        <option value="pending">NOT PAID</option>
                    </select>
                </div>  
                <div class="form-group mb-3">
                    <label class="col-sm-2 control-label">Remarks</label>
                    <textarea name="remarks" rows="3" class="form-control" id="trainee_remarks"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-success text-white" value="Submit">
                </div>
            </div>
            <?=form_close();?>
          </div>          
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->      
      </div>
    </section>

  </main><!-- End #main -->