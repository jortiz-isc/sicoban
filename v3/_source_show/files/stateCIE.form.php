<?php 

    error_reporting(E_ALL);
	header ("Expires: Fri, 14 Mar 1980 20:53:00 GMT");
	header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");

	if(!isset($_SESSION))
	{

		
        session_start(); 
		session_cache_limiter('nocache, private');
		if(isset($_SESSION['id']))
		{


?>

	<h4><?php echo('Estado de cuenta CIE diario'); ?></h4>	
	<hr>
	</br>
	<a style="float:right" class="btn btn--gray not-active"  id="5stateCIEFilePointExcel_btn" onclick="importFileExcelPoints(this, 4)">
	    <i class="icon-arrow-shuffle"></i>
		<span>Convertir</span>
	</a>
	<div class="draganddrop" ondrop="drop(event)" ondragover="dragover(event)" ondragenter="dragenter(event)" id="dragFile">
		<img src="../images/icon_asset.svg" alt="" width="300" height="200" class=""><br>
		<span>
			<span class="browse-wrap">
				<span class="tiitleimport"><?php echo('Selecciona un archivo'); ?>
				<input type="file" id="5stateCIEFilePointExcel" name="importfile" class="importfile" accept=".exp, .txt" onchange="selectItemFile(this)"></span>
				 <span style="color: #607D8B; font-size: 18px;"><?php echo('o arrastra y suelta aquí'); ?></span>
			</span>
			
		</span>
		<span id="5stateCIEFilePointExcel_Name" class="upload-path"></span>
	</div> 

	 </br>
	 </br>
  <!--- dialogo de confirmacion -->
  <div id="msg_upload_excel_file" style="display: none;"></div>
                	


<?php 

}

} 

 ?>