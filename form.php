<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/js/bootstrap.min.js">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <title>form</title>
  </head>
  <body>
    <header>
      <h2 class="text-center">WE ARE HAPPY TO HEAR FORM YOU</h2>
      <h5 class="text-center">(Please fill your forms and stay with us to know recent news)</h5>
    </header>
    <section class="form">

      <div class="container">
        <form action="ums/insert-query.php" method="post">
          <div class="row gap">
            <div class="col-md-4">
              <input type="text" name="f_name" placeholder="First Name" class="form-control"></br>
              <input type="text" name="l_name" placeholder="Last Name" class="form-control"></br>
              <input type="text" name="email" placeholder="Email" class="form-control"></br>
              <input type="text" name="age" placeholder="Age" class="form-control"></br>

            <label>Gender :</label>
            <label class="radio-inline" style="margin-left:40px;"><input type="radio" name="gender"  value="male"> Male</label>
            <label class="radio-inline" style="margin-left:20px;"><input type="radio" name="gender" value="female"> Female</label>




            </div>
            <div class="col-md-8">
              <textarea class="form-control" name="comment" rows="8" placeholder="Comments (What you think about online-market place within SriLanka)"></textarea>
<div class="sbut">
  <input type="submit" class="form-control" name="submit" value="Submit">



            </div>

          </div>
        </form>

      </div>
    </section>



  </body>
</html>
