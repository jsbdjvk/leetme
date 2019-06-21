<?php


class Solution {

        /**
         * @param Integer[] $digits
         * @return Integer[]
         */
        function plusOne($digits)
        {
            $digits = array_reverse($digits);

            $digits[0]++;

            foreach ($digits as $key => $val)
            {
                $up = ($digits[$key] >= 10) ? 1 : 0;
                $surplus = $digits[$key] % 10;

                $digits[$key] = $surplus;

                if ($up)
                {
                    $digits[$key + 1] += $up;
                }
            }

            return array_reverse($digits);
        }
}