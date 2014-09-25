<h2>Post listings</h2>
<?php 
    if(isset($edit) && is_array($edit)){
        ?>
        <table class="table table-hover"><tr>
        
        <td>Title</td><td>Content</td><td colspan="2">Action</td>
        </tr>
        <?php 
            foreach($edit as $edit):?>
            <tr>
                
                <td><?php echo $edit['Edit']['title']; ?></td>
                <td><?php echo $edit['Edit']['content'];?></td>
                <td>
                    <?php echo $this->Html->link('Add', 'edit/');?>
                 </td>
                 <td>
                    <?php echo $this->Html->link('Del', 'delete/');?>
                 </td>
            </tr>
            <?php endforeach;
            if(sizeof($edit)==0) echo "not post found";
        ?>
        </table>
        <?php
    }
?>