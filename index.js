/*function populate(s1,s2){
    var s1 = document.getElementById("s1");
    var s1 = document.getElementById("s2");
    s2.innerHTML = "";
    if (s1.value == "State") {
        var optionArray = ["|", "mushin|Mushin", "isolo|Isolo", "egbe|Egbe", "ifako-ijaye|Ifako-Ijaye", "idiaraba|Idiaraba"];
    }
    elseif(s1.value )
    for(var option in optionArray){
        var pair = optionArray[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
    }
    
}

var responsiveSlider = function() {

    var slider = document.getElementById("slider");
    var sliderWidth = slider.offsetWidth;
    var slideList = document.getElementById("slideWrap");
    var count = 1;
    var items = slideList.querySelectorAll("li").length;
    var prev = document.getElementById("prev");
    var next = document.getElementById("next");
    
    window.addEventListener('resize', function() {
      sliderWidth = slider.offsetWidth;
    });
      
    var prevSlide = function() {
      if(count > 1) {
        count = count - 2;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = 1) {
        count = items - 1;
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
    };
    
    var nextSlide = function() {
      if(count < items) {
        slideList.style.left = "-" + count * sliderWidth + "px";
        count++;
      }
      else if(count = items) {
        slideList.style.left = "0px";
        count = 1;
      }
    };
    
    next.addEventListener("click", function() {
      nextSlide();
    });
    
    prev.addEventListener("click", function() {
      prevSlide();
    });
    
    setInterval(function() {nextSlide()}, 9000);
    
    };
    
    window.onload = function() {
    responsiveSlider();  
    }
*/    
    function modalBoxes(boxId, boxdisplayer, boxContent, boxexit){

var Modal = document.getElementById(boxId);

		
			var registerLink = document.getElementById(boxdisplayer);
			var modalContent = document.getElementById(boxContent);
			registerLink.onclick = function popUpmodal(){
    				Modal.style.display = "block";
}
  /*Modal.onclick = function cLosemodal(){
    Modal.style.display = "none";
    .style.display = "block";
  }*/

			var end = document.getElementById(boxexit);


			end.onclick = function closeModal(){
				Modal.style.display = "none";
			}
    }

    modalBoxes("usermodal", "registerLink", "content-container", "closemodal");
    modalBoxes("userModal", "loginLink", "parent", "exitModal");
    //modalBoxes("boX", "purchase", "search", "exitModal");
      /*login modal
      var modal = document.getElementById('userModal');
		
			var loginLink = document.getElementById('loginLink');
			var modalcontent = document.getElementById("parent");
			loginLink.onclick = function popupModal(){
    				modal.style.display = "block";
}

			var exitmodal = document.getElementById('exitModal');


			exitmodal.onclick = function closemodal(){
				modal.style.display = "none";
			}*/

      var listener = document.getElementById("submit");
       listener.addEventListener("click", submitBtn);

       function submitBtn(){
         var xhr = new XMLHttpRequest();

         xhr.onreadystatechange = function(){
         if(xhr.readyState  == 4 && xhr.status == 200){
            document.getElementById("error").innerHTML = this.responseText;  
         }
        }
       

       xhr.open("POST", "index.php?error", true);
       xhr.send();
      };

