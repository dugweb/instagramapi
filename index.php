<html>
<head>

</head>
<body>

<h2>Instagram Feed</h2>

<div id="igholder"></div>
<script src="http://code.jquery.com/jquery-1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript">
	
	
var imagearray = [];
var igholder = $('#igholder');
$(document).ready(function() {


	
	var igParams = {
		pictures: 4,
		tag: "chinahorizons",
		accessToken: "f1960f58693a47b6aaf3f153b524b90a",
	}


	$.ajax({
		type: "GET",
		dataType: "jsonp",
		cache: false,
		url: "https://api.instagram.com/v1/tags/" + igParams.tag + "/media/recent?client_id=" + igParams.accessToken,
		success: function(data) {
			igPicturePrep(data.data);
		}
	});


	function igPicturePrep(pictures) {
		var pics = pictures;
		
		pics.forEach(function(pic) {

			imageDOMObject = {
				"url" : pic['images']['thumbnail']['url'],
				"link": pic['link'],
				"caption" : pic['caption']['text'],
			}
			imageDOMObject.html = "<a href='" + imageDOMObject.link + "'><img src='" + imageDOMObject.url + "' title='" + imageDOMObject.caption + "'></a>"

			imagearray.push(imageDOMObject);

			igholder.append(imageDOMObject.html);



		});
	}
});


</script>

</body>