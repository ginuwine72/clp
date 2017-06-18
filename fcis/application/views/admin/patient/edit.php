<div class="row">
  <?php echo form_open_multipart(uri_string(),array('class'=>'form-horizontal')); ?>
  <div class="col-md-8">
    <div class="box box-warning">
      <div class="box-header"> <!-- <h3 class="box-title">Edit Patient</h3> --> </div>
      <?php echo form_hidden('id',$patient['id']); ?>
      <?php echo form_hidden('old_id_card',$patient['id_card']); ?>
      <div class="box-body">
        <?php echo form_fieldset('Information'); ?>
        <div class="form-group">
          <?php echo form_label('','file',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <div class="btn btn-default btn-file">
              <i class="fa fa-paperclip"></i> Attachment
              <?php echo form_upload(array('name'=>'file','class'=>'form-control','id'=>'picture')); ?>
            </div>
            <span><?php echo anchor('admin/patients/delete_file/'.$patient['id_card'],'<i class="fa fa-trash-o"></i>',array('class'=>'btn btn-danger','onclick'=>"return confirm('confirm to delete?');")); ?></span>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label('personal id:','id_card',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'id_card','class'=>'form-control','placeholder'=>'personal id','maxlength'=>'13','pattern'=>'[0-9]{13}'),set_value('id_card',$patient['id_card'])); ?>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label('types:','types',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <div class="radio col-md-6">
              <label><?php echo form_radio(array('name'=>'types','class'=>'form-control','id'=>'is_times'),'คนไข้ออกหน่วย',set_radio('types','คนไข้ออกหน่วย',($patient['types'] === 'คนไข้ออกหน่วย'))); ?> คนไข้ออกหน่วย</label>
            </div>
            <div class="col-md-6">
              <?php echo form_number(array('name'=>'times','class'=>'form-control','placeholder'=>'times'),set_value('times',$patient['times'])); ?>
            </div>
            <div class="radio">
              <label><?php echo form_radio(array('name'=>'types','class'=>'form-control'),'กลุ่ม CRC of PSU',set_radio('types','กลุ่ม CRC of PSU',($patient['types'] === 'กลุ่ม CRC of PSU'))); ?> กลุ่ม CRC of PSU</label>
              <p class="help-block"></p>
            </div>
            <div class="radio">
              <label><?php echo form_radio(array('name'=>'types','class'=>'form-control'),'คนไข้ CRC ส่งต่อ',set_radio('types','คนไข้ CRC ส่งต่อ',($patient['types'] === 'คนไข้ CRC ส่งต่อ'))); ?> คนไข้ CRC ส่งต่อ</label>
              <p class="help-block"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label('groups:','groups',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <label class="radio-inline">
              <?php echo form_radio(array('name'=>'groups','class'=>'form-control'),'FAP',set_radio('groups','FAP',($patient['groups'] === 'FAP'))); ?> FAP
            </label>
            <label class="radio-inline">
              <?php echo form_radio(array('name'=>'groups','class'=>'form-control'),'HNPCC',set_radio('groups','HNPCC',($patient['groups'] === 'HNPCC'))); ?> HNPCC
            </label>
            <label class="radio-inline">
              <?php echo form_radio(array('name'=>'groups','class'=>'form-control'),'PJS/JPS',set_radio('groups','PJS/JPS',($patient['groups'] === 'PJS/JPS'))); ?> PJS/JPS
            </label>
            <label class="radio-inline">
              <?php echo form_radio(array('name'=>'groups','class'=>'form-control'),'OTHER',set_radio('groups','OTHER',($patient['groups'] === 'OTHER'))); ?> OTHER
            </label>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label('fullname:','fullname',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-2">
            <?php echo form_dropdown(array('name'=>'title','class'=>'form-control'),array('นาย'=>'นาย','นาง'=>'นาง','นางสาว'=>'นางสาว'),set_value('title',$patient['title'])); ?>
          </div>
          <div class="col-md-3">
            <?php echo form_input(array('name'=>'firstname','class'=>'form-control','placeholder'=>'firstname','required'=>TRUE),set_value('firstname',$patient['firstname'])); ?>
          </div>
          <div class="col-md-5">
            <?php echo form_input(array('name'=>'lastname','class'=>'form-control','placeholder'=>'lastname','required'=>TRUE),set_value('lastname',$patient['lastname'])); ?>
          </div>
        </div>
        <?php echo form_fieldset_close(); ?>
        <?php echo form_fieldset('Filtered'); ?>
        <div class="form-group">
          <?php echo form_label(':','',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'','class'=>'form-control','placeholder'=>'',''=>TRUE),set_value('')); ?>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label(':','',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'','class'=>'form-control','placeholder'=>'',''=>TRUE),set_value('')); ?>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label(':','',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'','class'=>'form-control','placeholder'=>'',''=>TRUE),set_value('')); ?>
          </div>
        </div>
        <?php echo form_fieldset_close(); ?>
        <?php echo form_fieldset('Family'); ?>
        <div class="form-group">
          <?php echo form_label(':','',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'','class'=>'form-control','placeholder'=>'',''=>TRUE),set_value('')); ?>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label(':','',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'','class'=>'form-control','placeholder'=>'',''=>TRUE),set_value('')); ?>
          </div>
        </div>
        <div class="form-group">
          <?php echo form_label(':','',array('class'=>'control-label col-md-2')); ?>
          <div class="col-md-10">
            <?php echo form_input(array('name'=>'','class'=>'form-control','placeholder'=>'',''=>TRUE),set_value('')); ?>
          </div>
        </div>
        <?php echo form_fieldset_close(); ?>
      </div>
      <div class="box-footer clearfix"> </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box box-info">
      <div class="box-header"> <!-- <h3 class="box-title">Edit Patient</h3> --> </div>
      <div class="box-body">
        <h4><i class="fa fa-info-circle"></i> message(s)</h4><hr>
        <?php echo $this->session->flashdata('message'); ?>
        <br>
        <h4><i class="fa fa-info-circle"></i> file attachment</h4><hr>
        <?php
        $files = get_filenames(FCPATH.'uploads');
        $file = $patient['id_card'].'.jpg';
        $viewed = array_search($file, $files) !== FALSE ? base_url('uploads/'.$file) : 'http://placehold.it/300x300';
        echo img($viewed,'',array('class'=>'img-responsive img-rounded','id'=>'preview','style'=>'width:300px;height:300px;margin:0 auto;'));
        ?>
        <br>
        <h4><i class="fa fa-info-circle"></i> file description</h4><hr>
        <p>* max file size 2 MB</p>
        <p>* mime type is only image/jpeg</p>
        <p>* file extension will change to .jpg</p>
        <p>* file scale will change to 300x300px</p>
        <p>* file will overwite automatically by personal id number</p>

      </div>
      <div class="box-footer clearfix">
        <?=anchor(uri_string(),'<i class="fa fa-refresh"></i>',array('class'=>'btn btn-default'));?>
        <span class="pull-right">
          <?=form_submit('','Submit',array('class'=>'btn btn-success',''=>'','autocomplete'=>'off'));?>
        </span>
      </div>
    </div>
  </div>
  <?php echo form_close(); ?>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $("#picture").on('change', function() {
      var countFiles = $(this)[0].files.length;
      var imgPath = $(this)[0].value;
      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
      var image_holder = $("#preview");
      image_holder.empty();
      if (extn == "bmp" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {
          for (var i = 0; i < countFiles; i++) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#preview').attr('src', e.target.result);
            }
            image_holder.show();
            reader.readAsDataURL($(this)[0].files[i]);
          }
        } else {
          alert("This browser does not support FileReader.");
        }
      } else {
        alert("Pls select only images");
      }
    });
  });
</script>
