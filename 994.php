<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function orangesRotting($grid) {

        $queue = [];

        $minites = -1;

        $emptyGrid = 0;

        foreach ($grid as $i => $item)
        {
            foreach ($item as $k => $v)
            {
                if ($this->isolate($grid, $i, $k))
                {
                    return -1;
                }

                if ($this->emptyGrid($grid, $i, $k))
                {
                    ++$emptyGrid;
                }

                if ($this->corrupt($grid, $i, $k))
                {
                    $queue[] = [$i, $k];
                }
            }
        }

        if ($emptyGrid == (count($grid) * count(current($grid))))
        {
            return 0;
        }

        if (empty($queue))
        {
            return -1;
        }

        while (!empty($queue))
        {
            $size = count($queue);

            for ($i = 0; $i < $size; ++$i)
            {
                $coord = array_shift($queue);
                $beginRot = $this->beRot($grid, $coord[0], $coord[1]);
                $queue = array_merge($queue, $beginRot);
            }

            ++$minites;
        }

        foreach ($grid as $i => $item)
        {
            foreach ($item as $k => $v)
            {
                if ($this->fresh($grid, $i, $k))
                {
                    return -1;
                }
            }
        }

        return $minites;
    }

    function emptyGrid(&$grid, $i, $j)
    {
        if (0 == $grid[$i][$j])
        {
            return true;
        }
        return false;
    }

    function fresh(&$grid, $i, $j)
    {
        if (1 == $grid[$i][$j])
        {
            return true;
        }
        return false;
    }

    function corrupt(&$grid, $i, $j)
    {
        if (2 == $grid[$i][$j])
        {
            return true;
        }
        return false;
    }

    function isolate(&$grid, $i, $j)
    {
        if (1 == $grid[$i][$j]
            && (!isset($grid[$i - 1][$j]) || 0 == $grid[$i - 1][$j])
            && (!isset($grid[$i + 1][$j]) || 0 == $grid[$i + 1][$j])
            && (!isset($grid[$i][$j - 1]) || 0 == $grid[$i][$j - 1])
            && (!isset($grid[$i][$j + 1]) || 0 == $grid[$i][$j + 1]))
        {
            return true;
        }

        return false;
    }

    function beRot(&$grid, $i, $j)
    {
        $beginRot = [];

        if (isset($grid[$i - 1][$j]) && 1 == $grid[$i - 1][$j])
        {
            $grid[$i - 1][$j] = 2;
            $beginRot[] = [$i - 1, $j];
        }

        if (isset($grid[$i + 1][$j]) && 1 == $grid[$i + 1][$j])
        {
            $grid[$i + 1][$j] = 2;
            $beginRot[] = [$i + 1, $j];
        }

        if (isset($grid[$i][$j - 1]) && 1 == $grid[$i][$j - 1])
        {
            $grid[$i][$j - 1] = 2;
            $beginRot[] = [$i, $j - 1];
        }

        if (isset($grid[$i][$j + 1]) && 1 == $grid[$i][$j + 1])
        {
            $grid[$i][$j + 1] = 2;
            $beginRot[] = [$i, $j + 1];
        }

        return $beginRot;
    }
}