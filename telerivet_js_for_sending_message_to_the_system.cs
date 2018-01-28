function main() {
    var result = message.content.substr(message.content.indexOf(" ") + 1);
    var response;
    if(word1 == "register")
        httpClient.request("http://bluehacks2018-aickids.epizy.com/registerAPI.php?value="+ result + "/" + from_number, {method:'POST'});

            
    if(word1 == "lf")
        httpClient.request("http://bluehacks2018-aickids.epizy.com/lookingAPI.php?value="+ result + "/" + from_number, {method:'POST'});
}
