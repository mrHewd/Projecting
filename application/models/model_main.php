<?php
class Model_Main extends Model
{
    public function get_data()
    {   
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'bookshop';

        $genres[] = array();
        $books[] = array();

        $con=mysqli_connect($hostname, $username, $password, $database);
        mysqli_query($con, "SET NAMES 'utf8' ");
        $query = "SELECT genre.id, genre.name FROM genre";
        $genre = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($genre)) {
        	$genres[] = array('id' => $row['id'], 'name' => $row['name']);
        }
        array_shift($genres);

        mysqli_query($con, "SET NAMES 'utf8' ");
        $query = "SELECT book.id, book.name, book.genreId FROM book";
        $modelBook = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($modelBook)) {
        	$books[] = array('id' => $row['id'], 'name' => $row['name'], 'genreId' => $row['genreId']);
        }
        array_shift($books);
    }
}
?>