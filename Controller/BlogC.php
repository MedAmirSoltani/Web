<?php
require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/Blog.php';
class BlogC
{

    function ShowBlogHome($affich, $search)
    {

        $config = config::getConnexion();
        try {

            // Find out how many items are in the post
            $total = $config->query('
                SELECT
                    COUNT(*)
                FROM
                    post
            ')->fetchColumn();

            // How many items to list per page
            $limit = 5;

            // How many pages will there be
            $pages = ceil($total / $limit);

            // What page are we currently on?
            $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                'options' => array(
                    'default'   => 1,
                    'min_range' => 1,
                ),
            )));

            // Calculate the offset for the query
            $offset = ($page - 1)  * $limit;

            // Some information to display to the user
            /* $start = $offset + 1;
            $end = min(($offset + $limit), $total);

            // The "back" link
            $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

            // The "forward" link
            $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

            // Display the paging information
            echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';
*/
            // Prepare the paged query
            $stmt = $config->prepare('SELECT * FROM post order by Idpost DESC LIMIT :limit OFFSET :offset');
            if ($affich == "ZA") {
                $stmt = $config->prepare('SELECT * FROM post order by Title DESC ');
            } else if ($affich == "AZ") {
                $stmt = $config->prepare('SELECT * FROM post order by Title ASC ');
            } else if ($affich == "Oldest") {
                $stmt = $config->prepare('SELECT * FROM post order by Idpost ASC ');
            } else if ($affich == "Admin") {
                $stmt = $config->prepare('SELECT * FROM post order by Idpost ASC ');
            } else if ($affich == "Active") {
                $stmt = $config->prepare('SELECT * FROM post order by Ncomments DESC ');
            } else if ($affich == "Nactive") {
                $stmt = $config->prepare('SELECT * FROM post order by Ncomments ASC ');
            }
            if (isset($search) && $search != "") {
                $stmt = $config->prepare('SELECT * FROM post where Title like "%' . $search . '%" order by Idpost DESC LIMIT :limit OFFSET :offset');
            }

            // Bind the query params
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            // Do we have any results?
            if ($stmt->rowCount() > 0) {
                // Define how we want to fetch the results
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $iterator = new IteratorIterator($stmt);
                return $iterator;

                // Display the results
                /*foreach ($iterator as $row) {
                    echo '<p>', $row['Title'], '</p>';
                }
            } else {
                echo '<p>No results could be displayed.</p>';*/
            }
        } catch (Exception $e) {
            echo '<p>', $e->getMessage(), '</p>';
        }
    }

    function GetPostbyID($idp)
    {
        $requete = "select * from post where Idpost=:idp";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idp' => $idp
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddBlog($Blog,$idu)
    {

        $config = config::getConnexion();
        try {
            // $this->uploadFile();
            $querry = $config->prepare('
            INSERT INTO post 
            (Title,Picture,Description,Date,ID_utilisateur)
            VALUES
            (:Title,:Picture,:Description,:Date,:ID_utilisateur)
            ');
            $querry->execute([

                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),
                'ID_utilisateur' =>$idu



            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    
    function UpdateBlog($Blog, $idp)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            UPDATE post SET
            Title=:Title, Picture=:Picture,Date=:Date, Description=:Description

            where Idpost=:Idpost
            ');
            $querry->execute([
                "Idpost" => $idp,
                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),

            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function RemoveBlog($idp)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM post WHERE Idpost =:idp
            ');
            $querry->execute([
                'idp' => $idp
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
        header("Refresh:0");
    }
    /*******************************************************************ARCHIVE POST FUNCTIONS *********************************************************** */
    function ShowBlogArchiveHome($affich, $search)
    {
        $config = config::getConnexion();
        try {

            // Find out how many items are in the post
            $total = $config->query('
                SELECT
                    COUNT(*)
                FROM
                    post
            ')->fetchColumn();

            // How many items to list per page
            $limit = 5;

            // How many pages will there be
            $pages = ceil($total / $limit);

            // What page are we currently on?
            $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                'options' => array(
                    'default'   => 1,
                    'min_range' => 1,
                ),
            )));

            // Calculate the offset for the query
            $offset = ($page - 1)  * $limit;

            $stmt = $config->prepare('SELECT * FROM archivepost order by Idpostar DESC LIMIT :limit OFFSET :offset');
            if ($affich == "ZA") {
                $stmt = $config->prepare('SELECT * FROM archivepost order by Title DESC ');
            } else if ($affich == "AZ") {
                $stmt = $config->prepare('SELECT * FROM archivepost order by Title ASC ');
            } else if ($affich == "Oldest") {
                $stmt = $config->prepare('SELECT * FROM archivepost order by Idpostar ASC ');
            }
            if (isset($search) && $search != "") {
                $stmt = $config->prepare('SELECT * FROM archivepost where Title like "%' . $search . '%" order by Idpostar DESC LIMIT :limit OFFSET :offset');
            }

            // Bind the query params
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            // Do we have any results?
            if ($stmt->rowCount() > 0) {
                // Define how we want to fetch the results
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $iterator = new IteratorIterator($stmt);
                return $iterator;
            }
        } catch (Exception $e) {
            echo '<p>', $e->getMessage(), '</p>';
        }
    }
    function GetPostArchivebyID($idpr)
    {
        $requete = "select * from Archivepost where Idpostar=:idp";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute(
                [
                    'idp' => $idpr
                ]
            );
            $result = $querry->fetch();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }

    function AddBlogArchive($Blog, $idp)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO Archivepost 
            (Idpostar,Title,Picture,Description,Date)
            VALUES
            (:Idpostar,:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([
                'Idpostar' => $idp,
                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),



            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function RemoveBlogArchive($idpr)
    {
        $config = config::getConnexion();
        try {
            $querry = $config->prepare('
            DELETE FROM Archivepost WHERE Idpostar =:idp
            ');
            $querry->execute([
                'idp' => $idpr
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
        header("Refresh:0");
    }

    function RestoreBlog($Blog, $idp)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO post 
            (Idpost,Title,Picture,Description,Date)
            VALUES
            (:Idpost,:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([
                'Idpost' => $idp,
                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),



            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function AddNcomments($nombre, $idp)
    {

        $config = config::getConnexion();
        try {
            // $this->uploadFile();
            $querry = $config->prepare('
            Update post Set 
            Ncomments =:Ncomments where Idpost =:idp
            ');
            $querry->execute([
                'Ncomments' => $nombre,
                'idp' => $idp,
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    function AddNvotes($nombre, $idp)
    {

        $config = config::getConnexion();
        try {
            // $this->uploadFile();
            $querry = $config->prepare('
            Update post Set 
            Nvotes =:Nvotes where Idpost =:idp
            ');
            $querry->execute([
                'Nvotes' => $nombre,
                'idp' => $idp,
            ]);
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
}
