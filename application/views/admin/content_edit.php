<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:60px;">
    <div class="row">
        <div class="col-lg-12">
            <?php echo form_open('admin/content/edit');?>
            <div class="form-group">
                <?php

                echo validation_errors();
                ?>
                <?php
                echo form_label('Text','text_field');
                echo form_error('text_field');
                echo form_textarea('text_field',set_value('text_field',$content->text),'class="form-control"');
                echo form_hidden('c_id',set_value('c_id',$content->id));
                ?>                
            </div>
            
            <?php echo form_submit('submit', "Edit", 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>