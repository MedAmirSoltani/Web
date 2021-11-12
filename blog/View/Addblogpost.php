


<!-------------------------------------------------HTML CODE TO view add post ----------------------------------->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../assets/css/admin.css">

        <title>Admin Section - Add Post</title>
    </head>

    <body>
      

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="index.html">Manage Posts</a></li>
                    
                    
                </ul>
            </div>
            <!-- // Left Sidebar -->


            <!-- Admin Content-->
            <div class="admin-content">
            <!--    <div class="button-group">
                  <a href="create.html" class="btn btn-big">Add Post</a>
                    <a href="index.html" class="btn btn-big">Manage Posts</a>
                </div> -->


                <div class="content">

                    <h2 class="page-title">Manage Posts</h2>

                    <form action="create.html" method="post">
                        <div>
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="text-input">
                        </div>
                        <div>
                            <label>Description</label>
                            <textarea name="Description" id="Description" name="Description"></textarea>
                        </div>
                        <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

    </body>

</html>