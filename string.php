<?php 
     
class Text 
{ 
    private $text; 

    public function __construct($val = null) 
    { 
        if($val != "" || $val != null) 
        { 
            $this->text = $val; 
        } 
        else 
        { 
            $this->text = ""; 
        } 
    } 

    public function equals($val) 
    { 
       return (($this->text == $val) ? true : false); 
    } 

    public function value() 
    { 
        return $this->text; 
    } 

    public function clear() 
    { 
        $this->text = ""; 
    } 

    public function assign($val) 
    { 
        $this->text = $val; 
    } 

    public function length() 
    { 
        $rtn = strlen($this->text); 
        return $rtn; 
    } 

    public function upperCase($type = "all") 
    { 
        $type = strtolower($type); 

        switch($type) 
        { 
            case "first": 
                $this->text = ucfirst($this->text); 
            break; 

            case "words": 
                $this->text = ucwords($this->text); 
            break; 

            case "all": 
                $this->text = strtoupper($this->text); 
            break; 

            default: 
                $this->text = strtoupper($this->text); 
            break; 
        }  
    } 

    public function lowerCase($type = "all") 
    { 
        $type = strtolower($type); 

        switch($type) 
        { 
            case "first": 
                $this->text = lcfirst($this->text); 
            break; 

            case "all": 
                $this->text = strtolower($this->text); 
            break; 

            default: 
                $this->text = strtolower($this->text); 
            break; 
        } 
    } 

    public function reverse() 
    { 
        $len = strlen($this->text);
		$tmp = "";
		
		for( $i = $len - 1; i >= 0; $i-- )
		{
			$tmp .= $this->text{$i};
		}
		
		$this->text = $tmp;
    } 

    public function combine($txt) 
    { 
        $this->text = $this->text . $txt; 
    } 

    public function contains($txt) 
    { 
        $p = strpos($this->text,$txt); 
        $rtn = FALSE; 

        if($p === FALSE) 
        { 
            $rtn = FALSE; 
        } 
        else 
        { 
            $rtn = TRUE; 
        } 

        return $rtn; 
    } 

    public function chunk($start,$end) 
    { 
        $rtn = ""; 

        if(!is_numeric($start) && !is_numeric($end)) 
        { 
            $rtn = ""; 
        } 
        else 
        { 
            $rtn = substr($this->text,$start,$end); 
        } 

        return $rtn; 
    } 

    public function replace($searchTxt, $replacement) 
    { 
        $this->text = str_replace($searchTxt, $replacement, $this->text); 
    } 

    public function characters() 
    { 
        $len = strlen($this->text);
		$rtn;
		
		for( $i = 0; $i < $len; $i++)
		{
			$rtn[$i] = $this->text{$i};
		} 
		
		return $rtn;
    } 
    public function slim($chars = null) 
    { 
        if(is_null($chars) || $chars != "") 
        { 
           $this->text = trim($this->text); 
        } 
        else 
        { 
            $this->text = trim($this->text,$chars); 
        } 
    } 
} 

?>