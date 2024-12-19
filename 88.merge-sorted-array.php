/*
 * @lc app=leetcode id=88 lang=php
 *
 * [88] Merge Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        if ($m > 0) {
            array_splice($nums1, $m);
            $nums1 = array_merge($nums1, $nums2);
            sort($nums1);
        } else if ($m === 0) {
            $nums1 = $nums2;
            sort($nums1);
        }
    }
}
// @lc code=end

