/*
 * @lc app=leetcode id=83 lang=php
 *
 * [83] Remove Duplicates from Sorted List
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
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        if ($head === null || $head->next === null) {
            return $head;
        }
        $current = $head;
        while ($current !== null && $current->next !== null) {
            if ($current->val === $current->next->val) {
                $current->next = $current->next->next;
            } else {
                $current = $current->next;
            }
        }
        return $head;
    }
}
// @lc code=end

