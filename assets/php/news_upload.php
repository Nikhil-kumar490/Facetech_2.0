<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>
    <link rel="stylesheet" href="../css/news_upload_style.css">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<header>
       <div class="header_left">
       <div class="header-left">
       <a href="profilepage.php"><div class="profile"></div></a>
            <a href="#" class="sale">Hi  <?php session_start(); echo $_SESSION["username"];?></a>
        </div>

        <div class="header-center">
            <input type="text" placeholder="Search...">
        </div>
       </div>

        <div class="header-right">
            <a href="../../index.php">Home</a>
            <a href="news.php">News</a>
            <a href="blog.php">Blog</a>
            <a href="assets/php/logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>

        
        </div>
    </header>
    <div class="container">
        <div class="form-section">
            <h2>UPLOAD NEWS</h2>
            <hr><br>
            <div class="form-group">
                <label for="imageUpload">Upload Image:</label>
                <input type="file" id="imageUpload" accept="image/*">
            </div>
            <div class="form-group">
                <label for="blogTitle">Blog Title:</label>
                <input type="text" id="blogTitle" placeholder="Enter blog title">
            </div>
            <div class="form-group">
                <label for="blogContent">Blog Content:</label>
                <textarea id="blogContent" rows="10" placeholder="Write your blog content here..."></textarea>
            </div>
            <div class="button-group">
                <button id="submitBtn">Submit</button>
                <button id="previewBtn">Preview</button>
            </div>
        </div>




        <div class="preview-section">
            <h2>PREVIEW</h2>
            <hr><br>
            <div class="preview-content">
                <div class="preview-image" id="previewImage"></div>
                <div class="preview-title" id="previewTitle"></div>
                <div class="preview-text" id="previewText"></div>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
