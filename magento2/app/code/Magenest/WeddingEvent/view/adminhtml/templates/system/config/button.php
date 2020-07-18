<?php $controller = $block->getCustomUrl();
echo $block->getButtonHtml();

?>
<script>
    require([
        'jquery',
    ], function ($) {
        'use strict';
        $("#btn_id").click(function ()
        {
            location.reload();
        })
    });
</script>
