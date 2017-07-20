<?php
namespace LingORM\Mapping;

class FieldType
{
	static public function typeParse($value,$type)
	{
	    $result=$value;
		switch ($type)
		{
			case "string":
			    $result = strval($value);
			    break;
			case "int":
			    $result = intval($value);
			    break;
		    case "integer":
		        $result = intval($value);
		        break;
		    case "smallint":
		        $result = intval($value);
		        break;
		    case "tinyint":
		        $result = intval($value);
		        break;
		    case "float":
		        $result = floatval($value);
		        break;
		    case "double":
		        $result = doubleval($value);
		        break;
		    case "decimal":
		        $result = doubleval($value);
		        break;
		    case "datetime":
		        $result = new \DateTime($value);
		        break;
		    default:
		        $result=$value;
		}
		return $result;
	}
	
	
	
}