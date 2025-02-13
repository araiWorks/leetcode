/*
 * @lc app=leetcode id=26 lang=php
 *
 * [26] Remove Duplicates from Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $nums = array_keys(array_flip($nums));
    }
}
// @lc code=end

