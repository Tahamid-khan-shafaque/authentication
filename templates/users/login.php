<!-- src/Template/Users/login.php -->

<h1>Login</h1>

<?= $this->Form->create() ?>
    <?= $this->Form->control('name', ['required' => true]) ?>
    <?= $this->Form->control('password', ['required' => true]) ?>
    <?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
