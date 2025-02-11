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
        $count = strlen($s);
        if ($count%2 === 1) {
            return false;
        }
        $brackets = ['[]', '()', '{}'];
        while(strlen($s)/2 > 0) {
            foreach($brackets as $bracket) {
                if (str_contains($s, $bracket)) {
                    $s = str_replace($bracket, '', $s);
                    if (strlen($s) === 0) {
                        return true;
                    }
                }
            }
            if (strlen($s) === $count || strlen($s) === $prevLength) {
                return false;
            }
            $prevLength = strlen($s);
        }
    }
}
// @lc code=end

