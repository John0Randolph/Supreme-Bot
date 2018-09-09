function pushToServer(url, data)
{
  //alertify.alert("Now pushing to server");
  //alertify.alert("url is " + url);
  $.ajax({
      url: url,
      type: 'POST',
      //contentType: "application/json; charset=utf-8",
      //dataType: "json",
      data: data,
      success: function(data) {
        //alertify.alert("success");
        //this line grabs the website on Lakeside-cs and print it out to the page, for error checking
        //document.write(data);
      }
    })
    .done(function() {
      alertify.alert("Successfully saved to server!");
    })
    .fail(function() {
      alertify.alert("Error");
    })
    .always(function() {
      //alertify.alert("Complete");
    });
}

  function saveData() {
        //alertify.alert("Got to first alert");
        
        //an array of the names of text fields to cycle through
        //firstName, lastName, email, phone, address, zipCode, city, state, country, size, category, keyword, color, provider, cardNumber, expirationDate, csv
        var fields = ['name', 'email', 'phone', 'address', 'zip', 'city', 'state', 'country', 'category', 'size', 'keyword', 'color', 'provider', 'cardNumber', 'expirationMonth', 'expirationYear','cvv'];
        var data = {};//field input will go in here
        //class constants for contacting the server. Eventually these will change from localhost to the lakeside server
        var url = "http://fall16.lakeside-cs.org/SupremeBot/supremeMain.php";

        //make sure that that T&C are checked
        var checked = document.getElementById('agree').checked;
        if (!checked)
        {
          alertify.alert("Please accept the terms and conditions.");
          return;
        }

        // Save it using the Chrome extension storage API.
        for (i = 0; i < fields.length; i++)
        {
          var field = fields[i];
          if(field !== "size") {
            var theValue = document.getElementById(field).value;
            //check that there is something there
            if (!theValue) {
             alertify.alert("Please enter your " + document.getElementById(field).name + ".");
             return;
            } 
            else {
              data[field]=theValue;//save the value to the array in a keyValue pair
            }
          }
          else {
            var theValue = document.getElementById(field).value;
            var theValue2 = document.getElementById("size2").value; //size2 is the user inputed size
            if(!theValue && !theValue2) {
              alertify.alert("Please enter your " + document.getElementById(field).name + ".");
              return;
            }
            else {
              if(theValue) {
                data[field] = theValue;
              }
              else {
                data[field] = theValue2;
              }
            }
          }
        }
        //the same error checking that Supreme does. I think this is all of it or almost all
        var name = document.getElementById('name').value;
        if (!name.includes(" ")) {
          alertify.alert("Your name must contain first and last.");
          return;
        }
        var email = document.getElementById('email').value;
        var atpos = email.indexOf("@");
        var dotpos = email.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length) {
            alertify.alert("Please enter a valid email address.");
            return;
        }
        var phone = document.getElementById('phone').value;
        if (phone.length != 10 || isNaN(phone))
        {
            alertify.alert("Please enter a valid 10 digit phone number.");
            return;
        }
        var country = document.getElementById('country').value;
        var zip = document.getElementById('zip').value;
        if ((zip.length != 5 || isNaN(zip)) && country === 'USA')
        {
            alertify.alert("Please enter a valid 5 digit US zip code.");
            return;
        }
        var cardNumber = document.getElementById('cardNumber').value;
        if (cardNumber.length < 13 || cardNumber.length > 19 || isNaN(cardNumber))
        {
            alertify.alert("Please enter a valid credit card number");
            return;
        }
        var cvv = document.getElementById('cvv').value;
        if (cvv.length != 3 || isNaN(cardNumber))
        {
            alertify.alert("Please enter a valid cvv");
            return;
        }
        //save to chrome data
        chrome.storage.local.set(data, function () {
          //notify that we saved
         //alertify.alert("Saved all values to chrome data!");
          //push the data to server
         console.log(data);
         pushToServer(url,data);

        });

        //gets the data
        /*chrome.storage.local.get('firstName', function(result) {
        //var bytes = CryptoJS.AES.decrypt(result.firstName.toString(),passphrase);
        //alertify.alert("firstName is " + result.firstName);

          //now make the request to the server
          //alertify.alert("up to ajax");
          
          //using ajax now since it is less difficult than just xhhtp

          /*var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
              document.getElementById("firstName").innerHTML = xhttp.responseText;
                      alertify.alert(xhttp.responseText);
          };
          xhttp.open("GET",url,true);
          xhttp.send(data);*/

      }

//gets data for a specific field. Currently not used and only works for name.
// function getData(field) {
//     chrome.storage.local.get(field, function(result) {
//     window.alert(field + " is " + result.name);
//     getElementById("name") = result.name;
//   });
// }
function getData(field) {
    chrome.storage.local.get(field, function(result) {
    alertify.alert(field + " is " + result.name);
    getElementById("name") = result.name;
  });
}

document.getElementById('save').onclick = saveData;

function restoreOptions() {
  //alertify.alert("trying to restore options");
  var fields = ['name', 'email', 'phone', 'address', 'zip', 'city', 'state', 'country', 'category', 'size', 'keyword', 'color', 'provider', 'cardNumber', 'expirationMonth', 'expirationYear','cvv'];
    chrome.storage.local.get(fields, function(res) {
      document.getElementById('name').value = res.name;
      document.getElementById('email').value = res.email;
      document.getElementById('phone').value = res.phone;
      document.getElementById('address').value = res.address;
      document.getElementById('zip').value = res.zip;
      document.getElementById('city').value = res.city;
      document.getElementById('state').value = res.state;
      document.getElementById('country').value = res.country;
      document.getElementById('category').value = res.category;
      document.getElementById('size').value = res.size;
      document.getElementById('keyword').value = res.keyword;
      document.getElementById('color').value = res.color;
      document.getElementById('provider').value = res.provider;
      document.getElementById('cardNumber').value = res.cardNumber;
      document.getElementById('expirationMonth').value = res.expirationMonth;
      document.getElementById('expirationYear').value = res.expirationYear;
      document.getElementById('cvv').value = res.cvv;
  });
}

document.addEventListener('DOMContentLoaded', restoreOptions);