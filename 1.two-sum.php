/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        asort($nums);
        $searchArray = $nums;
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $searchArray[$i];
            unset($searchArray[$i]);
            if (in_array($complement, $searchArray)) {
                $key = array_keys($searchArray, $complement);
                return [$i, $key[0]];
            }
        }
    }

}
// @lc code=end

