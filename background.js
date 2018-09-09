// chrome.runtime.onConnect.addListener(function(port) {

//   console.assert(port.name == "supreme");

//   port.onMessage.addListener(function(msg) {
//     console.log(msg);
//     if(msg.action === "start" && msg.enable)
//     {
//       var port2 = chrome.runtime.connect({name: "supreme2"});
//       port2.postMessage({enable: true});
//       chrome.tabs.update({url: msg.url});
//     }
//   });
// });
var disabled = false;

chrome.extension.onMessage.addListener(
    function(request, sender, sendResponse)
    {
    	if(request.action === "start") {
    		disabled = false;
    		console.log(disabled);
            chrome.tabs.update({url: request.url});
        }
        else if(request.action === "getDisabled") {
        	console.log(disabled);
        	sendResponse({disable: disabled});
        }
        else if(request.action === "stop") {
            disabled = true;
            window.alert("SupremeBot successfully stopped.");
            console.log(disabled);
        }
        else if(request.action === "failed") {
            window.alert("Item was not found. You will be redirected to the Supreme home page.");
            alertify.alert("Item was not found. You will be redirected to the Supreme home page.")
        }
    	//alertify.alert("got to background.js");

        //else if(request.action == "checkout") {
        //	chrome.tabs.update({url: request.url});
        //}
    }
);