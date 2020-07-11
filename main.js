function sendResult(){
    var hn = 0;
    var ht = 0;
    var hh = 0;
    var hs = 0;
    var ha = 0;
    var result = [];
    var one_a = document.getElementById("1a");
    var one_b = document.getElementById("1b");
    var two_a = document.getElementById("2a");
    var two_b = document.getElementById("2b");
    var three_a = document.getElementById("3a");
    var three_b = document.getElementById("3b");
    var four_a = document.getElementById("4a");
    var four_b = document.getElementById("4b");
    var five_a = document.getElementById("5a");
    var five_b = document.getElementById("5b");
    var six_a = document.getElementById("6a");
    var six_b = document.getElementById("6b");
    var seven_a = document.getElementById("7a");
    var seven_b = document.getElementById("7b");
    var eight_a = document.getElementById("8a");
    var eight_b = document.getElementById("8b");
    var nine_a = document.getElementById("9a");
    var nine_b = document.getElementById("9b");
    var ten_a = document.getElementById("10a");
    var ten_b = document.getElementById("10b");
    var eleven_a = document.getElementById("11a");
    var eleven_b = document.getElementById("11b");
    var twelve_a = document.getElementById("12a");
    var twelve_b = document.getElementById("12b");
    var thirteen_a = document.getElementById("13a");
    var thirteen_b = document.getElementById("13b");
    var fourteen_a = document.getElementById("14a");
    var fourteen_b = document.getElementById("14b");
    var fifteen_a = document.getElementById("15a");
    var fifteen_b = document.getElementById("15b");
    var sixteen_a = document.getElementById("16a");
    var sixteen_b = document.getElementById("16b");
    var seventeen_a = document.getElementById("17a");
    var seventeen_b = document.getElementById("17b");
    var eighteen_a = document.getElementById("18a");
    var eighteen_b = document.getElementById("18b");
    var nineteen_a = document.getElementById("19a");
    var nineteen_b = document.getElementById("19b");
    var twenty_a = document.getElementById("20a");
    var twenty_b = document.getElementById("20b");
    if(one_a.checked){
        hn++;
    }
    if(three_b.checked){
        hn++;
    }
    if(six_a.checked){
        hn++;
    }
    if(ten_a.checked){
        hn++;
    }
    if(eleven_a.checked){
        hn++;
    }
    if(thirteen_b.checked){
        hn++;
    }
    if(sixteen_a.checked){
        hn++;
    }
    if(twenty_a.checked){
        hn++;
    }
    if(one_b.checked){
        ht++;
    }
    if(four_a.checked){
        ht++;
    }
    if(seven_b.checked){
        ht++;
    }
    if(nine_a.checked){
        ht++;
    }
    if(eleven_b.checked){
        ht++;
    }
    if(fourteen_a.checked){
        ht++;
    }
    if(seventeen_b.checked){
        ht++;
    }
    if(nineteen_a.checked){
        ht++;
    }
    if(two_a.checked){
        hh++;
    }
    if(four_b.checked){
        hh++;
    }
    if(six_b.checked){
        hh++;
    }
    if(eight_a.checked){
        hh++;
    }
    if(twelve_a.checked){
        hh++;
    }
    if(fourteen_b.checked){
        hh++;
    }
    if(sixteen_b.checked){
        hh++;
    }
    if(eighteen_a.checked){
        hh++;
    }
    if(two_b.checked){
        hs++;
    }
    if(five_a.checked){
        hs++;
    }
    if(nine_b.checked){
        hs++;
    }
    if(ten_b.checked){
        hs++;
    }
    if(twelve_b.checked){
        hs++;
    }
    if(fifteen_a.checked){
        hs++;
    }
    if(nineteen_b.checked){
        hs++;
    }
    if(twenty_b.checked){
        hs++;
    }
    if(three_a.checked){
        ha++;
    }
    if(five_b.checked){
        ha++;
    }
    if(seven_a.checked){
        ha++;
    }
    if(eight_b.checked){
        ha++;
    }
    if(thirteen_a.checked){
        ha++;
    }
    if(fifteen_b.checked){
        ha++;
    }
    if(seventeen_a.checked){
        ha++;
    }
    if(eighteen_b.checked){
        ha++;
    }
    result.push(hn);
    result.push(hh);
    result.push(ha);
    result.push(hs);
    result.push(ht);
    alert(result.toStringx1);
    var result_field = document.getElementById('result-text');
    result_field.innerHTML = result.toString;
    
}