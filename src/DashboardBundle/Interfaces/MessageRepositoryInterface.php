<?php
/**
 * Created by PhpStorm.
 * User: vtarasenkovs
 * Date: 5/24/17
 * Time: 6:03 PM
 */

namespace DashboardBundle\Interfaces;


interface MessageRepositoryInterface
{
    public function get();

    public function save($data);

    public function delete();
}