<?php if (!defined('BASEPATH')) exit('No direct Script Access Allowed');

	function generate_pdf($object,$filename='',$direct_download=TRUE){
		require_once("dompdf/dompdf_config.inc.php");
		$dompdf = new dompdf();
		$dompdf->load_html($object); //biar bisa terbaca htmlnya
		$dompdf->render();
		if ($direct_download == TRUE) {
			$dompdf->stream($filename);
		}else{
			return $dompdf->$output();
		}
	}

 ?>