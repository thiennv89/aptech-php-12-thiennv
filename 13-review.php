<?php
echo "<a href=\"./\">BACK</a>";

echo "<h1>13. REVIEW</h1>";
/* EXERCISE :
1. Create an Array about data of authors like :
$authors = [
[
"name" => "Lorem",
"age" => "18",
"posts_quantity" => "5",
],
[
"name" => "Lorem",
"age" => "18",
"post_quantity" => "5",
],
];

+ At least 5 authors.

2. Display it into website depends on Bootstrap 4 Table, in 4 column : Name, Age, Post Counting, Salary.

3. Make sure, if posts_quantity > 10, show at Salary Column = posts_quantity * 10000, otherwise, display 0.

 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$authors = [
    [
    "name" => "Lorem",
    "age" => "18",
    "post_quantity" => "12",
    ],
    [
    "name" => "thien",
    "age" => "19",
    "post_quantity" => "7",
    ],
    [
    "name" => "thien2",
    "age" => "27",
    "post_quantity" => "14  ",
    ],
    ];
function checkSalary($x) {
    echo $x > 10 ? $x*10000 : "0";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Post Counting</th>
                        <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $authors[0]['name'] ?></td>
                        <td><?php echo $authors[0]['age'] ?></td>
                        <td><?php echo $authors[0]['post_quantity'] ?></td>
                        <td><?php checkSalary($authors[0]['post_quantity']); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><?php echo $authors[1]['name'] ?></td>
                        <td><?php echo $authors[1]['age'] ?></td>
                        <td><?php echo $authors[1]['post_quantity'] ?></td>
                        <td><?php checkSalary($authors[1]['post_quantity']); ?></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><?php echo $authors[2]['name'] ?></td>
                        <td><?php echo $authors[2]['age'] ?></td>
                        <td><?php echo $authors[2]['post_quantity'] ?></td>
                        <td><?php checkSalary($authors[2]['post_quantity']); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>