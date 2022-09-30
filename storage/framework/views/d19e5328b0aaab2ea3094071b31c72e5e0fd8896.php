
<?php $__env->startSection('title', 'Nowy osoba'); ?>
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edycja danych | Rejestr osobowy</title>
</head>

<body>
    <header>
        <h1 class="text-center mt-3">Edycja danych</h1>
    </header>
    <main>
        <?php if($errors->any()): ?>
        <div class="row mt-1">
            <div class="alert alert-danger" role="alert">
            <div>
                <strong>Walidacja danych</strong>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('person.update', $person->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
        

            <label for="firstname">Imię:</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="npJan" value="<?php echo e($person->firstname); ?>"><br>

            <label for="lastname">Nazwisko:</label><br>
            <input type="text" id="lastname" name="lastname" placeholder="np.Kowalski" value="<?php echo e($person->lastname); ?>"><br>

            <label for="age">Wiek:</label><br>
            <input type="text" id="age" name="age" placeholder="np. 23" value="<?php echo e($person->age); ?>"><br>

            <label for="gender">Płeć:</label><br>
            <input type="text" id="gender" name="gender" placeholder="np. 23" value="<?php echo e($person->gender); ?>"><br>
            
            <label for="zipcode">Kod pocztowy:</label><br>
            <input type="zipcode" id="zipcode" name="zipcode" placeholder="np. 23456" value="<?php echo e($person->zipcode); ?>"><br>
            
            <label for="city">Miasto:</label><br>
            <input type="city" id="city" name="city" placeholder="np. Poznań" value="<?php echo e($person->city); ?>"><br>

            <label for="street">Ulica:</label><br>
            <input type="street" id="street" name="street" placeholder="np. Akacjowa" value="<?php echo e($person->street); ?>"><br>

            <label for="housenumber">Numer domu:</label><br>
            <input type="housenumber" id="housenumber" name="housenumber" placeholder="np. 23" value="<?php echo e($person->housenumber); ?>"><br>

            
            <label for="apartmentnumber">Numer mieszkania:</label><br>
            <input type="apartmentnumber" id="apartmentnumber" name="apartmentnumber" placeholder="np. 23" value="<?php echo e($person->apartmentnumber); ?>"><br>




            <input type="submit" value="Zapisz">
        </form>
    </main>
</body>

</html>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\rosobowy\resources\views/person/edit.blade.php ENDPATH**/ ?>