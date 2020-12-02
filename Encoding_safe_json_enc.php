<?php
function strMyJson($arr)
	{
	//toto if Object (array)Object
	$str	='';
	if(is_array($arr))
		{
		$str	='{';
		foreach($arr as $strName=>$strValue)
			{
			$strName	=str_replace('"','',$strName);
		$strValue	=str_replace('"','',$strValue);
			$str	.='"'.$strName.'":"'.$strValue.'",';
			}
		$str	=substr($str,0,-1);
		$str	.='}';
		}
	return $str;
	}
?>
