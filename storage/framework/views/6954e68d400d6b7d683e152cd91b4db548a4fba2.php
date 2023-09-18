<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <p>Olá ORIGO, você acaba de receber um email de: <?php echo e($data['Nome']); ?></p>
    <p>Email para contato: <?php echo e($data['Email']); ?></p>
    <p>Assunto: <?php echo e($data['Assunto']); ?></p>
    <p>Mensagem: <?php echo e($data['Mensagem']); ?></p>
</body>
</html><?php /**PATH C:\TCC-ORIGO\tcc\resources\views/emails/demoMail.blade.php ENDPATH**/ ?>