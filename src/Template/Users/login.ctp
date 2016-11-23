<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>

<?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?>
      
<?= $this->Form->end() ?>