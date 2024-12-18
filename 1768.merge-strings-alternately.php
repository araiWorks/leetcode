/*
 * @lc app=leetcode id=1768 lang=php
 *
 * [1768] Merge Strings Alternately
 */

// @lc code=start
class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $i = 0;
        $j = 0;
        $length1 = strlen($word1);
        $length2 = strlen($word2);
        $result = '';
        while ($i < $length1 && $j < $length2) {
            $result .= $word1[$i];
            $result .= $word2[$j];
            $i++;
            $j++;
        }
        if ($i < $length1) {
            $pointer = -1 * ($length1 - $i);
            $result .= substr($word1, $pointer);
        } else if ($j < $length2) {
            $pointer = -1 * ($length2 - $j);
            $result .= substr($word2, $pointer);
        }
        return $result;
    }
}
// @lc code=end

