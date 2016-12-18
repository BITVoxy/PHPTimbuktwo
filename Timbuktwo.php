<?php

 namespace Timbuktwo;


class Timbuktwo {
    /**
     * Convert to/from/between Bitcoin units
     *
     * @param string $value a amount needing conversion
     * @param array $type satoshi|mbit/millibitcoins|bitcoin/btc|bits/uBTC
     *
     * @return string containing new unit value 
     * STATUS:NOT_COMPLETED
     */
    public static function btcUnit($value, $type = 'satoshi', $n = null) {
        switch ($type) {
            default:
            case 'btc':
            case 'bitcoin':
                $unit = 1;
                break;
            case 'mbtc':
            case 'millibitcoin':
                $unit = 1000;
                break;
            case 'bit':
            case 'microbitcoin':
                $unit = 1000000;
                break;
            case 'satoshi':
                $unit = 100000000;
                break;
        }
        if ($n == true) {
            # code...
            $Nvalue = bcmul( $value, $unit, 8 );
        } else {
            $Nvalue = bcdiv( $value, $unit, 8 );
        }
        return $Nvalue;
    }
    public static function btcConv($value,$to) {
        switch ($to) {
            case 'btc_sat':
                # code...
                $amount = ($value)*(pow(10, 8));
                break;
            case 'btc_bits':
                # code...
                $amount = ($value)*(pow(10, 6));
                break;
            case 'btc_mbit':
                # code...
                $amount = ($value)*(pow(10, 3));
                break;

            case 'sat_btc':
                # code...
                $amount = number_format(($value)*(pow(10, -8)), 8, '.', '');
                break;
            case 'sat_bits':
                # code...
                $amount = ($value)*(pow(10, -2));
                //$amount = ($value)/(pow(10, 2));
                break;                
            case 'sat_mbit':
                # code...
                $amount = ($value)*(pow(10, -5));
                break;
        }
        return $amount;
    }
    public static function btcFormat($value) {
        // do this later
    }
}
?>
