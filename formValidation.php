
<?php

        if(isset($_POST['submit1'])){
        if($_POST['name'] == ""){
            $error['name'] = "**Name is required";
        }
    }

        if(isset($_POST['submit2'])){
            if($_POST['email'] == ""){
                $error['email'] = "**Email is required";
            }

    }

    if(isset($_POST['submit3'])){
        if($_POST['dob'] == ""){
            $error['dob'] = "**Date of Birth is required";
        }
  
}

if(isset($_POST['submit4'])){
    if($_POST['gender'] == ""){
        $error['gender'] = "**Gender selection is required";
    }

}

if(isset($_POST['submit5'])){
    if($_POST['degree'] == ""){
        $error['degree'] = "**Degree selection is required";
    }

}

if(isset($_POST['submit6'])){
    if($_POST['type'] == ""){
        $error['type'] = "**Blood group selection is required";
    }

}










