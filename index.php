<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>$_GET and $_POST</title>
</head>
<body>
    <div class="container">
        <div class="row">
        
            <div class="col">
                <h3 class="display-4"> Enter a word</h3>        
                <hr>

                <form action="process.php" method="GET">

                    <div class="form-group">
                        <label for="word">Word</label>

                        <input type="text" name="word" class="form-control">

                    </div>
                    <button type="submit" class="btn btn-primary"> Check the word length</button>
                    

                
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>