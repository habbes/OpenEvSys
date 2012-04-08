<?php include_once('tabs.php')?>
<?php include_once('event_title.php')?>
<?php
    include_once('card_list.php');
    draw_card_list('vp',$event_id);
?>
<div class="panel">
    <div class='flow'>
        <strong class='first'><?php echo _t('ADD_VICTIM')?></strong>
        <span><?php echo _t('ADD_ACT')?></span>
        <span><?php echo _t('ADD_PERPETRATOR')?></span>
        <span><?php echo _t('ADD_INVOLVEMENT')?></span>
        <span><?php echo _t('FINISH')?></span>
    </div>
    <br />
    <h2><?php echo _t('WHO_IS_THE_VICTIM__') ?></h2>
    <div class="form-container">
        <form id="person_form" name="person_form" action='<?php echo get_url('events','add_victim','new_victim',array('eid'=>$event_id))?>' method='post' enctype='multipart/form-data'>
            <?php $person_form = person_form('new');?>
            <?php $fields = shn_form_get_html_fields($person_form);  ?>
            <?php $fields = place_form_elements($person_form,$fields); ?>  
            <center>   
            <a class="but" href="<?php echo get_url('events','vp_list',null,array('eid'=>$event_id)) ?>"><?php echo _t('CANCEL')?></a>      
            <input type="submit" value="<?php echo _t('CONTINUE') ?>" name='save'/>
			<span>&nbsp;&nbsp;</span>
			
			</center>
        </form>
    </div>
</div>
