/**
 * @author vasu naman
 */

	
	 function uploadProFile() {
        var fd = new FormData();
        fd.append("proFileToUpload", document.getElementById('proFileToUpload').files[0]);
        var xhr = new XMLHttpRequest();
        xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", uploadComplete, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "temp/pro-pic.php");
        xhr.send(fd);
      }
      
      function uploadCovFile() {
        var fd = new FormData();
        fd.append("covFileToUpload", document.getElementById('covFileToUpload').files[0]);
        var xhr = new XMLHttpRequest();
        xhr.upload.addEventListener("progress", uploadProgress, false);
        xhr.addEventListener("load", uploadCompleteCov, false);
        xhr.addEventListener("error", uploadFailed, false);
        xhr.addEventListener("abort", uploadCanceled, false);
        xhr.open("POST", "temp/cov-pic.php");
        xhr.send(fd);
      }

      function uploadProgress(evt) {
        if (evt.lengthComputable) {
          //var percentComplete = Math.round(evt.loaded * 100 / evt.total);
          //document.getElementById('progressNumber').innerHTML = percentComplete.toString() + '%';
        }
        else {
          document.getElementById('progressNumber').innerHTML = 'unable to compute';
        }
      }

      function uploadComplete(evt) {
        /* This event is raised when the server send back a response */
        //alert(evt.target.responseText);
        
        //position of the div where image will be added
        var addImagePosition;
        
        
        		//div where we want to add the uploaded image
        		var desiredDiv = $('.proCropPicture');
				console.log(evt.target.responseText);
        		desiredDiv.html('<img src="temp/'+evt.target.responseText+'" data-name="'+evt.target.responseText+'" class="img-responsive" id="proCropbox" alt="logo" ">');
        	
				// enables the crop button	        	
        		$('#proCropButton').css("display","block");
        		
        		//disables the upload button
        		$('#proUploadButton').css("display","none");
        		
        		
        	//crop codes
        	//var c = {"x":10,"y":10,"x2":260,"y2":310,"w":100,"h":100};
		     $('#proCropbox').Jcrop({
		      //aspectRatio: 1,	
		      allowResize: false,
		      allowSelect: false,
		      setSelect: [0,0,265,250],
		      onSelect: updateCoordsPro
		    });
        
        
      }
      
      function uploadCompleteCov(evt) {
        /* This event is raised when the server send back a response */
        //alert(evt.target.responseText);
        
        //position of the div where image will be added
        var addImagePosition;
        
        
        		//div where we want to add the uploaded image
        		var desiredDiv = $('.covCropPicture');
				console.log(evt.target.responseText);
        		desiredDiv.html('<img src="temp/'+evt.target.responseText+'" data-name="'+evt.target.responseText+'" class="img-responsive" id="covCropbox" alt="logo" ">');
        	
				// enables the crop button	        	
        		$('#covCropButton').css("display","block");
        		
        		//disables the upload button
        		$('#covUploadButton').css("display","none");
        		
        		
        	//crop codes
        	//var c = {"x":10,"y":10,"x2":260,"y2":310,"w":100,"h":100};
		     $('#covCropbox').Jcrop({
		      //aspectRatio: 1,	
		      allowResize: false,
		      allowSelect: false,
		      setSelect: [0,0,650,300],
		      onSelect: updateCoordsCov
		    });
        
        
      }

      function uploadFailed(evt) {
        alert("There was an error attempting to upload the file.");
      }

      function uploadCanceled(evt) {
        alert("The upload has been canceled by the user or the browser dropped the connection.");
      }

//crop codes


  function updateCoordsPro(c)
  {
    $('#pro_x').val(c.x);
    $('#pro_y').val(c.y);
    $('#pro_w').val(c.w);
    $('#pro_h').val(c.h);
  };
  
  function updateCoordsCov(c)
  {
    $('#cov_x').val(c.x);
    $('#cov_y').val(c.y);
    $('#cov_w').val(c.w);
    $('#cov_h').val(c.h);
  };

  function checkCoordsPro()
  {
    if (parseInt($('#pro_w').val())) return true;
    alert('Please select a crop region then press submit.');
    return false;
  };
  

//jquery window.load event 

$( document ).ready(function() {
  	$('#proCropButton').click(function(){
  		var height = $('.upload-modal-propic img').height();
  		var width = $('.upload-modal-propic img').width();
  		var imageName = $('.upload-modal-propic img').data('name');
  		
  		//getting the x and y cordinate of cropping tool
  		
  		var xCordinate = $('#pro_x').val();
  		var yCordinate = $('#pro_y').val();
  		
  		
  		uploadProfileCropImage(height,width,imageName,xCordinate,yCordinate);
  	});
  	
  	$('#covCropButton').click(function(){
  		var height = $('.upload-modal-covpic img').height();
  		var width = $('.upload-modal-covpic img').width();
  		var imageName = $('.upload-modal-covpic img').data('name');
  		
  		//getting the x and y cordinate of cropping tool
  		
  		var xCordinate = $('#cov_x').val();
  		var yCordinate = $('#cov_y').val();
  		
  		
  		uploadCovfileCropImage(height,width,imageName,xCordinate,yCordinate);
  	});
});


	 function uploadProfileCropImage(height, width, imageName, xCordinate, yCordinate) {
	 	
	 	var data = 'width='+width+'&height='+height+'&imagename='+imageName+'&xcordinate='+xCordinate+'&ycordinate='+yCordinate+'&refData=profileImageUpload';
        $.ajax({
            type: "POST",
            url:"v-includes/class.fetchData.php",
            data: data,
            beforeSend:function(){
                // this is where we append a loading image
                $('').html('');
              },
            success:function(result){
            	//div where we want to add the uploaded image
        		var desiredDiv = $('.crop-picture');
        		//desiredDiv.html('<img src="'+result+'" class="img-responsive" id="cropbox" alt="logo" ">');
				//desables the crop button	        	
        		$('#proCropButton').css("display","none");
        		console.log(result);
				window.location.href = 'profile.php';
                $("").html('');
                return false;
        }});
      }
      
      function uploadCovfileCropImage(height, width, imageName, xCordinate, yCordinate) {
	 	
	 	var data = 'width='+width+'&height='+height+'&imagename='+imageName+'&xcordinate='+xCordinate+'&ycordinate='+yCordinate+'&refData=covfileImageUpload';
        $.ajax({
            type: "POST",
            url:"v-includes/class.fetchData.php",
            data: data,
            beforeSend:function(){
                // this is where we append a loading image
                $('').html('');
              },
            success:function(result){
            	//div where we want to add the uploaded image
        		var desiredDiv = $('.crop-picture');
        		//desiredDiv.html('<img src="'+result+'" class="img-responsive" id="cropbox" alt="logo" ">');
				//desables the crop button	        	
        		$('#covCropButton').css("display","none");
        		console.log(result);
				window.location.href = 'profile.php';
                $("").html('');
                return false;
        }});
      }
      
      
      /*
       * basic function to make ajax call which handles the button loading state and the html appending in any place
       * if you are not working with a bootstrap button then just pass null into "btn" variable and use loading div
       * for the loading effect 
       * to follow how loading button works in bootstrap use this link http://getbootstrap.com/javascript/#buttons
       * 
       * you must have to pass either button or loading div in the function to operate it nicely
       */
      /*function BasicAjaxCall(data, url, requestType, btn, loadingDiv) {
        $.ajax({
            type: requestType,
            url: url,
            data: data,
            
            
            beforeSend:function(){
                // this is where we append a loading image
                if(btn == 'null') {
                	$(loadingDiv).css("display","block");
                }
                else {
                	btn.button('loading');
                }
                
              },
            success:function(result){
            	
        		console.log(result);
                
                // this is where we remove the loadin effect
                if(btn == 'null') {
                	$(loadingDiv).css("display","none");
                }
                else {
                	btn.button('reset');
                }
                
                //remove this line if you are using these codes
                if (result == '0') {
                	
					alert('The YouTube video you entered does not exist');                	
                } 
                else if(result == '1') {
                	alert('video updated');
                }
                return false;
        }});
      	
      }*/
