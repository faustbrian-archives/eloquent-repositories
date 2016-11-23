<?php

/*
 * This file is part of Eloquent Repositories.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Eloquent\Repositories\Traits\Decorators\Cache;

trait AggregateTrait
{
    /**
     * @return mixed
     */
    public function count()
    {
        $key = $this->buildCacheKey(['count']);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->count();

        return $this->put($key, $records);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function max($column)
    {
        $key = $this->buildCacheKey(['max', $column]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->max($column);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function min($column)
    {
        $key = $this->buildCacheKey(['min', $column]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->min($column);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function avg($column)
    {
        $key = $this->buildCacheKey(['avg', $column]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->avg($column);

        return $this->put($key, $records);
    }

    /**
     * @param $column
     *
     * @return mixed
     */
    public function sum($column)
    {
        $key = $this->buildCacheKey(['sum', $column]);

        if ($records = $this->getFromCache($key)) {
            return $records;
        }

        $records = $this->repository->sum($column);

        return $this->put($key, $records);
    }
}
