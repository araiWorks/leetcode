/*
 * @lc app=leetcode id=141 lang=php
 *
 * [141] Linked List Cycle
 */

// @lc code=start
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $array = [];
        while($head != null) {
            $hash = spl_object_hash($head);
            if (isset($array[$hash])) {
                return true;
            } else {
                $array[$hash] = true;
            }
            $head = $head->next;
        }
        return false;
    }
}
// @lc code=end

