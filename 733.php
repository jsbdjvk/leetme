<?php

class Solution {

    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $newColor
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $newColor)
    {
        $oriColor = $image[$sr][$sc];

        $map = [];

        $this->floodFillEx($image, $sr, $sc, $newColor, $oriColor, $map);

        return $image;
    }

    function floodFillEx(&$image, $sr, $sc, &$newColor, &$oriColor, &$map = [])
    {
        $buff = [];

        $image[$sr][$sc] = $newColor;

        $map[$sr . ',' . $sc] = 0;

        if (isset($image[$sr - 1][$sc]) && !isset($map[($sr - 1) . ',' . $sc]) && $image[$sr - 1][$sc] == $oriColor)
        {
            $buff[] = [$sr - 1, $sc];
        }

        if (isset($image[$sr + 1][$sc]) && !isset($map[($sr + 1) . ',' . $sc]) && $image[$sr + 1][$sc] == $oriColor)
        {
            $buff[] = [$sr + 1, $sc];
        }

        if (isset($image[$sr][$sc - 1]) && !isset($map[$sr . ',' . ($sc - 1)]) && $image[$sr][$sc - 1] == $oriColor)
        {
            $buff[] = [$sr, $sc - 1];
        }

        if (isset($image[$sr][$sc + 1]) && !isset($map[$sr . ',' . ($sc + 1)]) && $image[$sr][$sc + 1] == $oriColor)
        {
            $buff[] = [$sr, $sc + 1];
        }

        foreach ($buff as $val)
        {
            $this->floodFillEx($image, $val[0], $val[1], $newColor, $oriColor, $map);
        }
    }
}