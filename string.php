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

    public function reverse($words = TRUE, $sep = ' ') 
    { 
        $tmp; 

        if($words == TRUE) 
        { 
            $tmp = explode($sep, $this->text); 
            $tmp = array_reverse($tmp); 
            $this->text = implode($sep, $tmp); 
        } 
        else if($words == FALSE) 
        { 
            $this->text = strrev($this->text); 
        } 
        else 
        { 
            $this->text = strrev($this->text); 
        } 
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

    public function characters($len = 0) 
    { 
        $rtn; 

        if($len > 0) 
        { 
            $rtn = str_split($this->text,$len); 
        } 
        else 
        { 
            $rtn = str_split($this->text); 
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