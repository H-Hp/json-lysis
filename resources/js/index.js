
export function sayHello() {
  console.log("test hello");
}


export function t() {  const button = document.getElementById('change-btn');
  button.addEventListener('click', function() {
    const json_text = document.getElementById('json-input-field').value;
    //alert('ボタンがクリックされました3！'+json_text);
    //document.evaluate('//*[@id="chat"]/div"]').innerHTML = '<div><h1>'+json_text+'</h1></div>';
    //document.getElementById('json-zu').innerHTML = '<div class"jsons_wrap" style="background-color: #5eabac; border: #87f4f6 1px;"><h1 style="color: #f59e0b;">'+json_text+'</h1></div>';
    try {
        const json = JSON.parse(json_text);
        console.log(json_text); // JSON オブジェクトが出力されます


        //配列に
        const keys = [];
        const values = [];
        let i=1;
        for (const key in json) {
          console.log("ループ"+i+"回目");
          keys.push(key);
          values.push(json[key]);
          console.log("Key:", key); // Output: Keys: ["key1", "key2", "key3"]
          console.log("Value:", json[key]); // Output: Values: ["value1", "value2", "value3"]
          i++;

          //document.getElementById('json-zu').innerHTML = '<div class"jsons_wrap2" style="background-color: #5eabac; border: #87f4f6 1px;top:40'+i+'"><p style="color: #f59e0b;">'+key+': '+json[key]+'</p></div>';
          //document.getElementById('json-zu').prepend(document.createElement('<div class"jsons_wrap" style="background-color: #5eabac; border: #87f4f6"><p style="color: white">'+key+': '+json[key]+'</p></div>'));
    
          if (typeof json[key] === "object") {//さらにjsonを持っている場合
            console.log("さらなるjson");
            //const json2 = JSON.parse(json[key]);
            for (const key2 in  json[key]) {
              console.log("2Key:", key2); // Output: Keys: ["key1", "key2", "key3"]
              console.log("2Value:", json[key][key2]); // Output: Values: ["value1", "value2", "value3"]

              document.getElementById('json-zu').insertAdjacentHTML('beforeend', '<div class="jsons_wrap" style="border: #87f4f6;position:relative;left:300px;"><p style="color: white;">' + key2 + ': ' + json[key][key2] + '</p></div>');

              if (typeof json[key][key2] === "object") {
                    console.log("さらなるさらなるjson");
                  for (const key3 in  json[key][key2]) {
                    console.log("3Key:", key3); // Output: Keys: ["key1", "key2", "key3"]
                    console.log("3value:", json[key][key2][key3]); // Output: Values: ["value1", "value2", "value3"]
                    document.getElementById('json-zu').insertAdjacentHTML('beforeend', '<div class="jsons_wrap" style="border: #87f4f6;position:relative;left:600px;"><p style="color: white;">' + key3 + ': ' + json[key][key2][key3] + '</p></div>');

                  }

                //}else {
                  //document.getElementById('json-zu').insertAdjacentHTML('beforeend', '<div class="jsons_wrap" style="border: #87f4f6;position:relative;left:300px;"><p style="color: white;">' + key2 + ': ' + json[key][key2] + '</p></div>');
                //}

              }
            }
            
          }else {
            document.getElementById('json-zu').insertAdjacentHTML('beforeend', '<div class="jsons_wrap" style="border: #87f4f6"><p style="color: white;"><span class="key">' + key + '</span>: ' + json[key] + '</p></div>');
          }
        }

        console.log("Keys:", keys); // Output: Keys: ["key1", "key2", "key3"]
        console.log("Values:", values); // Output: Values: ["value1", "value2", "value3"]
    } catch (error) {
        console.error('JSON パースエラー:', error);
    }
  });
}