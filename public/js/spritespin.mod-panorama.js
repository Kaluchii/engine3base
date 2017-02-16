(function($,SpriteSpin){"use strict";var floor=Math.floor;SpriteSpin.registerModule('panorama',{onLoad:function(e,data){data.stage.empty().show();data.frames=data.sourceWidth;if(data.orientation==="horizontal"){data.scale=data.height/data.sourceHeight;data.frames=data.sourceWidth;}else{data.scale=data.width/data.sourceWidth;data.frames=data.sourceHeight;}var w=floor(data.sourceWidth*data.scale);var h=floor(data.sourceHeight*data.scale);var background=[w,"px ",h,"px"].join("");data.stage.css({"max-width":'initial',"background-image":["url('",data.source[0],"')"].join(""),"background-repeat":"repeat-both","-webkit-background-size":background,"-moz-background-size":background,"-o-background-size":background,"background-size":background});},onDraw:function(e,data){var x=0,y=0;if(data.orientation==="horizontal"){x=-floor((data.frame%data.frames)*data.scale);}else{y=-floor((data.frame%data.frames)*data.scale);}data.stage.css({"background-position":[x,"px ",y,"px"].join("")});}});}(window.jQuery||window.Zepto||window.$,window.SpriteSpin));