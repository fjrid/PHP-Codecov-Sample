<?php
declare(strict_types=1);

namespace Freekup\PhpCodecovSample;

class Math
{
    /**
     * @param int[] $nums
     * @return int
     */
    public function sum(array $nums): int
    {
        return array_sum($nums);
    }
}