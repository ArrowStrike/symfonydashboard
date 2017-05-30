<?php

namespace DashboardBundle\Repository;

use DashboardBundle\Interfaces\CacheInterface;
use DashboardBundle\Interfaces\MessageRepositoryInterface;

/**
 * Created by PhpStorm.
 * User: vtarasenkovs
 * Date: 5/24/17
 * Time: 6:19 PM
 */
class MemcacheMessageRepository implements MessageRepositoryInterface
{
    private $cache;
    private $id;

    public function __construct(CacheInterface $cache)
    {
        $this->cache = $cache;
    }

    public function get()
    {
        return $this->cache->get($this->id);
    }

    public function save($data)
    {
        return $this->cache->save($data, $this->id);
    }

    public function delete()
    {
        return $this->cache->delete($this->id);
    }
}