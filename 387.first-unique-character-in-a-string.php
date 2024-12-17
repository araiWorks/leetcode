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
        $wordArray = str_split($s);
        $repeatedLetters = [];
        for ($i = 0; $i < count($wordArray); $i++) {
            if (in_array($wordArray[$i],$repeatedLetters)) {
                continue;
            }
            $keys = array_keys($wordArray, $wordArray[$i]);
            if (count($keys) === 1) {
                return $i;
            } else if (count($keys) > 1) {
                $repeatedLetters[] = $wordArray[$i];
            }
        }
        return -1;
    }
}
// @lc code=end

