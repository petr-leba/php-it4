<?php
    function secti($a, $b) {
        return $a + $b;
    }

    function odecti($a, $b) {
        return $a - $b;
    }

    $vysledek = 0;
    $a = $b = 0;

    if(isset($_POST['result'])) {
        switch($_POST['operace']) {
            case "+": $vysledek = secti($_POST['a'], $_POST['b']);
                break;
            case "-": $vysledek = odecti($_POST['a'], $_POST['b']);
                break;
            default:
                break;
        }
        $a = $_POST['a'];
        $b = $_POST['b'];
    }
    
    function vynasob($a, $b) {
        return $a * $b;
    }

    function vydel($a, $b) {
        return $a / $b;
    }

    if(isset($_POST['result'])) {
        switch($_POST['operace']) {
            case "*": $vysledek = vynasob($_POST['a'], $_POST['b']);
                break;
            case "/": $vysledek = vydel($_POST['a'], $_POST['b']);
                break;
            default:
                break;
        }
        $a = $_POST['a'];
        $b = $_POST['b'];
    }

?>