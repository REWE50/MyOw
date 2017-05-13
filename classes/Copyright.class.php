<?php
	class Copyright
	{
		public function insertCopyright()
		{
			if(date("Y")<=2017)
			{
				echo 'Copyright MyOw 2017';
			}
			else
			{
				echo 'Copyright MyOw 2017 - ' . date("Y");
			}
		}
	}	
?>