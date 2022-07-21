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

<?php echo $from->creatField($model,'email')->emailField();?>
<?php echo $from->creatField($model,'tel')->numberField();?>
<?php echo $from->creatField($model,'password')->passwordField();?>
<?php echo $from->creatField($model,'confirmPassword')->passwordField(); ?>

<br>
<button type="submit" class="btn btn-primary">Submit</button>

<?php Form::endForm() ?>


