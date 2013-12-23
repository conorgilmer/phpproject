/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/* multi */
// Create empty variables in preparation for the two values from the two dropdown menus
var first; 
var second; 

function firstly(x) { 
// Grab the value from the first dropdown and set it to 'first'
  first = x.value;
    //if (typeof second != 'undefined') { // If 'second' isn't undefined, run the 'callpropertysearch' function with the two variables
      //  callpropertysearch(first, second);
//    } // Otherwise do nothing


    if ((typeof third == 'undefined') && (typeof second == 'undefined')){
        callpropertysearch(first, "", "");}
    else if (typeof third == 'undefined') {
        callpropertysearch(first, second, "");}
      
    else if (typeof second == 'undefined') {
        callpropertysearch(first, "", third);}
    else 
        callpropertysearch(first, second, third);
}

// This is the same function but for the second variable
function secondly(x) {
    second = x.value;
 //   if (typeof first != 'undefined') {
   //     callpropertysearch(first, second);
    //}
    
 
    if ((typeof first == 'undefined') && (typeof third == 'undefined')){
        callpropertysearch("", second, "");}
    else if (typeof first == 'undefined') {
        callpropertysearch("", second, third);}
      
    else if (typeof third == 'undefined') {
        callpropertysearch(first,second, "");}
    else 
        callpropertysearch(first, second, third);
}


// This is the same function but for the second variable
function thirdly(x) {
    third = x.value;
 //   if (typeof first != 'undefined') {
   //     callpropertysearch(first, second);
    //}
    
    
    if ((typeof first == 'undefined') && (typeof second == 'undefined')){
        callpropertysearch("", "", third);}
    else if (typeof first == 'undefined') {
        callpropertysearch("", second, third);}
      
    else if (typeof second == 'undefined') {
        callpropertysearch(first, "", third);}
    else 
        callpropertysearch(first, second, third);

}



// This is the AJAX function that takes two parameters
function callpropertysearch(first, second, third) {
    var xmlhttp;
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange=function() {
    // if the XMLHttpRequest is successful
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
      // Then populate div id="properties" with the responseText
        document.getElementById("properties").innerHTML=xmlhttp.responseText;
        }
      }

  // Actually send the data using the variables assigned with firstly() and secondly()
    xmlhttp.open("GET",
    "getpropertiesopen.php?first="+first+"&second="+second+"&third="+third,true);
    xmlhttp.send();
}
/* multi */


    
  
    
    

