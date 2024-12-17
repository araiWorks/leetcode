/*
 * @lc app=leetcode id=2 lang=php
 *
 * [2] Add Two Numbers
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $carryoverFlg = false;
        $result = [];
        $sum = $l1->val + $l2->val;
        var_dump($l1->next->next->next);

        if ($sum >= 10) {
            $carryoverFlg = true;
            $carryover = $sum/10;
            $result[] = $sum - (10 * $carryover);
        } else {
            $result[] = $sum;
        }
    }
}
// @lc code=end

