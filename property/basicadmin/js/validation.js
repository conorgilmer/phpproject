/*
 * Client side validation of forms
 */

    
    function validateForm()
{
var x=document.forms["propform"]["addr1"].value;
if (x==null || x=="")
  {
  alert("Address must be entered");
  return false;
  }

var c=document.forms["propform"]["county_id"].value;
if (c==null || c=="")
  {
  alert("County must be chosen");
  return false;
  }

var h=document.forms["propform"]["housetype_id"].value;
if (h==null || h=="")
  {
  alert("House Type must be chosen");
  return false;
  }

var ph=document.forms["propform"]["photo_id"].value;
if (ph==null || ph=="")
  {
  alert("Chose Photo if not chose No Photo.jpg");
  return false;
  }

var a=document.forms["propform"]["contact_id"].value;
if (a==null || a=="")
  {
  alert("Agent mustbe selected");
  return false;
  }


var p=document.forms["propform"]["price"].value;
if (p==null || p=="")
  {
  alert("Price must be entered");
  return false;
  }
}


/*
 * File form
 */
 function validateFileForm()
{
var x=document.forms["uploadform"]["title"].value;
if (x==null || x=="")
  {
  alert("Filename must be entered");
  return false;
  }
}