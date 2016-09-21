<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="container" style="margin-top:60px;">
    <div class="row">
        <div class="col-lg-12">
            <?php echo form_open('admin/content/create_data');?>
            <div class="form-group">
                <?php

                echo validation_errors();
                ?>
                <?php
                echo form_label('Text','text_field');
                echo form_error('text_field');
                echo form_textarea('text_field',null,'class="form-control"');
                ?>
            </div>
            
            <?php echo form_submit('submit', "Add", 'class="btn btn-primary btn-lg btn-block"');?>
            <?php echo form_close();?>
        </div>
    </div>
</div>