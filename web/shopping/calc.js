// Calculating Total of the Order
function totalIt(product, theClass) {
  var input = document.getElementsByClassName("product");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementById("total").value = "$" + total.toFixed(2);
}

// Person's first name
function getFirstName(name, theClass)
{
    var number = /^[0-9]+$/;
    var word = /[A-Za-z]/;
    
  if(word.test(name) == true && name.length != 0 && number.test(name) == false)
    {
      document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
  
  else
      {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
      }
 
}

//Get last name
function getLastName(name1, theClass)
{
    var number = /^[0-9]+$/;
    var word = /[A-Za-z]/;
    
  if(word.test(name1) == true && name1.length != 0 && number.test(name1) == false)
    {
      document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
  
  else
    {
      document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
    }
 
}

// Credit Card Information
function creditCard(cardNum, theClass)
{
  var card1 = /^\s*\d{4}\ \d{4}\ \d{4}\ \d{4}\s*$/;
  var card2 = /^\s*\d{16}\s*$/;
  var word = /[A-Za-z]/;
  
  if((card1.test(cardNum) == true || card2.test(cardNum) == true) && (cardNum.length != 0) && word.test(cardNum) == false)
   {
     document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
  else
      {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
        
      }
}



//Phone Number
function phoneNumber(phone, theClass)
{
    var regex = /^s*\d{3}-\d{3}-\d{4}\s*$/;
    var word = /[A-Za-z]/;
    
  if(regex.test(phone) == true && phone.length != 0 && word.test(phone) == false)
    {
      document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
    }
  
  else
      {
        document.getElementsByClassName(theClass)[0].style.visibility = 'visible';
      }
 
}

function checkCreditCard(cardDate, theClass)
{
// Regular expression used to check if date is in correct format
  var pattern = /[\d]{2}\/[\d]{4}/;

if(pattern.test(cardDate) == true)
{
  document.getElementsByClassName(theClass)[0].style.visibility = 'hidden';
}

else
{
  document.getElementsByClassName(theClass)[0].style.visiblity = 'visible';
}

}


function checkForm(name, name1, card1, phone, select, product, creditcard)
{
  if(document.getElementsByClassName(name)[0].style.visibility == 'hidden' &&
  document.getElementsByClassName(name1)[0].style.visibility == 'hidden' &&
  document.getElementsByClassName(phone)[0].style.visibility == 'hidden' &&
  document.getElementsByClassName(card1)[0].style.visibility == 'hidden' &&
  document.getElementsByClassName(select)[0].style.visibility == 'hidden' &&
  document.getElementsByClassName(product)[0].style.visibility == 'hidden' && 
  document.getElementById("myForm").value != 0)
  {

  }

  else
  {
    alert("MISSING INFO: All fields need to be filled out to complete transaction and one or more items must be selected to review purchase");
    return false;
  }
}
