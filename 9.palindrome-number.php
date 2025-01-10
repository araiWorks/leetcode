/*
 * @lc app=leetcode id=9 lang=php
 *
 * [9] Palindrome Number
 */

// @lc code=start
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if (strlen($x) === 1) {
            return true;
        } else if ($x < 0 || $x % 10 === 0) {
            return false;
        }
        return strval($x) === strrev($x);
    }
}
// @lc code=end

