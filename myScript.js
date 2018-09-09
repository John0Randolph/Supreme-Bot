/*chrome.runtime.sendMessage(document.getElementsByTagName('title')[0].innerText);*/

var url = chrome.extension.getURL('toolbar.html');
var height = '35px';
var iframe = "<iframe src='"+url+"' id='myOwnCustomFirstToolbar' style='height:"+height+"'></iframe>";

$('body').append(iframe);