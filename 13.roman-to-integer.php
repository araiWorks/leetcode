/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $map = [
            "I" => 1,
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000,
        ];
        $map_keys = array_flip(array_keys($map));
        $result = 0;
        for($i = 0; $i < strlen($s); $i++) {
            $current = $s[$i];
            $next = $s[$i + 1];

            if ($i === strlen($s) - 1 || $map_keys[$current] >= $map_keys[$next]) {
                $result = $result + $map[$current];
            } else {
                $result = $result - $map[$current];
            } 
        }
        return $result;
    }
}
// @lc code=end

