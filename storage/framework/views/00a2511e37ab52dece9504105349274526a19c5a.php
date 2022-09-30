

<?php $__env->startSection('title', 'Nowa osoba'); ?>
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nowy osoba | Rejestr osobowy</title>
</head>

<body>
    <header>
       
            <h1 class="text-center mt-3">Nowa osoba</h1>
            <hr/>
    </header>
    <main>
        <?php if($errors->any()): ?>
        <div class="row mt-1">
            <div class="alert alert-danger" role="alert">
                <strong>Walidacja danych</strong>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('person.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <label for="firstname">Imię:</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="npJan"><br>
            <label for="lastname">Nazwisko:</label><br>
            <input type="text" id="lastname" name="lastname" placeholder="np.Kowalski"><br>
            <label for="age">Wiek:</label><br>
            <input type="text" id="age" name="age" placeholder="np. 23"><br>
            <label for="gender">Płeć:</label><br>
            <input type="text" id="gender" name="gender" placeholder="np. 23"><br>
            <label for="zipcode">Kod pocztowy:</label><br>
            <input type="zipcode" id="zipcode" name="zipcode" placeholder="np. 23456"><br>
            
            <label for="city">Miasto:</label><br>
            <input type="city" id="city" name="city" placeholder="np. Poznań"><br>

            <label for="street">Ulica:</label><br>
            <input type="street" id="street" name="street" placeholder="np. Akacjowa"><br>

            <label for="housenumber">Numer domu:</label><br>
            <input type="housenumber" id="housenumber" name="housenumber" placeholder="np. 23"><br>

            
            <label for="apartmentnumber">Numer mieszkania:</label><br>
            <input type="apartmentnumber" id="apartmentnumber" name="apartmentnumber" placeholder="np. 23"><br>
            <input type="submit" value="Zapisz">
        </form>
    </main>
</body>

</html>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\rosobowy\resources\views/person/create.blade.php ENDPATH**/ ?>