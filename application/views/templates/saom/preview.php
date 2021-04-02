<?php $d = $this->app_model->saom_preview ($dev_name); ?>

<object data="data:application/pdf; base64, <?php echo base64_encode ($d); ?>" width="100%" height="900" border=0 type="application/pdf"></object>

