<?php
abstract class BaseModel
{
    public abstract function listAll();
    public abstract function update($data);
    public abstract function create($data);
    public abstract function delete($id);
    public abstract function view($id);
}