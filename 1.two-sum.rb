#
# @lc app=leetcode id=1 lang=ruby
#
# [1] Two Sum
#

# @lc code=start
# @param {Integer[]} nums
# @param {Integer} target
# @return {Integer[]}
def two_sum(nums, target)
    flip = nums.map.with_index.to_h
    p flip
    nums.each_with_index{|value,index|
        diff = target - value
        if flip[diff] && flip[diff] != index
            return [index, flip[diff]];
        end
    }
end

# @lc code=end

