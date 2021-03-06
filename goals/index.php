<!DOCTYPE html>
<html>

<head>
	<!-- metadata -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="The next steps">
   <meta property="og:image" content="https://peprojects.dev/alpha-4/burooj/assets/images/goalpost.png" />

   <link rel="stylesheet" href="css/style.css">

   <title>GOOOOAAALL</title>


                
   <!-- stylecss -->
</head>

<body>
   <a href="../index.html" class="svg-link-container">
         <svg class="b-svg" viewBox="0 0 1233 1874" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
             <g transform="matrix(1,0,0,1,-5586.91,-849.995)">
                 <g transform="matrix(5.27473,0,0,4.59574,5343.12,1242.06)">
                     <g id="b-letter" transform="matrix(1.29924,0,0,1.49119,59.2783,-44.5629)">
                         <path d="M43.221,109.927C43.221,92.169 43.653,77.125 44.516,64.793C45.38,52.461 47.106,42.349 49.696,34.457C52.285,26.564 55.985,20.83 60.794,17.254C65.604,13.678 71.954,11.89 79.847,11.89C87.739,11.89 94.09,13.678 98.899,17.254C103.709,20.83 107.408,26.564 109.998,34.457C112.588,42.349 114.314,52.461 115.177,64.793C116.04,77.125 116.472,92.169 116.472,109.927C116.472,127.685 116.04,142.791 115.177,155.246C114.314,167.701 112.588,177.813 109.998,185.582C107.408,193.351 103.709,199.024 98.899,202.6C94.09,206.176 87.739,207.964 79.847,207.964C71.954,207.964 65.604,206.176 60.794,202.6C55.985,199.024 52.285,193.351 49.696,185.582C47.106,177.813 45.38,167.701 44.516,155.246C43.653,142.791 43.221,127.685 43.221,109.927ZM-10.052,109.927C-10.052,130.151 -9.127,148.649 -7.277,165.42C-5.427,182.191 -1.358,196.619 4.931,208.704C11.221,220.789 20.284,230.038 32.123,236.451C43.961,242.863 59.869,246.069 79.847,246.069C99.824,246.069 115.732,242.863 127.571,236.451C139.409,230.038 148.473,220.789 154.762,208.704C161.051,196.619 165.121,182.191 166.97,165.42C168.82,148.649 169.745,130.151 169.745,109.927C169.745,89.95 168.82,71.514 166.97,54.619C165.121,37.725 161.051,23.235 154.762,11.15C148.473,-0.935 139.409,-10.369 127.571,-17.152C115.732,-23.934 99.824,-27.325 79.847,-27.325C59.869,-27.325 43.961,-23.934 32.123,-17.152C20.284,-10.369 11.221,-0.935 4.931,11.15C-1.358,23.235 -5.427,37.725 -7.277,54.619C-9.127,71.514 -10.052,89.95 -10.052,109.927Z" style="fill-rule:nonzero;"/>
                     </g>
                 </g>
             </g>
         </svg>
         </a>

   
      <article class=".site-main">
         <div class="inner-column"> 

   
            <h1>My Goals..<em>ish</em></h1>
            <p class="lato-class">
                I'm supposed to be <em>selfish</em> here.
            </p>
            <p class="lato-class">
               Honestly, when I think back to just 5 years ago, things were <em>incredibly</em> different. its crazy, crazy how much and how little things can change. Not enough people talk about how time <em>feels</em>.
            </p>
            <p class="lato-class">
               But <em>pretending</em> things are perfect and <em>I</em> am perfect:
            </p>

            <?php


            $json = file_get_contents("goals.json");
			$goalsData = json_decode($json, true);

			foreach ($goalsData as $goalSection => $goals) {

				echo "<section class='$goalSection'>";
				echo "<h2>$goalSection</h2>";
				echo "<ol class='innerlist'>";

				foreach ($goals as $goal) {
					// code...
					echo "<li class='lato-class'>$goal</li>";
				}

				echo "</ol>";
				echo "</section>";



			}





            ?>

         </div>
      </article>

   <svg class="j-svg" viewBox="0 0 1233 1874" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
       <g transform="matrix(1,0,0,1,-5586.91,-849.995)">
           <g transform="matrix(5.27473,0,0,4.59574,5343.12,1242.06)">
               <g id="j-letter" transform="matrix(1.29924,0,0,1.49119,59.2783,-44.5629)">
                   <path d="M43.221,109.927C43.221,92.169 43.653,77.125 44.516,64.793C45.38,52.461 47.106,42.349 49.696,34.457C52.285,26.564 55.985,20.83 60.794,17.254C65.604,13.678 71.954,11.89 79.847,11.89C87.739,11.89 94.09,13.678 98.899,17.254C103.709,20.83 107.408,26.564 109.998,34.457C112.588,42.349 114.314,52.461 115.177,64.793C116.04,77.125 116.472,92.169 116.472,109.927C116.472,127.685 116.04,142.791 115.177,155.246C114.314,167.701 112.588,177.813 109.998,185.582C107.408,193.351 103.709,199.024 98.899,202.6C94.09,206.176 87.739,207.964 79.847,207.964C71.954,207.964 65.604,206.176 60.794,202.6C55.985,199.024 52.285,193.351 49.696,185.582C47.106,177.813 45.38,167.701 44.516,155.246C43.653,142.791 43.221,127.685 43.221,109.927ZM-10.052,109.927C-10.052,130.151 -9.127,148.649 -7.277,165.42C-5.427,182.191 -1.358,196.619 4.931,208.704C11.221,220.789 20.284,230.038 32.123,236.451C43.961,242.863 59.869,246.069 79.847,246.069C99.824,246.069 115.732,242.863 127.571,236.451C139.409,230.038 148.473,220.789 154.762,208.704C161.051,196.619 165.121,182.191 166.97,165.42C168.82,148.649 169.745,130.151 169.745,109.927C169.745,89.95 168.82,71.514 166.97,54.619C165.121,37.725 161.051,23.235 154.762,11.15C148.473,-0.935 139.409,-10.369 127.571,-17.152C115.732,-23.934 99.824,-27.325 79.847,-27.325C59.869,-27.325 43.961,-23.934 32.123,-17.152C20.284,-10.369 11.221,-0.935 4.931,11.15C-1.358,23.235 -5.427,37.725 -7.277,54.619C-9.127,71.514 -10.052,89.95 -10.052,109.927Z" style="fill-rule:nonzero;"/>
               </g>
           </g>
       </g>
   </svg>


</body>

</html>