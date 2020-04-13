<pre>
    <?php

    function speed_test($fun, $arg, $n=100000) {
        $time1 = microtime(TRUE);
    
        for ($i=0; $i < $n; $i++) { 
            $fun($arg);
        }
    
        $time2 = microtime(TRUE);
    
        return $time2 - $time1;
    }
    
    $a1 = array(1,2,3,4,5,6,7,8,9,10);
    print_r($a1);

    $a2 = array_map(function($x){return $x*$x;}, $a1);
    print_r($a2);

    $a3=[];
    foreach ($a1 as $value) {
        $a3[] = $value*$value;
    }

    print_r($a3);

    $a1 = array(1,2,3,4,5,6,7,8,9,10);

    function testSpeed($array){
        return array_map(function($x){return $x*$x;}, $array);
    }

    function testSpeed2($array) {
        $a=[];
            foreach ($array as $value) {
                $a[] = $value * $value;
            }
            return $a;
    }

    function testSpeed3($array) {
        $a=[];
            for ($i=0; $i < count($array); $i++) { 
                $a[] = $array[$i] * $array[$i];
            }
            return $a;
    }

    echo speed_test("testSpeed", $a1);
    echo "<br>";
    echo speed_test("testSpeed2", $a1);
    echo "<br>";
    echo speed_test("testSpeed3", $a1);
    ?>
</pre>