
//sleepcode borrowed from https://stackoverflow.com/questions/951021/what-is-the-javascript-version-of-sleep
function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

function changelocation()
{
    
    location.replace("https://gfycat.com/SereneValidAnemonecrab");
}

function check()
{
    
    var checking = document.getElementById('check').checked;

if (checking == true) 
    {
        
        if(document.getElementById('rb1').checked)
        {
            document.getElementById("output").innerHTML = "You didn't check the correct checkbox";
        }
        else
        {
            
            if(document.getElementById('number').value != 42)
            {
                 document.getElementById("output").innerHTML = "You didn't type in 42 in the numberbox"
            }
            else
            {
                if(document.getElementById('textbox1').value != "Zoomies")
                {
                    document.getElementById("output").innerHTML = 'You didn´t type in "Zoomies" in the numberbox';
                }
                else
                {   document.getElementById("output").innerHTML = 'Great success!';
                     sleep(3000).then(() => {
                         changelocation();
                     });
                     

                }
            }
            
        }
        
    }
        else
    {
        document.getElementById("output").innerHTML = "You didn't check the checkbox";
    }
}

$(document).ready(function() {
   $('#button1').mouseenter(function() {
       $(this).html('Wheee');
   });
   $('#button1').mouseleave(function() {
       $(this).html('Submit'); 
   });
   $('#button1').click(function() {
       $(this).html('I got clicked');
   }); 
});