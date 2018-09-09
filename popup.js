document.addEventListener('DOMContentLoaded', function()
{
    var startLink = document.getElementById('start-btn');
    startLink.addEventListener('click', function() {
        //alertify.alert("start has been clicked");
        sendStartMessage();
    });

    var stopLink = document.getElementById('stop-btn');
    stopLink.addEventListener('click', function() {
        chrome.extension.sendMessage({action: "stop"});
    });
});

document.addEventListener('DOMContentLoaded', function()
{
    var link = document.getElementById('options-btn');
    link.addEventListener('click', function() {
        //alertify.alert("opening options");
        //chrome.extension.sendMessage({action: "start", url: json.url});
      chrome.runtime.openOptionsPage();
    });
});

function sendStartMessage()
{
  //alertify.alert("SENDING START MESSAGE");
  	var cat = "";
  	var key = "";
  	var col = "";
    chrome.storage.local.get('category', function(result) {
       cat = result.category;
    });
    chrome.storage.local.get('keyword', function(result) {
       key = result.keyword;
    });
    chrome.storage.local.get('color', function(result) {
       col = result.color;
    });

  setTimeout(function() {
    //alertify.alert("color is " + col);
    //alertify.alert("key is " + key);
    //alertify.alert("cat is " + cat);
    $.ajax({
          url: "http://fall16.lakeside-cs.org/SupremeBot/search.php",
          type: "POST",
          //dataType:'json',

          data: {
              category: cat,
              keyword: key,
              color: col
          },
          success: function(response){
              //alertify.alert(response);
              var json = JSON.parse(response);
              //alertify.alert(json.url);

              if(json.url === "http:\/\/www.supremenewyork.com") {
                  chrome.extension.sendMessage({action: "failed"});
                  //window.alert("failed from popup.js");
              }

              chrome.extension.sendMessage({action: "start", url: json.url});

          },
          error: function(response){
            alertify.alert("Error: item not found in shop, or has sold out.")
          }
     });
  }, 1000);
}