
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read page</title>

<!-- le tableau qui affiche les info -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto');
        *{
        margin:0;
        padding: 0;
        outline: 0;
        }
       .title{
        background-color: #ba68c8;
        height: 100px;
       }
       .title h1{
        display: flex;
        justify-content: center;
        padding-top: 1em;
        color: #fafafa ;
        letter-spacing: 7px;
        font-family: 'Montserrat', sans-serif;
       }
        .filter{
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        z-index: 1;
        background: rgb(233,76,161);
        background: -moz-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
        background: linear-gradient(90deg, rgba(233,76,161,1) 0%, rgba(199,74,233,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#e94ca1",endColorstr="#c74ae9",GradientType=1);
        opacity: .7;
        }
        table{
        position: absolute;
        z-index: 2;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        width: 60%; 
        border-collapse: collapse;
        border-spacing: 0;
        box-shadow: 0 2px 15px rgba(64,64,64,.7);
        border-radius: 12px 12px 0 0;
        overflow: hidden;

        }
        td , th{
        padding: 15px 20px;
        text-align: center;

        }

        .btn{
            background-color: rgba(117, 117, 244, 0.342);
        }

        th{
        background-color: #ba68c8;
        color: #fafafa;
        font-family: 'Open Sans',Sans-serif;
        font-weight: 200;
        text-transform: uppercase;

        }
        tr{
        width: 100%;
        background-color: #fafafa;
        font-family: 'Montserrat', sans-serif;
        }
        tr:nth-child(even){
        background-color: #eeeeee;
        }
    </style>
</head>
<body>
   <div class="title"><h1>Announcement</h1></div> 

   <!-- creating the table to insert the info -->
<table>
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">firstname</th>
        <th scope="col">lastname</th>
        <th scope="col">email</th>
        <th scope="col">categorie</th> 
        </tr>
        <?php
            require "connection.php"; 
            $sql = "SELECT * FROM contact";//It constructs an SQL query to select all columns (*) from the 'contact' table.
            $result = $conn->query($sql); //It executes the SQL query using the query method on the database connection ($conn). 
            if($result->num_rows > 0){ //It checks if there are rows in the result set. If there , it enters a while loop to iterate through each row
                while($row = $result->fetch_assoc()){ //The fetch_assoc method retrieves the current row as an associative array,
            ?>

        <tbody>
            <tr>
            <th scope="row"><?php  echo $row['id'] ?></th>
            <td><?php  echo $row['firstname'] ?></td>
            <td><?php  echo $row['lastname'] ?></td>
            <td class="btn"><?php  echo $row['email'] ?></td>
            <td><?php  echo $row['catégorie'] ?></td>
            </tr>
        </tbody>
        <?php }
            }
            ?>
    
</table>
</body>
</html>