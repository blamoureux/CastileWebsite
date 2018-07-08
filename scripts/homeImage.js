// JavaScript Document
var theImages = new Array() // do not change this

theImages[0] = 'images/home/focusImage1.jpg'
theImages[1] = 'images/home/focusImage2.jpg'
theImages[2] = 'images/home/focusImage3.jpg'
theImages[3] = 'images/home/focusImage4.jpg'

// do not edit anything below this line

var j = 0
var p = theImages.length;
var preBuffer = new Array()
for (i = 0; i < p; i++){
   preBuffer[i] = new Image()
   preBuffer[i].src = theImages[i]
}
var whichImage = Math.round(Math.random()*(p-1));
function showImage(){
document.write('<img src="'+theImages[whichImage]+'">');
}



var quoteImages = new Array() // do not change this

quoteImages[0] = 'images/home/HPquote1.jpg'
quoteImages[1] = 'images/home/HPquote2.jpg'
quoteImages[2] = 'images/home/HPquote3.jpg'

// do not edit anything below this line

var j = 0
var p = quoteImages.length;
var preBuffer = new Array()
for (i = 0; i < p; i++){
   preBuffer[i] = new Image()
   preBuffer[i].src = quoteImages[i]
}
var whichQuoteImage = Math.round(Math.random()*(p-1));
function showQuoteImage(){
document.write('<img src="'+quoteImages[whichQuoteImage]+'">');
}
