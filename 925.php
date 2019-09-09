<?php

class Solution {

    /**
     * @param String $name
     * @param String $typed
     * @return Boolean
     */
    function isLongPressedName($name, $typed)
    {
        $lenName = strlen($name);
        $lenTyped = strlen($typed);

        if ($lenTyped < $lenName)
        {
            return false;
        }

        $i = 0;
        $j = 0;

        while ($i < $lenName && $j < $lenTyped)
        {
            $countName = 0;
            $countTyped = 0;

            $chrName = $name[$i];
            $chrTyped = $typed[$j];

            if ($chrName != $chrTyped)
            {
                return false;
            }

            while ($name[$i] == $chrName)
            {
                ++$countName;
                ++$i;
            }

            while ($typed[$j] == $chrTyped)
            {
                ++$countTyped;
                ++$j;
            }

            if ($countName > $countTyped)
            {
                return false;
            }
        }

        if ($i != $lenName || $j != $lenTyped)
        {
            return false;
        }

        return true;
    }
}