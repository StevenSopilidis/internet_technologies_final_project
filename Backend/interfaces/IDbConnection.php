<?php


interface IDbConnection
{
    public function getConnection(): mysqli;
}