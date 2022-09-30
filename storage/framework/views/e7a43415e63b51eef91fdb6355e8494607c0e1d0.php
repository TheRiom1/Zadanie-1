
<?php $__env->startSection('title', 'Rejestr osobowy'); ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!DOCTYPE html>
    <html lang="pl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Rejestr osobowy</title>
    </head>

    <body>
        <header>
            <h1 class="text-center mt-3">Rejestr osobowy</h1>
        </header>
        <main>
            <hr />
            <div class="row mt-1">
                <div class="col-12 text-right">
                    <a class="btn btn-primary" href="<?php echo e(route('person.create')); ?>">+
                        Nowa osoba</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <table class="table">
                        <tr>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Wiek</th>
                            <th>Płeć</th>
                            <th>Kod pocztowy</th>
                            <th>Miasto</th>
                            <th>Ulica</th>
                            <th>Nr domu</th>
                            <th>Nr mieszkania</th>
                        </tr>
                        <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($person->firstname); ?></td>
                                <td><?php echo e($person->lastname); ?></td>
                                <td><?php echo e($person->age); ?></td>
                                <td><?php echo e($person->gender); ?></td>
                                <td><?php echo e($person->zipcode); ?></td>
                                <td><?php echo e($person->city); ?></td>
                                <td><?php echo e($person->street); ?></td>
                                <td><?php echo e($person->housenumber); ?></td>
                                <td><?php echo e($person->apartmentnumber); ?></td>
                                <td>
                                    <a class="btn btn-sm btn-secondary" href="<?php echo e(route('person.edit', $person->id)); ?>">
                                        Edytuj
                                    </a>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('person.destroy', $person->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-sm btn-danger" type="submit">Usuń</button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <div class="d-flex justify-content-center">
                        <?php echo $people->links(); ?>

                    </div>
        </main>
    </body>

    </html>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\rosobowy\resources\views/person/index.blade.php ENDPATH**/ ?>