<?php

	class ajax{
		public __construct(){
			
		}
		public ajax($data,$urlString){
			  $urlString="../modules/test.php";
			  $data='name'
			echo 
	'function tester() {

    $.ajax({
        type: "POST",
        url: "'.$urlString.'",
        data: "'.$data.'"="+'$data.",
        success: function(data) {
            $('#tester').val(data);
        }
		});
	}';
		}

	}		
	
?>