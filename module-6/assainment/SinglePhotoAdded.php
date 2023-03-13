<?php
class multiplePhotoAdded {
    private $upload_ok = 1;
    private $photosTmpName;
    private $photosName;

    function __construct($fileName, $fileUploaded) {
        try {
            if(isset($_FILES[$fileName])) { 
                    if($_FILES[$fileName]["name"]) {
                        $photosName = $fileUploaded.$_FILES[$fileName]["name"];
                        $photosTypeOrginal = strtolower(pathinfo($photosName)["extension"]);
                        $photosTmpName = $_FILES[$fileName]["tmp_name"];
                        $photosSize = $_FILES[$fileName]["size"];

                        $this->photosName = str_replace(" ", "_", $photosName);;
                        $this->photosTmpName = $photosTmpName;

                        if (file_exists($photosName)) {
                            $this->upload_ok = 0;
                            throw new Exception("Sorry, file already exists.");
                        }
                        
                        if ($photosSize > 1000000) {
                            $this->upload_ok = 0;
                            throw new Exception("Sorry, your file is too large.");
                        }
                        
                        $allowed_file_types = array("jpg", "png", "jpeg", "gif");
                        if(!in_array($photosTypeOrginal, $allowed_file_types)) {
                            $this->upload_ok = 0;
                            throw new Exception("Sorry, only JPG, JPEG, PNG & GIF files are allowed");
                        }
                        
                        if ($this->upload_ok == 0) {
                            throw new Exception("Sorry, your file was not uploaded");
                        }
                    } else {
                        $this->upload_ok = 0;
                        throw new Exception("Please add all photos");
                    }
            }
        } catch (Exception $e) {
            echo $e->getMessage()."<br>";
        }
    }

    public function fileUploaded() {
        if(($this->upload_ok) == 1) {
            if (!move_uploaded_file($this->photosTmpName, $this->photosName)) {
                echo ("Sorry, there was an error uploading your file.");
            }
        }
    }

    public function getPhotosName() {
        return $this->photosName;
    }

    public function getAnyError() {
        return $this->upload_ok;
    }
}