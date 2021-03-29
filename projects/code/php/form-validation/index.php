    <?php 
error_reporting(0);
    
    require_once('header.php'); ?>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      function test_input($input) {
         $input = trim($input);
         $input = stripslashes($input);
         $input = htmlspecialchars($input);

         return $input;
      }

      $name= test_input($_POST['name']);
      $email= test_input($_POST['email']);
      $password= test_input($_POST['password']);
      $valid = 1;
      $output = [];

      

      if (empty($name) || empty($email) || empty($password)) {
         $output['empty'] = "All fields are required";
         $valid = false;
      }

      if (preg_match('/[a-zA-Z0-9]/', $name)) {
         $output['name'] = 'Valid name';
      } else {
         $output['name'] = 'Invalid name. Name must consists of only letters and integers. ';
         $valid -= 1;
      }

      if (preg_match('/^[a-zA-Z0-9]{1,18}@[a-zA-X0-9]{1,6}.[a-zA-Z0-9]{1,5}$/', $email)) {
         $output['email'] = 'Valid email';
      } else {
         $output['email'] = 'Invalid email. Email must include @ and . sorrounded by letters and inegers.';
         $valid -= 1;

      }

      if (preg_match('/[a-zA-Z0-9$]/', $password)) {
         $output['password'] = 'Valid password';
      } else {
         $output['password'] = 'Invalid password. Password must consist of letters and numbers. ';
         $valid -= 1;

      }


    }

    ?>

		<main class="container">
         <form class="row row-cols-1"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
            
            <label class="col" for="name">Name: </label>
            <input class="col" type="text" name="name" id="name">
            
            <div class="col"><?php 
            
               if ($output['name']) {
                  echo $output['name'];
               }

            ?></div>

            <label class="col" for="email">Email: </label>
            <input class="col" type="text" name="email" id="email">

            <div class="col"><?php 
            
               if ($output['email']) {
                  echo $output['email'];
               }

            ?></div>

            <label class="col" for="password">Password: </label>
            <input class="col" type="password" name="password" id="password">

            <div class="col"><?php 
            
               if ($output['password']) {
                  echo $output['password'];
               }

            ?></div>

            <label class="mt-3"for="sex">Select your sex: </label>
            <select class="col " name="sex" id="sex">
               <option value="m">Male</option>
               <option value="f">Female</option>
            </select>

            <input class="btn btn-danger my-4"type="submit" value="Validate">
         </form>

         <div class="col"><?php 
            
            echo ($valid > 0) ?"Your data is valid" :'You entered invalid data';

         ?></div>

      </main>
      
      
   </body>
</html>