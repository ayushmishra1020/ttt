<?php include "header.php";?>
<?php include 'script.php'?>

		<!-- banner-text -->
		 <br><br>
			<div class="container" style="height:500px;">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">
								<h3>Long story short</h3>
								<p>In this age of dwindling attention spans, we've caught yours.
With stories under 2000 characters, we're quick to read, but hard to forget.</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>A world full of stories</h3>
								<p>There's a story for every reader, every emotion - served fresh daily.</p>	</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>Home to the best writers</h3>
								<p> Discover the world's finest micro-fiction writers. Or become one yourself.</p>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">
								<h3>Tiny is the next best thing</h3>
								<p>Reaching over 12 million people every week, our stories go further every time.</p>
							</div>
						</li>
					</ul> 
				</div> 	 
			</div>
		</div>
		<!-- //banner-text -->    
	<!-- //banner --> 
<br><br>	 <br><br>
               <div class="panel panel-primary" style="width:40%;margin:0 auto;border-color:#232f3e; box-shadow: 10px 10px 5px grey;">
  <div class="panel-heading" style="text-align:center;background-color:#232f3e;" ><h2>Form</h2></div>
  <div class="panel-body">
  <br>
<div class="container" style="width:60%;" >

    
               <form action ="" method = "post">

    <div class="form-group" >
      <label for="usr">Enter the number</label>
   
	   <input type="number" class="form-control" name="number" required >

    </div>
    
	
	
 	<tr>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" name="submit" type="submit" onclick="return validate();" style="background-color:#232f3e;border-color:#232f3e;" value="Submit" class="button1"></td>
		
      
   </tr>
  </form>

<br><br>



</div>
</div>
<div class="panel-footer"></div>
</div>
<br><br><br><br>
<div class="container">
<table  class="table table-bordered" >
    <thead style="font-size:30px;">
      <tr >
        <th style="text-align:center;border:2px solid black;">S No.</th>
        <th style="text-align:center;border:2px solid black;">Word</th>
        <th style="text-align:center;border:2px solid black;">Number of Occurences</th>
        
      </tr>
    </thead>
    <tbody style="font-size:25px;text-align:center;">
     
   
 
<?php
   if(isset($_POST['submit'])){

for($x = 0; $x <$num; $x++) {
	


$y=$x+1;
	echo "<tr style='border:2px solid black;'>";
    echo "<td style='border:2px solid black;'>".$y."</td>";
    echo "<td style='border:2px solid black;'>".$char[$x]."</td>";
    echo "<td style='border:2px solid black;'>".$amount[$x]."</td>";
 
    echo "</tr>";
}
	
   }
?>

</tbody>
</table>
</div>


	 <br><br>	 <br><br>	 
<?php include "footer.php"?>