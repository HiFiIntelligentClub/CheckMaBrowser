<?php
		          /*© A.A.CheckMaRev assminog@gmail.com*/
		    ////// 				//
		   //   /\ RCe			/////////
		      //  <  **> 				//
		     //     Jl   				//
		    //////				/////////
		    //$_arrData=array('strDir'=>'dir', 'strFile'=>'file');
//$strJSON	=MyJSON::str(array);
class MyJSON
	{
	public $str	='';
	public $arr	=array();
	public function __construct(
		$_strEvent, 
		$_arrData=
		array(
			'arrJSON'=>array(),
			'strJSON'=>''
			)
		)
		{
		if(!empty($_arrData['arrJSON'])&&is_array($_arrData['arrJSON']))
			{
			$this->str	=$this->strMyJSONRec(($_arrData['arrJSON']);
			}
		}
	private function strMyJSONRec($_arrJSON)
		{
		if(is_array($_arrJSON))
			{
			$str	='{';
			foreach($_arrJSON as $srtName=>$_Value)
				{
				if(!is_int($srtName))
					{
					$str	.='"'.сПреобразовать($srtName, "вКоманду").'":';
					}
				if(is_array($_Value))
					{
					$str	.=$this->strMyJSONRec($_arrJSON[$srtName]);
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
	public static function str($_arrJSON)
		{
		$objMyJSON	=new MyJSON($_arrJSON);
		return substr($objMyJSON->str,0,-2);
		}
	public static function arr()
		{
		}
	}
?>