var arrayOfImages = ["images/skyline-header-morning.png",
					 "images/skyline-header-midday.png",
					 "images/skyline-header-sunset.png",
                     "images/skyline-header-night.png"];
function preload(arrayOfImages) {
  for(i = 0 ; i < arrayOfImages.length ; i++)
   {
     var img = new Image();
             img.src = arrayOfImages[i];
         }
    }

preload(arrayOfImages);
