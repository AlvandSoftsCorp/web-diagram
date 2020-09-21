<?php
    
    $std_tbl = array(
        'names'=>array('Ali', 'Reza', 'Sepehr', 'Sima', 'محسن'),
        'grades'=>array(15, 18, 19, 12, 16.25)
    );

    $jsn_str = json_encode($std_tbl);
    echo $jsn_str;
?>