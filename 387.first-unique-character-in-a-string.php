/*
 * @lc app=leetcode id=387 lang=php
 *
 * [387] First Unique Character in a String
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $alpha = [];
        for ($i = 0; $i < strlen($s); $i++) {
            $alpha[$s[$i]]++;
        }
        for ($i = 0; $i < strlen($s); $i++) {
            if ($alpha[$s[$i]] === 1) {
                return $i;
            }
        }
        return -1;
    }
}
// @lc code=end

