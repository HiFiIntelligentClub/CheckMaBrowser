<?php
class MyJSON
	{
	public function __construct($_arrJson)
		{
		if(is_array($_arrJson))
			{
			$str	='{';
			foreach($_arrJson as $srtName=>$_Value)
				{
				if(!is_int($srtName))
					{
					$str	.='"'.сПреобразовать($srtName, "вКоманду").'":';
					}
				if(is_array($_Value))
					{
					$str	.=strMyJsonRec($_arrJson[$srtName]);
					}
				else
    					{
					$str	.='"'.сПреобразовать($_Value, "вКоманду").'", ';
					}
				}
			$str	=substr($str,0,-2);
			$str	.='}, ';
			}
		return $str;
		}
	function strMyJson($_arrJson)
		{
		return substr(strMyJsonRec($_arrJson),0,-2);
		}
	public static function arr()
		{
		}
	}
?>