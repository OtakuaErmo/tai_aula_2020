<?php

include_once '../database/Model.php';

class ClienteModel extends Model
{
    public function __construct()
    {
        Model::setTable("cliente");
    }

}