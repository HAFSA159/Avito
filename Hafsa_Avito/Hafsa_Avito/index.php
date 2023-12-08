<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Annonce</title>
    
    <style>
        body {
          background-color: #f8f9fa;
        }

        .container {
          max-width: 900px;
          margin: 50px auto;
          background-color: #ffffff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
          text-align: center;
          padding: 1em;
        }

        label {
          font-weight: bold;
        }

        .btn-primary {
          background-color: black;
          width: 100%;
        }

        .btn-primary:hover {
          background-color: orangered;
        }
  </style>

</head>
<body>
   

<div class="container mt-5">
    <h2>Create an Announcement</h2>

    <form action="add.php" method="post"> 
      <div class="mb-3">
        <label for="firstname" class="form-label">Firstname</label>
        <input type="text" class="form-control" name="firstname" required>
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">Lastname</label>
        <input type="text" class="form-control" name="lastname" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input class="form-control" name="email" type="email" required></input>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input class="form-control" name="pwd" type="password" required></input>
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category" required>
          <option value="" disabled selected>Select a category</option>
          <option value="announcement">Electronique</option>
          <option value="event">Logement</option>
          <option value="sale">Voiture</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>    
</body>
</html>

