/*
 * @lc app=leetcode id=20 lang=php
 *
 * [20] Valid Parentheses
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $map  = [
            ")" => "(", 
            "]" => "[", 
            "}" => "{",
        ];
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $current = $s[$i];
            $mappedClosing = $map[$current] ?? null;
            if (empty($mappedClosing)) {
                $stack[] = $current;
            } else {
                $lastStacked = end($stack);
                if ($lastStacked === $mappedClosing) {
                    array_pop($stack);
                } else {
                    $stack[] = $current;
                }
            }
        }
        return empty($stack);
    }
}
// @lc code=end

