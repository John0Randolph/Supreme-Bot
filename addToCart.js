// chrome.runtime.onConnect.addListener(
//     function(port)
//     {
//     	console.assert(port.name == "supreme2");
//     	port.onMessage.addListener(function(msg) {
//     		console.log(msg);
// 	    	//window.alert("got to background.js");
// 	        if(msg.enable)
// 	        {
// 	          	$("[name=commit]").click();

// 				setTimeout(function() {
// 					//window.alert("trying to go to checkout page");
// 					chrome.extension.sendMessage({action: "start", url: "http://www.supremenewyork.com/checkout", enable: true});

// 				}, 1000);
// 	        }
//     	});
    	
//         //else if(request.action == "checkout") {
//         //	chrome.tabs.update({url: request.url});
//         //}
//     }
// );
chrome.extension.sendMessage({action: "getDisabled"}, function(response) {
	console.log(response);
	if(response.disable == false) {
		chrome.storage.local.get('size', function(result) {
	    	console.log(result.size);
	    	//
	    	// NOTE: ------------------
	    	// size no longer works because instead of haivng the value for each size like they used to
	    	// Supreme now uses randomish (acutally ascending) numbers to represent sizes
	    	// e.g. it might be like "48050" corresponds to Medium on a certain item
	    	// but "48093" might be medium for a different item
	    	if($("#s")[0].type !== "hidden") {
	    		console.log("got inside the hidden loop");
	    		var val = "";
		    	for (var i = 0; i < $("#s")[0].options.length; i++) {
		    		if($("#s")[0].options[i].text === result.size) {
		    			val = $("#s")[0].options[i].value;
		    		}
		    	}
		    	$("#s").val(val);
	    	}
	    	$("[name=commit]").click();
			setTimeout(function() {
				//window.alert("trying to go to checkout page");
				//chrome.extension.sendMessage({action: "start", url: "http://www.supremenewyork.com/checkout"});

			}, 1000);
	    });
		//console.log(size);
		 
	} 
});

	

   


//chrome.extension.sendMessage({action: "start", url: "http://www.supremenewyork.com/checkout"});

//chrome.runtime.sendMessage({action: "start", url:"http://www.supremenewyork.com/checkout"}, function(response) {
//});

