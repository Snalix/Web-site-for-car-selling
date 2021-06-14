<?php
class CarModel extends BaseModel
{
private $carRepository;

function __construct() {
$this->carRepository = new CarRepository();
}

public function create($data)
{
return $this->carRepository->create($data);
}

public function view($id)
{
return $this->carRepository->getById($id);
}

public function listAll()
{
return $this->carRepository->getAll();
}

public function search($topic) {
return $this->carRepository->getAllByTopic($topic);
}

public function update($data)
{
return $this->carRepository->update($data);
}

public function delete($id)
{
return $this->carRepository->delete($id);
}
}