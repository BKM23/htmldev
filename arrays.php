<h1>Arrays</h1>

<?php
//indexed or numeric arrays
$fnames = ["Alex Okama","Peter","James"];
print_r($fnames);

echo '<br>';

$colors = array("Black","Green","Yellow","White","Red","Blue");
?>
<pre>
    <?php print_r($colors); ?>
</pre>
<?php print $fnames[1]; ?>
<?php
//Associative Arrays

$user = [
    "fullname"=> "Alex Okama",
    "email"=> "AOkama@yahoo.com",
    "phone"=>"+2547855555"
];
?>
<pre>
    <?php print_r($user); ?>
</pre>

<?php
//Multidimensional arrays

$user_details=[
    "Director"=>array(
    "fullname"=> "Alex Okama",
    "email"=> "AOkama@yahoo.com",
    "address"=>"Mada",
    "phone"=>[
    "Mobile"=>"+25471564645",
    "Work"=>"+25471564645",
    "Cell"=>"+25471564645"
    ]  
    ),
    "Manager"=>array(
        "fullname"=> "Peter Okama",
        "email"=> "POkama@yahoo.com",
        "address"=>"Mada",
        "phone"=>[
        "Mobile"=>"+25471564645",
        "Work"=>"+25471564645",
        "Cell"=>"+25471564645"
        ]  
        ),
    "Director"=>array(
       "fullname"=> "Ann Okama",
       "email"=> "Okama@yahoo.com",
       "address"=>"Mada",
        "phone"=>[
        "Mobile"=>"+25471564645",
        "Work"=>"+25471564645",
        "Cell"=>"+25471564645"
            ]  
            )
        ];
        print $user_details["Secretary"]["phone"]["Work"];
?>
<pre>
    <?php print_r($user_details) ?>
</pre>
<?php
$items = ["book","pen",456,46.5,"File54"];
?>

<pre>
    <?php var_dump($items); ?>
</pre>

<?php

$age = [45,42,23];

$user_age = array_combine($user, $age);
$user_data = array_merge($user, $age);

?>