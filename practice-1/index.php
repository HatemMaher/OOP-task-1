<?php
require_once 'Employee.php';

    $employee1 = new Employee();
    $employee1->name = "ahmed ali";
    $employee1->email = "ahmed@erasoft.com";
    $employee1->salary = 10000;
    $employee1->is_manger = false;
    $employee1->address =["Giza", "15 Rashada", "Egypt"];


    $employee2 = new Employee();
    $employee2->name = "Maher";
    $employee2->email = "maher@erasoft.com";
    $employee2->salary = 15000;
    $employee2->is_manger = true;
    $employee2->address =["Alex", "15 Rashada", "Egypt"];

    $employee3 = new Employee();
    $employee3->name = "Fatma Ali";
    $employee3->email = "fatma@erasoft.com";
    $employee3->salary = 8000;
    $employee3->is_manger = false;
    $employee3->address =["Sohag", "15 Rashada", "Egypt"];

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    <table class="table table-borderd">
        <thead>
            <tr>
                <th>Name</th>
                <th>email</th>
                <th>salary</th>
                <th>Is Manger</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $employee1->name; ?></td>
                <td><?php echo $employee1->email; ?></td>
                <td class="<?php $employee1->checkSalary();?>"><?php echo $employee1->salary; ?></td>
                <td class="<?php  $employee1->mangerTextColor(); ?>"><?php $employee1->checkFromManger(); ?></td>
                <td><?php echo implode(" - " , $employee1->address); ?></td>
            </tr>
            <tr>
                <td><?php echo $employee2->name; ?></td>
                <td><?php echo $employee2->email; ?></td>
                <td class="<?php $employee2->checkSalary();?>"><?php echo $employee2->salary; ?></td>
                <td class="<?php $employee2->mangerTextColor(); ?>"><?php $employee2->checkFromManger(); ?></td>
                <td><?php echo implode(" - " , $employee2->address); ?></td>
            </tr>
            <tr>
                <td><?php echo $employee3->name; ?></td>
                <td><?php echo $employee3->email; ?></td>
                <td class="<?php $employee3->checkSalary();?>"><?php echo $employee3->salary; ?></td>
                <td class="<?php  $employee3->mangerTextColor()?>"><?php $employee3->checkFromManger(); ?></td>
                <td><?php echo implode(" - " , $employee3->address); ?></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>