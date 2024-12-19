/*
 * @lc app=leetcode id=392 lang=php
 *
 * [392] Is Subsequence
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $countS = 0;
        $countT = 0;
        while ($countS < strlen($s) && $countT < strlen($t)) {
            if ($s[$countS] === $t[$countT]) {
                $countS++;
            }
            $countT++;
        }
        return $countS === strlen($s);        
    }
}
// @lc code=end

