 <?php
    include 'database.php';
    session_start();
    $dbConn = getDatabaseConnection();
    $sql = "SELECT distinct category from p1_quotes";
    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    print_r($records);
    
    function displayQuotes() {
        global $dbConn;
        $keyword_search = False;
        if(isset($_POST['submit'])){
            $sql = "SELECT * FROM p1_quotes ";
            if(isset($_POST['keyword']) && $_POST['keyword'] != ""){
                $keyword = $_POST['keyword'];
                $sql .= " WHERE quote LIKE :keyword";
                $keyword_search = True;
            }
            
            if(!empty($_POST['category'])) {
                $category = $_POST['category'];
                if($keyword_search == True){
                    $sql .= " AND category = :category";
                }
                else{
                    $sql .= " WHERE category = :category";
                }
                
            }
            if (isset($_POST["orderBy"])) {
                if ($_POST["orderBy"] == "az") {
                    $sql .= " ORDER BY quote";
                } else {
                    $sql .= " ORDER BY quote DESC";
                }
            }
            $statement = $dbConn->prepare($sql);
            $np = array();
            $np[":keyword"] = "%$keyword%";
            $np[":category"] = "$category";
            echo $sql;
            $statement->execute($np);
            $keyword_quotes = $statement->fetchAll();
            foreach($keyword_quotes as $quote){
                echo $quote['quote'];
            }
        }
    }
    
    function selectCategory($category) {
        if ($_POST["category"] == $category) {
            return "selected ";
        }
    }
    
    
    function create_select(){
        global $records;
        foreach ($records as $record) {
            echo "<option ".selectCategory($record["category"]).">".$record["category"]."</option>";
        }
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Quote Finder</title>
     <link rel="stylesheet" href="styles.css" type="text/css" />
  </head>
  <body>
    <form method="post">
        Enter Quote Keyword
        <input type="text" name="keyword" value="<?=$_POST['keyword']?>"/>
        <br>
        <select name='category'>
          <!--<option value="humor">Humor</option>-->
          <!--<option value="life">Life</option>-->
          <!--<option value="philosophy">Philosophy</option>-->
          <!--<option value="reflection">Reflection</option>-->
          <option value="">Select One</option>
          <?=create_select()?>
        </select><br>
        <input type="radio" name="orderBy" value="az">A-Z
        <input type="radio" name="orderBy" value="za">Z-A<br>
        <input type="submit" name="submit" value="Display Quotes!"></input>
    </form>
    <?=displayQuotes()?>
  </body>
</html>