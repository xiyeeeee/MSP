<!DOCTYPE html>
<html>
<head>
	<title>TRAINING: ETMP</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        
        <p><label for="fileToUpload">Image: </label>
        <input type="file" name="fileToUpload" id="fileToUpload"/></p>
        
        <p><label for="tName">Training Name: </label>
        <input type="text" name="tName" id="tName"/></p>
        
        <p><label for="tCategory">Training Category: </label>
        <input type="text" name="tCategory" id="tCategory"/></p>
        
        <p><label for="tDescription">Training Description: </label>
        <input type="text" name="tDescription" id="tDescription"/></p>
        
        <p><input type="submit" value="Add" name="submit"/></p>
    </form>
    
</body>
</html>