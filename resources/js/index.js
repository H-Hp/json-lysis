
export function sayHello() {
  console.log("test hello");
}




export function t() {

  const storage_btn = document.getElementById('storage-btn');
  storage_btn.addEventListener('click', function() {
    //$("#menu").hide();
      document.getElementById('menu').style.display = 'none';
      document.getElementById('storage-btn2').style.display = 'block';
  });
  const storage_btn2 = document.getElementById('storage-btn2');
  storage_btn2.addEventListener('click', function() {
      document.getElementById('menu').style.display = 'block';
      document.getElementById('storage-btn2').style.display = 'none';
  });


  const button = document.getElementById('change-btn');
  button.addEventListener('click', function() {
    const json_text = document.getElementById('json-input-field').value;
    const jsonData = JSON.parse(json_text);
    const container = document.getElementById('json-container');
    //renderJson(json_text, container);
    renderJson(jsonData, container);
    drawLines();
  });

  function createJsonElement(key, value) {
    const element = document.createElement('div');
    element.className = 'json-item';
    if (typeof value === 'object' && value !== null) {
        element.textContent = `${key}: ${Array.isArray(value) ? '[]' : '{}'}`;
    } else {
        element.textContent = `${key}: ${value}`;
    }
    return element;
}

function renderJson(data, container, key = 'root') {
    const wrapper = document.createElement('div');
    wrapper.className = 'child-wrapper';

    const element = createJsonElement(key, data);
    wrapper.appendChild(element);
    container.appendChild(wrapper);

    if (typeof data === 'object' && data !== null) {
        const childrenContainer = document.createElement('div');
        childrenContainer.className = 'children';
        wrapper.appendChild(childrenContainer);

        Object.entries(data).forEach(([childKey, childValue]) => {
            if (Array.isArray(childValue)) {
                const arrayWrapper = document.createElement('div');
                arrayWrapper.className = 'array-item';
                childrenContainer.appendChild(arrayWrapper);
                childValue.forEach((item, index) => {
                    renderJson(item, arrayWrapper, `${childKey}[${index}]`);
                });
            } else {
                renderJson(childValue, childrenContainer, childKey);
            }
        });
    }

    return element;
}

function drawLines() {
    const svg = document.getElementById('lines');
    svg.innerHTML = '';

    const items = document.querySelectorAll('.json-item');
    items.forEach(item => {
        const parent = item.closest('.child-wrapper').parentElement.closest('.child-wrapper')?.firstChild;
        if (parent && parent.classList.contains('json-item')) {
            const parentRect = parent.getBoundingClientRect();
            const childRect = item.getBoundingClientRect();

            const line = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            const startX = parentRect.right;
            //const startY = parentRect.top + parentRect.height / 2;
            const startY = parentRect.top + parentRect.height / 2 - 100;
            const endX = childRect.left;
            //const endY = childRect.top + childRect.height / 2;
            const endY = childRect.top + childRect.height / 2 -100;
            const midX = startX + (endX - startX) / 2;

            const d = `M${startX},${startY} C${midX},${startY} ${midX},${endY} ${endX},${endY}`;
            line.setAttribute('d', d);
            line.setAttribute('fill', 'none');
            line.setAttribute('stroke', '#888');
            line.setAttribute('stroke-width', '2');

            svg.appendChild(line);
        }
    });
}



window.addEventListener('resize', drawLines);


/*

  const button = document.getElementById('change-btn');
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
*/


  // モーダル
  // モーダル要素を取得
  var modal = document.getElementById("modal");
  // モーダルを開くボタンを取得
  var btn = document.getElementById("openModal");
  // モーダルを閉じるための <span> 要素を取得
  var span = document.getElementsByClassName("close")[0];
  var span2 = document.getElementsByClassName("close")[1];
  // ユーザーがボタンをクリックしたらモーダルを開く
  btn.onclick = function() {
      modal.style.display = "block";
  }
  // ユーザーが <span> (x) をクリックしたらモーダルを閉じる
  span.onclick = function() {
      modal.style.display = "none";
  }
  span2.onclick = function() {
    modal.style.display = "none";
}
  // ユーザーがモーダルの外側をクリックしたらモーダルを閉じる
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

}