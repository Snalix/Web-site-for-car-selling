<?php
class CarController extends BaseController
{
    private $carModel;
    private $uploadManager;

    function __construct() {
        $this->carModel = new CarModel();
        $this->uploadManager = new UploadManager();
    }

    public function create() {
        if (!empty($_POST) && !empty($_POST["create"])) {
            if (empty($_FILES["file_to_upload"]["error"])) {
                $file_name = $this->uploadManager->uploadImg(); // 12321321_duck.jpg | false
                if (!$file_name) {
                    return false;
                } else {
                    $_POST["picture"] = $file_name;
                }
            }

            $this->carModel->create($_POST);
            header("Location: index.php?controller=cars&action=listAll");
        } else {
            return true;
        }
    }

    public function listAll() {
        if (!empty($_POST) && !empty($_POST["search"])) {
            $searchResults = $this->carModel->search($_POST["model"]);
            if (sizeof($searchResults) > 0) {
                return $searchResults;
            } else {
                return true;
            }
        } else {
            return $this->carModel->listAll();
        }
    }

    public function view() {
        if (!empty($_POST) && !empty($_POST["car_id"])) {
            return $this->carModel->view($_POST["car_id"]);
        } else {
            return false;

        }
    }

    public function update() {
        if (!empty($_POST) && !empty($_POST["update"])) {
            $this->carModel->update($_POST);
            header("Location: index.php?controller=cars&action=listAll");
        } else if (!empty($_GET) && !empty($_GET["car_id"])) {
            return $this->carModel->view($_GET["car_id"]);
        }
    }

    public function delete() {
        if (!empty($_POST) && !empty($_POST["car_id"])) {
            $this->carModel->delete($_POST["car_id"]);
            header("Location: index.php?controller=cars&action=listAll");
        } else {
            return false;
        }
    }
}
