<br>
<h1>Register now</h1>

<?php

use App\core\form\Form;

$from= Form::formBegin('#','post');
?>
    <div class="row">
        <div class="col">
             <?php echo $from->creatField($model,'firstName');?>
        </div>
        <div class="col">
	        <?php echo $from->creatField($model,'lastName');?>
        </div>
    </div>

<?php echo $from->creatField($model,'email');?>
<?php echo $from->creatField($model,'tel');?>
<?php echo $from->creatField($model,'password');?>
<?php echo $from->creatField($model,'confirmPassword'); ?>

<br>
<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::endForm() ?>


