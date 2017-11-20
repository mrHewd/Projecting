<?php

class View
{
	function generate($content_view, $data)
	{
		/*
		if(is_array($data)) {
			// преобразуем элементы массива в переменные
			extract($data);
		}
		*/
		
		include 'application/views/main_view.php';
	}
}
?>