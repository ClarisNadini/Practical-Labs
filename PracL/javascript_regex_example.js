
function validate()
{
  // Expression for phone number
  var phoneNumber = document.getElementById('phone-number').value;
  var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
 

  // Expression for postal code
  var postalCode = document.getElementById('postal-code').value;
  var postalRGEX = /^[A-Z]{1,2}[0-9]{1,2} ?[0-9][A-Z]{2}$/i;

  //Test
  var phoneResult = phoneRGEX.test(phoneNumber);
  var postalResult = postalRGEX.test(postalCode);

  //Alert
      if(phoneResult == false)
      {
        alert('Please enter a valid phone number');
        return false;
      }
      if(postalResult == false)
      {
        alert('Please enter a valid postal number');
        return false;
      }
      return true;
      alert("phone:"+phoneResult + ", postal code: "+postalResult);
    }

// document.getElementById() to grab the phone number from the input element.
//Then I created my regular expression and attached it to a variable called phoneRGEX

//THE REGULAR EXPRESSION for phone number
// “/” , starting and e\nding slashes
//... e expression starts with a “^” sign to match with the beginning of the string.
//...Notice the [-\s\.] this part matches a hyphen(-) space or a dot (.).[0-9]{3} means 3 digits.
//... Matches with a phone number like this (541) 754-3010 or like this 541-754-3010 or with spaces

//THE REGULAR EXPRESSION for postal address
//Here I have added a new variable called postalCode to fetch the postal code from the form
//...then created another variable to store the postal code regular expression
//Then I used the test function to test my string against the regular expression
//...and print the result in an alert


