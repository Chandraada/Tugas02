
<body>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="index.css">
    
    <div class="container mt-5 d-flex justify-content-center">

        <div class="card p-3">

            <div class="d-flex align-items-center">

                <div class="image">
            <img src="ChaChan.jpg" class="rounded" width="150" >
            </div>

            <div class="ml-3 w-100">
                
               <h4 class="mb-0 mt-0">CHANDRA APRIANSYAH</h4>
               <span>SOFTWARE ENGINEERING</span>


               <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                <div class="d-flex flex-column">

                    <span class="articles">belajar php dasar</span>
                    <span class="number1">Array</span>
                    </div>
               </div>
              <div class="button mt-2 d-flex flex-row align-items-center">
                <button class="btn btn-sm btn-outline-primary w-100">Chat</button>
                <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button>  
               </div>           
            </div>     
    </div>       
        </div>    
     </div>
</div>

<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>