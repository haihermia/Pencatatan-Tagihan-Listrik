<?php
//-->session
function Istb_admin(){
$ci =& get_instance();
//session akan aktif jika session bernilai 1
if($ci->session->userdata('Istb_admin')<>1){
redirect('auth','refresh');

}
}
//-->Endsession
?>