/*
 * @lc app=leetcode id=283 lang=php
 *
 * [283] Move Zeroes
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $zeroArray = [];
        $size = sizeof($nums);
        for ($i = 0; $i < $size; $i++) {
            if ($nums[$i] === 0) {
                $zeroArray[] = 0;
                unset($nums[$i]);
            }
        }
        array_values($nums);
        $nums = array_merge($nums, $zeroArray);
    }
}
// @lc code=end

