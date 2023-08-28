<!-- src/Template/Users/registration.php -->

<h1>Registration</h1>

<?= $this->Form->create() ?>
    <?= $this->Form->control('name', ['required' => true]) ?>
    <?= $this->Form->control('password', ['required' => true]) ?>
    <?= $this->Form->button('Register') ?>
<?= $this->Form->end() ?>
