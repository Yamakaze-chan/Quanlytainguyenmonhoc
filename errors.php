<?php if(count($error) > 0): ?>
    <div class = "error">
        <?php foreach($error as $err): ?>
            <p style="color: red"><?php echo $err; ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>