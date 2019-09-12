<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Auth Example</title>

        <link rel="stylesheet" href=" <?php echo e(asset('css/app.css')); ?> ">
    </head>
    <body>
        <div id="app">
        </div>

        <script>
            var BASE_URL = "<?php echo e(URL::to('/')); ?>";
        </script>

        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\authTest\resources\views/welcome.blade.php ENDPATH**/ ?>