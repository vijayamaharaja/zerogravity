 
            <div class="row">
              <div class="col-lg-12">
                <div class="box">
                  <header class="dark">
                    <div class="icons">
                      <i class="fa fa-check"></i>
                    </div>
                    <h5>Edit Client</h5>

                    <!-- .toolbar -->
                    <div class="toolbar">
                      <nav style="padding: 8px;">
                        <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                          <i class="fa fa-minus"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-default btn-xs full-box">
                          <i class="fa fa-expand"></i>
                        </a> 
                        <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                          <i class="fa fa-times"></i>
                        </a> 
                      </nav>
                    </div><!-- /.toolbar -->
                  </header>
                  <div id="collapse2" class="body">
<?php echo $this->Form->create('Clients', array('class' => 'form-horizontal','inputDefaults' => array(
        'label' => 'control-label col-lg-4',
        'div' => 'form-group'
    )
));?>
  <div class="boxform">        
        
 <?php echo $this->Form->input('fname',array('label'=>'First Name','value'=>$clientdetails['Clients']['fname'],'class'=>'form-control'));?>
 <?php echo $this->Form->input('lname',array('label'=>'Last Name','value'=>$clientdetails['Clients']['lname'],'class'=>'form-control'));?>
 <?php echo $this->Form->input('email',array('label'=>'Email Id','value'=>$clientdetails['Clients']['email'],'class'=>'form-control'));?>
 <?php echo $this->Form->input('phone',array('label'=>'Phone','value'=>$clientdetails['Clients']['phone'],'class'=>'form-control'));?>
 <?php echo $this->Form->input('address',array('label'=>'Address','type'=>'textarea','value'=>$clientdetails['Clients']['address'],'class'=>'form-control'));?>
 <?php echo $this->Form->input('status',array('label'=>'Status','value'=>$clientdetails['Clients']['fname'],'class'=>'form-control','type'=>'select','options'=>array('Active'=>'Active','Inactive'=>'Inactive')));?>
                    <div class="form-actions no-margin-bottom">
                      <?php echo $this->Form->submit('Update',array('class'=>'btn btn-primary'));?>
                       </div>
                    <?php echo $this->Form->end();?>
                    </div>
                  </div>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
            
<style>
.boxform {
margin: 0 auto;
max-width: 300px;
width: 100%;
}
</style>
             