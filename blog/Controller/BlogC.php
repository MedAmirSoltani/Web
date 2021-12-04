<?php
require_once "../assets/ASFO/utilis/Config.php";
require_once '../Model/Blog.php';
class BlogC
{
    function ShowBlogHomeZ()
    {
        $requete = "select * from post order by Title Desc ";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }
    
    function ShowBlogHomeA()
    {
        $requete = "select * from post order by Title ASC ";
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
        }
    }


    function ShowBlogHome()
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
            $stmt = $config->prepare('
                SELECT
                    *
                FROM
                    post

                    order
                    by
                    IdPost
                 DESC
                      
                LIMIT
                    :limit
                OFFSET
                    :offset

                
            ');

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


    function ShowBlogHomeByTitle($search)
    {
        $requete = 'select * from post where Title like "%' . $search . '%"';
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
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

    function AddBlog($Blog)
    {

        $config = config::getConnexion();
        try {
            // $this->uploadFile();
            $querry = $config->prepare('
            INSERT INTO post 
            (Title,Picture,Description,Date)
            VALUES
            (:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([

                'Title' => $Blog->getTitle(),
                'Picture' => $Blog->getPicture(),
                'Date' => $Blog->getDate(),
                'Description' => $Blog->getDescription(),



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
    function ShowBlogArchiveHome()
    {
        $config = config::getConnexion();
        try {

            // Find out how many items are in the post
            $total = $config->query('
                SELECT
                    COUNT(*)
                FROM
                    Archivepost
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
            $stmt = $config->prepare('
                SELECT
                    *
                FROM
                    Archivepost
                LIMIT
                    :limit
                OFFSET
                    :offset

                
            ');

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
    function ShowBlogHomeArchiveByTitle($search)
    {
        $requete = 'select * from Archivepost where Title like "%' . $search . '%"';
        $config = config::getConnexion();
        try {
            $querry = $config->prepare($requete);
            $querry->execute();
            $result = $querry->fetchAll();
            return $result;
        } catch (PDOException $th) {
            $th->getMessage();
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

    function AddBlogArchive($Blog)
    {

        $config = config::getConnexion();
        try {

            $querry = $config->prepare('
            INSERT INTO Archivepost 
            (Title,Picture,Description,Date)
            VALUES
            (:Title,:Picture,:Description,:Date)
            ');
            $querry->execute([

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
}
