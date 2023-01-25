<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/all.min.js"></script> 
</head>
<body>
    <header>
        <nav class="navbar navbar-expand container bg-warning p-3">
            <h1 class="navbar-brand">
                <strong>APPBYARJINOMOTO</strong>
            </h1>
            <div class="flex-fill"></div>
            <div class="navbar-nav">
                <span class="nav-item">
                    <a href="#" class="nav-link active">Home <i class="fas fa-house"></i> </a>    
                </span>
                <span class="nav-item">
                    <a href="#" class="nav-link">About <i class="fas fa-contact-book"></i></a>    
                    </span>
                    <span class="nav-item">
                        <a href="#" class="nav-link">Sign In <i class="fas fa-sign-in"></i></a>    
                </span>
            </div>
        </nav>
    </header>
    
    <main class="container p-3 bg-info-subtle">
        <section>
            <h4>Create New Article</h4>
            <hr>
            <form action="_actions/create.php">
                <label for="postTitle" class="form-label">Article's title</label>
                <input type="text" id="postTitle" name="title" class="form-control">
                
                <label for="postBody" class="form-label mt-1">Content</label>
                <textarea name="body" id="postBody" rows="2" class="form-control"></textarea>
                
                <label for="categ" class="form-label mt-1">Category</label>
                <select name="category_id" id="categ" class="form-select">
                    <option value="">News</option>
                    <option value="">Health</option>
                    <option value="">Sports</option>
                    <option value="">Technology</option>
                </select>
                <br>
                <input type="submit" value="Create" class="form-control">
            </form>
        </section>
    </main>
</body>
</html>