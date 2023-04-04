<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censuring</title>
</head>
<body>

    <h2>Your text:</h2> 
        <p><?php echo $_GET['text']?></p>  
        <h3>Length:</h3>
        <p><?php echo strlen($_GET['text'])?> characters</p>
    <h2>Censored version:</h2> 
        <p><?php echo str_ireplace($_GET['censured-word'], "***", $_GET['text'])?>
        <h3>Length:</h3><p>
        <p><?php echo strlen(str_ireplace($_GET['censured-word'], "***", $_GET['text']))?> characters</p>
</body>
</html>