<fieldset>
    <legend><?php __('Add a Post'); ?></legend>
    Please Fill in all fields.
    <?php 
        echo $this->Form->create('Edit');
        echo $this->Form->error('Edit.title');
        echo $this->Form->input('Edit.title',array(
                                        'id'=>'posttitle',
                                        'label'=>'Title',
                                        'size'=>'50',
                                        'maxlength'=>'255',
                                        'error'=>false));
        
        echo $this->Form->input('Edit.content',array(
                                            'id'=>'postcontent',
                                            'type'=>'textarea',
                                            'label'=>'Content',
                                            'rows'=>'10',
                                            'error'=>false));
        
        
        echo $this->Form->end(array('label'=>'submit'));
    ?>
</fieldset>