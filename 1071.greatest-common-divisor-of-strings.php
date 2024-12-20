/*
 * @lc app=leetcode id=1071 lang=php
 *
 * [1071] Greatest Common Divisor of Strings
 */

// @lc code=start
class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        $i = 0;
        $t = '';
        if (strlen($str2) > strlen($str1)){
            return $this->gcdOfStrings($str2, $str1);
        }
        if (empty($str2)) {
            return $str1;
        }
        if (str_starts_with($str1, $str2) === false) {
            return '';
        }
        return $this->gcdOfStrings($str2, $this->mod($str1, $str2));
    }

    private function mod($str1, $str2) {
        while(str_starts_with($str1, $str2)) {
            $str1 = substr($str1, strlen($str2));
        }
        return $str1;
    }
}
// @lc code=end

