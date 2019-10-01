<div class="main">
        <section class="signup">
            <div class="container">
              <?= $this->Form->create($users,['class'=>'col s12']) ?>
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <div class="form-group">
                            <?php echo $this->Form->input('name',['label'=>'','placeholder'=>'Nombre','class'=>'form-input','required']);?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('last_name',['label'=>'','placeholder'=>'Apellido','class'=>'form-input','required']);?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('email',['label'=>'','placeholder'=>'Email','class'=>'form-input','required']);?>
                        </div>
                        <div class="form-group">
                            <?= $this->Form->button(__('Crear'),['class'=>'form-submit'])?>
                        </div>
                    </form>
                </div>
              <?= $this->Form->end() ?>
            </div>
        </section>
    </div>
