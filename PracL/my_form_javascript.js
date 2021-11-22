

function validate()
{
  // Expression for phone number
  var phoneNumber = document.getElementById('phone-number').value;
  //with space, non space/xter and with - 
  var phoneRGEX = /\d{3}[ -]?\d{3}[ -]?\d{4}/g;


  //Test
  var phoneResult = phoneRGEX.test(phoneNumber);
 
  //Alert
      if(phoneResult == false)
      {
        alert('Please enter a valid phone number');
        return false;
      } else
     // return true;
        alert("phone-number:"+phoneResult);
    }
