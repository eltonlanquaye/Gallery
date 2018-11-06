<? 

    if (isset($_POST['submit'])) {
    
        $newFileName = $_POST['filename'];
        if($_POST['filename']){
            $newFileName = "gallery";
        }else {
            $newFileName = strtolower(str_replace("", "-", $newFileName));
        }
        $imgTitle = $_POST['filetitle'];
        $imgDesc = $_POST['filedesc'];

        $file = $_FILES['file'];

        $fileName = $file['name'];
        $fileType = $file['type'];
        $fileTempName = $file['tmp_name'];
        $fileError = $file['error'];
        $fileSize = $file['size'];

        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array("jpg", "jpeg", "png");

        // Checking for Errors

        if (in_array($fileActualExt, $allowed)) {
            if ($fieError === 0) {
                if ($fileSize > 2000000){

                } else {
                    echo 'The file size is too big';
                }
            } else  {
                echo "You had an error!";
                exit();
            }
        }else {
            echo 'You need to upload a proper file type!';
            exit();
        }
    }